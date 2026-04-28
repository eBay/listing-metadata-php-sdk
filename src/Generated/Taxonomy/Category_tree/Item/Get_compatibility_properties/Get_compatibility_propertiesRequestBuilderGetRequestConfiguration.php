<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_properties;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_compatibility_propertiesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_compatibility_propertiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_compatibility_propertiesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_compatibility_propertiesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_compatibility_propertiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_compatibility_propertiesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_compatibility_propertiesRequestBuilderGetQueryParameters.
     * @param string|null $category_id The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.<br><br> The <b>getAutomotivePartsCompatibilityPolicies</b> method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that support parts compatibility for vehicles.
     * @return Get_compatibility_propertiesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $category_id = null): Get_compatibility_propertiesRequestBuilderGetQueryParameters {
        return new Get_compatibility_propertiesRequestBuilderGetQueryParameters($category_id);
    }

}
