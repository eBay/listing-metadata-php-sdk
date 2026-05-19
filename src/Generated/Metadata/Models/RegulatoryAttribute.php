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
 * A type that defines the attributes of a regulatory policy.
*/
class RegulatoryAttribute implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $name A unique value identifying a specific regulatory attribute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:RegulatoryAttributeEnum'>eBay API documentation</a>
    */
    private ?string $name = null;
    
    /**
     * @var string|null $usage The enumeration value in this field indicates whether the corresponding attribute is recommended or required for the corresponding leaf category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:GenericUsageEnum'>eBay API documentation</a>
    */
    private ?string $usage = null;
    
    /**
     * Instantiates a new RegulatoryAttribute and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegulatoryAttribute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegulatoryAttribute {
        return new RegulatoryAttribute();
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
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. A unique value identifying a specific regulatory attribute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:RegulatoryAttributeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the usage property value. The enumeration value in this field indicates whether the corresponding attribute is recommended or required for the corresponding leaf category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:GenericUsageEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getUsage(): ?string {
        return $this->usage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('usage', $this->getUsage());
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
     * Sets the name property value. A unique value identifying a specific regulatory attribute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:RegulatoryAttributeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the usage property value. The enumeration value in this field indicates whether the corresponding attribute is recommended or required for the corresponding leaf category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:GenericUsageEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the usage property.
    */
    public function setUsage(?string $value): void {
        $this->usage = $value;
    }

}
