<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_item_aspects_for_category;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_item_aspects_for_categoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_item_aspects_for_categoryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_item_aspects_for_categoryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_item_aspects_for_categoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_item_aspects_for_categoryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_item_aspects_for_categoryRequestBuilderGetQueryParameters.
     * @param string|null $category_id The unique identifier of the leaf category for which aspects are being requested.<br><br><span class="tablenote"> <strong>Note:</strong> If the <b>category_id</b> submitted does not identify a leaf node of the tree, this call returns an error. </span>
     * @return Get_item_aspects_for_categoryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $category_id = null): Get_item_aspects_for_categoryRequestBuilderGetQueryParameters {
        return new Get_item_aspects_for_categoryRequestBuilderGetQueryParameters($category_id);
    }

}
