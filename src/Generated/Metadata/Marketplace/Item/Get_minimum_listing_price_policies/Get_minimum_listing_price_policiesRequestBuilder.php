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

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_minimum_listing_price_policies;

use EBay\ListingMetadata\Generated\Metadata\Models\GetMinimumListingPricePoliciesResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /marketplace/{marketplace_id}/get_minimum_listing_price_policies
*/
class Get_minimum_listing_price_policiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_minimum_listing_price_policiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/marketplace/{marketplace_id}/get_minimum_listing_price_policies');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns minimum listing price policies for supported types of listings on a specific marketplace. This includes the minimum start price for auction listings, the minimum sale price for fixed-price listings, and the minimum percentage value that a Buy It Now or auction listing must be above the minimum start price for the same listing.<br><br><span class="tablenote"><b>Note:</b> The only applicable listing type values for this method are <code>AUCTION</code> and <code>FIXED_PRICE_ITEM</code>.</span><br>The identifier of the eBay marketplace for which to retrieve supported minimum listing price policies is passed through the <b>marketplace_id</b> path parameter.
     * @param Get_minimum_listing_price_policiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetMinimumListingPricePoliciesResponse|null>
     * @throws Exception
    */
    public function get(?Get_minimum_listing_price_policiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetMinimumListingPricePoliciesResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method returns minimum listing price policies for supported types of listings on a specific marketplace. This includes the minimum start price for auction listings, the minimum sale price for fixed-price listings, and the minimum percentage value that a Buy It Now or auction listing must be above the minimum start price for the same listing.<br><br><span class="tablenote"><b>Note:</b> The only applicable listing type values for this method are <code>AUCTION</code> and <code>FIXED_PRICE_ITEM</code>.</span><br>The identifier of the eBay marketplace for which to retrieve supported minimum listing price policies is passed through the <b>marketplace_id</b> path parameter.
     * @param Get_minimum_listing_price_policiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Get_minimum_listing_price_policiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Get_minimum_listing_price_policiesRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_minimum_listing_price_policiesRequestBuilder {
        return new Get_minimum_listing_price_policiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
