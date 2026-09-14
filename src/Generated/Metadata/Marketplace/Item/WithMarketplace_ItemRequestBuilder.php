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

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item;

use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_automotive_parts_compatibility_policies\Get_automotive_parts_compatibility_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_category_policies\Get_category_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_classified_ad_policies\Get_classified_ad_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_currencies\Get_currenciesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_extended_producer_responsibility_policies\Get_extended_producer_responsibility_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_hazardous_materials_labels\Get_hazardous_materials_labelsRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_item_condition_policies\Get_item_condition_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_listing_structure_policies\Get_listing_structure_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_listing_type_policies\Get_listing_type_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_minimum_listing_price_policies\Get_minimum_listing_price_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_motors_listing_policies\Get_motors_listing_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_negotiated_price_policies\Get_negotiated_price_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_product_safety_labels\Get_product_safety_labelsRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_regulatory_policies\Get_regulatory_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_return_policies\Get_return_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_shipping_policies\Get_shipping_policiesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_site_visibility_policies\Get_site_visibility_policiesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /marketplace/{marketplace_id}
*/
class WithMarketplace_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The get_automotive_parts_compatibility_policies property
    */
    public function get_automotive_parts_compatibility_policies(): Get_automotive_parts_compatibility_policiesRequestBuilder {
        return new Get_automotive_parts_compatibility_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_category_policies property
    */
    public function get_category_policies(): Get_category_policiesRequestBuilder {
        return new Get_category_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_classified_ad_policies property
    */
    public function get_classified_ad_policies(): Get_classified_ad_policiesRequestBuilder {
        return new Get_classified_ad_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_currencies property
    */
    public function get_currencies(): Get_currenciesRequestBuilder {
        return new Get_currenciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_extended_producer_responsibility_policies property
    */
    public function get_extended_producer_responsibility_policies(): Get_extended_producer_responsibility_policiesRequestBuilder {
        return new Get_extended_producer_responsibility_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_hazardous_materials_labels property
    */
    public function get_hazardous_materials_labels(): Get_hazardous_materials_labelsRequestBuilder {
        return new Get_hazardous_materials_labelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_item_condition_policies property
    */
    public function get_item_condition_policies(): Get_item_condition_policiesRequestBuilder {
        return new Get_item_condition_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_listing_structure_policies property
    */
    public function get_listing_structure_policies(): Get_listing_structure_policiesRequestBuilder {
        return new Get_listing_structure_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_listing_type_policies property
    */
    public function get_listing_type_policies(): Get_listing_type_policiesRequestBuilder {
        return new Get_listing_type_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_minimum_listing_price_policies property
    */
    public function get_minimum_listing_price_policies(): Get_minimum_listing_price_policiesRequestBuilder {
        return new Get_minimum_listing_price_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_motors_listing_policies property
    */
    public function get_motors_listing_policies(): Get_motors_listing_policiesRequestBuilder {
        return new Get_motors_listing_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_negotiated_price_policies property
    */
    public function get_negotiated_price_policies(): Get_negotiated_price_policiesRequestBuilder {
        return new Get_negotiated_price_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_product_safety_labels property
    */
    public function get_product_safety_labels(): Get_product_safety_labelsRequestBuilder {
        return new Get_product_safety_labelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_regulatory_policies property
    */
    public function get_regulatory_policies(): Get_regulatory_policiesRequestBuilder {
        return new Get_regulatory_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_return_policies property
    */
    public function get_return_policies(): Get_return_policiesRequestBuilder {
        return new Get_return_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_shipping_policies property
    */
    public function get_shipping_policies(): Get_shipping_policiesRequestBuilder {
        return new Get_shipping_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_site_visibility_policies property
    */
    public function get_site_visibility_policies(): Get_site_visibility_policiesRequestBuilder {
        return new Get_site_visibility_policiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithMarketplace_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/marketplace/{marketplace_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
