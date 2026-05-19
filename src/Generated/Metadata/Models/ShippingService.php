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
 * This type provides applicable shipping service metadata.
*/
class ShippingService implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description This field returns the localized name of the shipping service.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $internationalService A value of <code>true</code> indicates that the shipping service is international. An international shipping service option is required if an item is being shipped from one country (origin) to another (destination).
    */
    private ?bool $internationalService = null;
    
    /**
     * @var int|null $maxShippingTime This value indicates the maximum number of business days that it takes the <b>shippingCarrier</b> to ship an item using the corresponding <b>shippingService</b>. 
    */
    private ?int $maxShippingTime = null;
    
    /**
     * @var int|null $minShippingTime This value indicates the minimum number of business days that it takes the <b>shippingCarrier</b> to ship an item using the corresponding <b>shippingService</b>. 
    */
    private ?int $minShippingTime = null;
    
    /**
     * @var PackageLimits|null $packageLimits The packageLimits field is used to specify the physical constraints and measurement units of packages, ensuring compliance with various shipping requirements.
    */
    private ?PackageLimits $packageLimits = null;
    
    /**
     * @var string|null $shippingCarrier The code for the shipping carrier returned, for example, <code>UPS</code>, <code>FedEx</code>, and <code>USPS</code>.
    */
    private ?string $shippingCarrier = null;
    
    /**
     * @var string|null $shippingCategory The shipping category of the shipping service including:  <code>ECONOMY</code>, <code>STANDARD</code>, <code>EXPEDITED</code>, <code>ONE_DAY</code>, <code>PICKUP</code>, and other similar categories.
    */
    private ?string $shippingCategory = null;
    
    /**
     * @var array<string>|null $shippingCostTypes A list of shipping cost types that this shipping service option supports. For example, <code>FLAT_RATE</code>, <code>CALCULATED</code>, and <code>FREIGHT</code>.
    */
    private ?array $shippingCostTypes = null;
    
    /**
     * @var string|null $shippingService The name of the shipping service. The shipping service named here can only be used in listings or in business policies if <b>validForSellingFlow</b> is <code>true</code>. The value returned in this field is used in listing APIs and business policies to set the shipping service.
    */
    private ?string $shippingService = null;
    
    /**
     * @var bool|null $validForSellingFlow A value of <code>true</code> indicates that the <b>shippingService</b> can be set as an available shipping service in the listing or through the fulfillment business policy.
    */
    private ?bool $validForSellingFlow = null;
    
    /**
     * Instantiates a new ShippingService and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingService
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingService {
        return new ShippingService();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. This field returns the localized name of the shipping service.
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
            'internationalService' => fn(ParseNode $n) => $o->setInternationalService($n->getBooleanValue()),
            'maxShippingTime' => fn(ParseNode $n) => $o->setMaxShippingTime($n->getIntegerValue()),
            'minShippingTime' => fn(ParseNode $n) => $o->setMinShippingTime($n->getIntegerValue()),
            'packageLimits' => fn(ParseNode $n) => $o->setPackageLimits($n->getObjectValue([PackageLimits::class, 'createFromDiscriminatorValue'])),
            'shippingCarrier' => fn(ParseNode $n) => $o->setShippingCarrier($n->getStringValue()),
            'shippingCategory' => fn(ParseNode $n) => $o->setShippingCategory($n->getStringValue()),
            'shippingCostTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setShippingCostTypes($val);
            },
            'shippingService' => fn(ParseNode $n) => $o->setShippingService($n->getStringValue()),
            'validForSellingFlow' => fn(ParseNode $n) => $o->setValidForSellingFlow($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the internationalService property value. A value of <code>true</code> indicates that the shipping service is international. An international shipping service option is required if an item is being shipped from one country (origin) to another (destination).
     * @return bool|null
    */
    public function getInternationalService(): ?bool {
        return $this->internationalService;
    }

    /**
     * Gets the maxShippingTime property value. This value indicates the maximum number of business days that it takes the <b>shippingCarrier</b> to ship an item using the corresponding <b>shippingService</b>. 
     * @return int|null
    */
    public function getMaxShippingTime(): ?int {
        return $this->maxShippingTime;
    }

    /**
     * Gets the minShippingTime property value. This value indicates the minimum number of business days that it takes the <b>shippingCarrier</b> to ship an item using the corresponding <b>shippingService</b>. 
     * @return int|null
    */
    public function getMinShippingTime(): ?int {
        return $this->minShippingTime;
    }

    /**
     * Gets the packageLimits property value. The packageLimits field is used to specify the physical constraints and measurement units of packages, ensuring compliance with various shipping requirements.
     * @return PackageLimits|null
    */
    public function getPackageLimits(): ?PackageLimits {
        return $this->packageLimits;
    }

    /**
     * Gets the shippingCarrier property value. The code for the shipping carrier returned, for example, <code>UPS</code>, <code>FedEx</code>, and <code>USPS</code>.
     * @return string|null
    */
    public function getShippingCarrier(): ?string {
        return $this->shippingCarrier;
    }

    /**
     * Gets the shippingCategory property value. The shipping category of the shipping service including:  <code>ECONOMY</code>, <code>STANDARD</code>, <code>EXPEDITED</code>, <code>ONE_DAY</code>, <code>PICKUP</code>, and other similar categories.
     * @return string|null
    */
    public function getShippingCategory(): ?string {
        return $this->shippingCategory;
    }

    /**
     * Gets the shippingCostTypes property value. A list of shipping cost types that this shipping service option supports. For example, <code>FLAT_RATE</code>, <code>CALCULATED</code>, and <code>FREIGHT</code>.
     * @return array<string>|null
    */
    public function getShippingCostTypes(): ?array {
        return $this->shippingCostTypes;
    }

    /**
     * Gets the shippingService property value. The name of the shipping service. The shipping service named here can only be used in listings or in business policies if <b>validForSellingFlow</b> is <code>true</code>. The value returned in this field is used in listing APIs and business policies to set the shipping service.
     * @return string|null
    */
    public function getShippingService(): ?string {
        return $this->shippingService;
    }

    /**
     * Gets the validForSellingFlow property value. A value of <code>true</code> indicates that the <b>shippingService</b> can be set as an available shipping service in the listing or through the fulfillment business policy.
     * @return bool|null
    */
    public function getValidForSellingFlow(): ?bool {
        return $this->validForSellingFlow;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('internationalService', $this->getInternationalService());
        $writer->writeIntegerValue('maxShippingTime', $this->getMaxShippingTime());
        $writer->writeIntegerValue('minShippingTime', $this->getMinShippingTime());
        $writer->writeObjectValue('packageLimits', $this->getPackageLimits());
        $writer->writeStringValue('shippingCarrier', $this->getShippingCarrier());
        $writer->writeStringValue('shippingCategory', $this->getShippingCategory());
        $writer->writeCollectionOfPrimitiveValues('shippingCostTypes', $this->getShippingCostTypes());
        $writer->writeStringValue('shippingService', $this->getShippingService());
        $writer->writeBooleanValue('validForSellingFlow', $this->getValidForSellingFlow());
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
     * Sets the description property value. This field returns the localized name of the shipping service.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the internationalService property value. A value of <code>true</code> indicates that the shipping service is international. An international shipping service option is required if an item is being shipped from one country (origin) to another (destination).
     * @param bool|null $value Value to set for the internationalService property.
    */
    public function setInternationalService(?bool $value): void {
        $this->internationalService = $value;
    }

    /**
     * Sets the maxShippingTime property value. This value indicates the maximum number of business days that it takes the <b>shippingCarrier</b> to ship an item using the corresponding <b>shippingService</b>. 
     * @param int|null $value Value to set for the maxShippingTime property.
    */
    public function setMaxShippingTime(?int $value): void {
        $this->maxShippingTime = $value;
    }

    /**
     * Sets the minShippingTime property value. This value indicates the minimum number of business days that it takes the <b>shippingCarrier</b> to ship an item using the corresponding <b>shippingService</b>. 
     * @param int|null $value Value to set for the minShippingTime property.
    */
    public function setMinShippingTime(?int $value): void {
        $this->minShippingTime = $value;
    }

    /**
     * Sets the packageLimits property value. The packageLimits field is used to specify the physical constraints and measurement units of packages, ensuring compliance with various shipping requirements.
     * @param PackageLimits|null $value Value to set for the packageLimits property.
    */
    public function setPackageLimits(?PackageLimits $value): void {
        $this->packageLimits = $value;
    }

    /**
     * Sets the shippingCarrier property value. The code for the shipping carrier returned, for example, <code>UPS</code>, <code>FedEx</code>, and <code>USPS</code>.
     * @param string|null $value Value to set for the shippingCarrier property.
    */
    public function setShippingCarrier(?string $value): void {
        $this->shippingCarrier = $value;
    }

    /**
     * Sets the shippingCategory property value. The shipping category of the shipping service including:  <code>ECONOMY</code>, <code>STANDARD</code>, <code>EXPEDITED</code>, <code>ONE_DAY</code>, <code>PICKUP</code>, and other similar categories.
     * @param string|null $value Value to set for the shippingCategory property.
    */
    public function setShippingCategory(?string $value): void {
        $this->shippingCategory = $value;
    }

    /**
     * Sets the shippingCostTypes property value. A list of shipping cost types that this shipping service option supports. For example, <code>FLAT_RATE</code>, <code>CALCULATED</code>, and <code>FREIGHT</code>.
     * @param array<string>|null $value Value to set for the shippingCostTypes property.
    */
    public function setShippingCostTypes(?array $value): void {
        $this->shippingCostTypes = $value;
    }

    /**
     * Sets the shippingService property value. The name of the shipping service. The shipping service named here can only be used in listings or in business policies if <b>validForSellingFlow</b> is <code>true</code>. The value returned in this field is used in listing APIs and business policies to set the shipping service.
     * @param string|null $value Value to set for the shippingService property.
    */
    public function setShippingService(?string $value): void {
        $this->shippingService = $value;
    }

    /**
     * Sets the validForSellingFlow property value. A value of <code>true</code> indicates that the <b>shippingService</b> can be set as an available shipping service in the listing or through the fulfillment business policy.
     * @param bool|null $value Value to set for the validForSellingFlow property.
    */
    public function setValidForSellingFlow(?bool $value): void {
        $this->validForSellingFlow = $value;
    }

}
