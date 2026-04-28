<?php

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
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which excluded shipping locations information is retrieved.<br><br>See <a href="/api-docs/sell/metadata/types/bas:MarketplaceIdEnum" target="_blank">MarketplaceIdEnum</a> for supported eBay marketplace ID values. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong> When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the <b>Accept-Language</b> header as needed.</span></p>
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
