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
 * This type defines the minimum starting prices for the supported types of eBay listings
*/
class MinimumListingPricePoliciesType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description The description of the listing type for which the pricing data is intended, such as "Pricing for the auction-like listings".
    */
    private ?string $description = null;
    
    /**
     * @var ListingTypeEnum|null $listingType This enum value indicates the listing type for which minimum starting price policies are being returned.<br><br><span class="tablenote"><b>Note:</b> The only applicable values for this method are <code>AUCTION</code> and <code>FIXED_PRICE_ITEM</code>.</span>
    */
    private ?ListingTypeEnum $listingType = null;
    
    /**
     * @var string|null $minBuyItNowPricePercent The minimum percentage value that a Buy It Now price for an auction listing must be above the starting bid price for the same listing.<br><br>This field is only returned and applicable for auction listings.
    */
    private ?string $minBuyItNowPricePercent = null;
    
    /**
     * @var Amount|null $startPrice For auction listings, this field indicates the lowest dollar value that can be set for the item's starting bid.<br><br>For fixed-price listings, this field indicates the lower dollar value that can be set for the item's sale price.
    */
    private ?Amount $startPrice = null;
    
    /**
     * Instantiates a new MinimumListingPricePoliciesType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MinimumListingPricePoliciesType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MinimumListingPricePoliciesType {
        return new MinimumListingPricePoliciesType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The description of the listing type for which the pricing data is intended, such as "Pricing for the auction-like listings".
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
            'listingType' => fn(ParseNode $n) => $o->setListingType($n->getEnumValue(ListingTypeEnum::class)),
            'minBuyItNowPricePercent' => fn(ParseNode $n) => $o->setMinBuyItNowPricePercent($n->getStringValue()),
            'startPrice' => fn(ParseNode $n) => $o->setStartPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the listingType property value. This enum value indicates the listing type for which minimum starting price policies are being returned.<br><br><span class="tablenote"><b>Note:</b> The only applicable values for this method are <code>AUCTION</code> and <code>FIXED_PRICE_ITEM</code>.</span>
     * @return ListingTypeEnum|null
    */
    public function getListingType(): ?ListingTypeEnum {
        return $this->listingType;
    }

    /**
     * Gets the minBuyItNowPricePercent property value. The minimum percentage value that a Buy It Now price for an auction listing must be above the starting bid price for the same listing.<br><br>This field is only returned and applicable for auction listings.
     * @return string|null
    */
    public function getMinBuyItNowPricePercent(): ?string {
        return $this->minBuyItNowPricePercent;
    }

    /**
     * Gets the startPrice property value. For auction listings, this field indicates the lowest dollar value that can be set for the item's starting bid.<br><br>For fixed-price listings, this field indicates the lower dollar value that can be set for the item's sale price.
     * @return Amount|null
    */
    public function getStartPrice(): ?Amount {
        return $this->startPrice;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('listingType', $this->getListingType());
        $writer->writeStringValue('minBuyItNowPricePercent', $this->getMinBuyItNowPricePercent());
        $writer->writeObjectValue('startPrice', $this->getStartPrice());
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
     * Sets the description property value. The description of the listing type for which the pricing data is intended, such as "Pricing for the auction-like listings".
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the listingType property value. This enum value indicates the listing type for which minimum starting price policies are being returned.<br><br><span class="tablenote"><b>Note:</b> The only applicable values for this method are <code>AUCTION</code> and <code>FIXED_PRICE_ITEM</code>.</span>
     * @param ListingTypeEnum|null $value Value to set for the listingType property.
    */
    public function setListingType(?ListingTypeEnum $value): void {
        $this->listingType = $value;
    }

    /**
     * Sets the minBuyItNowPricePercent property value. The minimum percentage value that a Buy It Now price for an auction listing must be above the starting bid price for the same listing.<br><br>This field is only returned and applicable for auction listings.
     * @param string|null $value Value to set for the minBuyItNowPricePercent property.
    */
    public function setMinBuyItNowPricePercent(?string $value): void {
        $this->minBuyItNowPricePercent = $value;
    }

    /**
     * Sets the startPrice property value. For auction listings, this field indicates the lowest dollar value that can be set for the item's starting bid.<br><br>For fixed-price listings, this field indicates the lower dollar value that can be set for the item's sale price.
     * @param Amount|null $value Value to set for the startPrice property.
    */
    public function setStartPrice(?Amount $value): void {
        $this->startPrice = $value;
    }

}
