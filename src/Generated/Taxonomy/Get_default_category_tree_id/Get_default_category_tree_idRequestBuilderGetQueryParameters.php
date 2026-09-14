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

/**
 * A given eBay marketplace might use multiple category trees, but one of those trees is considered to be the default for that marketplace. This call retrieves a reference to the default category tree associated with the specified eBay marketplace ID. The response includes only the tree's unique identifier and version, which you can use to retrieve more details about the tree, its structure, and its individual category nodes.
*/
class Get_default_category_tree_idRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("marketplace_id")
     * @var string|null $marketplaceId The unique identifier of the eBay marketplace for which the category tree ID is requested. For a list of supported marketplace IDs, see <a href="/api-docs/commerce/taxonomy/static/supportedmarketplaces.html" target="_blank">Marketplaces with Default Category Trees</a>.
    */
    public ?string $marketplaceId = null;
    
    /**
     * Instantiates a new Get_default_category_tree_idRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $marketplace_id The unique identifier of the eBay marketplace for which the category tree ID is requested. For a list of supported marketplace IDs, see <a href="/api-docs/commerce/taxonomy/static/supportedmarketplaces.html" target="_blank">Marketplaces with Default Category Trees</a>.
    */
    public function __construct(?string $marketplace_id = null) {
        $this->marketplaceId = $marketplace_id;
    }

}
