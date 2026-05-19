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
 * This type contains the kind of distance and radius of the selling area for Local Market Vehicle listings.
*/
class LocalListingDistance implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<int>|null $distances This array indicates the radius (in miles) of the selling area for Local Market Vehicle listings.
    */
    private ?array $distances = null;
    
    /**
     * @var string|null $distanceType This enumerated value indicates the type of local listing distances, such as non-subscription or regular, for items listed by sellers. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:DistanceType'>eBay API documentation</a>
    */
    private ?string $distanceType = null;
    
    /**
     * Instantiates a new LocalListingDistance and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocalListingDistance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocalListingDistance {
        return new LocalListingDistance();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the distances property value. This array indicates the radius (in miles) of the selling area for Local Market Vehicle listings.
     * @return array<int>|null
    */
    public function getDistances(): ?array {
        return $this->distances;
    }

    /**
     * Gets the distanceType property value. This enumerated value indicates the type of local listing distances, such as non-subscription or regular, for items listed by sellers. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:DistanceType'>eBay API documentation</a>
     * @return string|null
    */
    public function getDistanceType(): ?string {
        return $this->distanceType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'distances' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'int');
                }
                /** @var array<int>|null $val */
                $this->setDistances($val);
            },
            'distanceType' => fn(ParseNode $n) => $o->setDistanceType($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('distances', $this->getDistances());
        $writer->writeStringValue('distanceType', $this->getDistanceType());
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
     * Sets the distances property value. This array indicates the radius (in miles) of the selling area for Local Market Vehicle listings.
     * @param array<int>|null $value Value to set for the distances property.
    */
    public function setDistances(?array $value): void {
        $this->distances = $value;
    }

    /**
     * Sets the distanceType property value. This enumerated value indicates the type of local listing distances, such as non-subscription or regular, for items listed by sellers. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:DistanceType'>eBay API documentation</a>
     * @param string|null $value Value to set for the distanceType property.
    */
    public function setDistanceType(?string $value): void {
        $this->distanceType = $value;
    }

}
