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

/**
 * This method retrieves the details of all nodes of the category tree hierarchy (the subtree) below a specified category of a category tree. You identify the tree using the <b>category_tree_id</b> parameter, which was returned by the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getdefaultcategorytreeid" >getDefaultCategoryTreeId</a> call in the <b>categoryTreeId</b> field.<br><br><span class="tablenote"> <strong>Note:</strong> This method can return a very large payload, so gzip compression is supported. To enable gzip compression, include the <code>Accept-Encoding</code> header and set its value to <code>gzip</code> as shown below: <br><br><code>Accept-Encoding: gzip</code></span>
*/
class Get_category_subtreeRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("category_id")
     * @var string|null $categoryId The unique identifier of the category at the top of the subtree being requested. Metadata on this category and all its descendant categories are retrieved.<br><br><span class="tablenote"><strong>Note:</strong> If the <b>category_id</b> submitted identifies a leaf node of the tree, the call response will contain information about only that leaf node, which is a valid subtree.<!-- <br><br> This call also returns an error if <b>category_id</b> identifies a deprecated category. This can occur if you routinely cache your category trees. Use the <b>Get Deprecated Categories and Mapping</b> call to determine which current category should be used in place of the deprecated category, and use the <b>getCategoryTree</b> call to update your cached copy of the tree. --> </span>
    */
    public ?string $categoryId = null;
    
    /**
     * Instantiates a new Get_category_subtreeRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $category_id The unique identifier of the category at the top of the subtree being requested. Metadata on this category and all its descendant categories are retrieved.<br><br><span class="tablenote"><strong>Note:</strong> If the <b>category_id</b> submitted identifies a leaf node of the tree, the call response will contain information about only that leaf node, which is a valid subtree.<!-- <br><br> This call also returns an error if <b>category_id</b> identifies a deprecated category. This can occur if you routinely cache your category trees. Use the <b>Get Deprecated Categories and Mapping</b> call to determine which current category should be used in place of the deprecated category, and use the <b>getCategoryTree</b> call to update your cached copy of the tree. --> </span>
    */
    public function __construct(?string $category_id = null) {
        $this->categoryId = $category_id;
    }

}
