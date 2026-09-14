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
 * This type contains applicable shipping policy metadata for the leaf categories returned for the marketplace.
*/
class ShippingPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryId The unique identifier of the eBay leaf category for which metadata is being returned.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryTreeId The unique identifier of the category tree.
    */
    private ?string $categoryTreeId = null;
    
    /**
     * @var bool|null $globalShippingEnabled Indicates if the Global Shipping Program (GSP) is supported for the category.
    */
    private ?bool $globalShippingEnabled = null;
    
    /**
     * @var Amount|null $group1MaxFlatShippingCost Returns the applicable max cap per shipping cost for shipping service group1.
    */
    private ?Amount $group1MaxFlatShippingCost = null;
    
    /**
     * @var Amount|null $group2MaxFlatShippingCost Returns the applicable max cap per shipping cost for shipping service group2.
    */
    private ?Amount $group2MaxFlatShippingCost = null;
    
    /**
     * @var Amount|null $group3MaxFlatShippingCost Returns the applicable max cap per shipping cost for shipping service group3.
    */
    private ?Amount $group3MaxFlatShippingCost = null;
    
    /**
     * @var bool|null $handlingTimeEnabled Indicates if a seller's stated handling time is enabled for a category. A handling time is generally needed for items that are shipped to the buyer, but not necessarily applicable to freight shipping or local pickup.
    */
    private ?bool $handlingTimeEnabled = null;
    
    /**
     * @var Amount|null $maxFlatShippingCost The maximum cost the seller can charge for the first domestic flat-rate shipping service. Mutually exclusive with the GroupNMaxFlatShippingCost elements.
    */
    private ?Amount $maxFlatShippingCost = null;
    
    /**
     * @var bool|null $shippingTermsRequired Indicates whether the category requires sellers to specify shipping details at listing time.
    */
    private ?bool $shippingTermsRequired = null;
    
    /**
     * Instantiates a new ShippingPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingPolicy {
        return new ShippingPolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryId property value. The unique identifier of the eBay leaf category for which metadata is being returned.
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the categoryTreeId property value. The unique identifier of the category tree.
     * @return string|null
    */
    public function getCategoryTreeId(): ?string {
        return $this->categoryTreeId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'categoryTreeId' => fn(ParseNode $n) => $o->setCategoryTreeId($n->getStringValue()),
            'globalShippingEnabled' => fn(ParseNode $n) => $o->setGlobalShippingEnabled($n->getBooleanValue()),
            'group1MaxFlatShippingCost' => fn(ParseNode $n) => $o->setGroup1MaxFlatShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'group2MaxFlatShippingCost' => fn(ParseNode $n) => $o->setGroup2MaxFlatShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'group3MaxFlatShippingCost' => fn(ParseNode $n) => $o->setGroup3MaxFlatShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'handlingTimeEnabled' => fn(ParseNode $n) => $o->setHandlingTimeEnabled($n->getBooleanValue()),
            'maxFlatShippingCost' => fn(ParseNode $n) => $o->setMaxFlatShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingTermsRequired' => fn(ParseNode $n) => $o->setShippingTermsRequired($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the globalShippingEnabled property value. Indicates if the Global Shipping Program (GSP) is supported for the category.
     * @return bool|null
    */
    public function getGlobalShippingEnabled(): ?bool {
        return $this->globalShippingEnabled;
    }

    /**
     * Gets the group1MaxFlatShippingCost property value. Returns the applicable max cap per shipping cost for shipping service group1.
     * @return Amount|null
    */
    public function getGroup1MaxFlatShippingCost(): ?Amount {
        return $this->group1MaxFlatShippingCost;
    }

    /**
     * Gets the group2MaxFlatShippingCost property value. Returns the applicable max cap per shipping cost for shipping service group2.
     * @return Amount|null
    */
    public function getGroup2MaxFlatShippingCost(): ?Amount {
        return $this->group2MaxFlatShippingCost;
    }

    /**
     * Gets the group3MaxFlatShippingCost property value. Returns the applicable max cap per shipping cost for shipping service group3.
     * @return Amount|null
    */
    public function getGroup3MaxFlatShippingCost(): ?Amount {
        return $this->group3MaxFlatShippingCost;
    }

    /**
     * Gets the handlingTimeEnabled property value. Indicates if a seller's stated handling time is enabled for a category. A handling time is generally needed for items that are shipped to the buyer, but not necessarily applicable to freight shipping or local pickup.
     * @return bool|null
    */
    public function getHandlingTimeEnabled(): ?bool {
        return $this->handlingTimeEnabled;
    }

    /**
     * Gets the maxFlatShippingCost property value. The maximum cost the seller can charge for the first domestic flat-rate shipping service. Mutually exclusive with the GroupNMaxFlatShippingCost elements.
     * @return Amount|null
    */
    public function getMaxFlatShippingCost(): ?Amount {
        return $this->maxFlatShippingCost;
    }

    /**
     * Gets the shippingTermsRequired property value. Indicates whether the category requires sellers to specify shipping details at listing time.
     * @return bool|null
    */
    public function getShippingTermsRequired(): ?bool {
        return $this->shippingTermsRequired;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeBooleanValue('globalShippingEnabled', $this->getGlobalShippingEnabled());
        $writer->writeObjectValue('group1MaxFlatShippingCost', $this->getGroup1MaxFlatShippingCost());
        $writer->writeObjectValue('group2MaxFlatShippingCost', $this->getGroup2MaxFlatShippingCost());
        $writer->writeObjectValue('group3MaxFlatShippingCost', $this->getGroup3MaxFlatShippingCost());
        $writer->writeBooleanValue('handlingTimeEnabled', $this->getHandlingTimeEnabled());
        $writer->writeObjectValue('maxFlatShippingCost', $this->getMaxFlatShippingCost());
        $writer->writeBooleanValue('shippingTermsRequired', $this->getShippingTermsRequired());
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
     * Sets the categoryId property value. The unique identifier of the eBay leaf category for which metadata is being returned.
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the categoryTreeId property value. The unique identifier of the category tree.
     * @param string|null $value Value to set for the categoryTreeId property.
    */
    public function setCategoryTreeId(?string $value): void {
        $this->categoryTreeId = $value;
    }

    /**
     * Sets the globalShippingEnabled property value. Indicates if the Global Shipping Program (GSP) is supported for the category.
     * @param bool|null $value Value to set for the globalShippingEnabled property.
    */
    public function setGlobalShippingEnabled(?bool $value): void {
        $this->globalShippingEnabled = $value;
    }

    /**
     * Sets the group1MaxFlatShippingCost property value. Returns the applicable max cap per shipping cost for shipping service group1.
     * @param Amount|null $value Value to set for the group1MaxFlatShippingCost property.
    */
    public function setGroup1MaxFlatShippingCost(?Amount $value): void {
        $this->group1MaxFlatShippingCost = $value;
    }

    /**
     * Sets the group2MaxFlatShippingCost property value. Returns the applicable max cap per shipping cost for shipping service group2.
     * @param Amount|null $value Value to set for the group2MaxFlatShippingCost property.
    */
    public function setGroup2MaxFlatShippingCost(?Amount $value): void {
        $this->group2MaxFlatShippingCost = $value;
    }

    /**
     * Sets the group3MaxFlatShippingCost property value. Returns the applicable max cap per shipping cost for shipping service group3.
     * @param Amount|null $value Value to set for the group3MaxFlatShippingCost property.
    */
    public function setGroup3MaxFlatShippingCost(?Amount $value): void {
        $this->group3MaxFlatShippingCost = $value;
    }

    /**
     * Sets the handlingTimeEnabled property value. Indicates if a seller's stated handling time is enabled for a category. A handling time is generally needed for items that are shipped to the buyer, but not necessarily applicable to freight shipping or local pickup.
     * @param bool|null $value Value to set for the handlingTimeEnabled property.
    */
    public function setHandlingTimeEnabled(?bool $value): void {
        $this->handlingTimeEnabled = $value;
    }

    /**
     * Sets the maxFlatShippingCost property value. The maximum cost the seller can charge for the first domestic flat-rate shipping service. Mutually exclusive with the GroupNMaxFlatShippingCost elements.
     * @param Amount|null $value Value to set for the maxFlatShippingCost property.
    */
    public function setMaxFlatShippingCost(?Amount $value): void {
        $this->maxFlatShippingCost = $value;
    }

    /**
     * Sets the shippingTermsRequired property value. Indicates whether the category requires sellers to specify shipping details at listing time.
     * @param bool|null $value Value to set for the shippingTermsRequired property.
    */
    public function setShippingTermsRequired(?bool $value): void {
        $this->shippingTermsRequired = $value;
    }

}
