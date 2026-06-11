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
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Fetch_item_aspects\Fetch_item_aspectsRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_subtree\Get_category_subtreeRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_suggestions\Get_category_suggestionsRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_properties\Get_compatibility_propertiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_property_values\Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_expired_categories\Get_expired_categoriesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_item_aspects_for_category\Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\WithCategory_tree_ItemRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Taxonomy\Get_default_category_tree_id\Get_default_category_tree_idRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Taxonomy\TaxonomyApiClient;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class TaxonomyClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly ListingMetadataConfiguration $config,
    ) {}

    /**
     * Returns a complete list of aspects for all leaf categories in a marketplace.
     *
     * @param string      $categoryTreeId The unique identifier of the eBay category tree.
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function fetchItemAspects(
        string $categoryTreeId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Fetch_item_aspectsRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->category_tree()->byCategory_tree_id($categoryTreeId)
            ->fetch_item_aspects()->get($rc)->wait());
    }

    /**
     * Returns a subtree of a category tree, including the root node of the subtree.
     *
     * @param string|null $categoryId     The unique identifier of the category at the top of the subtree.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCategorySubtree(
        string $categoryTreeId,
        ?string $categoryId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_category_subtreeRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_category_subtreeRequestBuilderGetRequestConfiguration::createQueryParameters(
                category_id: $categoryId,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->category_tree()->byCategory_tree_id($categoryTreeId)
            ->get_category_subtree()->get($rc)->wait());
    }

    /**
     * Returns an array of categories, with suggestions for the best matching categories
     * for the keywords or aspects provided.
     *
     * @param string|null $q               A string that describes or characterizes the item being offered for sale.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCategorySuggestions(
        string $categoryTreeId,
        ?string $q = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_category_suggestionsRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_category_suggestionsRequestBuilderGetRequestConfiguration::createQueryParameters(
                q: $q,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->category_tree()->byCategory_tree_id($categoryTreeId)
            ->get_category_suggestions()->get($rc)->wait());
    }

    /**
     * Returns the complete category tree identified by the category_tree_id.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCategoryTree(
        string $categoryTreeId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new WithCategory_tree_ItemRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->category_tree()->byCategory_tree_id($categoryTreeId)->get($rc)->wait());
    }

    /**
     * Returns the compatibility properties (aspects) for a given category tree and dataset.
     *
     * @param string|null $categoryId     The unique identifier of an eBay category that supports parts compatibility.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCompatibilityProperties(
        string $categoryTreeId,
        ?string $categoryId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_compatibility_propertiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_compatibility_propertiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                category_id: $categoryId,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->category_tree()->byCategory_tree_id($categoryTreeId)
            ->get_compatibility_properties()->get($rc)->wait());
    }

    /**
     * Returns the values of a specified compatibility property for items in a given category.
     *
     * @param string|null $categoryId          The unique identifier of an eBay category that supports parts compatibility.
     * @param string|null $compatibilityProperty One compatible vehicle property to retrieve values for (e.g. "Trim").
     * @param string|null $filter              One or more name/value pairs to narrow down returned values.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCompatibilityPropertyValues(
        string $categoryTreeId,
        ?string $categoryId = null,
        ?string $compatibilityProperty = null,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration::createQueryParameters(
                category_id: $categoryId,
                compatibility_property: $compatibilityProperty,
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->category_tree()->byCategory_tree_id($categoryTreeId)
            ->get_compatibility_property_values()->get($rc)->wait());
    }

    /**
     * Returns the eBay category tree identifier for the default eBay marketplace.
     *
     * @param string|null $marketplaceId  The unique identifier of the eBay marketplace (e.g. EBAY_US).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getDefaultCategoryTreeId(
        ?string $marketplaceId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_default_category_tree_idRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_default_category_tree_idRequestBuilderGetRequestConfiguration::createQueryParameters(
                marketplace_id: $marketplaceId,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->get_default_category_tree_id()->get($rc)->wait());
    }

    /**
     * Returns all categories in a specified category tree that have been marked as expired.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getExpiredCategories(
        string $categoryTreeId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_expired_categoriesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->category_tree()->byCategory_tree_id($categoryTreeId)
            ->get_expired_categories()->get($rc)->wait());
    }

    /**
     * Returns aspects that are appropriate or required for accurately describing
     * items in the specified leaf category.
     *
     * @param string|null $categoryId     The unique identifier of the leaf category for which aspects are being requested.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getItemAspectsForCategory(
        string $categoryTreeId,
        ?string $categoryId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration::createQueryParameters(
                category_id: $categoryId,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->category_tree()->byCategory_tree_id($categoryTreeId)
            ->get_item_aspects_for_category()->get($rc)->wait());
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = $accessToken ?? $this->config->accessToken
            ?? throw new \RuntimeException('No access token. Pass $accessToken per-call or set ListingMetadataConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): TaxonomyApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, null, null, $this->guzzle);
        $adapter->setBaseUrl($this->config->taxonomyBaseUrl);
        return new TaxonomyApiClient($adapter);
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
