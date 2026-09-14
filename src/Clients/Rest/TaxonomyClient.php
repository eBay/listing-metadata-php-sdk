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
use EBay\ListingMetadata\Generated\Taxonomy\TaxonomyApiClient;
use EBay\ListingMetadata\Generated\Taxonomy\Models\AspectMetadata;
use EBay\ListingMetadata\Generated\Taxonomy\Models\BaseCategoryTree;
use EBay\ListingMetadata\Generated\Taxonomy\Models\CategorySubtree;
use EBay\ListingMetadata\Generated\Taxonomy\Models\CategorySuggestionResponse;
use EBay\ListingMetadata\Generated\Taxonomy\Models\CategoryTree;
use EBay\ListingMetadata\Generated\Taxonomy\Models\ExpiredCategories;
use EBay\ListingMetadata\Generated\Taxonomy\Models\GetCategoriesAspectResponse;
use EBay\ListingMetadata\Generated\Taxonomy\Models\GetCompatibilityMetadataResponse;
use EBay\ListingMetadata\Generated\Taxonomy\Models\GetCompatibilityPropertyValuesResponse;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class TaxonomyClient
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

    public function fetchItemAspects(string $categoryTreeId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetCategoriesAspectResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->category_tree()->byCategory_tree_id($categoryTreeId)->fetch_item_aspects()->get(
                new \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Fetch_item_aspects\Fetch_item_aspectsRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getDefaultCategoryTreeId(?string $marketplaceId = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BaseCategoryTree
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->get_default_category_tree_id()->get(
                new \EBay\ListingMetadata\Generated\Taxonomy\Get_default_category_tree_id\Get_default_category_tree_idRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\ListingMetadata\Generated\Taxonomy\Get_default_category_tree_id\Get_default_category_tree_idRequestBuilderGetRequestConfiguration::createQueryParameters(
                        marketplace_id: $marketplaceId,
                    ),
                )
            )->wait()
        );
    }

    public function getCategoryTree(
        string $categoryTreeId,
        ?string $acceptEncoding = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CategoryTree
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptEncoding !== null) {
            $headers["Accept-Encoding"] = $acceptEncoding;
        }
        return $this->call($accessToken, fn($api) =>
            $api->category_tree()->byCategory_tree_id($categoryTreeId)->get(
                new \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\WithCategory_tree_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getCategorySubtree(
        string $categoryTreeId,
        ?string $categoryId = null,
        ?string $acceptEncoding = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CategorySubtree
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptEncoding !== null) {
            $headers["Accept-Encoding"] = $acceptEncoding;
        }
        return $this->call($accessToken, fn($api) =>
            $api->category_tree()->byCategory_tree_id($categoryTreeId)->get_category_subtree()->get(
                new \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_subtree\Get_category_subtreeRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_subtree\Get_category_subtreeRequestBuilderGetRequestConfiguration::createQueryParameters(
                        category_id: $categoryId,
                    ),
                )
            )->wait()
        );
    }

    public function getCategorySuggestions(
        string $categoryTreeId,
        ?string $q = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CategorySuggestionResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->category_tree()->byCategory_tree_id($categoryTreeId)->get_category_suggestions()->get(
                new \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_suggestions\Get_category_suggestionsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_suggestions\Get_category_suggestionsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        q: $q,
                    ),
                )
            )->wait()
        );
    }

    public function getItemAspectsForCategory(
        string $categoryTreeId,
        ?string $categoryId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?AspectMetadata
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->category_tree()->byCategory_tree_id($categoryTreeId)->get_item_aspects_for_category()->get(
                new \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_item_aspects_for_category\Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_item_aspects_for_category\Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration::createQueryParameters(
                        category_id: $categoryId,
                    ),
                )
            )->wait()
        );
    }

    public function getCompatibilityProperties(
        string $categoryTreeId,
        ?string $categoryId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetCompatibilityMetadataResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->category_tree()->byCategory_tree_id($categoryTreeId)->get_compatibility_properties()->get(
                new \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_properties\Get_compatibility_propertiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_properties\Get_compatibility_propertiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        category_id: $categoryId,
                    ),
                )
            )->wait()
        );
    }

    public function getCompatibilityPropertyValues(
        string $categoryTreeId,
        ?string $compatibilityProperty = null,
        ?string $categoryId = null,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetCompatibilityPropertyValuesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->category_tree()->byCategory_tree_id($categoryTreeId)->get_compatibility_property_values()->get(
                new \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_property_values\Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_property_values\Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        compatibility_property: $compatibilityProperty,
                        category_id: $categoryId,
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getExpiredCategories(string $categoryTreeId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ExpiredCategories
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->category_tree()->byCategory_tree_id($categoryTreeId)->get_expired_categories()->get(
                new \EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_expired_categories\Get_expired_categoriesRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set ListingMetadataConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): TaxonomyApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->taxonomyBaseUrl);
        return new TaxonomyApiClient($adapter);
    }
}
