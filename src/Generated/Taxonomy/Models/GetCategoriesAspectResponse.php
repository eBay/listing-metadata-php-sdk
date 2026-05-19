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

class GetCategoriesAspectResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CategoryAspect>|null $categoryAspects An array of aspects that are appropriate or necessary for accurately describing items in a particular leaf category.
    */
    private ?array $categoryAspects = null;
    
    /**
     * @var string|null $categoryTreeId The unique identifier of the eBay category tree being requested.
    */
    private ?string $categoryTreeId = null;
    
    /**
     * @var string|null $categoryTreeVersion The version of the category tree that is returned in the <b>categoryTreeId</b> field.
    */
    private ?string $categoryTreeVersion = null;
    
    /**
     * Instantiates a new GetCategoriesAspectResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetCategoriesAspectResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetCategoriesAspectResponse {
        return new GetCategoriesAspectResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryAspects property value. An array of aspects that are appropriate or necessary for accurately describing items in a particular leaf category.
     * @return array<CategoryAspect>|null
    */
    public function getCategoryAspects(): ?array {
        return $this->categoryAspects;
    }

    /**
     * Gets the categoryTreeId property value. The unique identifier of the eBay category tree being requested.
     * @return string|null
    */
    public function getCategoryTreeId(): ?string {
        return $this->categoryTreeId;
    }

    /**
     * Gets the categoryTreeVersion property value. The version of the category tree that is returned in the <b>categoryTreeId</b> field.
     * @return string|null
    */
    public function getCategoryTreeVersion(): ?string {
        return $this->categoryTreeVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryAspects' => fn(ParseNode $n) => $o->setCategoryAspects($n->getCollectionOfObjectValues([CategoryAspect::class, 'createFromDiscriminatorValue'])),
            'categoryTreeId' => fn(ParseNode $n) => $o->setCategoryTreeId($n->getStringValue()),
            'categoryTreeVersion' => fn(ParseNode $n) => $o->setCategoryTreeVersion($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('categoryAspects', $this->getCategoryAspects());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeStringValue('categoryTreeVersion', $this->getCategoryTreeVersion());
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
     * Sets the categoryAspects property value. An array of aspects that are appropriate or necessary for accurately describing items in a particular leaf category.
     * @param array<CategoryAspect>|null $value Value to set for the categoryAspects property.
    */
    public function setCategoryAspects(?array $value): void {
        $this->categoryAspects = $value;
    }

    /**
     * Sets the categoryTreeId property value. The unique identifier of the eBay category tree being requested.
     * @param string|null $value Value to set for the categoryTreeId property.
    */
    public function setCategoryTreeId(?string $value): void {
        $this->categoryTreeId = $value;
    }

    /**
     * Sets the categoryTreeVersion property value. The version of the category tree that is returned in the <b>categoryTreeId</b> field.
     * @param string|null $value Value to set for the categoryTreeVersion property.
    */
    public function setCategoryTreeVersion(?string $value): void {
        $this->categoryTreeVersion = $value;
    }

}
