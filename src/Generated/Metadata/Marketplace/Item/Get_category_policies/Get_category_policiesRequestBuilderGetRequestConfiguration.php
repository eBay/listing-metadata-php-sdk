<?php

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_category_policies;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_category_policiesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_category_policiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_category_policiesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_category_policiesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_category_policiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_category_policiesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_category_policiesRequestBuilderGetQueryParameters.
     * @param string|null $filter This query parameter limits the response by only returning metadata for the specified leaf categories. Supply the <b>categoryId</b> for one or more leaf categories. You can verify if a category is a leaf category by using the <a href="/api-docs/commerce/taxonomy/overview.html" target="_blank ">Taxonomy API</a> and looking for a <code>"leafCategory": true</code> tag.  <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.<br><br><b>Example:</b> <code>filter=categoryIds:{3767|171784}</code>
     * @return Get_category_policiesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null): Get_category_policiesRequestBuilderGetQueryParameters {
        return new Get_category_policiesRequestBuilderGetQueryParameters($filter);
    }

}
