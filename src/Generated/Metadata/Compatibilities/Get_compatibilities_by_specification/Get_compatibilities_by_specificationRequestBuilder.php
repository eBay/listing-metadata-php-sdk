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

namespace EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibilities_by_specification;

use EBay\ListingMetadata\Generated\Metadata\Models\SpecificationRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\SpecificationResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /compatibilities/get_compatibilities_by_specification
*/
class Get_compatibilities_by_specificationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_compatibilities_by_specificationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compatibilities/get_compatibilities_by_specification');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to retrieve all compatible application name-value pairs for a part based on the provided specification(s).<br><br>The part's relevant dimensions and/or characteristics can be provided through the <b>specifications</b> container. For example, when retrieving compatible application name-value pairs for a tire, the tire's dimensions (such as the section width or rim diameter) should be provided.<br><br>By default, all compatible application name-value pairs for the specifications are returned. You can limit the size of the result set by using the <b>compatibilityPropertyFilters</b> array to specify the properties (such as make, model, year, or trim) you wish to be included in the response.<br><br><span class="tablenote"><b>Note:</b> The <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyNames" target="_blank ">getCompatibilityPropertyNames</a> and <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyValues" target="_blank ">getCompatibilityPropertyValues</a> methods can be used to retrieve valid property names and values that can be used as the name-value pairs to define specifications.</span>
     * @param SpecificationRequest $body This type provides the properties and specifications to use to search for compatibilities.
     * @param Get_compatibilities_by_specificationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SpecificationResponse|null>
     * @throws Exception
    */
    public function post(SpecificationRequest $body, ?Get_compatibilities_by_specificationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [SpecificationResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method is used to retrieve all compatible application name-value pairs for a part based on the provided specification(s).<br><br>The part's relevant dimensions and/or characteristics can be provided through the <b>specifications</b> container. For example, when retrieving compatible application name-value pairs for a tire, the tire's dimensions (such as the section width or rim diameter) should be provided.<br><br>By default, all compatible application name-value pairs for the specifications are returned. You can limit the size of the result set by using the <b>compatibilityPropertyFilters</b> array to specify the properties (such as make, model, year, or trim) you wish to be included in the response.<br><br><span class="tablenote"><b>Note:</b> The <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyNames" target="_blank ">getCompatibilityPropertyNames</a> and <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyValues" target="_blank ">getCompatibilityPropertyValues</a> methods can be used to retrieve valid property names and values that can be used as the name-value pairs to define specifications.</span>
     * @param SpecificationRequest $body This type provides the properties and specifications to use to search for compatibilities.
     * @param Get_compatibilities_by_specificationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SpecificationRequest $body, ?Get_compatibilities_by_specificationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Get_compatibilities_by_specificationRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_compatibilities_by_specificationRequestBuilder {
        return new Get_compatibilities_by_specificationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
