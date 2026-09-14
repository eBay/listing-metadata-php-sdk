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

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item;

use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Fetch_item_aspects\Fetch_item_aspectsRequestBuilder;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_subtree\Get_category_subtreeRequestBuilder;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_suggestions\Get_category_suggestionsRequestBuilder;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_properties\Get_compatibility_propertiesRequestBuilder;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_property_values\Get_compatibility_property_valuesRequestBuilder;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_expired_categories\Get_expired_categoriesRequestBuilder;
use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_item_aspects_for_category\Get_item_aspects_for_categoryRequestBuilder;
use EBay\ListingMetadata\Generated\Taxonomy\Models\CategoryTree;
use EBay\ListingMetadata\Generated\Taxonomy\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /category_tree/{category_tree_id}
*/
class WithCategory_tree_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The fetch_item_aspects property
    */
    public function fetch_item_aspects(): Fetch_item_aspectsRequestBuilder {
        return new Fetch_item_aspectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_category_subtree property
    */
    public function get_category_subtree(): Get_category_subtreeRequestBuilder {
        return new Get_category_subtreeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_category_suggestions property
    */
    public function get_category_suggestions(): Get_category_suggestionsRequestBuilder {
        return new Get_category_suggestionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_compatibility_properties property
    */
    public function get_compatibility_properties(): Get_compatibility_propertiesRequestBuilder {
        return new Get_compatibility_propertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_compatibility_property_values property
    */
    public function get_compatibility_property_values(): Get_compatibility_property_valuesRequestBuilder {
        return new Get_compatibility_property_valuesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_expired_categories property
    */
    public function get_expired_categories(): Get_expired_categoriesRequestBuilder {
        return new Get_expired_categoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_item_aspects_for_category property
    */
    public function get_item_aspects_for_category(): Get_item_aspects_for_categoryRequestBuilder {
        return new Get_item_aspects_for_categoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithCategory_tree_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/category_tree/{category_tree_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves the complete category tree that is identified by the <b>category_tree_id</b> parameter. The value of <b>category_tree_id</b> was returned by the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getdefaultcategorytreeid" >getDefaultCategoryTreeId</a> method in the <b>categoryTreeId</b> field. The response contains details of all nodes of the specified eBay category tree, as well as the eBay marketplaces that use this category tree.<br><br><span class="tablenote"> <strong>Note:</strong> This method can return a very large payload, so gzip compression is supported. To enable gzip compression, include the <code>Accept-Encoding</code> header and set its value to <code>gzip</code> as shown below: <br><br><code>Accept-Encoding: gzip</code></span>
     * @param WithCategory_tree_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CategoryTree|null>
     * @throws Exception
    */
    public function get(?WithCategory_tree_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CategoryTree::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method retrieves the complete category tree that is identified by the <b>category_tree_id</b> parameter. The value of <b>category_tree_id</b> was returned by the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getdefaultcategorytreeid" >getDefaultCategoryTreeId</a> method in the <b>categoryTreeId</b> field. The response contains details of all nodes of the specified eBay category tree, as well as the eBay marketplaces that use this category tree.<br><br><span class="tablenote"> <strong>Note:</strong> This method can return a very large payload, so gzip compression is supported. To enable gzip compression, include the <code>Accept-Encoding</code> header and set its value to <code>gzip</code> as shown below: <br><br><code>Accept-Encoding: gzip</code></span>
     * @param WithCategory_tree_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithCategory_tree_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithCategory_tree_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithCategory_tree_ItemRequestBuilder {
        return new WithCategory_tree_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
