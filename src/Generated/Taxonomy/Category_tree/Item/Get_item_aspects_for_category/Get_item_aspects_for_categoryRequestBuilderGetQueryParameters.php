<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_item_aspects_for_category;

/**
 * This call returns a list of <i>aspects</i> that are appropriate or necessary for accurately describing items in the specified leaf category. Each aspect identifies an item attribute (for example, color,) for which the seller will be required or encouraged to provide a value (or variation values) when offering an item in that category on eBay.<br><br>For each aspect, <b>getItemAspectsForCategory</b> provides complete metadata, including: <ul><li>The aspect's data type, format, and entry mode</li><li>Whether the aspect is required in listings</li><li>Whether the aspect can be used for item variations</li><li>Whether the aspect accepts multiple values for an item</li><li>Allowed values for the aspect</li></ul> Use this information to construct an interface through which sellers can enter or select the appropriate values for their items or item variations. Once you collect those values, include them as product aspects when creating inventory items using the Inventory API.
*/
class Get_item_aspects_for_categoryRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("category_id")
     * @var string|null $categoryId The unique identifier of the leaf category for which aspects are being requested.<br><br><span class="tablenote"> <strong>Note:</strong> If the <b>category_id</b> submitted does not identify a leaf node of the tree, this call returns an error. </span>
    */
    public ?string $categoryId = null;
    
    /**
     * Instantiates a new Get_item_aspects_for_categoryRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $category_id The unique identifier of the leaf category for which aspects are being requested.<br><br><span class="tablenote"> <strong>Note:</strong> If the <b>category_id</b> submitted does not identify a leaf node of the tree, this call returns an error. </span>
    */
    public function __construct(?string $category_id = null) {
        $this->categoryId = $category_id;
    }

}
