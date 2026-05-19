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

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_subtree;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_category_subtreeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_category_subtreeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_category_subtreeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_category_subtreeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_category_subtreeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_category_subtreeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_category_subtreeRequestBuilderGetQueryParameters.
     * @param string|null $category_id The unique identifier of the category at the top of the subtree being requested. Metadata on this category and all its descendant categories are retrieved.<br><br><span class="tablenote"><strong>Note:</strong> If the <b>category_id</b> submitted identifies a leaf node of the tree, the call response will contain information about only that leaf node, which is a valid subtree.<!-- <br><br> This call also returns an error if <b>category_id</b> identifies a deprecated category. This can occur if you routinely cache your category trees. Use the <b>Get Deprecated Categories and Mapping</b> call to determine which current category should be used in place of the deprecated category, and use the <b>getCategoryTree</b> call to update your cached copy of the tree. --> </span>
     * @return Get_category_subtreeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $category_id = null): Get_category_subtreeRequestBuilderGetQueryParameters {
        return new Get_category_subtreeRequestBuilderGetQueryParameters($category_id);
    }

}
