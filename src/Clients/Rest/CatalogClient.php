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
use EBay\ListingMetadata\Generated\Catalog\Product\Item\WithEpItemRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Catalog\Product_summary\Search\SearchRequestBuilderGetRequestConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class CatalogClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly ListingMetadataConfiguration $config,
    ) {}

    /**
     * Retrieve details of a catalog product by eBay product identifier (ePID).
     *
     * @param string      $epid           The eBay product ID.
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getProduct(
        string $epid,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Product {
        $rc = new WithEpItemRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->product()->byEpid($epid)->get($rc)->wait());
    }

    /**
     * Search for catalog products by keyword, category, GTIN, or MPN.
     *
     * @param string|null $aspectFilter   Category and aspect value pairs to narrow down results.
     * @param string|null $categoryIds    Comma-separated category IDs to filter results.
     * @param string|null $fieldgroups    Type of information to return (ASPECT_REFINEMENTS, FULL, MATCHING_PRODUCTS).
     * @param string|null $gtin           Comma-separated GTINs (EAN, ISBN, UPC) to search for.
     * @param string|null $limit          Number of product summaries to return (max 200; default 50).
     * @param string|null $mpn            Comma-separated Manufacturer Part Numbers to search for.
     * @param string|null $offset         Number of items to skip (reserved for internal use).
     * @param string|null $q              Keywords to search for in product records.
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function search(
        ?string $aspectFilter = null,
        ?string $categoryIds = null,
        ?string $fieldgroups = null,
        ?string $gtin = null,
        ?string $limit = null,
        ?string $mpn = null,
        ?string $offset = null,
        ?string $q = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ProductSearchResponse {
        $rc = new SearchRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: SearchRequestBuilderGetRequestConfiguration::createQueryParameters(
                aspect_filter: $aspectFilter,
                category_ids: $categoryIds,
                fieldgroups: $fieldgroups,
                gtin: $gtin,
                limit: $limit,
                mpn: $mpn,
                offset: $offset,
                q: $q,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->product_summary()->search()->get($rc)->wait());
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
        $adapter = new GuzzleRequestAdapter($auth, null, null, $this->guzzle);
        $adapter->setBaseUrl($this->config->catalogBaseUrl);
        return new CatalogApiClient($adapter);
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
