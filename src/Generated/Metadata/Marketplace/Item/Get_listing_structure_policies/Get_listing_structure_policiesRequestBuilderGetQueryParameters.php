<?php

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_listing_structure_policies;

/**
 * This method returns the eBay policies that define the allowed listing structures for the categories of a specific marketplace. The listing-structure policies currently pertain to whether or not you can list items with variations.  <br><br>By default, this method returns the entire category tree for the specified marketplace. You can limit the size of the result set by using the <b>filter</b> query parameter to specify only the category IDs you want to review.<br><br><span class="tablenote"><span style="color:#478415"><strong>Tip:</strong></span> This method can potentially return a very large response payload. eBay recommends that the response payload be compressed by passing in the <b>Accept-Encoding</b> request header and setting the value to <code>gzip</code>.</span>
*/
class Get_listing_structure_policiesRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $filter This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree you want returned.  <br><br>When you specify a <b>categoryId</b> value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  <br><br><b>Example:</b> <code>filter=categoryIds:{100|101|102}</code>  <br><br>Note that you must URL-encode the parameter list, which results in the following filter for the above example: <br><br> &nbsp;&nbsp;<code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code>
    */
    public ?string $filter = null;
    
    /**
     * Instantiates a new Get_listing_structure_policiesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree you want returned.  <br><br>When you specify a <b>categoryId</b> value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  <br><br><b>Example:</b> <code>filter=categoryIds:{100|101|102}</code>  <br><br>Note that you must URL-encode the parameter list, which results in the following filter for the above example: <br><br> &nbsp;&nbsp;<code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code>
    */
    public function __construct(?string $filter = null) {
        $this->filter = $filter;
    }

}
