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

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_item_aspects_for_category;

use EBay\ListingMetadata\Generated\Taxonomy\Models\AspectMetadata;
use EBay\ListingMetadata\Generated\Taxonomy\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /category_tree/{category_tree_id}/get_item_aspects_for_category
*/
class Get_item_aspects_for_categoryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_item_aspects_for_categoryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/category_tree/{category_tree_id}/get_item_aspects_for_category?category_id={category_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns a list of <i>aspects</i> that are appropriate or necessary for accurately describing items in the specified leaf category. Each aspect identifies an item attribute (for example, color,) for which the seller will be required or encouraged to provide a value (or variation values) when offering an item in that category on eBay.<br><br>For each aspect, this method provides complete metadata, including: <ul><li>The aspect's data type, format, and entry mode</li><li>Whether the aspect is required in listings</li><li>Whether the aspect can be used for item variations</li><li>Whether the aspect accepts multiple values for an item</li><li>Allowed values for the aspect</li></ul> Use this information to construct an interface through which sellers can enter or select the appropriate values for their items or item variations. Once you collect those values, include them as product aspects when creating inventory items using the Inventory API.
     * @param Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AspectMetadata|null>
     * @throws Exception
    */
    public function get(?Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AspectMetadata::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method returns a list of <i>aspects</i> that are appropriate or necessary for accurately describing items in the specified leaf category. Each aspect identifies an item attribute (for example, color,) for which the seller will be required or encouraged to provide a value (or variation values) when offering an item in that category on eBay.<br><br>For each aspect, this method provides complete metadata, including: <ul><li>The aspect's data type, format, and entry mode</li><li>Whether the aspect is required in listings</li><li>Whether the aspect can be used for item variations</li><li>Whether the aspect accepts multiple values for an item</li><li>Allowed values for the aspect</li></ul> Use this information to construct an interface through which sellers can enter or select the appropriate values for their items or item variations. Once you collect those values, include them as product aspects when creating inventory items using the Inventory API.
     * @param Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Get_item_aspects_for_categoryRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_item_aspects_for_categoryRequestBuilder {
        return new Get_item_aspects_for_categoryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
