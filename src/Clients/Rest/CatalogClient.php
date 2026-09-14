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
use EBay\ListingMetadata\Generated\Catalog\CatalogApiClient;
use EBay\ListingMetadata\Generated\Catalog\Models\Product;
use EBay\ListingMetadata\Generated\Catalog\Models\ProductSearchResponse;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class CatalogClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly ListingMetadataConfiguration $config,
    ) {}

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function getProduct(
        string $epid,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Product
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->product()->byEpid($epid)->get(
                new \EBay\ListingMetadata\Generated\Catalog\Product\Item\WithEpItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function search(
        ?string $aspectFilter = null,
        ?string $categoryIds = null,
        ?string $fieldgroups = null,
        ?string $gtin = null,
        ?string $limit = null,
        ?string $mpn = null,
        ?string $offset = null,
        ?string $q = null,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ProductSearchResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->product_summary()->search()->get(
                new \EBay\ListingMetadata\Generated\Catalog\Product_summary\Search\SearchRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\ListingMetadata\Generated\Catalog\Product_summary\Search\SearchRequestBuilderGetRequestConfiguration::createQueryParameters(
                        aspect_filter: $aspectFilter,
                        category_ids: $categoryIds,
                        fieldgroups: $fieldgroups,
                        gtin: $gtin,
                        limit: $limit,
                        mpn: $mpn,
                        offset: $offset,
                        q: $q,
                    ),
                )
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set ListingMetadataConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): CatalogApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->catalogBaseUrl);
        return new CatalogApiClient($adapter);
    }
}
