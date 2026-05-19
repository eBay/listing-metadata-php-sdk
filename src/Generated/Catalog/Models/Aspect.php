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

namespace EBay\ListingMetadata\Generated\Catalog\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type contains the name and values of a category aspect.
*/
class Aspect implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $localizedName The localized name of this category aspect.
    */
    private ?string $localizedName = null;
    
    /**
     * @var array<string>|null $localizedValues A list of the localized values of this category aspect.
    */
    private ?array $localizedValues = null;
    
    /**
     * Instantiates a new Aspect and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Aspect
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Aspect {
        return new Aspect();
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
            'localizedValues' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLocalizedValues($val);
            },
        ];
    }

    /**
     * Gets the localizedName property value. The localized name of this category aspect.
     * @return string|null
    */
    public function getLocalizedName(): ?string {
        return $this->localizedName;
    }

    /**
     * Gets the localizedValues property value. A list of the localized values of this category aspect.
     * @return array<string>|null
    */
    public function getLocalizedValues(): ?array {
        return $this->localizedValues;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('localizedName', $this->getLocalizedName());
        $writer->writeCollectionOfPrimitiveValues('localizedValues', $this->getLocalizedValues());
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
     * Sets the localizedName property value. The localized name of this category aspect.
     * @param string|null $value Value to set for the localizedName property.
    */
    public function setLocalizedName(?string $value): void {
        $this->localizedName = $value;
    }

    /**
     * Sets the localizedValues property value. A list of the localized values of this category aspect.
     * @param array<string>|null $value Value to set for the localizedValues property.
    */
    public function setLocalizedValues(?array $value): void {
        $this->localizedValues = $value;
    }

}
