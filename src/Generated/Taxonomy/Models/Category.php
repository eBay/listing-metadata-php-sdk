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
 * This type contains information about a particular eBay category.
*/
class Category implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryId The unique identifier of the eBay category within its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of a full default category tree includes the <b>categoryId</b> field, but its value should not be relied upon. It provides no useful information for application development. </span>
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryName The name of the category identified by <b>categoryId</b>.
    */
    private ?string $categoryName = null;
    
    /**
     * Instantiates a new Category and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Category
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Category {
        return new Category();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryId property value. The unique identifier of the eBay category within its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of a full default category tree includes the <b>categoryId</b> field, but its value should not be relied upon. It provides no useful information for application development. </span>
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the categoryName property value. The name of the category identified by <b>categoryId</b>.
     * @return string|null
    */
    public function getCategoryName(): ?string {
        return $this->categoryName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'categoryName' => fn(ParseNode $n) => $o->setCategoryName($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryName', $this->getCategoryName());
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
     * Sets the categoryId property value. The unique identifier of the eBay category within its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of a full default category tree includes the <b>categoryId</b> field, but its value should not be relied upon. It provides no useful information for application development. </span>
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the categoryName property value. The name of the category identified by <b>categoryId</b>.
     * @param string|null $value Value to set for the categoryName property.
    */
    public function setCategoryName(?string $value): void {
        $this->categoryName = $value;
    }

}
