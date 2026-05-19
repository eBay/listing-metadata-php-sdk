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

namespace EBay\ListingMetadata\Generated\Metadata\Compatibilities;

use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibilities_by_specification\Get_compatibilities_by_specificationRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibility_property_names\Get_compatibility_property_namesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibility_property_values\Get_compatibility_property_valuesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_multi_compatibility_property_values\Get_multi_compatibility_property_valuesRequestBuilder;
use EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_product_compatibilities\Get_product_compatibilitiesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /compatibilities
*/
class CompatibilitiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The get_compatibilities_by_specification property
    */
    public function get_compatibilities_by_specification(): Get_compatibilities_by_specificationRequestBuilder {
        return new Get_compatibilities_by_specificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_compatibility_property_names property
    */
    public function get_compatibility_property_names(): Get_compatibility_property_namesRequestBuilder {
        return new Get_compatibility_property_namesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_compatibility_property_values property
    */
    public function get_compatibility_property_values(): Get_compatibility_property_valuesRequestBuilder {
        return new Get_compatibility_property_valuesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_multi_compatibility_property_values property
    */
    public function get_multi_compatibility_property_values(): Get_multi_compatibility_property_valuesRequestBuilder {
        return new Get_multi_compatibility_property_valuesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_product_compatibilities property
    */
    public function get_product_compatibilities(): Get_product_compatibilitiesRequestBuilder {
        return new Get_product_compatibilitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CompatibilitiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compatibilities');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
