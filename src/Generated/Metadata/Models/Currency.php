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
 * The type defining valid currencies for the marketplace.
*/
class Currency implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $code The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code returned.  <br /><br /><b>Restriction: </b> Only the currency of the marketplace is supported. Examples: on the US marketplace, the only currency supported is the United States dollar, <code>USD</code>; on the Canadian marketplace, the only currency supported is the Canadian dollar, <code>CAD</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/bas:CurrencyCodeEnum'>eBay API documentation</a>
    */
    private ?string $code = null;
    
    /**
     * @var string|null $description The description of the returned three-letter code. For example, if the code is <code>USD</code>, the description returned would be <code>US Dollar</code>.
    */
    private ?string $description = null;
    
    /**
     * Instantiates a new Currency and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Currency
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Currency {
        return new Currency();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the code property value. The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code returned.  <br /><br /><b>Restriction: </b> Only the currency of the marketplace is supported. Examples: on the US marketplace, the only currency supported is the United States dollar, <code>USD</code>; on the Canadian marketplace, the only currency supported is the Canadian dollar, <code>CAD</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/bas:CurrencyCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the description property value. The description of the returned three-letter code. For example, if the code is <code>USD</code>, the description returned would be <code>US Dollar</code>.
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
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeStringValue('description', $this->getDescription());
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
     * Sets the code property value. The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code returned.  <br /><br /><b>Restriction: </b> Only the currency of the marketplace is supported. Examples: on the US marketplace, the only currency supported is the United States dollar, <code>USD</code>; on the Canadian marketplace, the only currency supported is the Canadian dollar, <code>CAD</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/bas:CurrencyCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->code = $value;
    }

    /**
     * Sets the description property value. The description of the returned three-letter code. For example, if the code is <code>USD</code>, the description returned would be <code>US Dollar</code>.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

}
