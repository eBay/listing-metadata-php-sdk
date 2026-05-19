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

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_automotive_parts_compatibility_policies;

use EBay\ListingMetadata\Generated\Metadata\Models\AutomotivePartsCompatibilityPolicyResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /marketplace/{marketplace_id}/get_automotive_parts_compatibility_policies
*/
class Get_automotive_parts_compatibility_policiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_automotive_parts_compatibility_policiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/marketplace/{marketplace_id}/get_automotive_parts_compatibility_policies{?filter*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns the eBay policies that define how to list automotive parts compatibility items in the categories of the specified marketplace.  <br><br>By default, this method returns all categories that support parts compatibility. You can limit the size of the result set by using the <b>filter</b> query parameter to specify only the category IDs you want to review.<br><br><span class="tablenote"><b>Note: </b>To return policy information for the eBay US marketplace, specify <code>EBAY_MOTORS_US</code> as the path parameter for <b>marketplace_id</b>.</span><br><span class="tablenote"><span style="color:#478415"><strong>Tip:</strong></span> This method can potentially return a very large response payload. eBay recommends that the response payload be compressed by passing in the <b>Accept-Encoding</b> request header and setting the value to <code>gzip</code>.</span><br>If you specify a valid marketplace ID but that marketplace does not contain policy information, or if you filter out all results, a <b>204 No content</b> status code is returned with an empty response body.
     * @param Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AutomotivePartsCompatibilityPolicyResponse|null>
     * @throws Exception
    */
    public function get(?Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [AutomotivePartsCompatibilityPolicyResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method returns the eBay policies that define how to list automotive parts compatibility items in the categories of the specified marketplace.  <br><br>By default, this method returns all categories that support parts compatibility. You can limit the size of the result set by using the <b>filter</b> query parameter to specify only the category IDs you want to review.<br><br><span class="tablenote"><b>Note: </b>To return policy information for the eBay US marketplace, specify <code>EBAY_MOTORS_US</code> as the path parameter for <b>marketplace_id</b>.</span><br><span class="tablenote"><span style="color:#478415"><strong>Tip:</strong></span> This method can potentially return a very large response payload. eBay recommends that the response payload be compressed by passing in the <b>Accept-Encoding</b> request header and setting the value to <code>gzip</code>.</span><br>If you specify a valid marketplace ID but that marketplace does not contain policy information, or if you filter out all results, a <b>204 No content</b> status code is returned with an empty response body.
     * @param Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Get_automotive_parts_compatibility_policiesRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_automotive_parts_compatibility_policiesRequestBuilder {
        return new Get_automotive_parts_compatibility_policiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
