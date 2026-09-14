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

namespace EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace;

use EBay\ListingMetadata\Generated\Metadata\Shipping\Marketplace\Item\WithMarketplace_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /shipping/marketplace
*/
class MarketplaceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingMetadata/Generated/Metadata.shipping.marketplace.item collection
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which excluded shipping locations information is retrieved.<br><br>See <a href="/develop/api/sell/request_headers#marketplace-id-values" target="_blank">Marketplace ID values</a> for supported eBay marketplace ID values. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong> When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the <b>Accept-Language</b> header as needed.</span></p>
     * @return WithMarketplace_ItemRequestBuilder
    */
    public function byMarketplace_id(string $marketplace_id): WithMarketplace_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['marketplace_id'] = $marketplace_id;
        return new WithMarketplace_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MarketplaceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shipping/marketplace');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
