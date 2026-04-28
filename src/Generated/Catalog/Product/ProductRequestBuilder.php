<?php

namespace EBay\ListingMetadata\Generated\Catalog\Product;

use EBay\ListingMetadata\Generated\Catalog\Product\Item\WithEpItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /product
*/
class ProductRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingMetadata/Generated/Catalog.product.item collection
     * @param string $epid The eBay product identifier (ePID) of the product being requested. This value can be discovered by issuing the <b>search</b> method and examining the value of the <b>productSummaries.epid</b> field for the desired returned product summary.
     * @return WithEpItemRequestBuilder
    */
    public function byEpid(string $epid): WithEpItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['epid'] = $epid;
        return new WithEpItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProductRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/product');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
