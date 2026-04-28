<?php

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_classified_ad_policies;

/**
 * This method returns eBay classified ad policy metadata for all leaf categories on the specified marketplace.<p>By default, this method returns metadata on all leaf categories. You can limit the size of the result set by using the <b>filter</b> query parameter to specify only the leaf category IDs you want to review.</p><p>If you specify a valid marketplace ID but that marketplace does not contain policy information, or if you filter out all results, a successful call returns a <b>204 No content</b> status code with an empty response body.</p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This method does not support classified ads for eBay US Motors categories (EBAY_MOTORS_US). For eBay Motors Pro users, use <a href="/api-docs/sell/metadata/resources/marketplace/methods/getMotorsListingPolicies"  target="_blank">getMotorsListingPolicies</a>.</span></p>
*/
class Get_classified_ad_policiesRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $filter This query parameter limits the response by only returning metadata for the specified leaf categories. Supply the <b>categoryId</b> for one or more leaf categories. You can verify if a category is a leaf category by using the <a href="/api-docs/commerce/taxonomy/overview.html" target="_blank ">Taxonomy API</a> and looking for a <code>"leafCategory": true</code> tag.   <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.<br><br><b>Example:</b><code>filter=categoryIds:{3767|171784}</code>
    */
    public ?string $filter = null;
    
    /**
     * Instantiates a new Get_classified_ad_policiesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter This query parameter limits the response by only returning metadata for the specified leaf categories. Supply the <b>categoryId</b> for one or more leaf categories. You can verify if a category is a leaf category by using the <a href="/api-docs/commerce/taxonomy/overview.html" target="_blank ">Taxonomy API</a> and looking for a <code>"leafCategory": true</code> tag.   <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.<br><br><b>Example:</b><code>filter=categoryIds:{3767|171784}</code>
    */
    public function __construct(?string $filter = null) {
        $this->filter = $filter;
    }

}
