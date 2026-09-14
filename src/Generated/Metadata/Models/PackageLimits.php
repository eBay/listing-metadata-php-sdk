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
 * The packageLimits field is used to specify the physical constraints and measurement units of packages, ensuring compliance with various shipping requirements.
*/
class PackageLimits implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $dimensionUnit Unit of dimensional measurement, for example <code>INCH</code> or <code>CENTIMETER</code>. 
    */
    private ?string $dimensionUnit = null;
    
    /**
     * @var float|null $maxGirth The maximum girth allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
    */
    private ?float $maxGirth = null;
    
    /**
     * @var float|null $maxHeight The maximum height allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
    */
    private ?float $maxHeight = null;
    
    /**
     * @var float|null $maxLength The maximum length allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
    */
    private ?float $maxLength = null;
    
    /**
     * @var float|null $maxWeight The maximum weight allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.weightunit">weightUnit</a>.
    */
    private ?float $maxWeight = null;
    
    /**
     * @var float|null $maxWidth The maximum width allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
    */
    private ?float $maxWidth = null;
    
    /**
     * @var float|null $minGirth The minimum girth allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
    */
    private ?float $minGirth = null;
    
    /**
     * @var float|null $minHeight The minimum height allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
    */
    private ?float $minHeight = null;
    
    /**
     * @var float|null $minLength The minimum length allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
    */
    private ?float $minLength = null;
    
    /**
     * @var float|null $minWeight The minimum weight allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.weightunit">weightUnit</a>.
    */
    private ?float $minWeight = null;
    
    /**
     * @var float|null $minWidth The minimum width allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
    */
    private ?float $minWidth = null;
    
    /**
     * @var string|null $weightUnit Unit of weight measurement, for example <code>KILOGRAM</code> or <code>OUNCE</code>. 
    */
    private ?string $weightUnit = null;
    
    /**
     * Instantiates a new PackageLimits and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PackageLimits
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PackageLimits {
        return new PackageLimits();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimensionUnit property value. Unit of dimensional measurement, for example <code>INCH</code> or <code>CENTIMETER</code>. 
     * @return string|null
    */
    public function getDimensionUnit(): ?string {
        return $this->dimensionUnit;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensionUnit' => fn(ParseNode $n) => $o->setDimensionUnit($n->getStringValue()),
            'maxGirth' => fn(ParseNode $n) => $o->setMaxGirth($n->getFloatValue()),
            'maxHeight' => fn(ParseNode $n) => $o->setMaxHeight($n->getFloatValue()),
            'maxLength' => fn(ParseNode $n) => $o->setMaxLength($n->getFloatValue()),
            'maxWeight' => fn(ParseNode $n) => $o->setMaxWeight($n->getFloatValue()),
            'maxWidth' => fn(ParseNode $n) => $o->setMaxWidth($n->getFloatValue()),
            'minGirth' => fn(ParseNode $n) => $o->setMinGirth($n->getFloatValue()),
            'minHeight' => fn(ParseNode $n) => $o->setMinHeight($n->getFloatValue()),
            'minLength' => fn(ParseNode $n) => $o->setMinLength($n->getFloatValue()),
            'minWeight' => fn(ParseNode $n) => $o->setMinWeight($n->getFloatValue()),
            'minWidth' => fn(ParseNode $n) => $o->setMinWidth($n->getFloatValue()),
            'weightUnit' => fn(ParseNode $n) => $o->setWeightUnit($n->getStringValue()),
        ];
    }

    /**
     * Gets the maxGirth property value. The maximum girth allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @return float|null
    */
    public function getMaxGirth(): ?float {
        return $this->maxGirth;
    }

    /**
     * Gets the maxHeight property value. The maximum height allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @return float|null
    */
    public function getMaxHeight(): ?float {
        return $this->maxHeight;
    }

    /**
     * Gets the maxLength property value. The maximum length allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @return float|null
    */
    public function getMaxLength(): ?float {
        return $this->maxLength;
    }

    /**
     * Gets the maxWeight property value. The maximum weight allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.weightunit">weightUnit</a>.
     * @return float|null
    */
    public function getMaxWeight(): ?float {
        return $this->maxWeight;
    }

    /**
     * Gets the maxWidth property value. The maximum width allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @return float|null
    */
    public function getMaxWidth(): ?float {
        return $this->maxWidth;
    }

    /**
     * Gets the minGirth property value. The minimum girth allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @return float|null
    */
    public function getMinGirth(): ?float {
        return $this->minGirth;
    }

    /**
     * Gets the minHeight property value. The minimum height allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @return float|null
    */
    public function getMinHeight(): ?float {
        return $this->minHeight;
    }

    /**
     * Gets the minLength property value. The minimum length allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @return float|null
    */
    public function getMinLength(): ?float {
        return $this->minLength;
    }

    /**
     * Gets the minWeight property value. The minimum weight allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.weightunit">weightUnit</a>.
     * @return float|null
    */
    public function getMinWeight(): ?float {
        return $this->minWeight;
    }

    /**
     * Gets the minWidth property value. The minimum width allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @return float|null
    */
    public function getMinWidth(): ?float {
        return $this->minWidth;
    }

    /**
     * Gets the weightUnit property value. Unit of weight measurement, for example <code>KILOGRAM</code> or <code>OUNCE</code>. 
     * @return string|null
    */
    public function getWeightUnit(): ?string {
        return $this->weightUnit;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dimensionUnit', $this->getDimensionUnit());
        $writer->writeFloatValue('maxGirth', $this->getMaxGirth());
        $writer->writeFloatValue('maxHeight', $this->getMaxHeight());
        $writer->writeFloatValue('maxLength', $this->getMaxLength());
        $writer->writeFloatValue('maxWeight', $this->getMaxWeight());
        $writer->writeFloatValue('maxWidth', $this->getMaxWidth());
        $writer->writeFloatValue('minGirth', $this->getMinGirth());
        $writer->writeFloatValue('minHeight', $this->getMinHeight());
        $writer->writeFloatValue('minLength', $this->getMinLength());
        $writer->writeFloatValue('minWeight', $this->getMinWeight());
        $writer->writeFloatValue('minWidth', $this->getMinWidth());
        $writer->writeStringValue('weightUnit', $this->getWeightUnit());
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
     * Sets the dimensionUnit property value. Unit of dimensional measurement, for example <code>INCH</code> or <code>CENTIMETER</code>. 
     * @param string|null $value Value to set for the dimensionUnit property.
    */
    public function setDimensionUnit(?string $value): void {
        $this->dimensionUnit = $value;
    }

    /**
     * Sets the maxGirth property value. The maximum girth allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @param float|null $value Value to set for the maxGirth property.
    */
    public function setMaxGirth(?float $value): void {
        $this->maxGirth = $value;
    }

    /**
     * Sets the maxHeight property value. The maximum height allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @param float|null $value Value to set for the maxHeight property.
    */
    public function setMaxHeight(?float $value): void {
        $this->maxHeight = $value;
    }

    /**
     * Sets the maxLength property value. The maximum length allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @param float|null $value Value to set for the maxLength property.
    */
    public function setMaxLength(?float $value): void {
        $this->maxLength = $value;
    }

    /**
     * Sets the maxWeight property value. The maximum weight allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.weightunit">weightUnit</a>.
     * @param float|null $value Value to set for the maxWeight property.
    */
    public function setMaxWeight(?float $value): void {
        $this->maxWeight = $value;
    }

    /**
     * Sets the maxWidth property value. The maximum width allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @param float|null $value Value to set for the maxWidth property.
    */
    public function setMaxWidth(?float $value): void {
        $this->maxWidth = $value;
    }

    /**
     * Sets the minGirth property value. The minimum girth allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @param float|null $value Value to set for the minGirth property.
    */
    public function setMinGirth(?float $value): void {
        $this->minGirth = $value;
    }

    /**
     * Sets the minHeight property value. The minimum height allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @param float|null $value Value to set for the minHeight property.
    */
    public function setMinHeight(?float $value): void {
        $this->minHeight = $value;
    }

    /**
     * Sets the minLength property value. The minimum length allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @param float|null $value Value to set for the minLength property.
    */
    public function setMinLength(?float $value): void {
        $this->minLength = $value;
    }

    /**
     * Sets the minWeight property value. The minimum weight allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.weightunit">weightUnit</a>.
     * @param float|null $value Value to set for the minWeight property.
    */
    public function setMinWeight(?float $value): void {
        $this->minWeight = $value;
    }

    /**
     * Sets the minWidth property value. The minimum width allowed for a package shipped through the corresponding shipping service, as measured in units of <a href="/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices.packagelimits.dimensionunit">dimensionUnit</a>.
     * @param float|null $value Value to set for the minWidth property.
    */
    public function setMinWidth(?float $value): void {
        $this->minWidth = $value;
    }

    /**
     * Sets the weightUnit property value. Unit of weight measurement, for example <code>KILOGRAM</code> or <code>OUNCE</code>. 
     * @param string|null $value Value to set for the weightUnit property.
    */
    public function setWeightUnit(?string $value): void {
        $this->weightUnit = $value;
    }

}
