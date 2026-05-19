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
 * This type provides fields that contains applicable Classified Ad policy metadata for the leaf categories returned for the marketplace.
*/
class ClassifiedAdPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adFormatEnabled This enumerated value indicates the type or status of available Classified Ad formats for this category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:AdFormatEnabledEnum'>eBay API documentation</a>
    */
    private ?string $adFormatEnabled = null;
    
    /**
     * @var string|null $categoryId The unique identifier of the eBay leaf category for which metadata is being returned.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryTreeId The unique identifier of the category tree.
    */
    private ?string $categoryTreeId = null;
    
    /**
     * @var bool|null $classifiedAdAutoAcceptEnabled Indicates whether the category supports the Best Offer Automatic Accept feature for Classified Ad listings.
    */
    private ?bool $classifiedAdAutoAcceptEnabled = null;
    
    /**
     * @var bool|null $classifiedAdAutoDeclineEnabled Indicates whether the category supports the Best Offer Automatic Reject feature for Classified Ad listings.
    */
    private ?bool $classifiedAdAutoDeclineEnabled = null;
    
    /**
     * @var string|null $classifiedAdBestOfferEnabled This enumerated value indicates if Best Offer is enabled, disabled, or required for Classified Ad listings in this category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ClassifiedAdBestOfferEnabledEnum'>eBay API documentation</a>
    */
    private ?string $classifiedAdBestOfferEnabled = null;
    
    /**
     * @var bool|null $classifiedAdCompanyNameEnabled Indicates whether this category supports including a company name in the seller's contact information. This element is for <b>For Sale By Owner</b> listings. 
    */
    private ?bool $classifiedAdCompanyNameEnabled = null;
    
    /**
     * @var bool|null $classifiedAdContactByAddressEnabled Indicates whether this category supports including an address in the seller's contact information. This element is for <b>For Sale By Owner</b> listings. 
    */
    private ?bool $classifiedAdContactByAddressEnabled = null;
    
    /**
     * @var bool|null $classifiedAdContactByEmailEnabled Indicates whether most categories support including an email address in the seller's contact information.
    */
    private ?bool $classifiedAdContactByEmailEnabled = null;
    
    /**
     * @var bool|null $classifiedAdContactByPhoneEnabled Indicates whether most categories support including a phone number in the seller's contact information.
    */
    private ?bool $classifiedAdContactByPhoneEnabled = null;
    
    /**
     * @var bool|null $classifiedAdCounterOfferEnabled Indicates whether counter offers are allowed on Best offers for the category.
    */
    private ?bool $classifiedAdCounterOfferEnabled = null;
    
    /**
     * @var string|null $classifiedAdPaymentMethodEnabled This enumerated value indicates support for the payment method being displayed to the user for the category. Even if enabled, checkout may or may not be enabled. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ClassifiedAdPaymentMethodEnabledEnum'>eBay API documentation</a>
    */
    private ?string $classifiedAdPaymentMethodEnabled = null;
    
    /**
     * @var int|null $classifiedAdPhoneCount Indicates how many contact phone numbers can be specified in contact information for the category. This element is for <b>For Sale By Owner</b> listings.
    */
    private ?int $classifiedAdPhoneCount = null;
    
    /**
     * @var bool|null $classifiedAdShippingMethodEnabled Indicates if shipping methods can be specified and displayed in the <b>View Item</b> page for the category.
    */
    private ?bool $classifiedAdShippingMethodEnabled = null;
    
    /**
     * @var int|null $classifiedAdStreetCount Indicates how many street addresses can be specified in contact information for the category. This element is for <b>For Sale By Owner</b> listings.
    */
    private ?int $classifiedAdStreetCount = null;
    
    /**
     * @var bool|null $sellerContactDetailsEnabled Indicates whether this category supports seller-level contact information for Classified Ad listings.
    */
    private ?bool $sellerContactDetailsEnabled = null;
    
    /**
     * Instantiates a new ClassifiedAdPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassifiedAdPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassifiedAdPolicy {
        return new ClassifiedAdPolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adFormatEnabled property value. This enumerated value indicates the type or status of available Classified Ad formats for this category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:AdFormatEnabledEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAdFormatEnabled(): ?string {
        return $this->adFormatEnabled;
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
     * Gets the classifiedAdAutoAcceptEnabled property value. Indicates whether the category supports the Best Offer Automatic Accept feature for Classified Ad listings.
     * @return bool|null
    */
    public function getClassifiedAdAutoAcceptEnabled(): ?bool {
        return $this->classifiedAdAutoAcceptEnabled;
    }

    /**
     * Gets the classifiedAdAutoDeclineEnabled property value. Indicates whether the category supports the Best Offer Automatic Reject feature for Classified Ad listings.
     * @return bool|null
    */
    public function getClassifiedAdAutoDeclineEnabled(): ?bool {
        return $this->classifiedAdAutoDeclineEnabled;
    }

    /**
     * Gets the classifiedAdBestOfferEnabled property value. This enumerated value indicates if Best Offer is enabled, disabled, or required for Classified Ad listings in this category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ClassifiedAdBestOfferEnabledEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getClassifiedAdBestOfferEnabled(): ?string {
        return $this->classifiedAdBestOfferEnabled;
    }

    /**
     * Gets the classifiedAdCompanyNameEnabled property value. Indicates whether this category supports including a company name in the seller's contact information. This element is for <b>For Sale By Owner</b> listings. 
     * @return bool|null
    */
    public function getClassifiedAdCompanyNameEnabled(): ?bool {
        return $this->classifiedAdCompanyNameEnabled;
    }

    /**
     * Gets the classifiedAdContactByAddressEnabled property value. Indicates whether this category supports including an address in the seller's contact information. This element is for <b>For Sale By Owner</b> listings. 
     * @return bool|null
    */
    public function getClassifiedAdContactByAddressEnabled(): ?bool {
        return $this->classifiedAdContactByAddressEnabled;
    }

    /**
     * Gets the classifiedAdContactByEmailEnabled property value. Indicates whether most categories support including an email address in the seller's contact information.
     * @return bool|null
    */
    public function getClassifiedAdContactByEmailEnabled(): ?bool {
        return $this->classifiedAdContactByEmailEnabled;
    }

    /**
     * Gets the classifiedAdContactByPhoneEnabled property value. Indicates whether most categories support including a phone number in the seller's contact information.
     * @return bool|null
    */
    public function getClassifiedAdContactByPhoneEnabled(): ?bool {
        return $this->classifiedAdContactByPhoneEnabled;
    }

    /**
     * Gets the classifiedAdCounterOfferEnabled property value. Indicates whether counter offers are allowed on Best offers for the category.
     * @return bool|null
    */
    public function getClassifiedAdCounterOfferEnabled(): ?bool {
        return $this->classifiedAdCounterOfferEnabled;
    }

    /**
     * Gets the classifiedAdPaymentMethodEnabled property value. This enumerated value indicates support for the payment method being displayed to the user for the category. Even if enabled, checkout may or may not be enabled. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ClassifiedAdPaymentMethodEnabledEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getClassifiedAdPaymentMethodEnabled(): ?string {
        return $this->classifiedAdPaymentMethodEnabled;
    }

    /**
     * Gets the classifiedAdPhoneCount property value. Indicates how many contact phone numbers can be specified in contact information for the category. This element is for <b>For Sale By Owner</b> listings.
     * @return int|null
    */
    public function getClassifiedAdPhoneCount(): ?int {
        return $this->classifiedAdPhoneCount;
    }

    /**
     * Gets the classifiedAdShippingMethodEnabled property value. Indicates if shipping methods can be specified and displayed in the <b>View Item</b> page for the category.
     * @return bool|null
    */
    public function getClassifiedAdShippingMethodEnabled(): ?bool {
        return $this->classifiedAdShippingMethodEnabled;
    }

    /**
     * Gets the classifiedAdStreetCount property value. Indicates how many street addresses can be specified in contact information for the category. This element is for <b>For Sale By Owner</b> listings.
     * @return int|null
    */
    public function getClassifiedAdStreetCount(): ?int {
        return $this->classifiedAdStreetCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adFormatEnabled' => fn(ParseNode $n) => $o->setAdFormatEnabled($n->getStringValue()),
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'categoryTreeId' => fn(ParseNode $n) => $o->setCategoryTreeId($n->getStringValue()),
            'classifiedAdAutoAcceptEnabled' => fn(ParseNode $n) => $o->setClassifiedAdAutoAcceptEnabled($n->getBooleanValue()),
            'classifiedAdAutoDeclineEnabled' => fn(ParseNode $n) => $o->setClassifiedAdAutoDeclineEnabled($n->getBooleanValue()),
            'classifiedAdBestOfferEnabled' => fn(ParseNode $n) => $o->setClassifiedAdBestOfferEnabled($n->getStringValue()),
            'classifiedAdCompanyNameEnabled' => fn(ParseNode $n) => $o->setClassifiedAdCompanyNameEnabled($n->getBooleanValue()),
            'classifiedAdContactByAddressEnabled' => fn(ParseNode $n) => $o->setClassifiedAdContactByAddressEnabled($n->getBooleanValue()),
            'classifiedAdContactByEmailEnabled' => fn(ParseNode $n) => $o->setClassifiedAdContactByEmailEnabled($n->getBooleanValue()),
            'classifiedAdContactByPhoneEnabled' => fn(ParseNode $n) => $o->setClassifiedAdContactByPhoneEnabled($n->getBooleanValue()),
            'classifiedAdCounterOfferEnabled' => fn(ParseNode $n) => $o->setClassifiedAdCounterOfferEnabled($n->getBooleanValue()),
            'classifiedAdPaymentMethodEnabled' => fn(ParseNode $n) => $o->setClassifiedAdPaymentMethodEnabled($n->getStringValue()),
            'classifiedAdPhoneCount' => fn(ParseNode $n) => $o->setClassifiedAdPhoneCount($n->getIntegerValue()),
            'classifiedAdShippingMethodEnabled' => fn(ParseNode $n) => $o->setClassifiedAdShippingMethodEnabled($n->getBooleanValue()),
            'classifiedAdStreetCount' => fn(ParseNode $n) => $o->setClassifiedAdStreetCount($n->getIntegerValue()),
            'sellerContactDetailsEnabled' => fn(ParseNode $n) => $o->setSellerContactDetailsEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the sellerContactDetailsEnabled property value. Indicates whether this category supports seller-level contact information for Classified Ad listings.
     * @return bool|null
    */
    public function getSellerContactDetailsEnabled(): ?bool {
        return $this->sellerContactDetailsEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adFormatEnabled', $this->getAdFormatEnabled());
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeBooleanValue('classifiedAdAutoAcceptEnabled', $this->getClassifiedAdAutoAcceptEnabled());
        $writer->writeBooleanValue('classifiedAdAutoDeclineEnabled', $this->getClassifiedAdAutoDeclineEnabled());
        $writer->writeStringValue('classifiedAdBestOfferEnabled', $this->getClassifiedAdBestOfferEnabled());
        $writer->writeBooleanValue('classifiedAdCompanyNameEnabled', $this->getClassifiedAdCompanyNameEnabled());
        $writer->writeBooleanValue('classifiedAdContactByAddressEnabled', $this->getClassifiedAdContactByAddressEnabled());
        $writer->writeBooleanValue('classifiedAdContactByEmailEnabled', $this->getClassifiedAdContactByEmailEnabled());
        $writer->writeBooleanValue('classifiedAdContactByPhoneEnabled', $this->getClassifiedAdContactByPhoneEnabled());
        $writer->writeBooleanValue('classifiedAdCounterOfferEnabled', $this->getClassifiedAdCounterOfferEnabled());
        $writer->writeStringValue('classifiedAdPaymentMethodEnabled', $this->getClassifiedAdPaymentMethodEnabled());
        $writer->writeIntegerValue('classifiedAdPhoneCount', $this->getClassifiedAdPhoneCount());
        $writer->writeBooleanValue('classifiedAdShippingMethodEnabled', $this->getClassifiedAdShippingMethodEnabled());
        $writer->writeIntegerValue('classifiedAdStreetCount', $this->getClassifiedAdStreetCount());
        $writer->writeBooleanValue('sellerContactDetailsEnabled', $this->getSellerContactDetailsEnabled());
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
     * Sets the adFormatEnabled property value. This enumerated value indicates the type or status of available Classified Ad formats for this category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:AdFormatEnabledEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the adFormatEnabled property.
    */
    public function setAdFormatEnabled(?string $value): void {
        $this->adFormatEnabled = $value;
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
     * Sets the classifiedAdAutoAcceptEnabled property value. Indicates whether the category supports the Best Offer Automatic Accept feature for Classified Ad listings.
     * @param bool|null $value Value to set for the classifiedAdAutoAcceptEnabled property.
    */
    public function setClassifiedAdAutoAcceptEnabled(?bool $value): void {
        $this->classifiedAdAutoAcceptEnabled = $value;
    }

    /**
     * Sets the classifiedAdAutoDeclineEnabled property value. Indicates whether the category supports the Best Offer Automatic Reject feature for Classified Ad listings.
     * @param bool|null $value Value to set for the classifiedAdAutoDeclineEnabled property.
    */
    public function setClassifiedAdAutoDeclineEnabled(?bool $value): void {
        $this->classifiedAdAutoDeclineEnabled = $value;
    }

    /**
     * Sets the classifiedAdBestOfferEnabled property value. This enumerated value indicates if Best Offer is enabled, disabled, or required for Classified Ad listings in this category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ClassifiedAdBestOfferEnabledEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the classifiedAdBestOfferEnabled property.
    */
    public function setClassifiedAdBestOfferEnabled(?string $value): void {
        $this->classifiedAdBestOfferEnabled = $value;
    }

    /**
     * Sets the classifiedAdCompanyNameEnabled property value. Indicates whether this category supports including a company name in the seller's contact information. This element is for <b>For Sale By Owner</b> listings. 
     * @param bool|null $value Value to set for the classifiedAdCompanyNameEnabled property.
    */
    public function setClassifiedAdCompanyNameEnabled(?bool $value): void {
        $this->classifiedAdCompanyNameEnabled = $value;
    }

    /**
     * Sets the classifiedAdContactByAddressEnabled property value. Indicates whether this category supports including an address in the seller's contact information. This element is for <b>For Sale By Owner</b> listings. 
     * @param bool|null $value Value to set for the classifiedAdContactByAddressEnabled property.
    */
    public function setClassifiedAdContactByAddressEnabled(?bool $value): void {
        $this->classifiedAdContactByAddressEnabled = $value;
    }

    /**
     * Sets the classifiedAdContactByEmailEnabled property value. Indicates whether most categories support including an email address in the seller's contact information.
     * @param bool|null $value Value to set for the classifiedAdContactByEmailEnabled property.
    */
    public function setClassifiedAdContactByEmailEnabled(?bool $value): void {
        $this->classifiedAdContactByEmailEnabled = $value;
    }

    /**
     * Sets the classifiedAdContactByPhoneEnabled property value. Indicates whether most categories support including a phone number in the seller's contact information.
     * @param bool|null $value Value to set for the classifiedAdContactByPhoneEnabled property.
    */
    public function setClassifiedAdContactByPhoneEnabled(?bool $value): void {
        $this->classifiedAdContactByPhoneEnabled = $value;
    }

    /**
     * Sets the classifiedAdCounterOfferEnabled property value. Indicates whether counter offers are allowed on Best offers for the category.
     * @param bool|null $value Value to set for the classifiedAdCounterOfferEnabled property.
    */
    public function setClassifiedAdCounterOfferEnabled(?bool $value): void {
        $this->classifiedAdCounterOfferEnabled = $value;
    }

    /**
     * Sets the classifiedAdPaymentMethodEnabled property value. This enumerated value indicates support for the payment method being displayed to the user for the category. Even if enabled, checkout may or may not be enabled. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ClassifiedAdPaymentMethodEnabledEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the classifiedAdPaymentMethodEnabled property.
    */
    public function setClassifiedAdPaymentMethodEnabled(?string $value): void {
        $this->classifiedAdPaymentMethodEnabled = $value;
    }

    /**
     * Sets the classifiedAdPhoneCount property value. Indicates how many contact phone numbers can be specified in contact information for the category. This element is for <b>For Sale By Owner</b> listings.
     * @param int|null $value Value to set for the classifiedAdPhoneCount property.
    */
    public function setClassifiedAdPhoneCount(?int $value): void {
        $this->classifiedAdPhoneCount = $value;
    }

    /**
     * Sets the classifiedAdShippingMethodEnabled property value. Indicates if shipping methods can be specified and displayed in the <b>View Item</b> page for the category.
     * @param bool|null $value Value to set for the classifiedAdShippingMethodEnabled property.
    */
    public function setClassifiedAdShippingMethodEnabled(?bool $value): void {
        $this->classifiedAdShippingMethodEnabled = $value;
    }

    /**
     * Sets the classifiedAdStreetCount property value. Indicates how many street addresses can be specified in contact information for the category. This element is for <b>For Sale By Owner</b> listings.
     * @param int|null $value Value to set for the classifiedAdStreetCount property.
    */
    public function setClassifiedAdStreetCount(?int $value): void {
        $this->classifiedAdStreetCount = $value;
    }

    /**
     * Sets the sellerContactDetailsEnabled property value. Indicates whether this category supports seller-level contact information for Classified Ad listings.
     * @param bool|null $value Value to set for the sellerContactDetailsEnabled property.
    */
    public function setSellerContactDetailsEnabled(?bool $value): void {
        $this->sellerContactDetailsEnabled = $value;
    }

}
