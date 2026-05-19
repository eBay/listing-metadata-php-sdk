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
 * This type is used by the <strong>compatibilityProperties</strong> array that is returned in the <strong>getCompatibilityProperties</strong> call. The <strong>compatibilityProperties</strong> container consists of an array of all compatible vehicle properties applicable to the specified eBay marketplace and eBay category ID.
*/
class CompatibilityProperty implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $localizedName This is the localized name of the compatible vehicle property. The language that is used will depend on the user making the call, or based on the language specified if the <strong>Content-Language</strong> HTTP header is used.<br><br>In some instances, the string value in this field may be the same as the string in the corresponding <strong>name</strong> field.
    */
    private ?string $localizedName = null;
    
    /**
     * @var string|null $name This is the actual name of the compatible vehicle property as it is known on the specified eBay marketplace and in the eBay category. This is the string value that should be used in the <strong>compatibility_property</strong> and <strong>filter</strong> query parameters of a <strong>getCompatibilityPropertyValues</strong> request URI. <br><br> Typical vehicle properties are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new CompatibilityProperty and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompatibilityProperty
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompatibilityProperty {
        return new CompatibilityProperty();
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
            'localizedName' => fn(ParseNode $n) => $o->setLocalizedName($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the localizedName property value. This is the localized name of the compatible vehicle property. The language that is used will depend on the user making the call, or based on the language specified if the <strong>Content-Language</strong> HTTP header is used.<br><br>In some instances, the string value in this field may be the same as the string in the corresponding <strong>name</strong> field.
     * @return string|null
    */
    public function getLocalizedName(): ?string {
        return $this->localizedName;
    }

    /**
     * Gets the name property value. This is the actual name of the compatible vehicle property as it is known on the specified eBay marketplace and in the eBay category. This is the string value that should be used in the <strong>compatibility_property</strong> and <strong>filter</strong> query parameters of a <strong>getCompatibilityPropertyValues</strong> request URI. <br><br> Typical vehicle properties are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('localizedName', $this->getLocalizedName());
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the localizedName property value. This is the localized name of the compatible vehicle property. The language that is used will depend on the user making the call, or based on the language specified if the <strong>Content-Language</strong> HTTP header is used.<br><br>In some instances, the string value in this field may be the same as the string in the corresponding <strong>name</strong> field.
     * @param string|null $value Value to set for the localizedName property.
    */
    public function setLocalizedName(?string $value): void {
        $this->localizedName = $value;
    }

    /**
     * Sets the name property value. This is the actual name of the compatible vehicle property as it is known on the specified eBay marketplace and in the eBay category. This is the string value that should be used in the <strong>compatibility_property</strong> and <strong>filter</strong> query parameters of a <strong>getCompatibilityPropertyValues</strong> request URI. <br><br> Typical vehicle properties are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
