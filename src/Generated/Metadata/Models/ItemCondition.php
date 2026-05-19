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
 * <span class="tablenote"><b>Note: </b>In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition. Any active listings on any eBay marketplace that had 'Manufacturer Refurbished' as the item condition should have been automatically updated by eBay to the 'Seller Refurbished' item condition (Condition ID 2500). <br><br> Any seller that is interested in eligibility requirements to list with 'Certified Refurbished' should see the <a href="https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html " target="_blank">Certified refurbished program</a> page in Seller Center. </span>
*/
class ItemCondition implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $conditionDescription The human-readable label for the condition (e.g., "New"). This value is typically localized for each site.  <br><br>Note that the display name can vary by category. For example, the description for condition ID <code>1000</code> could be called "New: with Tags" in one category and "Brand New" in another. For details on condition IDs and descriptions, see <a href='/api-docs/sell/static/metadata/condition-id-values.html'>Item condition ID and name values</a>.
    */
    private ?string $conditionDescription = null;
    
    /**
     * @var array<ItemConditionDescriptor>|null $conditionDescriptors This array contains the possible condition descriptors and condition descriptor values applicable for the specified category. It also returns usage requirements, maximum length, cardinality, and help text.<br><br><span class="tablenote"><b>Note:</b> This array is only returned for categories that support condition descriptors.</span>
    */
    private ?array $conditionDescriptors = null;
    
    /**
     * @var string|null $conditionHelpText A detailed description of the condition denoted by the <b>conditionID</b> and <b>conditionDescription</b>. 
    */
    private ?string $conditionHelpText = null;
    
    /**
     * @var string|null $conditionId The ID value of the selected item condition. For information on the supported condition ID values, see <a href='/api-docs/sell/static/metadata/condition-id-values.html'>Item condition ID and name values</a>.
    */
    private ?string $conditionId = null;
    
    /**
     * @var string|null $usage The value returned in this field indicates if there are any usage restrictions or requirements for the corresponding item condition in the corresponding category.<br><br><span class="tablenote"><b>Note:</b> Currently, the only supported value is 'RESTRICTED', and this field will only be returned for the following conditions: 2000, 2010, 2020, 2030. Sellers must be pre-approved to use any of these item conditions.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:UsageEnum'>eBay API documentation</a>
    */
    private ?string $usage = null;
    
    /**
     * Instantiates a new ItemCondition and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemCondition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemCondition {
        return new ItemCondition();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conditionDescription property value. The human-readable label for the condition (e.g., "New"). This value is typically localized for each site.  <br><br>Note that the display name can vary by category. For example, the description for condition ID <code>1000</code> could be called "New: with Tags" in one category and "Brand New" in another. For details on condition IDs and descriptions, see <a href='/api-docs/sell/static/metadata/condition-id-values.html'>Item condition ID and name values</a>.
     * @return string|null
    */
    public function getConditionDescription(): ?string {
        return $this->conditionDescription;
    }

    /**
     * Gets the conditionDescriptors property value. This array contains the possible condition descriptors and condition descriptor values applicable for the specified category. It also returns usage requirements, maximum length, cardinality, and help text.<br><br><span class="tablenote"><b>Note:</b> This array is only returned for categories that support condition descriptors.</span>
     * @return array<ItemConditionDescriptor>|null
    */
    public function getConditionDescriptors(): ?array {
        return $this->conditionDescriptors;
    }

    /**
     * Gets the conditionHelpText property value. A detailed description of the condition denoted by the <b>conditionID</b> and <b>conditionDescription</b>. 
     * @return string|null
    */
    public function getConditionHelpText(): ?string {
        return $this->conditionHelpText;
    }

    /**
     * Gets the conditionId property value. The ID value of the selected item condition. For information on the supported condition ID values, see <a href='/api-docs/sell/static/metadata/condition-id-values.html'>Item condition ID and name values</a>.
     * @return string|null
    */
    public function getConditionId(): ?string {
        return $this->conditionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conditionDescription' => fn(ParseNode $n) => $o->setConditionDescription($n->getStringValue()),
            'conditionDescriptors' => fn(ParseNode $n) => $o->setConditionDescriptors($n->getCollectionOfObjectValues([ItemConditionDescriptor::class, 'createFromDiscriminatorValue'])),
            'conditionHelpText' => fn(ParseNode $n) => $o->setConditionHelpText($n->getStringValue()),
            'conditionId' => fn(ParseNode $n) => $o->setConditionId($n->getStringValue()),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getStringValue()),
        ];
    }

    /**
     * Gets the usage property value. The value returned in this field indicates if there are any usage restrictions or requirements for the corresponding item condition in the corresponding category.<br><br><span class="tablenote"><b>Note:</b> Currently, the only supported value is 'RESTRICTED', and this field will only be returned for the following conditions: 2000, 2010, 2020, 2030. Sellers must be pre-approved to use any of these item conditions.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:UsageEnum'>eBay API documentation</a>
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
        $writer->writeStringValue('conditionDescription', $this->getConditionDescription());
        $writer->writeCollectionOfObjectValues('conditionDescriptors', $this->getConditionDescriptors());
        $writer->writeStringValue('conditionHelpText', $this->getConditionHelpText());
        $writer->writeStringValue('conditionId', $this->getConditionId());
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
     * Sets the conditionDescription property value. The human-readable label for the condition (e.g., "New"). This value is typically localized for each site.  <br><br>Note that the display name can vary by category. For example, the description for condition ID <code>1000</code> could be called "New: with Tags" in one category and "Brand New" in another. For details on condition IDs and descriptions, see <a href='/api-docs/sell/static/metadata/condition-id-values.html'>Item condition ID and name values</a>.
     * @param string|null $value Value to set for the conditionDescription property.
    */
    public function setConditionDescription(?string $value): void {
        $this->conditionDescription = $value;
    }

    /**
     * Sets the conditionDescriptors property value. This array contains the possible condition descriptors and condition descriptor values applicable for the specified category. It also returns usage requirements, maximum length, cardinality, and help text.<br><br><span class="tablenote"><b>Note:</b> This array is only returned for categories that support condition descriptors.</span>
     * @param array<ItemConditionDescriptor>|null $value Value to set for the conditionDescriptors property.
    */
    public function setConditionDescriptors(?array $value): void {
        $this->conditionDescriptors = $value;
    }

    /**
     * Sets the conditionHelpText property value. A detailed description of the condition denoted by the <b>conditionID</b> and <b>conditionDescription</b>. 
     * @param string|null $value Value to set for the conditionHelpText property.
    */
    public function setConditionHelpText(?string $value): void {
        $this->conditionHelpText = $value;
    }

    /**
     * Sets the conditionId property value. The ID value of the selected item condition. For information on the supported condition ID values, see <a href='/api-docs/sell/static/metadata/condition-id-values.html'>Item condition ID and name values</a>.
     * @param string|null $value Value to set for the conditionId property.
    */
    public function setConditionId(?string $value): void {
        $this->conditionId = $value;
    }

    /**
     * Sets the usage property value. The value returned in this field indicates if there are any usage restrictions or requirements for the corresponding item condition in the corresponding category.<br><br><span class="tablenote"><b>Note:</b> Currently, the only supported value is 'RESTRICTED', and this field will only be returned for the following conditions: 2000, 2010, 2020, 2030. Sellers must be pre-approved to use any of these item conditions.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:UsageEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the usage property.
    */
    public function setUsage(?string $value): void {
        $this->usage = $value;
    }

}
