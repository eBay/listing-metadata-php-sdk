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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type contains a list of the dependencies that identify when a particular value is available for a given aspect of a given category. Each dependency specifies the values of another aspect of the same category (the <i>control</i> aspect), for which the given value of the given aspect can also be selected by the seller. This container consists of constraint information for the corresponding product aspect value.
*/
class ValueConstraint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $applicableForLocalizedAspectName The name of the control aspect on which the current aspect value depends.
    */
    private ?string $applicableForLocalizedAspectName = null;
    
    /**
     * @var array<string>|null $applicableForLocalizedAspectValues Contains a list of the values of the control aspect on which this aspect's value depends. When the control aspect has any of the specified values, the current value of the current aspect will also be available.
    */
    private ?array $applicableForLocalizedAspectValues = null;
    
    /**
     * Instantiates a new ValueConstraint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValueConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValueConstraint {
        return new ValueConstraint();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the applicableForLocalizedAspectName property value. The name of the control aspect on which the current aspect value depends.
     * @return string|null
    */
    public function getApplicableForLocalizedAspectName(): ?string {
        return $this->applicableForLocalizedAspectName;
    }

    /**
     * Gets the applicableForLocalizedAspectValues property value. Contains a list of the values of the control aspect on which this aspect's value depends. When the control aspect has any of the specified values, the current value of the current aspect will also be available.
     * @return array<string>|null
    */
    public function getApplicableForLocalizedAspectValues(): ?array {
        return $this->applicableForLocalizedAspectValues;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicableForLocalizedAspectName' => fn(ParseNode $n) => $o->setApplicableForLocalizedAspectName($n->getStringValue()),
            'applicableForLocalizedAspectValues' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setApplicableForLocalizedAspectValues($val);
            },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicableForLocalizedAspectName', $this->getApplicableForLocalizedAspectName());
        $writer->writeCollectionOfPrimitiveValues('applicableForLocalizedAspectValues', $this->getApplicableForLocalizedAspectValues());
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
     * Sets the applicableForLocalizedAspectName property value. The name of the control aspect on which the current aspect value depends.
     * @param string|null $value Value to set for the applicableForLocalizedAspectName property.
    */
    public function setApplicableForLocalizedAspectName(?string $value): void {
        $this->applicableForLocalizedAspectName = $value;
    }

    /**
     * Sets the applicableForLocalizedAspectValues property value. Contains a list of the values of the control aspect on which this aspect's value depends. When the control aspect has any of the specified values, the current value of the current aspect will also be available.
     * @param array<string>|null $value Value to set for the applicableForLocalizedAspectValues property.
    */
    public function setApplicableForLocalizedAspectValues(?array $value): void {
        $this->applicableForLocalizedAspectValues = $value;
    }

}
