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

namespace EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\Get_shipping_carriers;

use EBay\ListingMetadata\Generated\Metadata\Models\ShippingCarrierResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /shipping/marketplace/{marketplace_id}/get_shipping_carriers
*/
class Get_shipping_carriersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_shipping_carriersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shipping/marketplace/{marketplace_id}/get_shipping_carriers');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves a list of supported shipping carriers for the specified marketplace. It provides essential information for sellers to understand which shipping carriers are available for use when listing items on that eBay marketplace. Knowing the supported carriers can help sellers optimize their shipping options and ensure efficient delivery to buyers.<p>The value returned in the <b>shippingCarrier</b> field is the enumerated value required when providing shipment tracking information for that carrier.</p><p><span class="tablenote"><span style="color:#004680"><strong>Tip: </strong> Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices">getShippingServices</a> method to explore available shipping services for each carrier.</span></p><p>Manage shipping carriers using business policies through the <b>fulfillment_policy</b> resource of the <b>Account v1 API</b>.</p>
     * @param Get_shipping_carriersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ShippingCarrierResponse|null>
     * @throws Exception
    */
    public function get(?Get_shipping_carriersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ShippingCarrierResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves a list of supported shipping carriers for the specified marketplace. It provides essential information for sellers to understand which shipping carriers are available for use when listing items on that eBay marketplace. Knowing the supported carriers can help sellers optimize their shipping options and ensure efficient delivery to buyers.<p>The value returned in the <b>shippingCarrier</b> field is the enumerated value required when providing shipment tracking information for that carrier.</p><p><span class="tablenote"><span style="color:#004680"><strong>Tip: </strong> Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices">getShippingServices</a> method to explore available shipping services for each carrier.</span></p><p>Manage shipping carriers using business policies through the <b>fulfillment_policy</b> resource of the <b>Account v1 API</b>.</p>
     * @param Get_shipping_carriersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Get_shipping_carriersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Get_shipping_carriersRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_shipping_carriersRequestBuilder {
        return new Get_shipping_carriersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
