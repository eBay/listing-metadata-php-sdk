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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type shows the constraints on a condition descriptor value, such as any associated condition descriptor ID and condition descriptor value IDs required for a listing.
*/
class ItemConditionDescriptorValueConstraint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $applicableToConditionDescriptorId This string is returned if the corresponding condition descriptor value requires an associated condition descriptor that must also be specified in a listing. The condition descriptor ID for the associated condition descriptors is returned here.
    */
    private ?string $applicableToConditionDescriptorId = null;
    
    /**
     * @var array<string>|null $applicableToConditionDescriptorValueIds This array is returned if the corresponding condition descriptor value is required for one or more associated condition descriptor values that must also be specified in a listing. The condition descriptor values IDs for the associated condition descriptor values are returned here.
    */
    private ?array $applicableToConditionDescriptorValueIds = null;
    
    /**
     * Instantiates a new ItemConditionDescriptorValueConstraint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemConditionDescriptorValueConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemConditionDescriptorValueConstraint {
        return new ItemConditionDescriptorValueConstraint();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the applicableToConditionDescriptorId property value. This string is returned if the corresponding condition descriptor value requires an associated condition descriptor that must also be specified in a listing. The condition descriptor ID for the associated condition descriptors is returned here.
     * @return string|null
    */
    public function getApplicableToConditionDescriptorId(): ?string {
        return $this->applicableToConditionDescriptorId;
    }

    /**
     * Gets the applicableToConditionDescriptorValueIds property value. This array is returned if the corresponding condition descriptor value is required for one or more associated condition descriptor values that must also be specified in a listing. The condition descriptor values IDs for the associated condition descriptor values are returned here.
     * @return array<string>|null
    */
    public function getApplicableToConditionDescriptorValueIds(): ?array {
        return $this->applicableToConditionDescriptorValueIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicableToConditionDescriptorId' => fn(ParseNode $n) => $o->setApplicableToConditionDescriptorId($n->getStringValue()),
            'applicableToConditionDescriptorValueIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setApplicableToConditionDescriptorValueIds($val);
            },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicableToConditionDescriptorId', $this->getApplicableToConditionDescriptorId());
        $writer->writeCollectionOfPrimitiveValues('applicableToConditionDescriptorValueIds', $this->getApplicableToConditionDescriptorValueIds());
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
     * Sets the applicableToConditionDescriptorId property value. This string is returned if the corresponding condition descriptor value requires an associated condition descriptor that must also be specified in a listing. The condition descriptor ID for the associated condition descriptors is returned here.
     * @param string|null $value Value to set for the applicableToConditionDescriptorId property.
    */
    public function setApplicableToConditionDescriptorId(?string $value): void {
        $this->applicableToConditionDescriptorId = $value;
    }

    /**
     * Sets the applicableToConditionDescriptorValueIds property value. This array is returned if the corresponding condition descriptor value is required for one or more associated condition descriptor values that must also be specified in a listing. The condition descriptor values IDs for the associated condition descriptor values are returned here.
     * @param array<string>|null $value Value to set for the applicableToConditionDescriptorValueIds property.
    */
    public function setApplicableToConditionDescriptorValueIds(?array $value): void {
        $this->applicableToConditionDescriptorValueIds = $value;
    }

}
