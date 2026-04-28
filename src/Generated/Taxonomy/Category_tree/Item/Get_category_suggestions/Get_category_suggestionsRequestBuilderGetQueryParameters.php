<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_suggestions;

/**
 * This call returns an array of category tree leaf nodes in the specified category tree that are considered by eBay to most closely correspond to the query string <b>q</b>. Returned with each suggested node is a localized name for that category (based on the <b>Accept-Language</b> header specified for the call), and details about each of the category's ancestor nodes, extending from its immediate parent up to the root of the category tree.<br><br>You identify the tree using the <b>category_tree_id</b> parameter, which was returned by the <b>getDefaultCategoryTreeId</b> call in the <b>categoryTreeId</b> field.<br><br><span class="tablenote"> <strong><span style="color:red">Important:</span></strong> This call is not supported in the Sandbox environment. It will return a response payload in which the <b>categoryName</b> fields contain random or boilerplate text regardless of the query submitted.</span>
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
