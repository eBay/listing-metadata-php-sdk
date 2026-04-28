<?php

namespace EBay\ListingMetadata\Generated\Metadata\Country\Item;

use EBay\ListingMetadata\Generated\Metadata\Country\Item\Sales_tax_jurisdiction\Sales_tax_jurisdictionRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /country/{countryCode}
*/
class WithCountryCodeItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The sales_tax_jurisdiction property
    */
    public function sales_tax_jurisdiction(): Sales_tax_jurisdictionRequestBuilder {
        return new Sales_tax_jurisdictionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithCountryCodeItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/country/{countryCode}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
