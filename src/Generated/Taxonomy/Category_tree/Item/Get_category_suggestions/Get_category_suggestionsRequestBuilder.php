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

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_suggestions;

use EBay\ListingMetadata\Generated\Taxonomy\Models\CategorySuggestionResponse;
use EBay\ListingMetadata\Generated\Taxonomy\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /category_tree/{category_tree_id}/get_category_suggestions
*/
class Get_category_suggestionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_category_suggestionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/category_tree/{category_tree_id}/get_category_suggestions?q={q}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns an array of category tree leaf nodes in the specified category tree that are considered by eBay to most closely correspond to the query string <b>q</b>. Returned with each suggested node is a localized name for that category (based on the <b>Accept-Language</b> header specified for the call), and details about each of the category's ancestor nodes, extending from its immediate parent up to the root of the category tree.<br><br>You identify the tree using the <b>category_tree_id</b> parameter, which was returned by the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getdefaultcategorytreeid" >getDefaultCategoryTreeId</a> call in the <b>categoryTreeId</b> field.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv"><span class="autonumber"><b><span class="mcFormatColor">Important! </span></b></span> This call is not supported in the Sandbox environment. It will return a response payload in which the <b>categoryName</b> fields contain random or boilerplate text regardless of the query submitted.</span></p></div><br><span class="tablenote"><strong>Note:</strong> Category suggestions returned by this method are partially determined by live inventory data on the eBay platform. In cases where items with similar titles are miscategorized, this may influence the recommendations returned and cause a less accurate category to rank higher. Suggestions should be treated as recommendations rather than authoritative classifications.</span>
     * @param Get_category_suggestionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CategorySuggestionResponse|null>
     * @throws Exception
    */
    public function get(?Get_category_suggestionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CategorySuggestionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method returns an array of category tree leaf nodes in the specified category tree that are considered by eBay to most closely correspond to the query string <b>q</b>. Returned with each suggested node is a localized name for that category (based on the <b>Accept-Language</b> header specified for the call), and details about each of the category's ancestor nodes, extending from its immediate parent up to the root of the category tree.<br><br>You identify the tree using the <b>category_tree_id</b> parameter, which was returned by the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getdefaultcategorytreeid" >getDefaultCategoryTreeId</a> call in the <b>categoryTreeId</b> field.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv"><span class="autonumber"><b><span class="mcFormatColor">Important! </span></b></span> This call is not supported in the Sandbox environment. It will return a response payload in which the <b>categoryName</b> fields contain random or boilerplate text regardless of the query submitted.</span></p></div><br><span class="tablenote"><strong>Note:</strong> Category suggestions returned by this method are partially determined by live inventory data on the eBay platform. In cases where items with similar titles are miscategorized, this may influence the recommendations returned and cause a less accurate category to rank higher. Suggestions should be treated as recommendations rather than authoritative classifications.</span>
     * @param Get_category_suggestionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Get_category_suggestionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Get_category_suggestionsRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_category_suggestionsRequestBuilder {
        return new Get_category_suggestionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
