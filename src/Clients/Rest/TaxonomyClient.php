<?php

declare(strict_types=1);

namespace EBay\ListingMetadata\Clients\Rest;

use EBay\ListingMetadata\Configuration\TokenContext;
use EBay\ListingMetadata\Generated\Taxonomy\TaxonomyApiClient;

final class TaxonomyClient
{
    public function __construct(private readonly TaxonomyApiClient $kiota) {}

    /**
     * Returns a complete list of aspects for all leaf categories in a marketplace.
     *
     * @param string      $categoryTreeId The unique identifier of the eBay category tree.
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     */
    public function fetchItemAspects(string $categoryTreeId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->fetch_item_aspects()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns a subtree of a category tree, including the root node of the subtree.
     */
    public function getCategorySubtree(string $categoryTreeId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_category_subtree()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns an array of categories, with suggestions for the best matching categories
     * for the keywords or aspects provided.
     */
    public function getCategorySuggestions(string $categoryTreeId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_category_suggestions()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns the complete category tree identified by the category_tree_id.
     */
    public function getCategoryTree(string $categoryTreeId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns the compatibility properties (aspects) for a given category tree and
     * dataset.
     */
    public function getCompatibilityProperties(string $categoryTreeId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_compatibility_properties()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns the values of a specified compatibility property for items in a given
     * category.
     */
    public function getCompatibilityPropertyValues(string $categoryTreeId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_compatibility_property_values()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns the eBay category tree identifier for the default eBay marketplace.
     */
    public function getDefaultCategoryTreeId(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->get_default_category_tree_id()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns all categories in a specified category tree that have been marked
     * as expired.
     */
    public function getExpiredCategories(string $categoryTreeId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_expired_categories()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns aspects that are appropriate or required for accurately describing
     * items in the specified leaf category.
     */
    public function getItemAspectsForCategory(string $categoryTreeId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->category_tree()->byCategory_tree_id($categoryTreeId)
                ->get_item_aspects_for_category()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }
}
