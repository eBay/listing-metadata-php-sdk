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
 * This type contains applicable policy metadata for the leaf categories returned for the marketplace.
*/
class CategoryPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $autoPayEnabled If this field is returned as <code>true</code>, the corresponding category supports immediate payment for listings. The immediate payment feature is applicable to fixed-price listings, to auction listings with the 'Buy It Now' option enabled, and for a motor vehicle listing that requires an initial deposit. If the immediate payment feature is enabled for a listing, the buyer must pay immediately after clicking the 'Buy it Now' button. <p>This field is only returned when <code>true</code> (not returned when false).</p>
    */
    private ?bool $autoPayEnabled = null;
    
    /**
     * @var bool|null $b2bVatEnabled If this field is returned as <code>true</code>, the corresponding category supports business-to-business (B2B) VAT listings. If this field is not present, the category does not have B2B VAT listings. This feature is applicable to the eBay Germany (DE), Austria (AT), and Switzerland (CH) sites only.<p>This field is only returned when <code>true</code> (not returned when false).</p>
    */
    private ?bool $b2bVatEnabled = null;
    
    /**
     * @var string|null $categoryId The unique identifier of the eBay leaf category for which metadata is being returned.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryTreeId The unique identifier of the category tree.
    */
    private ?string $categoryTreeId = null;
    
    /**
     * @var ProductIdentiferEnabledEnum|null $eanSupport This enumerated value indicates whether or not European Article Numbers (EANs) are supported/required when listing products in the category.
    */
    private ?ProductIdentiferEnabledEnum $eanSupport = null;
    
    /**
     * @var bool|null $expired If this field is returned as <code>true</code>, the corresponding category is no longer a valid eBay category on the site, and items may not be listed in this category. You can use the <a href="/api-docs/sell/taxonomy/resources/category_tree/methods/getExpiredCategories" target="_blank">getExpiredCategories</a> method (of the <b>Taxonomy API</b>) to find the leaf category that replaced the expired category. <p>This field is only returned when <code>true</code> (not returned when false).</p>
    */
    private ?bool $expired = null;
    
    /**
     * @var bool|null $intangibleEnabled If this field is returned as <code>true</code>, the category supports the listing of intangible goods or services.
    */
    private ?bool $intangibleEnabled = null;
    
    /**
     * @var ProductIdentiferEnabledEnum|null $isbnSupport This enumerated value indicates whether or not International Standard Book Numbers (ISBNs) are supported/required when listing products in the specified category.
    */
    private ?ProductIdentiferEnabledEnum $isbnSupport = null;
    
    /**
     * @var bool|null $lsd If this field (Lot Size Disabled) is returned as <code>true</code>, the corresponding category does not support lot listings. A lot listing is a listing that features multiple related items that must be purchased by one buyer in one transaction. <p>This field is only returned when <code>true</code> (not returned when false).</p>
    */
    private ?bool $lsd = null;
    
    /**
     * @var float|null $minimumReservePrice Indicates the Minimum Reserve Price for an auction listing in this category. If there is no Minimum Reserve Price, a value of <code>0.0</code> is returned in this field.
    */
    private ?float $minimumReservePrice = null;
    
    /**
     * @var bool|null $orpa This field (Override Reserve Price Allowed) is returned as <code>true</code> if the eBay marketplace's default policy is to allow reserve prices for auction listings, but the corresponding category does not allow a reserve price. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This field is not returned if the marketplace does not permit reserve prices.</span></p>
    */
    private ?bool $orpa = null;
    
    /**
     * @var bool|null $orra If this field (Override Reduce Reserve Allowed) is returned as <code>true</code>, the seller can reduce or remove a reserve price that had already been reduced for an active auction listing.
    */
    private ?bool $orra = null;
    
    /**
     * @var array<PaymentEnum>|null $paymentMethods An array that indicates the acceptable offline payment methods that can be used when listing an item for sale in the corresponding category.
    */
    private ?array $paymentMethods = null;
    
    /**
     * @var bool|null $reduceReserveAllowed If this field (Reduce Reserve Allowed) is <code>true</code>, the corresponding leaf category allows the seller to reduce an item's reserve price. If false, this field is not returned in the response and the corresponding leaf category on the site do not normally allow sellers to reduce an item's reserve price.<p>This field is only returned when <code>true</code> (not returned when false).</p>
    */
    private ?bool $reduceReserveAllowed = null;
    
    /**
     * @var bool|null $reservePriceAllowed This field indicates whether reserve prices are allowed for auction listings in this category. This field returns as <code>true</code> when the category supports reserve prices, or <code>false</code> if the eBay marketplace does not permit reserve prices or the category override blocks reserve prices (<b>orpa</b> is <code>true</code>).
    */
    private ?bool $reservePriceAllowed = null;
    
    /**
     * @var ProductIdentiferEnabledEnum|null $upcSupport This enumerated value indicates whether or not the category on the specified eBay site supports the use of Universal Product Codes (UPCs) to help create a listing.
    */
    private ?ProductIdentiferEnabledEnum $upcSupport = null;
    
    /**
     * @var bool|null $valueCategory When returned as <code>true</code>, this boolean indicates that the leaf category for the specified site is designated by eBay as a value category. Value categories can be used as a secondary category for a listing at no extra charge.
    */
    private ?bool $valueCategory = null;
    
    /**
     * @var bool|null $virtual If this field is returned as <code>true</code>, the corresponding category is an eBay virtual category, a category in which items may not be listed.<p>This field is only returned when <code>true</code> (not returned when false).</p>
    */
    private ?bool $virtual = null;
    
    /**
     * Instantiates a new CategoryPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CategoryPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CategoryPolicy {
        return new CategoryPolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the autoPayEnabled property value. If this field is returned as <code>true</code>, the corresponding category supports immediate payment for listings. The immediate payment feature is applicable to fixed-price listings, to auction listings with the 'Buy It Now' option enabled, and for a motor vehicle listing that requires an initial deposit. If the immediate payment feature is enabled for a listing, the buyer must pay immediately after clicking the 'Buy it Now' button. <p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @return bool|null
    */
    public function getAutoPayEnabled(): ?bool {
        return $this->autoPayEnabled;
    }

    /**
     * Gets the b2bVatEnabled property value. If this field is returned as <code>true</code>, the corresponding category supports business-to-business (B2B) VAT listings. If this field is not present, the category does not have B2B VAT listings. This feature is applicable to the eBay Germany (DE), Austria (AT), and Switzerland (CH) sites only.<p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @return bool|null
    */
    public function getB2bVatEnabled(): ?bool {
        return $this->b2bVatEnabled;
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
     * Gets the eanSupport property value. This enumerated value indicates whether or not European Article Numbers (EANs) are supported/required when listing products in the category.
     * @return ProductIdentiferEnabledEnum|null
    */
    public function getEanSupport(): ?ProductIdentiferEnabledEnum {
        return $this->eanSupport;
    }

    /**
     * Gets the expired property value. If this field is returned as <code>true</code>, the corresponding category is no longer a valid eBay category on the site, and items may not be listed in this category. You can use the <a href="/api-docs/sell/taxonomy/resources/category_tree/methods/getExpiredCategories" target="_blank">getExpiredCategories</a> method (of the <b>Taxonomy API</b>) to find the leaf category that replaced the expired category. <p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @return bool|null
    */
    public function getExpired(): ?bool {
        return $this->expired;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'autoPayEnabled' => fn(ParseNode $n) => $o->setAutoPayEnabled($n->getBooleanValue()),
            'b2bVatEnabled' => fn(ParseNode $n) => $o->setB2bVatEnabled($n->getBooleanValue()),
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'categoryTreeId' => fn(ParseNode $n) => $o->setCategoryTreeId($n->getStringValue()),
            'eanSupport' => fn(ParseNode $n) => $o->setEanSupport($n->getEnumValue(ProductIdentiferEnabledEnum::class)),
            'expired' => fn(ParseNode $n) => $o->setExpired($n->getBooleanValue()),
            'intangibleEnabled' => fn(ParseNode $n) => $o->setIntangibleEnabled($n->getBooleanValue()),
            'isbnSupport' => fn(ParseNode $n) => $o->setIsbnSupport($n->getEnumValue(ProductIdentiferEnabledEnum::class)),
            'lsd' => fn(ParseNode $n) => $o->setLsd($n->getBooleanValue()),
            'minimumReservePrice' => fn(ParseNode $n) => $o->setMinimumReservePrice($n->getFloatValue()),
            'orpa' => fn(ParseNode $n) => $o->setOrpa($n->getBooleanValue()),
            'orra' => fn(ParseNode $n) => $o->setOrra($n->getBooleanValue()),
            'paymentMethods' => fn(ParseNode $n) => $o->setPaymentMethods($n->getCollectionOfEnumValues(PaymentEnum::class)),
            'reduceReserveAllowed' => fn(ParseNode $n) => $o->setReduceReserveAllowed($n->getBooleanValue()),
            'reservePriceAllowed' => fn(ParseNode $n) => $o->setReservePriceAllowed($n->getBooleanValue()),
            'upcSupport' => fn(ParseNode $n) => $o->setUpcSupport($n->getEnumValue(ProductIdentiferEnabledEnum::class)),
            'valueCategory' => fn(ParseNode $n) => $o->setValueCategory($n->getBooleanValue()),
            'virtual' => fn(ParseNode $n) => $o->setVirtual($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the intangibleEnabled property value. If this field is returned as <code>true</code>, the category supports the listing of intangible goods or services.
     * @return bool|null
    */
    public function getIntangibleEnabled(): ?bool {
        return $this->intangibleEnabled;
    }

    /**
     * Gets the isbnSupport property value. This enumerated value indicates whether or not International Standard Book Numbers (ISBNs) are supported/required when listing products in the specified category.
     * @return ProductIdentiferEnabledEnum|null
    */
    public function getIsbnSupport(): ?ProductIdentiferEnabledEnum {
        return $this->isbnSupport;
    }

    /**
     * Gets the lsd property value. If this field (Lot Size Disabled) is returned as <code>true</code>, the corresponding category does not support lot listings. A lot listing is a listing that features multiple related items that must be purchased by one buyer in one transaction. <p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @return bool|null
    */
    public function getLsd(): ?bool {
        return $this->lsd;
    }

    /**
     * Gets the minimumReservePrice property value. Indicates the Minimum Reserve Price for an auction listing in this category. If there is no Minimum Reserve Price, a value of <code>0.0</code> is returned in this field.
     * @return float|null
    */
    public function getMinimumReservePrice(): ?float {
        return $this->minimumReservePrice;
    }

    /**
     * Gets the orpa property value. This field (Override Reserve Price Allowed) is returned as <code>true</code> if the eBay marketplace's default policy is to allow reserve prices for auction listings, but the corresponding category does not allow a reserve price. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This field is not returned if the marketplace does not permit reserve prices.</span></p>
     * @return bool|null
    */
    public function getOrpa(): ?bool {
        return $this->orpa;
    }

    /**
     * Gets the orra property value. If this field (Override Reduce Reserve Allowed) is returned as <code>true</code>, the seller can reduce or remove a reserve price that had already been reduced for an active auction listing.
     * @return bool|null
    */
    public function getOrra(): ?bool {
        return $this->orra;
    }

    /**
     * Gets the paymentMethods property value. An array that indicates the acceptable offline payment methods that can be used when listing an item for sale in the corresponding category.
     * @return array<PaymentEnum>|null
    */
    public function getPaymentMethods(): ?array {
        return $this->paymentMethods;
    }

    /**
     * Gets the reduceReserveAllowed property value. If this field (Reduce Reserve Allowed) is <code>true</code>, the corresponding leaf category allows the seller to reduce an item's reserve price. If false, this field is not returned in the response and the corresponding leaf category on the site do not normally allow sellers to reduce an item's reserve price.<p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @return bool|null
    */
    public function getReduceReserveAllowed(): ?bool {
        return $this->reduceReserveAllowed;
    }

    /**
     * Gets the reservePriceAllowed property value. This field indicates whether reserve prices are allowed for auction listings in this category. This field returns as <code>true</code> when the category supports reserve prices, or <code>false</code> if the eBay marketplace does not permit reserve prices or the category override blocks reserve prices (<b>orpa</b> is <code>true</code>).
     * @return bool|null
    */
    public function getReservePriceAllowed(): ?bool {
        return $this->reservePriceAllowed;
    }

    /**
     * Gets the upcSupport property value. This enumerated value indicates whether or not the category on the specified eBay site supports the use of Universal Product Codes (UPCs) to help create a listing.
     * @return ProductIdentiferEnabledEnum|null
    */
    public function getUpcSupport(): ?ProductIdentiferEnabledEnum {
        return $this->upcSupport;
    }

    /**
     * Gets the valueCategory property value. When returned as <code>true</code>, this boolean indicates that the leaf category for the specified site is designated by eBay as a value category. Value categories can be used as a secondary category for a listing at no extra charge.
     * @return bool|null
    */
    public function getValueCategory(): ?bool {
        return $this->valueCategory;
    }

    /**
     * Gets the virtual property value. If this field is returned as <code>true</code>, the corresponding category is an eBay virtual category, a category in which items may not be listed.<p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @return bool|null
    */
    public function getVirtual(): ?bool {
        return $this->virtual;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('autoPayEnabled', $this->getAutoPayEnabled());
        $writer->writeBooleanValue('b2bVatEnabled', $this->getB2bVatEnabled());
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeEnumValue('eanSupport', $this->getEanSupport());
        $writer->writeBooleanValue('expired', $this->getExpired());
        $writer->writeBooleanValue('intangibleEnabled', $this->getIntangibleEnabled());
        $writer->writeEnumValue('isbnSupport', $this->getIsbnSupport());
        $writer->writeBooleanValue('lsd', $this->getLsd());
        $writer->writeFloatValue('minimumReservePrice', $this->getMinimumReservePrice());
        $writer->writeBooleanValue('orpa', $this->getOrpa());
        $writer->writeBooleanValue('orra', $this->getOrra());
        $writer->writeCollectionOfEnumValues('paymentMethods', $this->getPaymentMethods());
        $writer->writeBooleanValue('reduceReserveAllowed', $this->getReduceReserveAllowed());
        $writer->writeBooleanValue('reservePriceAllowed', $this->getReservePriceAllowed());
        $writer->writeEnumValue('upcSupport', $this->getUpcSupport());
        $writer->writeBooleanValue('valueCategory', $this->getValueCategory());
        $writer->writeBooleanValue('virtual', $this->getVirtual());
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
     * Sets the autoPayEnabled property value. If this field is returned as <code>true</code>, the corresponding category supports immediate payment for listings. The immediate payment feature is applicable to fixed-price listings, to auction listings with the 'Buy It Now' option enabled, and for a motor vehicle listing that requires an initial deposit. If the immediate payment feature is enabled for a listing, the buyer must pay immediately after clicking the 'Buy it Now' button. <p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @param bool|null $value Value to set for the autoPayEnabled property.
    */
    public function setAutoPayEnabled(?bool $value): void {
        $this->autoPayEnabled = $value;
    }

    /**
     * Sets the b2bVatEnabled property value. If this field is returned as <code>true</code>, the corresponding category supports business-to-business (B2B) VAT listings. If this field is not present, the category does not have B2B VAT listings. This feature is applicable to the eBay Germany (DE), Austria (AT), and Switzerland (CH) sites only.<p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @param bool|null $value Value to set for the b2bVatEnabled property.
    */
    public function setB2bVatEnabled(?bool $value): void {
        $this->b2bVatEnabled = $value;
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
     * Sets the eanSupport property value. This enumerated value indicates whether or not European Article Numbers (EANs) are supported/required when listing products in the category.
     * @param ProductIdentiferEnabledEnum|null $value Value to set for the eanSupport property.
    */
    public function setEanSupport(?ProductIdentiferEnabledEnum $value): void {
        $this->eanSupport = $value;
    }

    /**
     * Sets the expired property value. If this field is returned as <code>true</code>, the corresponding category is no longer a valid eBay category on the site, and items may not be listed in this category. You can use the <a href="/api-docs/sell/taxonomy/resources/category_tree/methods/getExpiredCategories" target="_blank">getExpiredCategories</a> method (of the <b>Taxonomy API</b>) to find the leaf category that replaced the expired category. <p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @param bool|null $value Value to set for the expired property.
    */
    public function setExpired(?bool $value): void {
        $this->expired = $value;
    }

    /**
     * Sets the intangibleEnabled property value. If this field is returned as <code>true</code>, the category supports the listing of intangible goods or services.
     * @param bool|null $value Value to set for the intangibleEnabled property.
    */
    public function setIntangibleEnabled(?bool $value): void {
        $this->intangibleEnabled = $value;
    }

    /**
     * Sets the isbnSupport property value. This enumerated value indicates whether or not International Standard Book Numbers (ISBNs) are supported/required when listing products in the specified category.
     * @param ProductIdentiferEnabledEnum|null $value Value to set for the isbnSupport property.
    */
    public function setIsbnSupport(?ProductIdentiferEnabledEnum $value): void {
        $this->isbnSupport = $value;
    }

    /**
     * Sets the lsd property value. If this field (Lot Size Disabled) is returned as <code>true</code>, the corresponding category does not support lot listings. A lot listing is a listing that features multiple related items that must be purchased by one buyer in one transaction. <p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @param bool|null $value Value to set for the lsd property.
    */
    public function setLsd(?bool $value): void {
        $this->lsd = $value;
    }

    /**
     * Sets the minimumReservePrice property value. Indicates the Minimum Reserve Price for an auction listing in this category. If there is no Minimum Reserve Price, a value of <code>0.0</code> is returned in this field.
     * @param float|null $value Value to set for the minimumReservePrice property.
    */
    public function setMinimumReservePrice(?float $value): void {
        $this->minimumReservePrice = $value;
    }

    /**
     * Sets the orpa property value. This field (Override Reserve Price Allowed) is returned as <code>true</code> if the eBay marketplace's default policy is to allow reserve prices for auction listings, but the corresponding category does not allow a reserve price. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This field is not returned if the marketplace does not permit reserve prices.</span></p>
     * @param bool|null $value Value to set for the orpa property.
    */
    public function setOrpa(?bool $value): void {
        $this->orpa = $value;
    }

    /**
     * Sets the orra property value. If this field (Override Reduce Reserve Allowed) is returned as <code>true</code>, the seller can reduce or remove a reserve price that had already been reduced for an active auction listing.
     * @param bool|null $value Value to set for the orra property.
    */
    public function setOrra(?bool $value): void {
        $this->orra = $value;
    }

    /**
     * Sets the paymentMethods property value. An array that indicates the acceptable offline payment methods that can be used when listing an item for sale in the corresponding category.
     * @param array<PaymentEnum>|null $value Value to set for the paymentMethods property.
    */
    public function setPaymentMethods(?array $value): void {
        $this->paymentMethods = $value;
    }

    /**
     * Sets the reduceReserveAllowed property value. If this field (Reduce Reserve Allowed) is <code>true</code>, the corresponding leaf category allows the seller to reduce an item's reserve price. If false, this field is not returned in the response and the corresponding leaf category on the site do not normally allow sellers to reduce an item's reserve price.<p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @param bool|null $value Value to set for the reduceReserveAllowed property.
    */
    public function setReduceReserveAllowed(?bool $value): void {
        $this->reduceReserveAllowed = $value;
    }

    /**
     * Sets the reservePriceAllowed property value. This field indicates whether reserve prices are allowed for auction listings in this category. This field returns as <code>true</code> when the category supports reserve prices, or <code>false</code> if the eBay marketplace does not permit reserve prices or the category override blocks reserve prices (<b>orpa</b> is <code>true</code>).
     * @param bool|null $value Value to set for the reservePriceAllowed property.
    */
    public function setReservePriceAllowed(?bool $value): void {
        $this->reservePriceAllowed = $value;
    }

    /**
     * Sets the upcSupport property value. This enumerated value indicates whether or not the category on the specified eBay site supports the use of Universal Product Codes (UPCs) to help create a listing.
     * @param ProductIdentiferEnabledEnum|null $value Value to set for the upcSupport property.
    */
    public function setUpcSupport(?ProductIdentiferEnabledEnum $value): void {
        $this->upcSupport = $value;
    }

    /**
     * Sets the valueCategory property value. When returned as <code>true</code>, this boolean indicates that the leaf category for the specified site is designated by eBay as a value category. Value categories can be used as a secondary category for a listing at no extra charge.
     * @param bool|null $value Value to set for the valueCategory property.
    */
    public function setValueCategory(?bool $value): void {
        $this->valueCategory = $value;
    }

    /**
     * Sets the virtual property value. If this field is returned as <code>true</code>, the corresponding category is an eBay virtual category, a category in which items may not be listed.<p>This field is only returned when <code>true</code> (not returned when false).</p>
     * @param bool|null $value Value to set for the virtual property.
    */
    public function setVirtual(?bool $value): void {
        $this->virtual = $value;
    }

}
