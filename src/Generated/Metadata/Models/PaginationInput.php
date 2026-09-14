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

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Pagination is not yet supported by this method. If this container is included in the request, it will be ignored.</p></div>
*/
class PaginationInput implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $limit The max number of items, from the current result set, returned on a single page.<br><br><span class="tablenote"><b>Note:</b> For <b>getProductCompatibilities</b>, the max value is 100. If no <b>limit</b> is specified, this field defaults to the max value.</span>
    */
    private ?int $limit = null;
    
    /**
     * @var int|null $offset The number of items that will be skipped in the result set before returning the first item in the paginated response.<br><br>Combine <b>offset</b> with <b>limit</b> to control the items returned in the response. For example, if you supply an offset of 10 and a limit of 20, the first page of the response contains items 11-30 from the complete result set.<br><br><b>Default:</b> 0
    */
    private ?int $offset = null;
    
    /**
     * Instantiates a new PaginationInput and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaginationInput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaginationInput {
        return new PaginationInput();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the limit property value. The max number of items, from the current result set, returned on a single page.<br><br><span class="tablenote"><b>Note:</b> For <b>getProductCompatibilities</b>, the max value is 100. If no <b>limit</b> is specified, this field defaults to the max value.</span>
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the offset property value. The number of items that will be skipped in the result set before returning the first item in the paginated response.<br><br>Combine <b>offset</b> with <b>limit</b> to control the items returned in the response. For example, if you supply an offset of 10 and a limit of 20, the first page of the response contains items 11-30 from the complete result set.<br><br><b>Default:</b> 0
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the limit property value. The max number of items, from the current result set, returned on a single page.<br><br><span class="tablenote"><b>Note:</b> For <b>getProductCompatibilities</b>, the max value is 100. If no <b>limit</b> is specified, this field defaults to the max value.</span>
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the offset property value. The number of items that will be skipped in the result set before returning the first item in the paginated response.<br><br>Combine <b>offset</b> with <b>limit</b> to control the items returned in the response. For example, if you supply an offset of 10 and a limit of 20, the first page of the response contains items 11-30 from the complete result set.<br><br><b>Default:</b> 0
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

}
