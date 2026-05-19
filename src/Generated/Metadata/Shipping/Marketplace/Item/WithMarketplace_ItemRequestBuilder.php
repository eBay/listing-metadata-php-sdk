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

namespace EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item;

use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_exclude_shipping_locations\Get_exclude_shipping_locationsRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_handling_times\Get_handling_timesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_shipping_carriers\Get_shipping_carriersRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_shipping_locations\Get_shipping_locationsRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_shipping_services\Get_shipping_servicesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /shipping/marketplace/{marketplace_id}
*/
class WithMarketplace_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The get_exclude_shipping_locations property
    */
    public function get_exclude_shipping_locations(): Get_exclude_shipping_locationsRequestBuilder {
        return new Get_exclude_shipping_locationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_handling_times property
    */
    public function get_handling_times(): Get_handling_timesRequestBuilder {
        return new Get_handling_timesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_shipping_carriers property
    */
    public function get_shipping_carriers(): Get_shipping_carriersRequestBuilder {
        return new Get_shipping_carriersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_shipping_locations property
    */
    public function get_shipping_locations(): Get_shipping_locationsRequestBuilder {
        return new Get_shipping_locationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_shipping_services property
    */
    public function get_shipping_services(): Get_shipping_servicesRequestBuilder {
        return new Get_shipping_servicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithMarketplace_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shipping/marketplace/{marketplace_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
