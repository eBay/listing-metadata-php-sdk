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
 * This type specifies the constraints on a condition descriptor, such as the maximum length, default condition descriptor value ID, cardinality, mode, usage, and applicable descriptor IDs.
*/
class ItemConditionDescriptorConstraint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $applicableToConditionDescriptorIds This array is returned if the corresponding condition descriptor requires that one or more other associated condition descriptors must also be specified in a listing. The condition descriptor IDs for the associated condition descriptors are returned here.<br><br>For example, the <code>Grade</code> and <code>Grader</code> condition descriptors must always be specified together in a listing for Graded cards.
    */
    private ?array $applicableToConditionDescriptorIds = null;
    
    /**
     * @var string|null $cardinality The value returned in this field indicates whether a condition descriptor can have a single value or multiple values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:CardinalityEnum'>eBay API documentation</a>
    */
    private ?string $cardinality = null;
    
    /**
     * @var string|null $defaultConditionDescriptorValueId The default condition descriptor value that will be set if there are multiple values.
    */
    private ?string $defaultConditionDescriptorValueId = null;
    
    /**
     * @var int|null $maxLength The maximum characters allowed for a condition descriptor. This field is only returned/applicable for condition descriptors that allow free text for condition descriptor values. 
    */
    private ?int $maxLength = null;
    
    /**
     * @var string|null $mode The value returned in this field indicates whether the supported values for a condition descriptor are predefined or if the seller manually specified the value.<br><br><span class="tablenote"><b>Note:</b> <code>FREE_TEXT</code> is currently only applicable to the Certification Number condition descriptor.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ModeEnum'>eBay API documentation</a>
    */
    private ?string $mode = null;
    
    /**
     * @var string|null $usage This value indicates whether or not the condition descriptor is required for the item condition. Currently, this field is only returned if the condition descriptor is required for the item condition. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:DescriptorUsageEnum'>eBay API documentation</a>
    */
    private ?string $usage = null;
    
    /**
     * Instantiates a new ItemConditionDescriptorConstraint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemConditionDescriptorConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemConditionDescriptorConstraint {
        return new ItemConditionDescriptorConstraint();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the applicableToConditionDescriptorIds property value. This array is returned if the corresponding condition descriptor requires that one or more other associated condition descriptors must also be specified in a listing. The condition descriptor IDs for the associated condition descriptors are returned here.<br><br>For example, the <code>Grade</code> and <code>Grader</code> condition descriptors must always be specified together in a listing for Graded cards.
     * @return array<string>|null
    */
    public function getApplicableToConditionDescriptorIds(): ?array {
        return $this->applicableToConditionDescriptorIds;
    }

    /**
     * Gets the cardinality property value. The value returned in this field indicates whether a condition descriptor can have a single value or multiple values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:CardinalityEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCardinality(): ?string {
        return $this->cardinality;
    }

    /**
     * Gets the defaultConditionDescriptorValueId property value. The default condition descriptor value that will be set if there are multiple values.
     * @return string|null
    */
    public function getDefaultConditionDescriptorValueId(): ?string {
        return $this->defaultConditionDescriptorValueId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicableToConditionDescriptorIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setApplicableToConditionDescriptorIds($val);
            },
            'cardinality' => fn(ParseNode $n) => $o->setCardinality($n->getStringValue()),
            'defaultConditionDescriptorValueId' => fn(ParseNode $n) => $o->setDefaultConditionDescriptorValueId($n->getStringValue()),
            'maxLength' => fn(ParseNode $n) => $o->setMaxLength($n->getIntegerValue()),
            'mode' => fn(ParseNode $n) => $o->setMode($n->getStringValue()),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getStringValue()),
        ];
    }

    /**
     * Gets the maxLength property value. The maximum characters allowed for a condition descriptor. This field is only returned/applicable for condition descriptors that allow free text for condition descriptor values. 
     * @return int|null
    */
    public function getMaxLength(): ?int {
        return $this->maxLength;
    }

    /**
     * Gets the mode property value. The value returned in this field indicates whether the supported values for a condition descriptor are predefined or if the seller manually specified the value.<br><br><span class="tablenote"><b>Note:</b> <code>FREE_TEXT</code> is currently only applicable to the Certification Number condition descriptor.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ModeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMode(): ?string {
        return $this->mode;
    }

    /**
     * Gets the usage property value. This value indicates whether or not the condition descriptor is required for the item condition. Currently, this field is only returned if the condition descriptor is required for the item condition. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:DescriptorUsageEnum'>eBay API documentation</a>
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
        $writer->writeCollectionOfPrimitiveValues('applicableToConditionDescriptorIds', $this->getApplicableToConditionDescriptorIds());
        $writer->writeStringValue('cardinality', $this->getCardinality());
        $writer->writeStringValue('defaultConditionDescriptorValueId', $this->getDefaultConditionDescriptorValueId());
        $writer->writeIntegerValue('maxLength', $this->getMaxLength());
        $writer->writeStringValue('mode', $this->getMode());
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
     * Sets the applicableToConditionDescriptorIds property value. This array is returned if the corresponding condition descriptor requires that one or more other associated condition descriptors must also be specified in a listing. The condition descriptor IDs for the associated condition descriptors are returned here.<br><br>For example, the <code>Grade</code> and <code>Grader</code> condition descriptors must always be specified together in a listing for Graded cards.
     * @param array<string>|null $value Value to set for the applicableToConditionDescriptorIds property.
    */
    public function setApplicableToConditionDescriptorIds(?array $value): void {
        $this->applicableToConditionDescriptorIds = $value;
    }

    /**
     * Sets the cardinality property value. The value returned in this field indicates whether a condition descriptor can have a single value or multiple values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:CardinalityEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the cardinality property.
    */
    public function setCardinality(?string $value): void {
        $this->cardinality = $value;
    }

    /**
     * Sets the defaultConditionDescriptorValueId property value. The default condition descriptor value that will be set if there are multiple values.
     * @param string|null $value Value to set for the defaultConditionDescriptorValueId property.
    */
    public function setDefaultConditionDescriptorValueId(?string $value): void {
        $this->defaultConditionDescriptorValueId = $value;
    }

    /**
     * Sets the maxLength property value. The maximum characters allowed for a condition descriptor. This field is only returned/applicable for condition descriptors that allow free text for condition descriptor values. 
     * @param int|null $value Value to set for the maxLength property.
    */
    public function setMaxLength(?int $value): void {
        $this->maxLength = $value;
    }

    /**
     * Sets the mode property value. The value returned in this field indicates whether the supported values for a condition descriptor are predefined or if the seller manually specified the value.<br><br><span class="tablenote"><b>Note:</b> <code>FREE_TEXT</code> is currently only applicable to the Certification Number condition descriptor.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ModeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the mode property.
    */
    public function setMode(?string $value): void {
        $this->mode = $value;
    }

    /**
     * Sets the usage property value. This value indicates whether or not the condition descriptor is required for the item condition. Currently, this field is only returned if the condition descriptor is required for the item condition. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:DescriptorUsageEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the usage property.
    */
    public function setUsage(?string $value): void {
        $this->usage = $value;
    }

}
