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
 * This type defines information about a category and the aspects used to describe items in that category.
*/
class CategoryAspect implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Aspect>|null $aspects A list of aspect metadata that is used to describe the items in a particular leaf category.
    */
    private ?array $aspects = null;
    
    /**
     * @var Category|null $category The details that are appropriate or necessary to accurately define the category.
    */
    private ?Category $category = null;
    
    /**
     * Instantiates a new CategoryAspect and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CategoryAspect
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CategoryAspect {
        return new CategoryAspect();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the aspects property value. A list of aspect metadata that is used to describe the items in a particular leaf category.
     * @return array<Aspect>|null
    */
    public function getAspects(): ?array {
        return $this->aspects;
    }

    /**
     * Gets the category property value. The details that are appropriate or necessary to accurately define the category.
     * @return Category|null
    */
    public function getCategory(): ?Category {
        return $this->category;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aspects' => fn(ParseNode $n) => $o->setAspects($n->getCollectionOfObjectValues([Aspect::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getObjectValue([Category::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('aspects', $this->getAspects());
        $writer->writeObjectValue('category', $this->getCategory());
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
     * Sets the aspects property value. A list of aspect metadata that is used to describe the items in a particular leaf category.
     * @param array<Aspect>|null $value Value to set for the aspects property.
    */
    public function setAspects(?array $value): void {
        $this->aspects = $value;
    }

    /**
     * Sets the category property value. The details that are appropriate or necessary to accurately define the category.
     * @param Category|null $value Value to set for the category property.
    */
    public function setCategory(?Category $value): void {
        $this->category = $value;
    }

}
