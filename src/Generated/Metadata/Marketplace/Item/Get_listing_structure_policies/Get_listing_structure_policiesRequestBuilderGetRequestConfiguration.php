<?php

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_listing_structure_policies;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_listing_structure_policiesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_listing_structure_policiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_listing_structure_policiesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_listing_structure_policiesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_listing_structure_policiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_listing_structure_policiesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_listing_structure_policiesRequestBuilderGetQueryParameters.
     * @param string|null $filter This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree you want returned.  <br><br>When you specify a <b>categoryId</b> value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  <br><br><b>Example:</b> <code>filter=categoryIds:{100|101|102}</code>  <br><br>Note that you must URL-encode the parameter list, which results in the following filter for the above example: <br><br> &nbsp;&nbsp;<code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code>
     * @return Get_listing_structure_policiesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null): Get_listing_structure_policiesRequestBuilderGetQueryParameters {
        return new Get_listing_structure_policiesRequestBuilderGetQueryParameters($filter);
    }

}
