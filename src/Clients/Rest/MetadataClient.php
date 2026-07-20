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
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibilities_by_specification\Get_compatibilities_by_specificationRequestBuilderPostRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibility_property_names\Get_compatibility_property_namesRequestBuilderPostRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibility_property_values\Get_compatibility_property_valuesRequestBuilderPostRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_multi_compatibility_property_values\Get_multi_compatibility_property_valuesRequestBuilderPostRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_product_compatibilities\Get_product_compatibilitiesRequestBuilderPostRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Models\MultiCompatibilityPropertyValuesRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\ProductRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\PropertyNamesRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\PropertyValuesRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\SpecificationRequest;
use EBay\ListingMetadata\Generated\Metadata\Country\Item\Sales_tax_jurisdiction\Sales_tax_jurisdictionRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_automotive_parts_compatibility_policies\Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_category_policies\Get_category_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_classified_ad_policies\Get_classified_ad_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_currencies\Get_currenciesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_extended_producer_responsibility_policies\Get_extended_producer_responsibility_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_hazardous_materials_labels\Get_hazardous_materials_labelsRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_item_condition_policies\Get_item_condition_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_listing_structure_policies\Get_listing_structure_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_listing_type_policies\Get_listing_type_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_motors_listing_policies\Get_motors_listing_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_negotiated_price_policies\Get_negotiated_price_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_product_safety_labels\Get_product_safety_labelsRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_regulatory_policies\Get_regulatory_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_return_policies\Get_return_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_shipping_policies\Get_shipping_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_site_visibility_policies\Get_site_visibility_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\MetadataApiClient;
use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_exclude_shipping_locations\Get_exclude_shipping_locationsRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_handling_times\Get_handling_timesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_shipping_carriers\Get_shipping_carriersRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_shipping_locations\Get_shipping_locationsRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_shipping_services\Get_shipping_servicesRequestBuilderGetRequestConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class MetadataClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly ListingMetadataConfiguration $config,
    ) {}

    // ── Marketplace-scoped policies ─────────────────────────────────────────

    /**
     * Returns eBay policies that define how to list automotive parts compatibility items.
     *
     * @param string      $marketplaceId  eBay marketplace ID (e.g. EBAY_US).
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getAutomotivePartsCompatibilityPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_automotive_parts_compatibility_policies()->get($rc)->wait());
    }

    /**
     * Returns category-specific policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCategoryPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_category_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_category_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_category_policies()->get($rc)->wait());
    }

    /**
     * Returns classified ad policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getClassifiedAdPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_classified_ad_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_classified_ad_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_classified_ad_policies()->get($rc)->wait());
    }

    /**
     * Returns the supported currencies for the specified marketplace.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCurrencies(
        string $marketplaceId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_currenciesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_currencies()->get($rc)->wait());
    }

    /**
     * Returns extended producer responsibility policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getExtendedProducerResponsibilityPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_extended_producer_responsibility_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_extended_producer_responsibility_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_extended_producer_responsibility_policies()->get($rc)->wait());
    }

    /**
     * Returns hazardous materials label information for the specified marketplace.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getHazardousMaterialsLabels(
        string $marketplaceId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_hazardous_materials_labelsRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_hazardous_materials_labels()->get($rc)->wait());
    }

    /**
     * Returns item condition policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getItemConditionPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_item_condition_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_item_condition_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_item_condition_policies()->get($rc)->wait());
    }

    /**
     * Returns listing structure policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getListingStructurePolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_listing_structure_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_listing_structure_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_listing_structure_policies()->get($rc)->wait());
    }

    /**
     * Returns listing type policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getListingTypePolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_listing_type_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_listing_type_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_listing_type_policies()->get($rc)->wait());
    }

    /**
     * Returns motors listing policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getMotorsListingPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_motors_listing_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_motors_listing_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_motors_listing_policies()->get($rc)->wait());
    }

    /**
     * Returns negotiated price policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getNegotiatedPricePolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_negotiated_price_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_negotiated_price_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_negotiated_price_policies()->get($rc)->wait());
    }

    /**
     * Returns product safety label information for the specified marketplace.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getProductSafetyLabels(
        string $marketplaceId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_product_safety_labelsRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_product_safety_labels()->get($rc)->wait());
    }

    /**
     * Returns regulatory policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getRegulatoryPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_regulatory_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_regulatory_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_regulatory_policies()->get($rc)->wait());
    }

    /**
     * Returns return policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getReturnPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_return_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_return_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_return_policies()->get($rc)->wait());
    }

    /**
     * Returns shipping policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getShippingPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_shipping_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_shipping_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_shipping_policies()->get($rc)->wait());
    }

    /**
     * Returns site visibility policies for the specified marketplace.
     *
     * @param string|null $filter         Limits response to specified categoryId values (pipe-separated).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getSiteVisibilityPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_site_visibility_policiesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_site_visibility_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                filter: $filter,
            ),
        );
        return $this->call($accessToken, fn($api) => $api->marketplace()->byMarketplace_id($marketplaceId)
            ->get_site_visibility_policies()->get($rc)->wait());
    }

    // ── Compatibility operations ─────────────────────────────────────────────

    /**
     * Returns compatibilities for a set of product specifications.
     *
     * @param SpecificationRequest $body    Request body containing specification criteria.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCompatibilitiesBySpecification(
        SpecificationRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_compatibilities_by_specificationRequestBuilderPostRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->compatibilities()->get_compatibilities_by_specification()->post($body, $rc)->wait());
    }

    /**
     * Returns compatibility property names for the specified dataset.
     *
     * @param PropertyNamesRequest $body    Request body containing categoryId and optional dataset filters.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCompatibilityPropertyNames(
        PropertyNamesRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_compatibility_property_namesRequestBuilderPostRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->compatibilities()->get_compatibility_property_names()->post($body, $rc)->wait());
    }

    /**
     * Returns compatibility property values for the specified property name and dataset.
     *
     * @param PropertyValuesRequest $body   Request body containing categoryId, propertyName, and optional filters.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCompatibilityPropertyValues(
        PropertyValuesRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_compatibility_property_valuesRequestBuilderPostRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->compatibilities()->get_compatibility_property_values()->post($body, $rc)->wait());
    }

    /**
     * Returns multiple compatibility property values in a single call.
     *
     * @param MultiCompatibilityPropertyValuesRequest $body Request body containing categoryId, propertyNames, and required propertyFilter.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getMultiCompatibilityPropertyValues(
        MultiCompatibilityPropertyValuesRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_multi_compatibility_property_valuesRequestBuilderPostRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->compatibilities()->get_multi_compatibility_property_values()->post($body, $rc)->wait());
    }

    /**
     * Returns product compatibilities for the specified product.
     *
     * @param ProductRequest $body          Request body containing productIdentifier and optional filters.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getProductCompatibilities(
        ProductRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_product_compatibilitiesRequestBuilderPostRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->compatibilities()->get_product_compatibilities()->post($body, $rc)->wait());
    }

    // ── Shipping marketplace operations ─────────────────────────────────────

    /**
     * Returns exclude shipping locations for the specified marketplace.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getExcludeShippingLocations(
        string $marketplaceId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_exclude_shipping_locationsRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->shipping()->marketplace()->byMarketplace_id($marketplaceId)
            ->get_exclude_shipping_locations()->get($rc)->wait());
    }

    /**
     * Returns handling times for the specified marketplace.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getHandlingTimes(
        string $marketplaceId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_handling_timesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->shipping()->marketplace()->byMarketplace_id($marketplaceId)
            ->get_handling_times()->get($rc)->wait());
    }

    /**
     * Returns available shipping carriers for the specified marketplace.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getShippingCarriers(
        string $marketplaceId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_shipping_carriersRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->shipping()->marketplace()->byMarketplace_id($marketplaceId)
            ->get_shipping_carriers()->get($rc)->wait());
    }

    /**
     * Returns available shipping locations for the specified marketplace.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getShippingLocations(
        string $marketplaceId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_shipping_locationsRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->shipping()->marketplace()->byMarketplace_id($marketplaceId)
            ->get_shipping_locations()->get($rc)->wait());
    }

    /**
     * Returns available shipping services for the specified marketplace.
     *
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getShippingServices(
        string $marketplaceId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Get_shipping_servicesRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->shipping()->marketplace()->byMarketplace_id($marketplaceId)
            ->get_shipping_services()->get($rc)->wait());
    }

    // ── Sales-tax jurisdiction ───────────────────────────────────────────────

    /**
     * Returns all sales-tax jurisdictions for the specified country (US or CA).
     *
     * @param string $countryCode        Two-letter ISO 3166 country code (US or CA).
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getSalesTaxJurisdictions(
        string $countryCode,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $rc = new Sales_tax_jurisdictionRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
        );
        return $this->call($accessToken, fn($api) => $api->country()->byCountryCode($countryCode)
            ->sales_tax_jurisdiction()->get($rc)->wait());
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set ListingMetadataConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): MetadataApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, null, null, $this->guzzle);
        $adapter->setBaseUrl($this->config->metadataBaseUrl);
        return new MetadataApiClient($adapter);
    }

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }
}
