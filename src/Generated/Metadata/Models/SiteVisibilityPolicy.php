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
 * A type that contains eBay international cross border trade policy metadata fields.
*/
class SiteVisibilityPolicy implements AdditionalDataHolder, Parsable 
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
     * @var bool|null $crossBorderTradeAustraliaEnabled If <code>true</code>, the category supports specifying that listings of a seller on the UK marketplace can pass in Australia as a value in a <CrossBorderTrade> field to expose that item on the eBay Australia site (ebay.com.au). For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/cross-border-trading.html"  target="_blank">Cross-border trading</a>.
    */
    private ?bool $crossBorderTradeAustraliaEnabled = null;
    
    /**
     * @var bool|null $crossBorderTradeGBEnabled If <code>true</code>, the category supports specifying that listings of a seller on the US or Canada marketplaces can pass in UK as a value in a <CrossBorderTrade> field to expose that item on the eBay UK (ebay.co.uk) and eBay IE (ebay.ie) sites. For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/cross-border-trading.html"  target="_blank">Cross-border trading</a>.
    */
    private ?bool $crossBorderTradeGBEnabled = null;
    
    /**
     * @var bool|null $crossBorderTradeNorthAmericaEnabled If <code>true</code>, the category supports specifying that listings of a seller on the US or Canada marketplaces can pass in North America as a value in a <CrossBorderTrade> field to expose that item on the eBay US (ebay.com) and eBay Canada (ebay.ca) sites (English). For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/cross-border-trading.html"  target="_blank">Cross-border trading</a>. 
    */
    private ?bool $crossBorderTradeNorthAmericaEnabled = null;
    
    /**
     * Instantiates a new SiteVisibilityPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SiteVisibilityPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SiteVisibilityPolicy {
        return new SiteVisibilityPolicy();
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
     * Gets the crossBorderTradeAustraliaEnabled property value. If <code>true</code>, the category supports specifying that listings of a seller on the UK marketplace can pass in Australia as a value in a <CrossBorderTrade> field to expose that item on the eBay Australia site (ebay.com.au). For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/cross-border-trading.html"  target="_blank">Cross-border trading</a>.
     * @return bool|null
    */
    public function getCrossBorderTradeAustraliaEnabled(): ?bool {
        return $this->crossBorderTradeAustraliaEnabled;
    }

    /**
     * Gets the crossBorderTradeGBEnabled property value. If <code>true</code>, the category supports specifying that listings of a seller on the US or Canada marketplaces can pass in UK as a value in a <CrossBorderTrade> field to expose that item on the eBay UK (ebay.co.uk) and eBay IE (ebay.ie) sites. For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/cross-border-trading.html"  target="_blank">Cross-border trading</a>.
     * @return bool|null
    */
    public function getCrossBorderTradeGBEnabled(): ?bool {
        return $this->crossBorderTradeGBEnabled;
    }

    /**
     * Gets the crossBorderTradeNorthAmericaEnabled property value. If <code>true</code>, the category supports specifying that listings of a seller on the US or Canada marketplaces can pass in North America as a value in a <CrossBorderTrade> field to expose that item on the eBay US (ebay.com) and eBay Canada (ebay.ca) sites (English). For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/cross-border-trading.html"  target="_blank">Cross-border trading</a>. 
     * @return bool|null
    */
    public function getCrossBorderTradeNorthAmericaEnabled(): ?bool {
        return $this->crossBorderTradeNorthAmericaEnabled;
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
            'crossBorderTradeAustraliaEnabled' => fn(ParseNode $n) => $o->setCrossBorderTradeAustraliaEnabled($n->getBooleanValue()),
            'crossBorderTradeGBEnabled' => fn(ParseNode $n) => $o->setCrossBorderTradeGBEnabled($n->getBooleanValue()),
            'crossBorderTradeNorthAmericaEnabled' => fn(ParseNode $n) => $o->setCrossBorderTradeNorthAmericaEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeBooleanValue('crossBorderTradeAustraliaEnabled', $this->getCrossBorderTradeAustraliaEnabled());
        $writer->writeBooleanValue('crossBorderTradeGBEnabled', $this->getCrossBorderTradeGBEnabled());
        $writer->writeBooleanValue('crossBorderTradeNorthAmericaEnabled', $this->getCrossBorderTradeNorthAmericaEnabled());
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
     * Sets the crossBorderTradeAustraliaEnabled property value. If <code>true</code>, the category supports specifying that listings of a seller on the UK marketplace can pass in Australia as a value in a <CrossBorderTrade> field to expose that item on the eBay Australia site (ebay.com.au). For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/cross-border-trading.html"  target="_blank">Cross-border trading</a>.
     * @param bool|null $value Value to set for the crossBorderTradeAustraliaEnabled property.
    */
    public function setCrossBorderTradeAustraliaEnabled(?bool $value): void {
        $this->crossBorderTradeAustraliaEnabled = $value;
    }

    /**
     * Sets the crossBorderTradeGBEnabled property value. If <code>true</code>, the category supports specifying that listings of a seller on the US or Canada marketplaces can pass in UK as a value in a <CrossBorderTrade> field to expose that item on the eBay UK (ebay.co.uk) and eBay IE (ebay.ie) sites. For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/cross-border-trading.html"  target="_blank">Cross-border trading</a>.
     * @param bool|null $value Value to set for the crossBorderTradeGBEnabled property.
    */
    public function setCrossBorderTradeGBEnabled(?bool $value): void {
        $this->crossBorderTradeGBEnabled = $value;
    }

    /**
     * Sets the crossBorderTradeNorthAmericaEnabled property value. If <code>true</code>, the category supports specifying that listings of a seller on the US or Canada marketplaces can pass in North America as a value in a <CrossBorderTrade> field to expose that item on the eBay US (ebay.com) and eBay Canada (ebay.ca) sites (English). For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/cross-border-trading.html"  target="_blank">Cross-border trading</a>. 
     * @param bool|null $value Value to set for the crossBorderTradeNorthAmericaEnabled property.
    */
    public function setCrossBorderTradeNorthAmericaEnabled(?bool $value): void {
        $this->crossBorderTradeNorthAmericaEnabled = $value;
    }

}
