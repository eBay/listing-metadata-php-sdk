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
 * This type contains the policies governing the listing type by category.
*/
class ListingTypePolicy implements AdditionalDataHolder, Parsable 
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
     * @var bool|null $digitalGoodDeliveryEnabled A <code>true</code> value in this field indicates that the leaf category supports the listing of items (such as gift cards) that can be delivered electronically via a download link or sent to a buyer's email address.
    */
    private ?bool $digitalGoodDeliveryEnabled = null;
    
    /**
     * @var array<ListingDuration>|null $listingDurations An array of eBay listing types and the supported durations for the corresponding leaf category. If a specific eBay listing type does not appear for a leaf category, it indicates that the category does not support that listing type.
    */
    private ?array $listingDurations = null;
    
    /**
     * @var bool|null $pickupDropOffEnabled A true value in this field indicates that items listed in the category (specified in the <b>listingTypePolicies.categoryId</b> field) may be enabled with the 'Click and Collect' feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers are notified by eBay once their items are available. A false value in this field indicates that items listed in the category are not eligible for the 'Click and Collect' feature.
    */
    private ?bool $pickupDropOffEnabled = null;
    
    /**
     * Instantiates a new ListingTypePolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListingTypePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListingTypePolicy {
        return new ListingTypePolicy();
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
     * Gets the digitalGoodDeliveryEnabled property value. A <code>true</code> value in this field indicates that the leaf category supports the listing of items (such as gift cards) that can be delivered electronically via a download link or sent to a buyer's email address.
     * @return bool|null
    */
    public function getDigitalGoodDeliveryEnabled(): ?bool {
        return $this->digitalGoodDeliveryEnabled;
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
            'digitalGoodDeliveryEnabled' => fn(ParseNode $n) => $o->setDigitalGoodDeliveryEnabled($n->getBooleanValue()),
            'listingDurations' => fn(ParseNode $n) => $o->setListingDurations($n->getCollectionOfObjectValues([ListingDuration::class, 'createFromDiscriminatorValue'])),
            'pickupDropOffEnabled' => fn(ParseNode $n) => $o->setPickupDropOffEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the listingDurations property value. An array of eBay listing types and the supported durations for the corresponding leaf category. If a specific eBay listing type does not appear for a leaf category, it indicates that the category does not support that listing type.
     * @return array<ListingDuration>|null
    */
    public function getListingDurations(): ?array {
        return $this->listingDurations;
    }

    /**
     * Gets the pickupDropOffEnabled property value. A true value in this field indicates that items listed in the category (specified in the <b>listingTypePolicies.categoryId</b> field) may be enabled with the 'Click and Collect' feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers are notified by eBay once their items are available. A false value in this field indicates that items listed in the category are not eligible for the 'Click and Collect' feature.
     * @return bool|null
    */
    public function getPickupDropOffEnabled(): ?bool {
        return $this->pickupDropOffEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeBooleanValue('digitalGoodDeliveryEnabled', $this->getDigitalGoodDeliveryEnabled());
        $writer->writeCollectionOfObjectValues('listingDurations', $this->getListingDurations());
        $writer->writeBooleanValue('pickupDropOffEnabled', $this->getPickupDropOffEnabled());
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
     * Sets the digitalGoodDeliveryEnabled property value. A <code>true</code> value in this field indicates that the leaf category supports the listing of items (such as gift cards) that can be delivered electronically via a download link or sent to a buyer's email address.
     * @param bool|null $value Value to set for the digitalGoodDeliveryEnabled property.
    */
    public function setDigitalGoodDeliveryEnabled(?bool $value): void {
        $this->digitalGoodDeliveryEnabled = $value;
    }

    /**
     * Sets the listingDurations property value. An array of eBay listing types and the supported durations for the corresponding leaf category. If a specific eBay listing type does not appear for a leaf category, it indicates that the category does not support that listing type.
     * @param array<ListingDuration>|null $value Value to set for the listingDurations property.
    */
    public function setListingDurations(?array $value): void {
        $this->listingDurations = $value;
    }

    /**
     * Sets the pickupDropOffEnabled property value. A true value in this field indicates that items listed in the category (specified in the <b>listingTypePolicies.categoryId</b> field) may be enabled with the 'Click and Collect' feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers are notified by eBay once their items are available. A false value in this field indicates that items listed in the category are not eligible for the 'Click and Collect' feature.
     * @param bool|null $value Value to set for the pickupDropOffEnabled property.
    */
    public function setPickupDropOffEnabled(?bool $value): void {
        $this->pickupDropOffEnabled = $value;
    }

}
