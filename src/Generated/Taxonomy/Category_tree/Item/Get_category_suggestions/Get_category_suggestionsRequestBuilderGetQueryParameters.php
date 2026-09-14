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

/**
 * This method returns an array of category tree leaf nodes in the specified category tree that are considered by eBay to most closely correspond to the query string <b>q</b>. Returned with each suggested node is a localized name for that category (based on the <b>Accept-Language</b> header specified for the call), and details about each of the category's ancestor nodes, extending from its immediate parent up to the root of the category tree.<br><br>You identify the tree using the <b>category_tree_id</b> parameter, which was returned by the <a href="/develop/api/sell/taxonomy_api#sell-taxonomy_api-category_tree-getdefaultcategorytreeid" >getDefaultCategoryTreeId</a> call in the <b>categoryTreeId</b> field.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv"><span class="autonumber"><b><span class="mcFormatColor">Important! </span></b></span> This call is not supported in the Sandbox environment. It will return a response payload in which the <b>categoryName</b> fields contain random or boilerplate text regardless of the query submitted.</span></p></div><br><span class="tablenote"><strong>Note:</strong> Category suggestions returned by this method are partially determined by live inventory data on the eBay platform. In cases where items with similar titles are miscategorized, this may influence the recommendations returned and cause a less accurate category to rank higher. Suggestions should be treated as recommendations rather than authoritative classifications.</span>
*/
class Get_category_suggestionsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $q A quoted string that describes or characterizes the item being offered for sale. The string format is free form, and can contain any combination of phrases or keywords. eBay will parse the string and return suggested categories for the item.
    */
    public ?string $q = null;
    
    /**
     * Instantiates a new Get_category_suggestionsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $q A quoted string that describes or characterizes the item being offered for sale. The string format is free form, and can contain any combination of phrases or keywords. eBay will parse the string and return suggested categories for the item.
    */
    public function __construct(?string $q = null) {
        $this->q = $q;
    }

}
