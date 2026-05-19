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
 * This type provides applicable shipping carrier metadata for the marketplace.
*/
class ShippingCarrier implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description The localized description of the shipping carrier, such as <code>UPS</code>, <code>FedEx</code>, and <code>USPS</code>.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $shippingCarrier An enumerated value describing the shipping carrier returned, for example, <code>UPS</code>, <code>FedEx</code>, and <code>USPS</code>. These values are needed when providing shipment tracking information for each specific shipping carrier.
    */
    private ?string $shippingCarrier = null;
    
    /**
     * Instantiates a new ShippingCarrier and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingCarrier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingCarrier {
        return new ShippingCarrier();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The localized description of the shipping carrier, such as <code>UPS</code>, <code>FedEx</code>, and <code>USPS</code>.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'shippingCarrier' => fn(ParseNode $n) => $o->setShippingCarrier($n->getStringValue()),
        ];
    }

    /**
     * Gets the shippingCarrier property value. An enumerated value describing the shipping carrier returned, for example, <code>UPS</code>, <code>FedEx</code>, and <code>USPS</code>. These values are needed when providing shipment tracking information for each specific shipping carrier.
     * @return string|null
    */
    public function getShippingCarrier(): ?string {
        return $this->shippingCarrier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('shippingCarrier', $this->getShippingCarrier());
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
     * Sets the description property value. The localized description of the shipping carrier, such as <code>UPS</code>, <code>FedEx</code>, and <code>USPS</code>.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the shippingCarrier property value. An enumerated value describing the shipping carrier returned, for example, <code>UPS</code>, <code>FedEx</code>, and <code>USPS</code>. These values are needed when providing shipment tracking information for each specific shipping carrier.
     * @param string|null $value Value to set for the shippingCarrier property.
    */
    public function setShippingCarrier(?string $value): void {
        $this->shippingCarrier = $value;
    }

}
