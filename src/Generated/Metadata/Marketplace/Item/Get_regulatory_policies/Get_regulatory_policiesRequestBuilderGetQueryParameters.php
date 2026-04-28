<?php

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_regulatory_policies;

/**
 * This method returns regulatory policies for one, multiple, or all eBay categories in an eBay marketplace. The identifier of the eBay marketplace is passed in as a path parameter, and unless one or more eBay category IDs are passed in through the filter query parameter, this method will return metadata for every listing category in the specified marketplace.</p><p><span class="tablenote"><span style="color:#478415"><strong>Tip:</strong></span> This method can potentially return a very large response payload. eBay recommends that the response payload be compressed by passing in the <b>Accept-Encoding</b> request header and setting the value to <code>gzip</code>.</span></p>
*/
class Get_regulatory_policiesRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $filter A query parameter that can be used to limit the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree that should be returned.<br><br>Pass in the <b>categoryId</b> values using a URL-encoded, pipe-separated ('|') list. For example: <br><br><code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code><br><br><b>Maximum:</b> 50
    */
    public ?string $filter = null;
    
    /**
     * Instantiates a new Get_regulatory_policiesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter A query parameter that can be used to limit the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree that should be returned.<br><br>Pass in the <b>categoryId</b> values using a URL-encoded, pipe-separated ('|') list. For example: <br><br><code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code><br><br><b>Maximum:</b> 50
    */
    public function __construct(?string $filter = null) {
        $this->filter = $filter;
    }

}
