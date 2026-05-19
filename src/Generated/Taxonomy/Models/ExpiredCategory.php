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

namespace EBay\ListingMetadata\Generated\Taxonomy\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the expired category ID for the requested category tree, and the currently active category ID that has replaced it.
*/
class ExpiredCategory implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $fromCategoryId The unique identifier of the expired eBay leaf category.
    */
    private ?string $fromCategoryId = null;
    
    /**
     * @var string|null $toCategoryId The unique identifier of the currently active eBay leaf category that has replaced the expired leaf category.<br><br><span class="tablenote"><b>Note:</b> More than one <b>fromCategoryID</b> value may map into the same <b>toCategoryID</b> value, as multiple eBay categories may be consolidated into one new, expanded category.</span>
    */
    private ?string $toCategoryId = null;
    
    /**
     * Instantiates a new ExpiredCategory and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExpiredCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExpiredCategory {
        return new ExpiredCategory();
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
            'fromCategoryId' => fn(ParseNode $n) => $o->setFromCategoryId($n->getStringValue()),
            'toCategoryId' => fn(ParseNode $n) => $o->setToCategoryId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fromCategoryId property value. The unique identifier of the expired eBay leaf category.
     * @return string|null
    */
    public function getFromCategoryId(): ?string {
        return $this->fromCategoryId;
    }

    /**
     * Gets the toCategoryId property value. The unique identifier of the currently active eBay leaf category that has replaced the expired leaf category.<br><br><span class="tablenote"><b>Note:</b> More than one <b>fromCategoryID</b> value may map into the same <b>toCategoryID</b> value, as multiple eBay categories may be consolidated into one new, expanded category.</span>
     * @return string|null
    */
    public function getToCategoryId(): ?string {
        return $this->toCategoryId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fromCategoryId', $this->getFromCategoryId());
        $writer->writeStringValue('toCategoryId', $this->getToCategoryId());
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
     * Sets the fromCategoryId property value. The unique identifier of the expired eBay leaf category.
     * @param string|null $value Value to set for the fromCategoryId property.
    */
    public function setFromCategoryId(?string $value): void {
        $this->fromCategoryId = $value;
    }

    /**
     * Sets the toCategoryId property value. The unique identifier of the currently active eBay leaf category that has replaced the expired leaf category.<br><br><span class="tablenote"><b>Note:</b> More than one <b>fromCategoryID</b> value may map into the same <b>toCategoryID</b> value, as multiple eBay categories may be consolidated into one new, expanded category.</span>
     * @param string|null $value Value to set for the toCategoryId property.
    */
    public function setToCategoryId(?string $value): void {
        $this->toCategoryId = $value;
    }

}
