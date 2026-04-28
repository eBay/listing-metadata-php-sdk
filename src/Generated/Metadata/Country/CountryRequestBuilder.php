<?php

namespace EBay\ListingMetadata\Generated\Metadata\Country;

use EBay\ListingMetadata\Generated\Metadata\Country\Item\WithCountryCodeItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /country
*/
class CountryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingMetadata/Generated/Metadata.country.item collection
     * @param string $countryCode This path parameter specifies the two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> country code for the country whose jurisdictions you want to retrieve.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:<ul><li><code>US</code></li><li><code>CA</code></li></ul></span>
     * @return WithCountryCodeItemRequestBuilder
    */
    public function byCountryCode(string $countryCode): WithCountryCodeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['countryCode'] = $countryCode;
        return new WithCountryCodeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CountryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/country');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
