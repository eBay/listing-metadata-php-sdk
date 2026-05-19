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

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_properties;

/**
 * This call retrieves the compatible vehicle aspects that are used to define a motor vehicle that is compatible with a motor vehicle part or accessory. The values that are retrieved here might include motor vehicle aspects such as 'Make', 'Model', 'Year', 'Engine', and 'Trim', and each of these aspects are localized for the eBay marketplace.<br><br> The <strong>category_tree_id</strong> value is passed in as a path parameter, and this value identifies the eBay category tree. The <strong>category_id</strong> value is passed in as a query parameter, as this parameter is also required. The specified category must be a category that supports parts compatibility.<br><br> At this time, this operation only supports parts and accessories listings for cars, trucks, and motorcycles (not boats, power sports, or any other vehicle types). Only the following eBay marketplaces support parts compatibility:<ul><li>eBay US (Motors and non-Motors categories)</li><li>eBay Canada (Motors and non-Motors categories)</li><li>eBay UK</li><li>eBay Germany</li><li>eBay Australia</li><li>eBay France</li><li>eBay Italy</li><li>eBay Spain</li></ul>
*/
class Get_compatibility_propertiesRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("category_id")
     * @var string|null $categoryId The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.<br><br> The <b>getAutomotivePartsCompatibilityPolicies</b> method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that support parts compatibility for vehicles.
    */
    public ?string $categoryId = null;
    
    /**
     * Instantiates a new Get_compatibility_propertiesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $category_id The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.<br><br> The <b>getAutomotivePartsCompatibilityPolicies</b> method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that support parts compatibility for vehicles.
    */
    public function __construct(?string $category_id = null) {
        $this->categoryId = $category_id;
    }

}
