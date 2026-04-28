<?php

declare(strict_types=1);

namespace EBay\ListingMetadata\Clients\Rest;

use EBay\ListingMetadata\Configuration\ListingMetadataConfiguration;
use EBay\ListingMetadata\Configuration\RequestOptions;
use EBay\ListingMetadata\Configuration\TokenContext;
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

final class TaxonomyClient
{
    public function __construct(
        private readonly TaxonomyApiClient $kiota,
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
        TokenContext::set($accessToken);
        try {
            $rc = new Fetch_item_aspectsRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->fetch_item_aspects()->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns a subtree of a category tree, including the root node of the subtree.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCategorySubtree(
        string $categoryTreeId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        TokenContext::set($accessToken);
        try {
            $rc = new Get_category_subtreeRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_category_subtree()->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns an array of categories, with suggestions for the best matching categories
     * for the keywords or aspects provided.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCategorySuggestions(
        string $categoryTreeId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        TokenContext::set($accessToken);
        try {
            $rc = new Get_category_suggestionsRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_category_suggestions()->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
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
        TokenContext::set($accessToken);
        try {
            $rc = new WithCategory_tree_ItemRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns the compatibility properties (aspects) for a given category tree and dataset.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCompatibilityProperties(
        string $categoryTreeId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        TokenContext::set($accessToken);
        try {
            $rc = new Get_compatibility_propertiesRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_compatibility_properties()->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns the values of a specified compatibility property for items in a given category.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCompatibilityPropertyValues(
        string $categoryTreeId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        TokenContext::set($accessToken);
        try {
            $rc = new Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_compatibility_property_values()->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns the eBay category tree identifier for the default eBay marketplace.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getDefaultCategoryTreeId(
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        TokenContext::set($accessToken);
        try {
            $rc = new Get_default_category_tree_idRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->get_default_category_tree_id()->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
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
        TokenContext::set($accessToken);
        try {
            $rc = new Get_expired_categoriesRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_expired_categories()->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns aspects that are appropriate or required for accurately describing
     * items in the specified leaf category.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getItemAspectsForCategory(
        string $categoryTreeId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        TokenContext::set($accessToken);
        try {
            $rc = new Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_item_aspects_for_category()->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        $headers = $this->config->defaultRequestOptions->headers;
        if ($requestOptions !== null) {
            foreach ($requestOptions->headers as $key => $value) {
                $headers[$key] = $value;
            }
        }
        return $headers;
    }
}
