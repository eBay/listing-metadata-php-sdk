<?php

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_regulatory_policies;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_regulatory_policiesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_regulatory_policiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_regulatory_policiesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_regulatory_policiesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_regulatory_policiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_regulatory_policiesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_regulatory_policiesRequestBuilderGetQueryParameters.
     * @param string|null $filter A query parameter that can be used to limit the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree that should be returned.<br><br>Pass in the <b>categoryId</b> values using a URL-encoded, pipe-separated ('|') list. For example: <br><br><code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code><br><br><b>Maximum:</b> 50
     * @return Get_regulatory_policiesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null): Get_regulatory_policiesRequestBuilderGetQueryParameters {
        return new Get_regulatory_policiesRequestBuilderGetQueryParameters($filter);
    }

}
