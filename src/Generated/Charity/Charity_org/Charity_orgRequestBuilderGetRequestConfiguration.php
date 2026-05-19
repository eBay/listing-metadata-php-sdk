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

namespace EBay\ListingMetadata\Generated\Charity\Charity_org;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Charity_orgRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Charity_orgRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Charity_orgRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Charity_orgRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Charity_orgRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Charity_orgRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Charity_orgRequestBuilderGetQueryParameters.
     * @param string|null $limit The number of items, from the result set, returned in a single page.<br /><br /><b>Valid Values:</b> <code>1-100</code><br /><br /><b>Default:</b> <code>20</code>
     * @param string|null $offset The number of items that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.<br /><br /><b>Valid Values:</b> <code>0-10,000</code><br /><br /><b>Default:</b> <code>0</code>
     * @param string|null $q A query string that matches the keywords in name, mission statement, or description.
     * @param string|null $registration_ids A comma-separated list of charitable organization registration IDs.<br /><br /><span class="tablenote"><b>Note: </b>Do not specify this parameter for query-based searches. Specify either the <b>q</b> or <b>registration_ids</b> parameter, but not both.</span><br /><br /><b>Maximum Limit:</b> <code>20</code>
     * @return Charity_orgRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $limit = null, ?string $offset = null, ?string $q = null, ?string $registration_ids = null): Charity_orgRequestBuilderGetQueryParameters {
        return new Charity_orgRequestBuilderGetQueryParameters($limit, $offset, $q, $registration_ids);
    }

}
