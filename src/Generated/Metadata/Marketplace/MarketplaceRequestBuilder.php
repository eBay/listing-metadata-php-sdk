<?php

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace;

use EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\WithMarketplace_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /marketplace
*/
class MarketplaceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingMetadata/Generated/Metadata.marketplace.item collection
     * @param string $marketplace_id This path parameter specifies the eBay marketplace for which policy information is retrieved.  <br><br><span class="tablenote"><b>Note: </b>Only the following eBay marketplaces support automotive parts compatibility: <ul> <li>EBAY_MOTORS_US</li> <li>EBAY_AU</li> <li>EBAY_CA</li> <li>EBAY_DE</li> <li>EBAY_ES</li> <li>EBAY_FR</li> <li>EBAY_GB</li> <li>EBAY_IT</li></ul></span>
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
        parent::__construct($requestAdapter, [], '{+baseurl}/marketplace');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
