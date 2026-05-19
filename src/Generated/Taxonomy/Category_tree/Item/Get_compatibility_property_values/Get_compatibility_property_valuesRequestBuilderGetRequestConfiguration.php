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

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\Get_compatibility_property_values;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_compatibility_property_valuesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_compatibility_property_valuesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_compatibility_property_valuesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_compatibility_property_valuesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_compatibility_property_valuesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_compatibility_property_valuesRequestBuilderGetQueryParameters.
     * @param string|null $category_id The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.<br><br> The <strong>getAutomotivePartsCompatibilityPolicies</strong> method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that support parts compatibility for vehicles.
     * @param string|null $compatibility_property One compatible vehicle property applicable to the specified eBay marketplace and eBay category is specified in this required filter. Compatible vehicle properties are returned in the <strong>compatibilityProperties.name</strong> field of a <strong>getCompatibilityProperties</strong> response. <br><br> For example, if you wanted to retrieve all vehicle trims for a 2018 Toyota Camry, you would set this filter as follows: <code>compatibility_property=Trim</code> and then include the following three name/value filters through one <strong>filter</strong> parameter: <code>filter=Year:2018,Make:Toyota,Model:Camry</code>.<br><br>So, putting this all together, the URI would look something like this:<br><br><pre><code>GET https://api.ebay.com/commerce/<br>taxonomy/v1/category_tree/100/<br>get_compatibility_property_values?<br><strong>category_id</strong>=6016&<strong>compatibility_property</strong>=Trim<br>&<strong>filter</strong>=Year:2018,Make:Toyota,Model:Camry</code></pre>
     * @param string|null $filter One or more compatible vehicle property name/value pairs are passed in through this query parameter. The compatible vehicle property name and corresponding value are delimited with a colon (:), such as <code>filter=Year:2018</code>, and multiple compatible vehicle property name/value pairs are delimited with a comma (,).<br><br><span class="tablenote"><b>Note:</b> Commas are used as delimiters between filter values. If a value includes a comma (e.g., <code>BodyStyle:AWD B9 8W5<b>,</b>C8WD</code>) you <b>must</b> include a backslash (<b>/</b>) immediately before the comma to prevent it from being evaluated as a delimiter.<br><br>As with all query parameter values, the filter parameters must be URL encoded. For more information about encoding request parameters, refer to <a href="/api-docs/static/rest-request-components.html#parameters" target="_blank">URL encoding query parameter values</a>.</span><br>For example, to retrieve all vehicle trims for a 2022 Audi A4:<ul><li>Set the <strong>compatibility_property</strong> filter to <code>compatibility_property=Trim</code></li><li>Include the following name/value filters using one <strong>filter</strong> parameter:<ul><li><code>Year:2022</code></li><li><code>Make:Audi</code></li><li><code>Model:A4</code></li><li><code>BodyStyle:AWD B9 8W5/,8WD</code></li></ul></li></ul>The resulting comma-separated filter query parameter is:<pre><code>filter=Year:2022,Make:Audi,Model:A4,BodyStyle:AWD B9 8W5/,8WD</code></pre><br>The following sample shows the same filter but with URL encoding for the blank spaces.<br><pre><code>GET https://api.ebay.com/commerce/<br>taxonomy/v1/category_tree/100/<br>get_compatibility_property_values?<b>category_id</b>=6016&<b>compatibility_property</b>=Trim&<b>filter</b>=Year:2022,Make:Audi,Model:A4,BodyStyle:AWD%20B9%208W5%5C%2C8WD</code></pre><br><span class="tablenote"><b>Note:</b> While not required, it is strongly recommended that users limit the size of the result set by using the <b>filter</b> query parameter. Failure to do so may result in a timeout error if too much data is attempted to be returned.</span> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ConstraintFilter
     * @return Get_compatibility_property_valuesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $category_id = null, ?string $compatibility_property = null, ?string $filter = null): Get_compatibility_property_valuesRequestBuilderGetQueryParameters {
        return new Get_compatibility_property_valuesRequestBuilderGetQueryParameters($category_id, $compatibility_property, $filter);
    }

}
