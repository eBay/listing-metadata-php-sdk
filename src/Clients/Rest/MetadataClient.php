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
use EBay\ListingMetadata\Generated\Metadata\MetadataApiClient;
use EBay\ListingMetadata\Generated\Metadata\Models\AutomotivePartsCompatibilityPolicyResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\CategoryPolicyResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ClassifiedAdPolicyResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ExtendedProducerResponsibilityPolicyResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\GetCurrenciesResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\GetMinimumListingPricePoliciesResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\HazardousMaterialDetailsResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ItemConditionPolicyResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ListingStructurePolicyResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ListingTypePoliciesResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\MotorsListingPoliciesResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\MultiCompatibilityPropertyValuesRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\MultiCompatibilityPropertyValuesResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\NegotiatedPricePolicyResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ProductRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\ProductResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ProductSafetyLabelsResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\PropertyNamesRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\PropertyNamesResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\PropertyValuesRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\PropertyValuesResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\RegulatoryPolicyResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ReturnPolicyResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\SalesTaxJurisdictions;
use EBay\ListingMetadata\Generated\Metadata\Models\ShippingCarrierResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ShippingExcludeLocationResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ShippingHandlingTimeResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ShippingLocationResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ShippingPoliciesResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\ShippingServiceResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\SiteVisibilityPoliciesResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\SpecificationRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\SpecificationResponse;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibilities_by_specification\Get_compatibilities_by_specificationRequestBuilderPostRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibility_property_names\Get_compatibility_property_namesRequestBuilderPostRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibility_property_values\Get_compatibility_property_valuesRequestBuilderPostRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_multi_compatibility_property_values\Get_multi_compatibility_property_valuesRequestBuilderPostRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_product_compatibilities\Get_product_compatibilitiesRequestBuilderPostRequestConfiguration;
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
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_minimum_listing_price_policies\Get_minimum_listing_price_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_motors_listing_policies\Get_motors_listing_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_negotiated_price_policies\Get_negotiated_price_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_product_safety_labels\Get_product_safety_labelsRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_regulatory_policies\Get_regulatory_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_return_policies\Get_return_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_shipping_policies\Get_shipping_policiesRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_site_visibility_policies\Get_site_visibility_policiesRequestBuilderGetRequestConfiguration;
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

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function getAutomotivePartsCompatibilityPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptEncoding = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?AutomotivePartsCompatibilityPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptEncoding !== null) {
            $headers["Accept-Encoding"] = $acceptEncoding;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_automotive_parts_compatibility_policies()->get(
                new Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getCategoryPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CategoryPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_category_policies()->get(
                new Get_category_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_category_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getClassifiedAdPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ClassifiedAdPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_classified_ad_policies()->get(
                new Get_classified_ad_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_classified_ad_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getCurrencies(
        string $marketplaceId,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetCurrenciesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_currencies()->get(
                new Get_currenciesRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getExtendedProducerResponsibilityPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptEncoding = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ExtendedProducerResponsibilityPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptEncoding !== null) {
            $headers["Accept-Encoding"] = $acceptEncoding;
        }
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_extended_producer_responsibility_policies()->get(
                new Get_extended_producer_responsibility_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_extended_producer_responsibility_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getHazardousMaterialsLabels(
        string $marketplaceId,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?HazardousMaterialDetailsResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_hazardous_materials_labels()->get(
                new Get_hazardous_materials_labelsRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getItemConditionPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptEncoding = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ItemConditionPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptEncoding !== null) {
            $headers["Accept-Encoding"] = $acceptEncoding;
        }
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_item_condition_policies()->get(
                new Get_item_condition_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_item_condition_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getListingStructurePolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptEncoding = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ListingStructurePolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptEncoding !== null) {
            $headers["Accept-Encoding"] = $acceptEncoding;
        }
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_listing_structure_policies()->get(
                new Get_listing_structure_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_listing_structure_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getListingTypePolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ListingTypePoliciesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_listing_type_policies()->get(
                new Get_listing_type_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_listing_type_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getMinimumListingPricePolicies(string $marketplaceId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetMinimumListingPricePoliciesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_minimum_listing_price_policies()->get(
                new Get_minimum_listing_price_policiesRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getMotorsListingPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?MotorsListingPoliciesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_motors_listing_policies()->get(
                new Get_motors_listing_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_motors_listing_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getNegotiatedPricePolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptEncoding = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?NegotiatedPricePolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptEncoding !== null) {
            $headers["Accept-Encoding"] = $acceptEncoding;
        }
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_negotiated_price_policies()->get(
                new Get_negotiated_price_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_negotiated_price_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getProductSafetyLabels(string $marketplaceId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ProductSafetyLabelsResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_product_safety_labels()->get(
                new Get_product_safety_labelsRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getRegulatoryPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?RegulatoryPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_regulatory_policies()->get(
                new Get_regulatory_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_regulatory_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getReturnPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptEncoding = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ReturnPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptEncoding !== null) {
            $headers["Accept-Encoding"] = $acceptEncoding;
        }
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_return_policies()->get(
                new Get_return_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_return_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getShippingPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ShippingPoliciesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_shipping_policies()->get(
                new Get_shipping_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_shipping_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getSiteVisibilityPolicies(
        string $marketplaceId,
        ?string $filter = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SiteVisibilityPoliciesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->marketplace()->byMarketplace_id($marketplaceId)->get_site_visibility_policies()->get(
                new Get_site_visibility_policiesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Get_site_visibility_policiesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getCompatibilitiesBySpecification(
        SpecificationRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SpecificationResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->compatibilities()->get_compatibilities_by_specification()->post(
                $body,
                new Get_compatibilities_by_specificationRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getCompatibilityPropertyNames(
        PropertyNamesRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?PropertyNamesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->compatibilities()->get_compatibility_property_names()->post(
                $body,
                new Get_compatibility_property_namesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getCompatibilityPropertyValues(
        PropertyValuesRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?PropertyValuesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->compatibilities()->get_compatibility_property_values()->post(
                $body,
                new Get_compatibility_property_valuesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getMultiCompatibilityPropertyValues(
        MultiCompatibilityPropertyValuesRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?MultiCompatibilityPropertyValuesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->compatibilities()->get_multi_compatibility_property_values()->post(
                $body,
                new Get_multi_compatibility_property_valuesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getProductCompatibilities(
        ProductRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ProductResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->compatibilities()->get_product_compatibilities()->post(
                $body,
                new Get_product_compatibilitiesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getExcludeShippingLocations(
        string $marketplaceId,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ShippingExcludeLocationResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->shipping()->marketplace()->byMarketplace_id($marketplaceId)->get_exclude_shipping_locations()->get(
                new Get_exclude_shipping_locationsRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getHandlingTimes(
        string $marketplaceId,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ShippingHandlingTimeResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->shipping()->marketplace()->byMarketplace_id($marketplaceId)->get_handling_times()->get(
                new Get_handling_timesRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getShippingCarriers(
        string $marketplaceId,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ShippingCarrierResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->shipping()->marketplace()->byMarketplace_id($marketplaceId)->get_shipping_carriers()->get(
                new Get_shipping_carriersRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getShippingLocations(
        string $marketplaceId,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ShippingLocationResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->shipping()->marketplace()->byMarketplace_id($marketplaceId)->get_shipping_locations()->get(
                new Get_shipping_locationsRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getShippingServices(
        string $marketplaceId,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ShippingServiceResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->shipping()->marketplace()->byMarketplace_id($marketplaceId)->get_shipping_services()->get(
                new Get_shipping_servicesRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getSalesTaxJurisdictions(string $countryCode, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SalesTaxJurisdictions
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->country()->byCountryCode($countryCode)->sales_tax_jurisdiction()->get(
                new Sales_tax_jurisdictionRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
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
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->metadataBaseUrl);
        return new MetadataApiClient($adapter);
    }
}
