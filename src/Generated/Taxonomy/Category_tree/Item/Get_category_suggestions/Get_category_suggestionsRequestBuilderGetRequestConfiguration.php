<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_category_suggestions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_category_suggestionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_category_suggestionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_category_suggestionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_category_suggestionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_category_suggestionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_category_suggestionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_category_suggestionsRequestBuilderGetQueryParameters.
     * @param string|null $q A quoted string that describes or characterizes the item being offered for sale. The string format is free form, and can contain any combination of phrases or keywords. eBay will parse the string and return suggested categories for the item.
     * @return Get_category_suggestionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $q = null): Get_category_suggestionsRequestBuilderGetQueryParameters {
        return new Get_category_suggestionsRequestBuilderGetQueryParameters($q);
    }

}
