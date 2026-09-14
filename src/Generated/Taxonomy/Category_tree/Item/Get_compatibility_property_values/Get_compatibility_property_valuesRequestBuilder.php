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

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_property_values;

use EBay\ListingMetadata\Generated\Taxonomy\Models\Error;
use EBay\ListingMetadata\Generated\Taxonomy\Models\GetCompatibilityPropertyValuesResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /category_tree/{category_tree_id}/get_compatibility_property_values
*/
class Get_compatibility_property_valuesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_compatibility_property_valuesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/category_tree/{category_tree_id}/get_compatibility_property_values?category_id={category_id}&compatibility_property={compatibility_property}{&filter*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves applicable compatible vehicle property values based on the specified eBay marketplace, specified eBay category, and filters used in the request. Compatible vehicle properties are returned in the <strong>compatibilityProperties.name</strong> field of a <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getcompatibilityproperties" >getCompatibilityProperties</a> response. <br><br> One compatible vehicle property applicable to the specified eBay marketplace and eBay category is specified through the required <strong>compatibility_property</strong> filter. Then, the user has the option of further restricting the compatible vehicle property values that are returned in the response by specifying one or more compatible vehicle property name/value pairs through the <strong>filter</strong> query parameter.<br><br>See the documentation in <strong>URI parameters</strong> section for more information on using the <strong>compatibility_property</strong> and <strong>filter</strong> query parameters together to customize the data that is retrieved.
     * @param Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetCompatibilityPropertyValuesResponse|null>
     * @throws Exception
    */
    public function get(?Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetCompatibilityPropertyValuesResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method retrieves applicable compatible vehicle property values based on the specified eBay marketplace, specified eBay category, and filters used in the request. Compatible vehicle properties are returned in the <strong>compatibilityProperties.name</strong> field of a <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getcompatibilityproperties" >getCompatibilityProperties</a> response. <br><br> One compatible vehicle property applicable to the specified eBay marketplace and eBay category is specified through the required <strong>compatibility_property</strong> filter. Then, the user has the option of further restricting the compatible vehicle property values that are returned in the response by specifying one or more compatible vehicle property name/value pairs through the <strong>filter</strong> query parameter.<br><br>See the documentation in <strong>URI parameters</strong> section for more information on using the <strong>compatibility_property</strong> and <strong>filter</strong> query parameters together to customize the data that is retrieved.
     * @param Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Get_compatibility_property_valuesRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_compatibility_property_valuesRequestBuilder {
        return new Get_compatibility_property_valuesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
