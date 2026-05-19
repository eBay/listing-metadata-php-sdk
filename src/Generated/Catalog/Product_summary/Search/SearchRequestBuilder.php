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

namespace EBay\ListingMetadata\Generated\Catalog\Product_summary\Search;

use EBay\ListingMetadata\Generated\Catalog\Models\ProductSearchResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /product_summary/search
*/
class SearchRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SearchRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/product_summary/search{?aspect_filter*,category_ids*,fieldgroups*,gtin*,limit*,mpn*,offset*,q*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method searches for and retrieves summaries of one or more products in the eBay catalog that match the search criteria provided by a seller. The seller can use the summaries to select the product in the eBay catalog that corresponds to the item that the seller wants to offer for sale. When a corresponding product is found and adopted by the seller, eBay will use the product information to populate the item listing. The criteria supported by <b>search</b> include keywords, product categories, and category aspects. To see the full details of a selected product, use the <b>getProduct</b> call. <br /><br /> In addition to product summaries, this method can also be used to identify <i>refinements</i>, which help you to better pinpoint the product you're looking for. A refinement consists of one or more <i>aspect</i> values and a count of the number of times that each value has been used in previous eBay listings. An aspect is a property (e.g. color or size) of an eBay category, used by sellers to provide details about the items they're listing. The <b>refinement</b> container is returned when you include the <b>fieldGroups</b> query parameter in the request with a value of <code>ASPECT_REFINEMENTS</code> or <code>FULL</code>. <br /><br /> <span style="padding: 15px 20px; display: block; border: 1px solid #cccccc"><b>Example</b> <br />A seller wants to find a product that is "gray" in color, but doesn't know what term the manufacturer uses for that color. It might be <code>Silver</code>, <code>Brushed Nickel</code>, <code>Pewter</code>, or even <code>Grey</code>. The returned <b>refinement</b> container identifies all aspects that have been used in past listings for products that match your search criteria, along with all of the values those aspects have taken, and the number of times each value was used. You can use this data to present the seller with a histogram of the values of each aspect. The seller can see which color values have been used in the past, and how frequently they have been used, and selects the most likely value or values for their product. You issue the <b>search</b> method again with those values in the <b>aspect_filter</b> parameter to narrow down the collection of products returned by the call.</span> <br /><br /> Although all query parameters are optional, this method must include at least the <b>q</b> parameter, or the <b>category_ids</b>, <b>gtin</b>, or <b>mpn</b> parameter with a valid value. If you provide more than one of these parameters, they will be combined with a logical AND to further refine the returned collection of matching products. <br /><br /> <span class="tablenote"><strong>Note:</strong> This method requires that certain special characters in the query parameters be percent-encoded: <br /><br /> &nbsp;&nbsp;&nbsp;&nbsp;<code>(space)</code> = <code>%20</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>,</code> = <code>%2C</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>:</code> = <code>%3A</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>[</code> = <code>%5B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>]</code> = <code>%5D</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>{</code> = <code>%7B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>|</code> = <code>%7C</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>}</code> = <code>%7D</code> <br /><br /> This requirement applies to all query parameter values. However, for readability, method examples and samples in this documentation will not use the encoding.</span> <br /><br /> This method returns product summaries rather than the full details of the products. To retrieve the full details of a product, use the <b>getProduct</b> method with an ePID.
     * @param SearchRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProductSearchResponse|null>
     * @throws Exception
    */
    public function get(?SearchRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ProductSearchResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method searches for and retrieves summaries of one or more products in the eBay catalog that match the search criteria provided by a seller. The seller can use the summaries to select the product in the eBay catalog that corresponds to the item that the seller wants to offer for sale. When a corresponding product is found and adopted by the seller, eBay will use the product information to populate the item listing. The criteria supported by <b>search</b> include keywords, product categories, and category aspects. To see the full details of a selected product, use the <b>getProduct</b> call. <br /><br /> In addition to product summaries, this method can also be used to identify <i>refinements</i>, which help you to better pinpoint the product you're looking for. A refinement consists of one or more <i>aspect</i> values and a count of the number of times that each value has been used in previous eBay listings. An aspect is a property (e.g. color or size) of an eBay category, used by sellers to provide details about the items they're listing. The <b>refinement</b> container is returned when you include the <b>fieldGroups</b> query parameter in the request with a value of <code>ASPECT_REFINEMENTS</code> or <code>FULL</code>. <br /><br /> <span style="padding: 15px 20px; display: block; border: 1px solid #cccccc"><b>Example</b> <br />A seller wants to find a product that is "gray" in color, but doesn't know what term the manufacturer uses for that color. It might be <code>Silver</code>, <code>Brushed Nickel</code>, <code>Pewter</code>, or even <code>Grey</code>. The returned <b>refinement</b> container identifies all aspects that have been used in past listings for products that match your search criteria, along with all of the values those aspects have taken, and the number of times each value was used. You can use this data to present the seller with a histogram of the values of each aspect. The seller can see which color values have been used in the past, and how frequently they have been used, and selects the most likely value or values for their product. You issue the <b>search</b> method again with those values in the <b>aspect_filter</b> parameter to narrow down the collection of products returned by the call.</span> <br /><br /> Although all query parameters are optional, this method must include at least the <b>q</b> parameter, or the <b>category_ids</b>, <b>gtin</b>, or <b>mpn</b> parameter with a valid value. If you provide more than one of these parameters, they will be combined with a logical AND to further refine the returned collection of matching products. <br /><br /> <span class="tablenote"><strong>Note:</strong> This method requires that certain special characters in the query parameters be percent-encoded: <br /><br /> &nbsp;&nbsp;&nbsp;&nbsp;<code>(space)</code> = <code>%20</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>,</code> = <code>%2C</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>:</code> = <code>%3A</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>[</code> = <code>%5B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>]</code> = <code>%5D</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>{</code> = <code>%7B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>|</code> = <code>%7C</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>}</code> = <code>%7D</code> <br /><br /> This requirement applies to all query parameter values. However, for readability, method examples and samples in this documentation will not use the encoding.</span> <br /><br /> This method returns product summaries rather than the full details of the products. To retrieve the full details of a product, use the <b>getProduct</b> method with an ePID.
     * @param SearchRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SearchRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SearchRequestBuilder
    */
    public function withUrl(string $rawUrl): SearchRequestBuilder {
        return new SearchRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
