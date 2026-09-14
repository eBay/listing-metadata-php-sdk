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
 * This type identifies the kind of listing and its duration periods.
*/
class ListingDuration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<DurationEnum>|null $durationValues This array defines the supported time duration options available for the listing type.
    */
    private ?array $durationValues = null;
    
    /**
     * @var ListingTypeEnum|null $listingType The enumerated value returned in this field indicates the listing type for the duration value(s).
    */
    private ?ListingTypeEnum $listingType = null;
    
    /**
     * Instantiates a new ListingDuration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListingDuration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListingDuration {
        return new ListingDuration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the durationValues property value. This array defines the supported time duration options available for the listing type.
     * @return array<DurationEnum>|null
    */
    public function getDurationValues(): ?array {
        return $this->durationValues;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'durationValues' => fn(ParseNode $n) => $o->setDurationValues($n->getCollectionOfEnumValues(DurationEnum::class)),
            'listingType' => fn(ParseNode $n) => $o->setListingType($n->getEnumValue(ListingTypeEnum::class)),
        ];
    }

    /**
     * Gets the listingType property value. The enumerated value returned in this field indicates the listing type for the duration value(s).
     * @return ListingTypeEnum|null
    */
    public function getListingType(): ?ListingTypeEnum {
        return $this->listingType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('durationValues', $this->getDurationValues());
        $writer->writeEnumValue('listingType', $this->getListingType());
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
     * Sets the durationValues property value. This array defines the supported time duration options available for the listing type.
     * @param array<DurationEnum>|null $value Value to set for the durationValues property.
    */
    public function setDurationValues(?array $value): void {
        $this->durationValues = $value;
    }

    /**
     * Sets the listingType property value. The enumerated value returned in this field indicates the listing type for the duration value(s).
     * @param ListingTypeEnum|null $value Value to set for the listingType property.
    */
    public function setListingType(?ListingTypeEnum $value): void {
        $this->listingType = $value;
    }

}
