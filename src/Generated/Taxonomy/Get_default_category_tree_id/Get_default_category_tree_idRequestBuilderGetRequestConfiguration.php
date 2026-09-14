<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\ListingMetadata\Generated\Taxonomy\Get_default_category_tree_id;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_default_category_tree_idRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_default_category_tree_idRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_default_category_tree_idRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_default_category_tree_idRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_default_category_tree_idRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_default_category_tree_idRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_default_category_tree_idRequestBuilderGetQueryParameters.
     * @param string|null $marketplace_id The unique identifier of the eBay marketplace for which the category tree ID is requested. For a list of supported marketplace IDs, see <a href="/api-docs/commerce/taxonomy/static/supportedmarketplaces.html" target="_blank">Marketplaces with Default Category Trees</a>.
     * @return Get_default_category_tree_idRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $marketplace_id = null): Get_default_category_tree_idRequestBuilderGetQueryParameters {
        return new Get_default_category_tree_idRequestBuilderGetQueryParameters($marketplace_id);
    }

}
