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

namespace EBay\ListingMetadata\Generated\Metadata\Country\Item\Sales_tax_jurisdiction;

use EBay\ListingMetadata\Generated\Metadata\Models\SalesTaxJurisdictions;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /country/{countryCode}/sales_tax_jurisdiction
*/
class Sales_tax_jurisdictionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Sales_tax_jurisdictionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/country/{countryCode}/sales_tax_jurisdiction');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves all sales-tax jurisdictions for the country specified in the <b>countryCode</b> path parameter. Countries with valid sales-tax jurisdictions are Canada and the US.<br><br>The response from this call tells you the jurisdictions for which a seller can configure tax tables. Although setting up tax tables is optional, you can use the <b>createOrReplaceSalesTax</b> method in the <b>Account API</b> call to configure the tax tables for the jurisdictions into which you sell.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are only available for the US (EBAY_US) and Canada (EBAY_CA) marketplaces.</span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> In the US, eBay now calculates, collects, and remits sales tax to the proper taxing authorities in all 50 states and Washington, DC. Sellers can no longer specify sales-tax rates for these jurisdictions using a tax table.<br><br>However, sellers may continue to use a sales-tax table to set rates for the following US territories:<ul><li>American Samoa (AS)</li><li>Guam (GU)</li><li>Northern Mariana Islands (MP)</li><li>Palau (PW)</li><li>US Virgin Islands (VI)</li></ul>For additional information, refer to <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121 " target="_blank">Taxes and import charges</a>.</p></div>
     * @param Sales_tax_jurisdictionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SalesTaxJurisdictions|null>
     * @throws Exception
    */
    public function get(?Sales_tax_jurisdictionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [SalesTaxJurisdictions::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves all sales-tax jurisdictions for the country specified in the <b>countryCode</b> path parameter. Countries with valid sales-tax jurisdictions are Canada and the US.<br><br>The response from this call tells you the jurisdictions for which a seller can configure tax tables. Although setting up tax tables is optional, you can use the <b>createOrReplaceSalesTax</b> method in the <b>Account API</b> call to configure the tax tables for the jurisdictions into which you sell.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are only available for the US (EBAY_US) and Canada (EBAY_CA) marketplaces.</span><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> In the US, eBay now calculates, collects, and remits sales tax to the proper taxing authorities in all 50 states and Washington, DC. Sellers can no longer specify sales-tax rates for these jurisdictions using a tax table.<br><br>However, sellers may continue to use a sales-tax table to set rates for the following US territories:<ul><li>American Samoa (AS)</li><li>Guam (GU)</li><li>Northern Mariana Islands (MP)</li><li>Palau (PW)</li><li>US Virgin Islands (VI)</li></ul>For additional information, refer to <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121 " target="_blank">Taxes and import charges</a>.</p></div>
     * @param Sales_tax_jurisdictionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Sales_tax_jurisdictionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Sales_tax_jurisdictionRequestBuilder
    */
    public function withUrl(string $rawUrl): Sales_tax_jurisdictionRequestBuilder {
        return new Sales_tax_jurisdictionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
