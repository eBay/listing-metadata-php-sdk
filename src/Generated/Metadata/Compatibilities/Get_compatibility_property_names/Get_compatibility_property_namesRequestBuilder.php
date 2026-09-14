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

namespace EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_compatibility_property_names;

use EBay\ListingMetadata\Generated\Metadata\Models\PropertyNamesRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\PropertyNamesResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /compatibilities/get_compatibility_property_names
*/
class Get_compatibility_property_namesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_compatibility_property_namesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compatibilities/get_compatibility_property_names');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to retrieve product compatibility property names for the specified compatibility-enabled category.<br><br>Compatibility property names can be used alongside the corresponding compatibility property value (retrieved using the <a href="/develop/api/sell/metadata_api#sell-metadata_api-compatibilities-getcompatibilitypropertyvalues" >getCompatibilityPropertyValues</a> method) to describe the assembly for which an item is compatible.<br><br>The <b>categoryId</b> of the compatibility-enabled category for which to retrieve compatibility property names is required in the request body.<br><br>By default, all property names within the compatibility category of the specified compatibility-enable category are returned. You can limit the size of the result set by using the <b>dataset</b> array to specify the types of properties you want returned.
     * @param PropertyNamesRequest $body This type defines the properties used to retrieve compatibility property names.
     * @param Get_compatibility_property_namesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PropertyNamesResponse|null>
     * @throws Exception
    */
    public function post(PropertyNamesRequest $body, ?Get_compatibility_property_namesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PropertyNamesResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method is used to retrieve product compatibility property names for the specified compatibility-enabled category.<br><br>Compatibility property names can be used alongside the corresponding compatibility property value (retrieved using the <a href="/develop/api/sell/metadata_api#sell-metadata_api-compatibilities-getcompatibilitypropertyvalues" >getCompatibilityPropertyValues</a> method) to describe the assembly for which an item is compatible.<br><br>The <b>categoryId</b> of the compatibility-enabled category for which to retrieve compatibility property names is required in the request body.<br><br>By default, all property names within the compatibility category of the specified compatibility-enable category are returned. You can limit the size of the result set by using the <b>dataset</b> array to specify the types of properties you want returned.
     * @param PropertyNamesRequest $body This type defines the properties used to retrieve compatibility property names.
     * @param Get_compatibility_property_namesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PropertyNamesRequest $body, ?Get_compatibility_property_namesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Get_compatibility_property_namesRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_compatibility_property_namesRequestBuilder {
        return new Get_compatibility_property_namesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
