<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\ListingMetadata\Clients\Rest;

use EBay\ListingMetadata\Configuration\KiotaAuthProvider;
use EBay\ListingMetadata\Configuration\ListingMetadataConfiguration;
use EBay\ListingMetadata\Configuration\RequestOptions;
use EBay\ListingMetadata\Generated\Charity\CharityApiClient;
use EBay\ListingMetadata\Generated\Charity\Charity_org\Charity_orgRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Charity\Charity_org\Item\WithCharity_org_ItemRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Charity\Models\CharityOrg;
use EBay\ListingMetadata\Generated\Charity\Models\CharitySearchResponse;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class CharityClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly ListingMetadataConfiguration $config,
    ) {}

    /**
     * Retrieve detailed information about a specific charitable organization.
     *
     * @param string      $charityOrgId   The unique ID of the charitable organization.
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCharityOrg(
        string $charityOrgId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CharityOrg {
        $rc = new WithCharity_org_ItemRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->charity_org()->byCharity_org_id($charityOrgId)->get($rc)->wait());
    }

    /**
     * Search for charitable organizations.
     *
     * @param string|null $limit           Number of items to return per page (1-100; default 20).
     * @param string|null $offset          Number of items to skip for pagination (default 0).
     * @param string|null $q               Keywords to match against name, mission statement, or description.
     * @param string|null $registrationIds Comma-separated list of charitable organization registration IDs.
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCharityOrgs(
        ?string $limit = null,
        ?string $offset = null,
        ?string $q = null,
        ?string $registrationIds = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CharitySearchResponse {
        $rc = new Charity_orgRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Charity_orgRequestBuilderGetRequestConfiguration::createQueryParameters(
                limit: $limit,
                offset: $offset,
                q: $q,
                registration_ids: $registrationIds,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->charity_org()->get($rc)->wait());
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set ListingMetadataConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): CharityApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, null, null, $this->guzzle);
        $adapter->setBaseUrl($this->config->charityBaseUrl);
        return new CharityApiClient($adapter);
    }

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions?->headers ?? []
        );
    }
}
