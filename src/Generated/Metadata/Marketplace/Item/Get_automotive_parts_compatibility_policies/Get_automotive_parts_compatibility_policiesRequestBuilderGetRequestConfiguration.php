<?php

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_automotive_parts_compatibility_policies;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_automotive_parts_compatibility_policiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_automotive_parts_compatibility_policiesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_automotive_parts_compatibility_policiesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_automotive_parts_compatibility_policiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_automotive_parts_compatibility_policiesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_automotive_parts_compatibility_policiesRequestBuilderGetQueryParameters.
     * @param string|null $filter This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree you want returned. Use the <a href="/api-docs/commerce/taxonomy/overview.html" target="_blank ">Taxonomy API</a> to retrieve category ID values.<br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  <br><br><b>Example:</b> <code>filter=categoryIds:{183521|183523|183524}</code>  <br><br><span class="tablenote"><b>Note: </b>URL-encoding of the parameter list is no longer required.</span>
     * @return Get_automotive_parts_compatibility_policiesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null): Get_automotive_parts_compatibility_policiesRequestBuilderGetQueryParameters {
        return new Get_automotive_parts_compatibility_policiesRequestBuilderGetQueryParameters($filter);
    }

}
