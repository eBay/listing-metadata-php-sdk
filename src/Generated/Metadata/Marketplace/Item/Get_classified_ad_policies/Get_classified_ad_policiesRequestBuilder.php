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

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_classified_ad_policies;

use EBay\ListingMetadata\Generated\Metadata\Models\ClassifiedAdPolicyResponse;
use EBay\ListingMetadata\Generated\Metadata\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /marketplace/{marketplace_id}/get_classified_ad_policies
*/
class Get_classified_ad_policiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_classified_ad_policiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/marketplace/{marketplace_id}/get_classified_ad_policies{?filter*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns eBay classified ad policy metadata for all leaf categories on the specified marketplace.<p>By default, this method returns metadata on all leaf categories. You can limit the size of the result set by using the <b>filter</b> query parameter to specify only the leaf category IDs you want to review.</p><p>If you specify a valid marketplace ID but that marketplace does not contain policy information, or if you filter out all results, a successful call returns a <b>204 No content</b> status code with an empty response body.</p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This method does not support classified ads for eBay US Motors categories (EBAY_MOTORS_US). For eBay Motors Pro users, use <a href="/api-docs/sell/metadata/resources/marketplace/methods/getMotorsListingPolicies"  target="_blank">getMotorsListingPolicies</a>.</span></p>
     * @param Get_classified_ad_policiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ClassifiedAdPolicyResponse|null>
     * @throws Exception
    */
    public function get(?Get_classified_ad_policiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ClassifiedAdPolicyResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method returns eBay classified ad policy metadata for all leaf categories on the specified marketplace.<p>By default, this method returns metadata on all leaf categories. You can limit the size of the result set by using the <b>filter</b> query parameter to specify only the leaf category IDs you want to review.</p><p>If you specify a valid marketplace ID but that marketplace does not contain policy information, or if you filter out all results, a successful call returns a <b>204 No content</b> status code with an empty response body.</p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This method does not support classified ads for eBay US Motors categories (EBAY_MOTORS_US). For eBay Motors Pro users, use <a href="/api-docs/sell/metadata/resources/marketplace/methods/getMotorsListingPolicies"  target="_blank">getMotorsListingPolicies</a>.</span></p>
     * @param Get_classified_ad_policiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Get_classified_ad_policiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Get_classified_ad_policiesRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_classified_ad_policiesRequestBuilder {
        return new Get_classified_ad_policiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
