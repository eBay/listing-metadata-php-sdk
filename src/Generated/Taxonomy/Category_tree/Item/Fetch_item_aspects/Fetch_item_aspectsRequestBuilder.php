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

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Fetch_item_aspects;

use EBay\ListingMetadata\Generated\Taxonomy\Models\Error;
use EBay\ListingMetadata\Generated\Taxonomy\Models\GetCategoriesAspectResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /category_tree/{category_tree_id}/fetch_item_aspects
*/
class Fetch_item_aspectsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Fetch_item_aspectsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/category_tree/{category_tree_id}/fetch_item_aspects');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns a complete list of aspects for all of the leaf categories that belong to an eBay marketplace. The eBay marketplace is specified through the <b>category_tree_id</b> URI parameter.<br><br><span class="tablenote"> <strong>Note:</strong> A successful call returns a payload as a gzipped JSON file sent as a binary file using the content-type:application/octet-stream in the response. This file may be large (over 100 MB, compressed). Extract the JSON file from the compressed file with a utility that handles .gz or .gzip. The open source <a href="https://github.com/eBay/taxonomy-sdk " target="_blank">Taxonomy SDK</a> can be used to compare the aspect metadata that is returned in this response. The <b>Taxonomy SDK</b> uses this call to surface changes (new, modified, and removed entities) between an updated version of a bulk downloaded file relative to a previous version.</span>
     * @param Fetch_item_aspectsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetCategoriesAspectResponse|null>
     * @throws Exception
    */
    public function get(?Fetch_item_aspectsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetCategoriesAspectResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method returns a complete list of aspects for all of the leaf categories that belong to an eBay marketplace. The eBay marketplace is specified through the <b>category_tree_id</b> URI parameter.<br><br><span class="tablenote"> <strong>Note:</strong> A successful call returns a payload as a gzipped JSON file sent as a binary file using the content-type:application/octet-stream in the response. This file may be large (over 100 MB, compressed). Extract the JSON file from the compressed file with a utility that handles .gz or .gzip. The open source <a href="https://github.com/eBay/taxonomy-sdk " target="_blank">Taxonomy SDK</a> can be used to compare the aspect metadata that is returned in this response. The <b>Taxonomy SDK</b> uses this call to surface changes (new, modified, and removed entities) between an updated version of a bulk downloaded file relative to a previous version.</span>
     * @param Fetch_item_aspectsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Fetch_item_aspectsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Fetch_item_aspectsRequestBuilder
    */
    public function withUrl(string $rawUrl): Fetch_item_aspectsRequestBuilder {
        return new Fetch_item_aspectsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
