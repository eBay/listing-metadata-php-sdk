<?php

declare(strict_types=1);

namespace EBay\ListingMetadata\Clients\Rest;

use EBay\ListingMetadata\Configuration\TokenContext;
use EBay\ListingMetadata\Generated\Metadata\MetadataApiClient;

final class MetadataClient
{
    public function __construct(private readonly MetadataApiClient $kiota) {}

    // ── Marketplace-scoped policies ─────────────────────────────────────────

    /**
     * Returns eBay policies that define how to list automotive parts compatibility items.
     *
     * @param string      $marketplaceId eBay marketplace ID (e.g. EBAY_US).
     * @param string|null $accessToken   Per-call token; overrides config fallback.
     */
    public function getAutomotivePartsCompatibilityPolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_automotive_parts_compatibility_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns category-specific policies for the specified marketplace.
     */
    public function getCategoryPolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_category_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns classified ad policies for the specified marketplace.
     */
    public function getClassifiedAdPolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_classified_ad_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns the supported currencies for the specified marketplace.
     */
    public function getCurrencies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_currencies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns extended producer responsibility policies for the specified marketplace.
     */
    public function getExtendedProducerResponsibilityPolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_extended_producer_responsibility_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns hazardous materials label information for the specified marketplace.
     */
    public function getHazardousMaterialsLabels(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_hazardous_materials_labels()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns item condition policies for the specified marketplace.
     */
    public function getItemConditionPolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_item_condition_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns listing structure policies for the specified marketplace.
     */
    public function getListingStructurePolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_listing_structure_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns listing type policies for the specified marketplace.
     */
    public function getListingTypePolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_listing_type_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns motors listing policies for the specified marketplace.
     */
    public function getMotorsListingPolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_motors_listing_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns negotiated price policies for the specified marketplace.
     */
    public function getNegotiatedPricePolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_negotiated_price_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns product safety label information for the specified marketplace.
     */
    public function getProductSafetyLabels(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_product_safety_labels()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns regulatory policies for the specified marketplace.
     */
    public function getRegulatoryPolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_regulatory_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns return policies for the specified marketplace.
     */
    public function getReturnPolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_return_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns shipping policies for the specified marketplace.
     */
    public function getShippingPolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_shipping_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns site visibility policies for the specified marketplace.
     */
    public function getSiteVisibilityPolicies(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->marketplace()->byMarketplace_id($marketplaceId)
                ->get_site_visibility_policies()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    // ── Compatibility operations ─────────────────────────────────────────────

    /**
     * Returns compatibilities for a set of product specifications.
     */
    public function getCompatibilitiesBySpecification(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->compatibilities()->get_compatibilities_by_specification()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns compatibility property names for the specified dataset.
     */
    public function getCompatibilityPropertyNames(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->compatibilities()->get_compatibility_property_names()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns compatibility property values for the specified property name and dataset.
     */
    public function getCompatibilityPropertyValues(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->compatibilities()->get_compatibility_property_values()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns multiple compatibility property values in a single call.
     */
    public function getMultiCompatibilityPropertyValues(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->compatibilities()->get_multi_compatibility_property_values()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns product compatibilities for the specified product.
     */
    public function getProductCompatibilities(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->compatibilities()->get_product_compatibilities()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    // ── Shipping marketplace operations ─────────────────────────────────────

    /**
     * Returns exclude shipping locations for the specified marketplace.
     */
    public function getExcludeShippingLocations(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->shipping()->marketplace()->byMarketplace_id($marketplaceId)
                ->get_exclude_shipping_locations()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns handling times for the specified marketplace.
     */
    public function getHandlingTimes(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->shipping()->marketplace()->byMarketplace_id($marketplaceId)
                ->get_handling_times()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns available shipping carriers for the specified marketplace.
     */
    public function getShippingCarriers(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->shipping()->marketplace()->byMarketplace_id($marketplaceId)
                ->get_shipping_carriers()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns available shipping locations for the specified marketplace.
     */
    public function getShippingLocations(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->shipping()->marketplace()->byMarketplace_id($marketplaceId)
                ->get_shipping_locations()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Returns available shipping services for the specified marketplace.
     */
    public function getShippingServices(string $marketplaceId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->shipping()->marketplace()->byMarketplace_id($marketplaceId)
                ->get_shipping_services()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    // ── Sales-tax jurisdiction ───────────────────────────────────────────────

    /**
     * Returns all sales-tax jurisdictions for the specified country (US or CA).
     *
     * @param string $countryCode Two-letter ISO 3166 country code (US or CA).
     */
    public function getSalesTaxJurisdictions(string $countryCode, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->country()->byCountryCode($countryCode)
                ->sales_tax_jurisdiction()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }
}
