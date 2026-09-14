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
 * This type contains applicable motors listing policy metadata for the leaf categories returned for the marketplace.
*/
class MotorsListingPolicy implements AdditionalDataHolder, Parsable 
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
     * @var bool|null $depositSupported This field is returned as <code>true</code> if the corresponding category supports the use of a deposit/down payment on a motor vehicle listing. In an AddItem call, the seller can configure a down payment for a motor vehicle listing using the PaymentDetails container.
    */
    private ?bool $depositSupported = null;
    
    /**
     * @var AdFormatEnabledEnum|null $ebayMotorsProAdFormatEnabled Indicates whether or not eBay Motors Pro sellers can use classified ads in this category to sell their vehicles. This element is applicable for eBay Motors Pro users.
    */
    private ?AdFormatEnabledEnum $ebayMotorsProAdFormatEnabled = null;
    
    /**
     * @var bool|null $ebayMotorsProAutoAcceptEnabled Indicates whether or not the category supports the Best Offer Auto Accept feature for eBay Motors Pro listings. This element is for eBay Motors Pro users.
    */
    private ?bool $ebayMotorsProAutoAcceptEnabled = null;
    
    /**
     * @var bool|null $ebayMotorsProAutoDeclineEnabled Indicates whether or not the category allows auto-decline for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users.
    */
    private ?bool $ebayMotorsProAutoDeclineEnabled = null;
    
    /**
     * @var ClassifiedAdBestOfferEnabledEnum|null $ebayMotorsProBestOfferEnabled This enumerated value indicates whether or not Best Offer features are supported for eBay Motors Classified Ad listings in this category. This element is for eBay Motors Pro users.
    */
    private ?ClassifiedAdBestOfferEnabledEnum $ebayMotorsProBestOfferEnabled = null;
    
    /**
     * @var bool|null $ebayMotorsProCompanyNameEnabled Indicates whether this category supports including the company name in the seller's contact information. This element is for eBay Motors Pro users.
    */
    private ?bool $ebayMotorsProCompanyNameEnabled = null;
    
    /**
     * @var bool|null $ebayMotorsProContactByAddressEnabled Indicates whether this category supports including the address in the seller's contact information. This element is for eBay Motors Pro users.
    */
    private ?bool $ebayMotorsProContactByAddressEnabled = null;
    
    /**
     * @var bool|null $ebayMotorsProContactByEmailEnabled Indicates whether this category supports including an email address in the seller's contact information. This element is for eBay Motors Pro users.
    */
    private ?bool $ebayMotorsProContactByEmailEnabled = null;
    
    /**
     * @var bool|null $ebayMotorsProContactByPhoneEnabled Indicates whether this category supports including the telephone in the seller's contact information. This element is for eBay Motors Pro users.
    */
    private ?bool $ebayMotorsProContactByPhoneEnabled = null;
    
    /**
     * @var bool|null $ebayMotorsProCounterOfferEnabled Indicates whether counter offers are allowed on Best Offers for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
    */
    private ?bool $ebayMotorsProCounterOfferEnabled = null;
    
    /**
     * @var ClassifiedAdPaymentMethodEnabledEnum|null $ebayMotorsProPaymentMethodCheckOutEnabled This enumerated value indicates whether this category supports that the payment method should be displayed to the user for this category in an eBay Motors Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
    */
    private ?ClassifiedAdPaymentMethodEnabledEnum $ebayMotorsProPaymentMethodCheckOutEnabled = null;
    
    /**
     * @var int|null $ebayMotorsProPhoneCount Indicates the number of phone numbers that can be included through contact information for this category. This element is for eBay Motors Pro users.
    */
    private ?int $ebayMotorsProPhoneCount = null;
    
    /**
     * @var bool|null $ebayMotorsProSellerContactDetailsEnabled Indicates whether this category allows seller-level contact information for eBay Motors Classified Ad listings. A value of true means seller-level contact information is available for Classified Ad listings. This element is for eBay Motors Pro users.
    */
    private ?bool $ebayMotorsProSellerContactDetailsEnabled = null;
    
    /**
     * @var bool|null $ebayMotorsProShippingMethodEnabled Indicates if shipping options should be displayed to the user for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
    */
    private ?bool $ebayMotorsProShippingMethodEnabled = null;
    
    /**
     * @var int|null $ebayMotorsProStreetCount This field indicates the number of street addresses allowed in contact information for this category. This element is for eBay Motors Pro users.
    */
    private ?int $ebayMotorsProStreetCount = null;
    
    /**
     * @var bool|null $epidSupported If returned as <code>true</code>, this indicates the category supports the use of an eBay Product ID (e.g. ePID) to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites.
    */
    private ?bool $epidSupported = null;
    
    /**
     * @var bool|null $kTypeSupported This field indicates whether or not the category supports the use of a K type to identify the cars and trucks compatible with a motor vehicle part or accessory. Only the AU, DE, ES, FR, IT, and UK marketplaces support the use of K types. See <a href="/api-docs/user-guides/static/trading-user-guide/manually-specify-compatibility.html#ktype" target="_blank">Compatibility by K type</a> for more information
    */
    private ?bool $kTypeSupported = null;
    
    /**
     * @var array<LocalListingDistance>|null $localListingDistances This array shows the supported distances (in miles) for different types of Local Market subscription types in this category. Motor vehicle listings will be shown to buyers located within these proximities of the vehicle's location.
    */
    private ?array $localListingDistances = null;
    
    /**
     * @var AdFormatEnabledEnum|null $localMarketAdFormatEnabled Specifies whether this category supports Motor Local Market Classified Ad listings.
    */
    private ?AdFormatEnabledEnum $localMarketAdFormatEnabled = null;
    
    /**
     * @var bool|null $localMarketAutoAcceptEnabled Specifies whether this category supports auto-accept for Best Offers for Motors Local Market Classified Ads.
    */
    private ?bool $localMarketAutoAcceptEnabled = null;
    
    /**
     * @var bool|null $localMarketAutoDeclineEnabled Specifies whether this category supports auto-decline for Best Offers for Motors Local Market Classified Ads.
    */
    private ?bool $localMarketAutoDeclineEnabled = null;
    
    /**
     * @var ClassifiedAdBestOfferEnabledEnum|null $localMarketBestOfferEnabled Indicates if Best Offer is enabled/required for Motors Local Market Classified Ad listings in this category. 
    */
    private ?ClassifiedAdBestOfferEnabledEnum $localMarketBestOfferEnabled = null;
    
    /**
     * @var bool|null $localMarketCompanyNameEnabled Indicates whether the category supports the seller's company name being specified when using Motors Local Market classified ads.
    */
    private ?bool $localMarketCompanyNameEnabled = null;
    
    /**
     * @var bool|null $localMarketContactByAddressEnabled Indicates whether this category supports including the address in the seller's contact information.
    */
    private ?bool $localMarketContactByAddressEnabled = null;
    
    /**
     * @var bool|null $localMarketContactByEmailEnabled Indicates whether the category supports including an email address in the seller's contact information. 
    */
    private ?bool $localMarketContactByEmailEnabled = null;
    
    /**
     * @var bool|null $localMarketContactByPhoneEnabled Indicates whether this category supports including the telephone in the seller's contact information.
    */
    private ?bool $localMarketContactByPhoneEnabled = null;
    
    /**
     * @var bool|null $localMarketCounterOfferEnabled Indicates whether counter offers are allowed on Best Offers for this category for Motors Local Market Classified Ad listings.
    */
    private ?bool $localMarketCounterOfferEnabled = null;
    
    /**
     * @var bool|null $localMarketNonSubscription Indicates whether the category supports a seller creating a Motors Local Market listing without a subscription. This feature is only available to licensed vehicle dealers.
    */
    private ?bool $localMarketNonSubscription = null;
    
    /**
     * @var ClassifiedAdPaymentMethodEnabledEnum|null $localMarketPaymentMethodCheckOutEnabled Indicates if the payment method should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled.
    */
    private ?ClassifiedAdPaymentMethodEnabledEnum $localMarketPaymentMethodCheckOutEnabled = null;
    
    /**
     * @var int|null $localMarketPhoneCount Indicates the number of phone numbers that can be included through contact information for this category.
    */
    private ?int $localMarketPhoneCount = null;
    
    /**
     * @var bool|null $localMarketPremiumSubscription Indicates whether the category supports the Premium level subscription Motors Local Market listings. This feature is only available to licensed vehicle dealers.
    */
    private ?bool $localMarketPremiumSubscription = null;
    
    /**
     * @var bool|null $localMarketRegularSubscription Indicates whether the category supports the Regular level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
    */
    private ?bool $localMarketRegularSubscription = null;
    
    /**
     * @var bool|null $localMarketSellerContactDetailsEnabled Specifies the whether this category allows seller-level contact information for Motors Local Market Classified Ad listings.
    */
    private ?bool $localMarketSellerContactDetailsEnabled = null;
    
    /**
     * @var bool|null $localMarketShippingMethodEnabled Indicates if shipping methods should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled.
    */
    private ?bool $localMarketShippingMethodEnabled = null;
    
    /**
     * @var bool|null $localMarketSpecialitySubscription Indicates whether the category supports the Specialty level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
    */
    private ?bool $localMarketSpecialitySubscription = null;
    
    /**
     * @var int|null $localMarketStreetCount Indicates which address option is enabled for the seller's contact information.
    */
    private ?int $localMarketStreetCount = null;
    
    /**
     * @var int|null $maxGranularFitmentCount Indicates the maximum number of compatible applications allowed per item when adding or revising items with compatibilities provided at the most detailed granularity. For example, in Car and Truck Parts on the US site, the most granular application would include Year, Make, Model, Trim, and Engine.
    */
    private ?int $maxGranularFitmentCount = null;
    
    /**
     * @var int|null $maxItemCompatibility Indicates the maximum number of compatible applications allowed per item when adding or revising items. This is relevant for specifying parts compatibility by application manually only. See <a href="/api-docs/user-guides/static/trading-user-guide/manually-specify-compatibility.html" target="_blank">Specify parts compatibility manually</a> and <a href="/api-docs/sell/static/inventory/managing-product-compatibility.html" target="_blank">Managing product compatibility</a> for more information.
    */
    private ?int $maxItemCompatibility = null;
    
    /**
     * @var int|null $minItemCompatibility Indicates the minimum number of required compatible applications for listing items. A value of <code>0</code> indicates it is not mandatory to specify parts compatibilities when listing.
    */
    private ?int $minItemCompatibility = null;
    
    /**
     * @var GeographicExposureEnum|null $nonSubscription The value in this field indicates whether the category supports Motors Local Market listings if the seller does not have a vehicle subscription.
    */
    private ?GeographicExposureEnum $nonSubscription = null;
    
    /**
     * @var GeographicExposureEnum|null $premiumSubscription The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Premium vehicle subscription.
    */
    private ?GeographicExposureEnum $premiumSubscription = null;
    
    /**
     * @var GeographicExposureEnum|null $regularSubscription The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Regular vehicle subscription.
    */
    private ?GeographicExposureEnum $regularSubscription = null;
    
    /**
     * @var bool|null $sellerProvidedTitleSupported This field is returned as <code>true</code> if the corresponding category supports the use of a seller-provided title for a motor vehicle listing on the US or Canada Motors marketplaces. A seller-provided title is a descriptive title, given by the seller, that appears below eBay's pre-filled listing title for the motor vehicle. Visually, the seller-provided title is similar to a subtitle on other types of eBay listings (non-vehicle). A seller-provided title can assist in helping buyers discover the vehicle.
    */
    private ?bool $sellerProvidedTitleSupported = null;
    
    /**
     * @var GeographicExposureEnum|null $specialitySubscription The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Specialty vehicle subscription.
    */
    private ?GeographicExposureEnum $specialitySubscription = null;
    
    /**
     * @var bool|null $vinSupported Indicates if Vehicle Identification Number is supported.
    */
    private ?bool $vinSupported = null;
    
    /**
     * @var bool|null $vrmSupported Indicates if Vehicle Registration Mark is supported.
    */
    private ?bool $vrmSupported = null;
    
    /**
     * Instantiates a new MotorsListingPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MotorsListingPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MotorsListingPolicy {
        return new MotorsListingPolicy();
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
     * Gets the depositSupported property value. This field is returned as <code>true</code> if the corresponding category supports the use of a deposit/down payment on a motor vehicle listing. In an AddItem call, the seller can configure a down payment for a motor vehicle listing using the PaymentDetails container.
     * @return bool|null
    */
    public function getDepositSupported(): ?bool {
        return $this->depositSupported;
    }

    /**
     * Gets the ebayMotorsProAdFormatEnabled property value. Indicates whether or not eBay Motors Pro sellers can use classified ads in this category to sell their vehicles. This element is applicable for eBay Motors Pro users.
     * @return AdFormatEnabledEnum|null
    */
    public function getEbayMotorsProAdFormatEnabled(): ?AdFormatEnabledEnum {
        return $this->ebayMotorsProAdFormatEnabled;
    }

    /**
     * Gets the ebayMotorsProAutoAcceptEnabled property value. Indicates whether or not the category supports the Best Offer Auto Accept feature for eBay Motors Pro listings. This element is for eBay Motors Pro users.
     * @return bool|null
    */
    public function getEbayMotorsProAutoAcceptEnabled(): ?bool {
        return $this->ebayMotorsProAutoAcceptEnabled;
    }

    /**
     * Gets the ebayMotorsProAutoDeclineEnabled property value. Indicates whether or not the category allows auto-decline for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users.
     * @return bool|null
    */
    public function getEbayMotorsProAutoDeclineEnabled(): ?bool {
        return $this->ebayMotorsProAutoDeclineEnabled;
    }

    /**
     * Gets the ebayMotorsProBestOfferEnabled property value. This enumerated value indicates whether or not Best Offer features are supported for eBay Motors Classified Ad listings in this category. This element is for eBay Motors Pro users.
     * @return ClassifiedAdBestOfferEnabledEnum|null
    */
    public function getEbayMotorsProBestOfferEnabled(): ?ClassifiedAdBestOfferEnabledEnum {
        return $this->ebayMotorsProBestOfferEnabled;
    }

    /**
     * Gets the ebayMotorsProCompanyNameEnabled property value. Indicates whether this category supports including the company name in the seller's contact information. This element is for eBay Motors Pro users.
     * @return bool|null
    */
    public function getEbayMotorsProCompanyNameEnabled(): ?bool {
        return $this->ebayMotorsProCompanyNameEnabled;
    }

    /**
     * Gets the ebayMotorsProContactByAddressEnabled property value. Indicates whether this category supports including the address in the seller's contact information. This element is for eBay Motors Pro users.
     * @return bool|null
    */
    public function getEbayMotorsProContactByAddressEnabled(): ?bool {
        return $this->ebayMotorsProContactByAddressEnabled;
    }

    /**
     * Gets the ebayMotorsProContactByEmailEnabled property value. Indicates whether this category supports including an email address in the seller's contact information. This element is for eBay Motors Pro users.
     * @return bool|null
    */
    public function getEbayMotorsProContactByEmailEnabled(): ?bool {
        return $this->ebayMotorsProContactByEmailEnabled;
    }

    /**
     * Gets the ebayMotorsProContactByPhoneEnabled property value. Indicates whether this category supports including the telephone in the seller's contact information. This element is for eBay Motors Pro users.
     * @return bool|null
    */
    public function getEbayMotorsProContactByPhoneEnabled(): ?bool {
        return $this->ebayMotorsProContactByPhoneEnabled;
    }

    /**
     * Gets the ebayMotorsProCounterOfferEnabled property value. Indicates whether counter offers are allowed on Best Offers for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     * @return bool|null
    */
    public function getEbayMotorsProCounterOfferEnabled(): ?bool {
        return $this->ebayMotorsProCounterOfferEnabled;
    }

    /**
     * Gets the ebayMotorsProPaymentMethodCheckOutEnabled property value. This enumerated value indicates whether this category supports that the payment method should be displayed to the user for this category in an eBay Motors Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
     * @return ClassifiedAdPaymentMethodEnabledEnum|null
    */
    public function getEbayMotorsProPaymentMethodCheckOutEnabled(): ?ClassifiedAdPaymentMethodEnabledEnum {
        return $this->ebayMotorsProPaymentMethodCheckOutEnabled;
    }

    /**
     * Gets the ebayMotorsProPhoneCount property value. Indicates the number of phone numbers that can be included through contact information for this category. This element is for eBay Motors Pro users.
     * @return int|null
    */
    public function getEbayMotorsProPhoneCount(): ?int {
        return $this->ebayMotorsProPhoneCount;
    }

    /**
     * Gets the ebayMotorsProSellerContactDetailsEnabled property value. Indicates whether this category allows seller-level contact information for eBay Motors Classified Ad listings. A value of true means seller-level contact information is available for Classified Ad listings. This element is for eBay Motors Pro users.
     * @return bool|null
    */
    public function getEbayMotorsProSellerContactDetailsEnabled(): ?bool {
        return $this->ebayMotorsProSellerContactDetailsEnabled;
    }

    /**
     * Gets the ebayMotorsProShippingMethodEnabled property value. Indicates if shipping options should be displayed to the user for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     * @return bool|null
    */
    public function getEbayMotorsProShippingMethodEnabled(): ?bool {
        return $this->ebayMotorsProShippingMethodEnabled;
    }

    /**
     * Gets the ebayMotorsProStreetCount property value. This field indicates the number of street addresses allowed in contact information for this category. This element is for eBay Motors Pro users.
     * @return int|null
    */
    public function getEbayMotorsProStreetCount(): ?int {
        return $this->ebayMotorsProStreetCount;
    }

    /**
     * Gets the epidSupported property value. If returned as <code>true</code>, this indicates the category supports the use of an eBay Product ID (e.g. ePID) to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites.
     * @return bool|null
    */
    public function getEpidSupported(): ?bool {
        return $this->epidSupported;
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
            'depositSupported' => fn(ParseNode $n) => $o->setDepositSupported($n->getBooleanValue()),
            'ebayMotorsProAdFormatEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProAdFormatEnabled($n->getEnumValue(AdFormatEnabledEnum::class)),
            'ebayMotorsProAutoAcceptEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProAutoAcceptEnabled($n->getBooleanValue()),
            'ebayMotorsProAutoDeclineEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProAutoDeclineEnabled($n->getBooleanValue()),
            'ebayMotorsProBestOfferEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProBestOfferEnabled($n->getEnumValue(ClassifiedAdBestOfferEnabledEnum::class)),
            'ebayMotorsProCompanyNameEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProCompanyNameEnabled($n->getBooleanValue()),
            'ebayMotorsProContactByAddressEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProContactByAddressEnabled($n->getBooleanValue()),
            'ebayMotorsProContactByEmailEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProContactByEmailEnabled($n->getBooleanValue()),
            'ebayMotorsProContactByPhoneEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProContactByPhoneEnabled($n->getBooleanValue()),
            'ebayMotorsProCounterOfferEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProCounterOfferEnabled($n->getBooleanValue()),
            'ebayMotorsProPaymentMethodCheckOutEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProPaymentMethodCheckOutEnabled($n->getEnumValue(ClassifiedAdPaymentMethodEnabledEnum::class)),
            'ebayMotorsProPhoneCount' => fn(ParseNode $n) => $o->setEbayMotorsProPhoneCount($n->getIntegerValue()),
            'ebayMotorsProSellerContactDetailsEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProSellerContactDetailsEnabled($n->getBooleanValue()),
            'ebayMotorsProShippingMethodEnabled' => fn(ParseNode $n) => $o->setEbayMotorsProShippingMethodEnabled($n->getBooleanValue()),
            'ebayMotorsProStreetCount' => fn(ParseNode $n) => $o->setEbayMotorsProStreetCount($n->getIntegerValue()),
            'epidSupported' => fn(ParseNode $n) => $o->setEpidSupported($n->getBooleanValue()),
            'kTypeSupported' => fn(ParseNode $n) => $o->setKTypeSupported($n->getBooleanValue()),
            'localListingDistances' => fn(ParseNode $n) => $o->setLocalListingDistances($n->getCollectionOfObjectValues([LocalListingDistance::class, 'createFromDiscriminatorValue'])),
            'localMarketAdFormatEnabled' => fn(ParseNode $n) => $o->setLocalMarketAdFormatEnabled($n->getEnumValue(AdFormatEnabledEnum::class)),
            'localMarketAutoAcceptEnabled' => fn(ParseNode $n) => $o->setLocalMarketAutoAcceptEnabled($n->getBooleanValue()),
            'localMarketAutoDeclineEnabled' => fn(ParseNode $n) => $o->setLocalMarketAutoDeclineEnabled($n->getBooleanValue()),
            'localMarketBestOfferEnabled' => fn(ParseNode $n) => $o->setLocalMarketBestOfferEnabled($n->getEnumValue(ClassifiedAdBestOfferEnabledEnum::class)),
            'localMarketCompanyNameEnabled' => fn(ParseNode $n) => $o->setLocalMarketCompanyNameEnabled($n->getBooleanValue()),
            'localMarketContactByAddressEnabled' => fn(ParseNode $n) => $o->setLocalMarketContactByAddressEnabled($n->getBooleanValue()),
            'localMarketContactByEmailEnabled' => fn(ParseNode $n) => $o->setLocalMarketContactByEmailEnabled($n->getBooleanValue()),
            'localMarketContactByPhoneEnabled' => fn(ParseNode $n) => $o->setLocalMarketContactByPhoneEnabled($n->getBooleanValue()),
            'localMarketCounterOfferEnabled' => fn(ParseNode $n) => $o->setLocalMarketCounterOfferEnabled($n->getBooleanValue()),
            'localMarketNonSubscription' => fn(ParseNode $n) => $o->setLocalMarketNonSubscription($n->getBooleanValue()),
            'localMarketPaymentMethodCheckOutEnabled' => fn(ParseNode $n) => $o->setLocalMarketPaymentMethodCheckOutEnabled($n->getEnumValue(ClassifiedAdPaymentMethodEnabledEnum::class)),
            'localMarketPhoneCount' => fn(ParseNode $n) => $o->setLocalMarketPhoneCount($n->getIntegerValue()),
            'localMarketPremiumSubscription' => fn(ParseNode $n) => $o->setLocalMarketPremiumSubscription($n->getBooleanValue()),
            'localMarketRegularSubscription' => fn(ParseNode $n) => $o->setLocalMarketRegularSubscription($n->getBooleanValue()),
            'localMarketSellerContactDetailsEnabled' => fn(ParseNode $n) => $o->setLocalMarketSellerContactDetailsEnabled($n->getBooleanValue()),
            'localMarketShippingMethodEnabled' => fn(ParseNode $n) => $o->setLocalMarketShippingMethodEnabled($n->getBooleanValue()),
            'localMarketSpecialitySubscription' => fn(ParseNode $n) => $o->setLocalMarketSpecialitySubscription($n->getBooleanValue()),
            'localMarketStreetCount' => fn(ParseNode $n) => $o->setLocalMarketStreetCount($n->getIntegerValue()),
            'maxGranularFitmentCount' => fn(ParseNode $n) => $o->setMaxGranularFitmentCount($n->getIntegerValue()),
            'maxItemCompatibility' => fn(ParseNode $n) => $o->setMaxItemCompatibility($n->getIntegerValue()),
            'minItemCompatibility' => fn(ParseNode $n) => $o->setMinItemCompatibility($n->getIntegerValue()),
            'nonSubscription' => fn(ParseNode $n) => $o->setNonSubscription($n->getEnumValue(GeographicExposureEnum::class)),
            'premiumSubscription' => fn(ParseNode $n) => $o->setPremiumSubscription($n->getEnumValue(GeographicExposureEnum::class)),
            'regularSubscription' => fn(ParseNode $n) => $o->setRegularSubscription($n->getEnumValue(GeographicExposureEnum::class)),
            'sellerProvidedTitleSupported' => fn(ParseNode $n) => $o->setSellerProvidedTitleSupported($n->getBooleanValue()),
            'specialitySubscription' => fn(ParseNode $n) => $o->setSpecialitySubscription($n->getEnumValue(GeographicExposureEnum::class)),
            'vinSupported' => fn(ParseNode $n) => $o->setVinSupported($n->getBooleanValue()),
            'vrmSupported' => fn(ParseNode $n) => $o->setVrmSupported($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the kTypeSupported property value. This field indicates whether or not the category supports the use of a K type to identify the cars and trucks compatible with a motor vehicle part or accessory. Only the AU, DE, ES, FR, IT, and UK marketplaces support the use of K types. See <a href="/api-docs/user-guides/static/trading-user-guide/manually-specify-compatibility.html#ktype" target="_blank">Compatibility by K type</a> for more information
     * @return bool|null
    */
    public function getKTypeSupported(): ?bool {
        return $this->kTypeSupported;
    }

    /**
     * Gets the localListingDistances property value. This array shows the supported distances (in miles) for different types of Local Market subscription types in this category. Motor vehicle listings will be shown to buyers located within these proximities of the vehicle's location.
     * @return array<LocalListingDistance>|null
    */
    public function getLocalListingDistances(): ?array {
        return $this->localListingDistances;
    }

    /**
     * Gets the localMarketAdFormatEnabled property value. Specifies whether this category supports Motor Local Market Classified Ad listings.
     * @return AdFormatEnabledEnum|null
    */
    public function getLocalMarketAdFormatEnabled(): ?AdFormatEnabledEnum {
        return $this->localMarketAdFormatEnabled;
    }

    /**
     * Gets the localMarketAutoAcceptEnabled property value. Specifies whether this category supports auto-accept for Best Offers for Motors Local Market Classified Ads.
     * @return bool|null
    */
    public function getLocalMarketAutoAcceptEnabled(): ?bool {
        return $this->localMarketAutoAcceptEnabled;
    }

    /**
     * Gets the localMarketAutoDeclineEnabled property value. Specifies whether this category supports auto-decline for Best Offers for Motors Local Market Classified Ads.
     * @return bool|null
    */
    public function getLocalMarketAutoDeclineEnabled(): ?bool {
        return $this->localMarketAutoDeclineEnabled;
    }

    /**
     * Gets the localMarketBestOfferEnabled property value. Indicates if Best Offer is enabled/required for Motors Local Market Classified Ad listings in this category. 
     * @return ClassifiedAdBestOfferEnabledEnum|null
    */
    public function getLocalMarketBestOfferEnabled(): ?ClassifiedAdBestOfferEnabledEnum {
        return $this->localMarketBestOfferEnabled;
    }

    /**
     * Gets the localMarketCompanyNameEnabled property value. Indicates whether the category supports the seller's company name being specified when using Motors Local Market classified ads.
     * @return bool|null
    */
    public function getLocalMarketCompanyNameEnabled(): ?bool {
        return $this->localMarketCompanyNameEnabled;
    }

    /**
     * Gets the localMarketContactByAddressEnabled property value. Indicates whether this category supports including the address in the seller's contact information.
     * @return bool|null
    */
    public function getLocalMarketContactByAddressEnabled(): ?bool {
        return $this->localMarketContactByAddressEnabled;
    }

    /**
     * Gets the localMarketContactByEmailEnabled property value. Indicates whether the category supports including an email address in the seller's contact information. 
     * @return bool|null
    */
    public function getLocalMarketContactByEmailEnabled(): ?bool {
        return $this->localMarketContactByEmailEnabled;
    }

    /**
     * Gets the localMarketContactByPhoneEnabled property value. Indicates whether this category supports including the telephone in the seller's contact information.
     * @return bool|null
    */
    public function getLocalMarketContactByPhoneEnabled(): ?bool {
        return $this->localMarketContactByPhoneEnabled;
    }

    /**
     * Gets the localMarketCounterOfferEnabled property value. Indicates whether counter offers are allowed on Best Offers for this category for Motors Local Market Classified Ad listings.
     * @return bool|null
    */
    public function getLocalMarketCounterOfferEnabled(): ?bool {
        return $this->localMarketCounterOfferEnabled;
    }

    /**
     * Gets the localMarketNonSubscription property value. Indicates whether the category supports a seller creating a Motors Local Market listing without a subscription. This feature is only available to licensed vehicle dealers.
     * @return bool|null
    */
    public function getLocalMarketNonSubscription(): ?bool {
        return $this->localMarketNonSubscription;
    }

    /**
     * Gets the localMarketPaymentMethodCheckOutEnabled property value. Indicates if the payment method should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled.
     * @return ClassifiedAdPaymentMethodEnabledEnum|null
    */
    public function getLocalMarketPaymentMethodCheckOutEnabled(): ?ClassifiedAdPaymentMethodEnabledEnum {
        return $this->localMarketPaymentMethodCheckOutEnabled;
    }

    /**
     * Gets the localMarketPhoneCount property value. Indicates the number of phone numbers that can be included through contact information for this category.
     * @return int|null
    */
    public function getLocalMarketPhoneCount(): ?int {
        return $this->localMarketPhoneCount;
    }

    /**
     * Gets the localMarketPremiumSubscription property value. Indicates whether the category supports the Premium level subscription Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     * @return bool|null
    */
    public function getLocalMarketPremiumSubscription(): ?bool {
        return $this->localMarketPremiumSubscription;
    }

    /**
     * Gets the localMarketRegularSubscription property value. Indicates whether the category supports the Regular level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     * @return bool|null
    */
    public function getLocalMarketRegularSubscription(): ?bool {
        return $this->localMarketRegularSubscription;
    }

    /**
     * Gets the localMarketSellerContactDetailsEnabled property value. Specifies the whether this category allows seller-level contact information for Motors Local Market Classified Ad listings.
     * @return bool|null
    */
    public function getLocalMarketSellerContactDetailsEnabled(): ?bool {
        return $this->localMarketSellerContactDetailsEnabled;
    }

    /**
     * Gets the localMarketShippingMethodEnabled property value. Indicates if shipping methods should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled.
     * @return bool|null
    */
    public function getLocalMarketShippingMethodEnabled(): ?bool {
        return $this->localMarketShippingMethodEnabled;
    }

    /**
     * Gets the localMarketSpecialitySubscription property value. Indicates whether the category supports the Specialty level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     * @return bool|null
    */
    public function getLocalMarketSpecialitySubscription(): ?bool {
        return $this->localMarketSpecialitySubscription;
    }

    /**
     * Gets the localMarketStreetCount property value. Indicates which address option is enabled for the seller's contact information.
     * @return int|null
    */
    public function getLocalMarketStreetCount(): ?int {
        return $this->localMarketStreetCount;
    }

    /**
     * Gets the maxGranularFitmentCount property value. Indicates the maximum number of compatible applications allowed per item when adding or revising items with compatibilities provided at the most detailed granularity. For example, in Car and Truck Parts on the US site, the most granular application would include Year, Make, Model, Trim, and Engine.
     * @return int|null
    */
    public function getMaxGranularFitmentCount(): ?int {
        return $this->maxGranularFitmentCount;
    }

    /**
     * Gets the maxItemCompatibility property value. Indicates the maximum number of compatible applications allowed per item when adding or revising items. This is relevant for specifying parts compatibility by application manually only. See <a href="/api-docs/user-guides/static/trading-user-guide/manually-specify-compatibility.html" target="_blank">Specify parts compatibility manually</a> and <a href="/api-docs/sell/static/inventory/managing-product-compatibility.html" target="_blank">Managing product compatibility</a> for more information.
     * @return int|null
    */
    public function getMaxItemCompatibility(): ?int {
        return $this->maxItemCompatibility;
    }

    /**
     * Gets the minItemCompatibility property value. Indicates the minimum number of required compatible applications for listing items. A value of <code>0</code> indicates it is not mandatory to specify parts compatibilities when listing.
     * @return int|null
    */
    public function getMinItemCompatibility(): ?int {
        return $this->minItemCompatibility;
    }

    /**
     * Gets the nonSubscription property value. The value in this field indicates whether the category supports Motors Local Market listings if the seller does not have a vehicle subscription.
     * @return GeographicExposureEnum|null
    */
    public function getNonSubscription(): ?GeographicExposureEnum {
        return $this->nonSubscription;
    }

    /**
     * Gets the premiumSubscription property value. The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Premium vehicle subscription.
     * @return GeographicExposureEnum|null
    */
    public function getPremiumSubscription(): ?GeographicExposureEnum {
        return $this->premiumSubscription;
    }

    /**
     * Gets the regularSubscription property value. The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Regular vehicle subscription.
     * @return GeographicExposureEnum|null
    */
    public function getRegularSubscription(): ?GeographicExposureEnum {
        return $this->regularSubscription;
    }

    /**
     * Gets the sellerProvidedTitleSupported property value. This field is returned as <code>true</code> if the corresponding category supports the use of a seller-provided title for a motor vehicle listing on the US or Canada Motors marketplaces. A seller-provided title is a descriptive title, given by the seller, that appears below eBay's pre-filled listing title for the motor vehicle. Visually, the seller-provided title is similar to a subtitle on other types of eBay listings (non-vehicle). A seller-provided title can assist in helping buyers discover the vehicle.
     * @return bool|null
    */
    public function getSellerProvidedTitleSupported(): ?bool {
        return $this->sellerProvidedTitleSupported;
    }

    /**
     * Gets the specialitySubscription property value. The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Specialty vehicle subscription.
     * @return GeographicExposureEnum|null
    */
    public function getSpecialitySubscription(): ?GeographicExposureEnum {
        return $this->specialitySubscription;
    }

    /**
     * Gets the vinSupported property value. Indicates if Vehicle Identification Number is supported.
     * @return bool|null
    */
    public function getVinSupported(): ?bool {
        return $this->vinSupported;
    }

    /**
     * Gets the vrmSupported property value. Indicates if Vehicle Registration Mark is supported.
     * @return bool|null
    */
    public function getVrmSupported(): ?bool {
        return $this->vrmSupported;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeBooleanValue('depositSupported', $this->getDepositSupported());
        $writer->writeEnumValue('ebayMotorsProAdFormatEnabled', $this->getEbayMotorsProAdFormatEnabled());
        $writer->writeBooleanValue('ebayMotorsProAutoAcceptEnabled', $this->getEbayMotorsProAutoAcceptEnabled());
        $writer->writeBooleanValue('ebayMotorsProAutoDeclineEnabled', $this->getEbayMotorsProAutoDeclineEnabled());
        $writer->writeEnumValue('ebayMotorsProBestOfferEnabled', $this->getEbayMotorsProBestOfferEnabled());
        $writer->writeBooleanValue('ebayMotorsProCompanyNameEnabled', $this->getEbayMotorsProCompanyNameEnabled());
        $writer->writeBooleanValue('ebayMotorsProContactByAddressEnabled', $this->getEbayMotorsProContactByAddressEnabled());
        $writer->writeBooleanValue('ebayMotorsProContactByEmailEnabled', $this->getEbayMotorsProContactByEmailEnabled());
        $writer->writeBooleanValue('ebayMotorsProContactByPhoneEnabled', $this->getEbayMotorsProContactByPhoneEnabled());
        $writer->writeBooleanValue('ebayMotorsProCounterOfferEnabled', $this->getEbayMotorsProCounterOfferEnabled());
        $writer->writeEnumValue('ebayMotorsProPaymentMethodCheckOutEnabled', $this->getEbayMotorsProPaymentMethodCheckOutEnabled());
        $writer->writeIntegerValue('ebayMotorsProPhoneCount', $this->getEbayMotorsProPhoneCount());
        $writer->writeBooleanValue('ebayMotorsProSellerContactDetailsEnabled', $this->getEbayMotorsProSellerContactDetailsEnabled());
        $writer->writeBooleanValue('ebayMotorsProShippingMethodEnabled', $this->getEbayMotorsProShippingMethodEnabled());
        $writer->writeIntegerValue('ebayMotorsProStreetCount', $this->getEbayMotorsProStreetCount());
        $writer->writeBooleanValue('epidSupported', $this->getEpidSupported());
        $writer->writeBooleanValue('kTypeSupported', $this->getKTypeSupported());
        $writer->writeCollectionOfObjectValues('localListingDistances', $this->getLocalListingDistances());
        $writer->writeEnumValue('localMarketAdFormatEnabled', $this->getLocalMarketAdFormatEnabled());
        $writer->writeBooleanValue('localMarketAutoAcceptEnabled', $this->getLocalMarketAutoAcceptEnabled());
        $writer->writeBooleanValue('localMarketAutoDeclineEnabled', $this->getLocalMarketAutoDeclineEnabled());
        $writer->writeEnumValue('localMarketBestOfferEnabled', $this->getLocalMarketBestOfferEnabled());
        $writer->writeBooleanValue('localMarketCompanyNameEnabled', $this->getLocalMarketCompanyNameEnabled());
        $writer->writeBooleanValue('localMarketContactByAddressEnabled', $this->getLocalMarketContactByAddressEnabled());
        $writer->writeBooleanValue('localMarketContactByEmailEnabled', $this->getLocalMarketContactByEmailEnabled());
        $writer->writeBooleanValue('localMarketContactByPhoneEnabled', $this->getLocalMarketContactByPhoneEnabled());
        $writer->writeBooleanValue('localMarketCounterOfferEnabled', $this->getLocalMarketCounterOfferEnabled());
        $writer->writeBooleanValue('localMarketNonSubscription', $this->getLocalMarketNonSubscription());
        $writer->writeEnumValue('localMarketPaymentMethodCheckOutEnabled', $this->getLocalMarketPaymentMethodCheckOutEnabled());
        $writer->writeIntegerValue('localMarketPhoneCount', $this->getLocalMarketPhoneCount());
        $writer->writeBooleanValue('localMarketPremiumSubscription', $this->getLocalMarketPremiumSubscription());
        $writer->writeBooleanValue('localMarketRegularSubscription', $this->getLocalMarketRegularSubscription());
        $writer->writeBooleanValue('localMarketSellerContactDetailsEnabled', $this->getLocalMarketSellerContactDetailsEnabled());
        $writer->writeBooleanValue('localMarketShippingMethodEnabled', $this->getLocalMarketShippingMethodEnabled());
        $writer->writeBooleanValue('localMarketSpecialitySubscription', $this->getLocalMarketSpecialitySubscription());
        $writer->writeIntegerValue('localMarketStreetCount', $this->getLocalMarketStreetCount());
        $writer->writeIntegerValue('maxGranularFitmentCount', $this->getMaxGranularFitmentCount());
        $writer->writeIntegerValue('maxItemCompatibility', $this->getMaxItemCompatibility());
        $writer->writeIntegerValue('minItemCompatibility', $this->getMinItemCompatibility());
        $writer->writeEnumValue('nonSubscription', $this->getNonSubscription());
        $writer->writeEnumValue('premiumSubscription', $this->getPremiumSubscription());
        $writer->writeEnumValue('regularSubscription', $this->getRegularSubscription());
        $writer->writeBooleanValue('sellerProvidedTitleSupported', $this->getSellerProvidedTitleSupported());
        $writer->writeEnumValue('specialitySubscription', $this->getSpecialitySubscription());
        $writer->writeBooleanValue('vinSupported', $this->getVinSupported());
        $writer->writeBooleanValue('vrmSupported', $this->getVrmSupported());
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
     * Sets the depositSupported property value. This field is returned as <code>true</code> if the corresponding category supports the use of a deposit/down payment on a motor vehicle listing. In an AddItem call, the seller can configure a down payment for a motor vehicle listing using the PaymentDetails container.
     * @param bool|null $value Value to set for the depositSupported property.
    */
    public function setDepositSupported(?bool $value): void {
        $this->depositSupported = $value;
    }

    /**
     * Sets the ebayMotorsProAdFormatEnabled property value. Indicates whether or not eBay Motors Pro sellers can use classified ads in this category to sell their vehicles. This element is applicable for eBay Motors Pro users.
     * @param AdFormatEnabledEnum|null $value Value to set for the ebayMotorsProAdFormatEnabled property.
    */
    public function setEbayMotorsProAdFormatEnabled(?AdFormatEnabledEnum $value): void {
        $this->ebayMotorsProAdFormatEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProAutoAcceptEnabled property value. Indicates whether or not the category supports the Best Offer Auto Accept feature for eBay Motors Pro listings. This element is for eBay Motors Pro users.
     * @param bool|null $value Value to set for the ebayMotorsProAutoAcceptEnabled property.
    */
    public function setEbayMotorsProAutoAcceptEnabled(?bool $value): void {
        $this->ebayMotorsProAutoAcceptEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProAutoDeclineEnabled property value. Indicates whether or not the category allows auto-decline for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users.
     * @param bool|null $value Value to set for the ebayMotorsProAutoDeclineEnabled property.
    */
    public function setEbayMotorsProAutoDeclineEnabled(?bool $value): void {
        $this->ebayMotorsProAutoDeclineEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProBestOfferEnabled property value. This enumerated value indicates whether or not Best Offer features are supported for eBay Motors Classified Ad listings in this category. This element is for eBay Motors Pro users.
     * @param ClassifiedAdBestOfferEnabledEnum|null $value Value to set for the ebayMotorsProBestOfferEnabled property.
    */
    public function setEbayMotorsProBestOfferEnabled(?ClassifiedAdBestOfferEnabledEnum $value): void {
        $this->ebayMotorsProBestOfferEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProCompanyNameEnabled property value. Indicates whether this category supports including the company name in the seller's contact information. This element is for eBay Motors Pro users.
     * @param bool|null $value Value to set for the ebayMotorsProCompanyNameEnabled property.
    */
    public function setEbayMotorsProCompanyNameEnabled(?bool $value): void {
        $this->ebayMotorsProCompanyNameEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProContactByAddressEnabled property value. Indicates whether this category supports including the address in the seller's contact information. This element is for eBay Motors Pro users.
     * @param bool|null $value Value to set for the ebayMotorsProContactByAddressEnabled property.
    */
    public function setEbayMotorsProContactByAddressEnabled(?bool $value): void {
        $this->ebayMotorsProContactByAddressEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProContactByEmailEnabled property value. Indicates whether this category supports including an email address in the seller's contact information. This element is for eBay Motors Pro users.
     * @param bool|null $value Value to set for the ebayMotorsProContactByEmailEnabled property.
    */
    public function setEbayMotorsProContactByEmailEnabled(?bool $value): void {
        $this->ebayMotorsProContactByEmailEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProContactByPhoneEnabled property value. Indicates whether this category supports including the telephone in the seller's contact information. This element is for eBay Motors Pro users.
     * @param bool|null $value Value to set for the ebayMotorsProContactByPhoneEnabled property.
    */
    public function setEbayMotorsProContactByPhoneEnabled(?bool $value): void {
        $this->ebayMotorsProContactByPhoneEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProCounterOfferEnabled property value. Indicates whether counter offers are allowed on Best Offers for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     * @param bool|null $value Value to set for the ebayMotorsProCounterOfferEnabled property.
    */
    public function setEbayMotorsProCounterOfferEnabled(?bool $value): void {
        $this->ebayMotorsProCounterOfferEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProPaymentMethodCheckOutEnabled property value. This enumerated value indicates whether this category supports that the payment method should be displayed to the user for this category in an eBay Motors Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
     * @param ClassifiedAdPaymentMethodEnabledEnum|null $value Value to set for the ebayMotorsProPaymentMethodCheckOutEnabled property.
    */
    public function setEbayMotorsProPaymentMethodCheckOutEnabled(?ClassifiedAdPaymentMethodEnabledEnum $value): void {
        $this->ebayMotorsProPaymentMethodCheckOutEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProPhoneCount property value. Indicates the number of phone numbers that can be included through contact information for this category. This element is for eBay Motors Pro users.
     * @param int|null $value Value to set for the ebayMotorsProPhoneCount property.
    */
    public function setEbayMotorsProPhoneCount(?int $value): void {
        $this->ebayMotorsProPhoneCount = $value;
    }

    /**
     * Sets the ebayMotorsProSellerContactDetailsEnabled property value. Indicates whether this category allows seller-level contact information for eBay Motors Classified Ad listings. A value of true means seller-level contact information is available for Classified Ad listings. This element is for eBay Motors Pro users.
     * @param bool|null $value Value to set for the ebayMotorsProSellerContactDetailsEnabled property.
    */
    public function setEbayMotorsProSellerContactDetailsEnabled(?bool $value): void {
        $this->ebayMotorsProSellerContactDetailsEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProShippingMethodEnabled property value. Indicates if shipping options should be displayed to the user for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     * @param bool|null $value Value to set for the ebayMotorsProShippingMethodEnabled property.
    */
    public function setEbayMotorsProShippingMethodEnabled(?bool $value): void {
        $this->ebayMotorsProShippingMethodEnabled = $value;
    }

    /**
     * Sets the ebayMotorsProStreetCount property value. This field indicates the number of street addresses allowed in contact information for this category. This element is for eBay Motors Pro users.
     * @param int|null $value Value to set for the ebayMotorsProStreetCount property.
    */
    public function setEbayMotorsProStreetCount(?int $value): void {
        $this->ebayMotorsProStreetCount = $value;
    }

    /**
     * Sets the epidSupported property value. If returned as <code>true</code>, this indicates the category supports the use of an eBay Product ID (e.g. ePID) to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites.
     * @param bool|null $value Value to set for the epidSupported property.
    */
    public function setEpidSupported(?bool $value): void {
        $this->epidSupported = $value;
    }

    /**
     * Sets the kTypeSupported property value. This field indicates whether or not the category supports the use of a K type to identify the cars and trucks compatible with a motor vehicle part or accessory. Only the AU, DE, ES, FR, IT, and UK marketplaces support the use of K types. See <a href="/api-docs/user-guides/static/trading-user-guide/manually-specify-compatibility.html#ktype" target="_blank">Compatibility by K type</a> for more information
     * @param bool|null $value Value to set for the kTypeSupported property.
    */
    public function setKTypeSupported(?bool $value): void {
        $this->kTypeSupported = $value;
    }

    /**
     * Sets the localListingDistances property value. This array shows the supported distances (in miles) for different types of Local Market subscription types in this category. Motor vehicle listings will be shown to buyers located within these proximities of the vehicle's location.
     * @param array<LocalListingDistance>|null $value Value to set for the localListingDistances property.
    */
    public function setLocalListingDistances(?array $value): void {
        $this->localListingDistances = $value;
    }

    /**
     * Sets the localMarketAdFormatEnabled property value. Specifies whether this category supports Motor Local Market Classified Ad listings.
     * @param AdFormatEnabledEnum|null $value Value to set for the localMarketAdFormatEnabled property.
    */
    public function setLocalMarketAdFormatEnabled(?AdFormatEnabledEnum $value): void {
        $this->localMarketAdFormatEnabled = $value;
    }

    /**
     * Sets the localMarketAutoAcceptEnabled property value. Specifies whether this category supports auto-accept for Best Offers for Motors Local Market Classified Ads.
     * @param bool|null $value Value to set for the localMarketAutoAcceptEnabled property.
    */
    public function setLocalMarketAutoAcceptEnabled(?bool $value): void {
        $this->localMarketAutoAcceptEnabled = $value;
    }

    /**
     * Sets the localMarketAutoDeclineEnabled property value. Specifies whether this category supports auto-decline for Best Offers for Motors Local Market Classified Ads.
     * @param bool|null $value Value to set for the localMarketAutoDeclineEnabled property.
    */
    public function setLocalMarketAutoDeclineEnabled(?bool $value): void {
        $this->localMarketAutoDeclineEnabled = $value;
    }

    /**
     * Sets the localMarketBestOfferEnabled property value. Indicates if Best Offer is enabled/required for Motors Local Market Classified Ad listings in this category. 
     * @param ClassifiedAdBestOfferEnabledEnum|null $value Value to set for the localMarketBestOfferEnabled property.
    */
    public function setLocalMarketBestOfferEnabled(?ClassifiedAdBestOfferEnabledEnum $value): void {
        $this->localMarketBestOfferEnabled = $value;
    }

    /**
     * Sets the localMarketCompanyNameEnabled property value. Indicates whether the category supports the seller's company name being specified when using Motors Local Market classified ads.
     * @param bool|null $value Value to set for the localMarketCompanyNameEnabled property.
    */
    public function setLocalMarketCompanyNameEnabled(?bool $value): void {
        $this->localMarketCompanyNameEnabled = $value;
    }

    /**
     * Sets the localMarketContactByAddressEnabled property value. Indicates whether this category supports including the address in the seller's contact information.
     * @param bool|null $value Value to set for the localMarketContactByAddressEnabled property.
    */
    public function setLocalMarketContactByAddressEnabled(?bool $value): void {
        $this->localMarketContactByAddressEnabled = $value;
    }

    /**
     * Sets the localMarketContactByEmailEnabled property value. Indicates whether the category supports including an email address in the seller's contact information. 
     * @param bool|null $value Value to set for the localMarketContactByEmailEnabled property.
    */
    public function setLocalMarketContactByEmailEnabled(?bool $value): void {
        $this->localMarketContactByEmailEnabled = $value;
    }

    /**
     * Sets the localMarketContactByPhoneEnabled property value. Indicates whether this category supports including the telephone in the seller's contact information.
     * @param bool|null $value Value to set for the localMarketContactByPhoneEnabled property.
    */
    public function setLocalMarketContactByPhoneEnabled(?bool $value): void {
        $this->localMarketContactByPhoneEnabled = $value;
    }

    /**
     * Sets the localMarketCounterOfferEnabled property value. Indicates whether counter offers are allowed on Best Offers for this category for Motors Local Market Classified Ad listings.
     * @param bool|null $value Value to set for the localMarketCounterOfferEnabled property.
    */
    public function setLocalMarketCounterOfferEnabled(?bool $value): void {
        $this->localMarketCounterOfferEnabled = $value;
    }

    /**
     * Sets the localMarketNonSubscription property value. Indicates whether the category supports a seller creating a Motors Local Market listing without a subscription. This feature is only available to licensed vehicle dealers.
     * @param bool|null $value Value to set for the localMarketNonSubscription property.
    */
    public function setLocalMarketNonSubscription(?bool $value): void {
        $this->localMarketNonSubscription = $value;
    }

    /**
     * Sets the localMarketPaymentMethodCheckOutEnabled property value. Indicates if the payment method should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled.
     * @param ClassifiedAdPaymentMethodEnabledEnum|null $value Value to set for the localMarketPaymentMethodCheckOutEnabled property.
    */
    public function setLocalMarketPaymentMethodCheckOutEnabled(?ClassifiedAdPaymentMethodEnabledEnum $value): void {
        $this->localMarketPaymentMethodCheckOutEnabled = $value;
    }

    /**
     * Sets the localMarketPhoneCount property value. Indicates the number of phone numbers that can be included through contact information for this category.
     * @param int|null $value Value to set for the localMarketPhoneCount property.
    */
    public function setLocalMarketPhoneCount(?int $value): void {
        $this->localMarketPhoneCount = $value;
    }

    /**
     * Sets the localMarketPremiumSubscription property value. Indicates whether the category supports the Premium level subscription Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     * @param bool|null $value Value to set for the localMarketPremiumSubscription property.
    */
    public function setLocalMarketPremiumSubscription(?bool $value): void {
        $this->localMarketPremiumSubscription = $value;
    }

    /**
     * Sets the localMarketRegularSubscription property value. Indicates whether the category supports the Regular level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     * @param bool|null $value Value to set for the localMarketRegularSubscription property.
    */
    public function setLocalMarketRegularSubscription(?bool $value): void {
        $this->localMarketRegularSubscription = $value;
    }

    /**
     * Sets the localMarketSellerContactDetailsEnabled property value. Specifies the whether this category allows seller-level contact information for Motors Local Market Classified Ad listings.
     * @param bool|null $value Value to set for the localMarketSellerContactDetailsEnabled property.
    */
    public function setLocalMarketSellerContactDetailsEnabled(?bool $value): void {
        $this->localMarketSellerContactDetailsEnabled = $value;
    }

    /**
     * Sets the localMarketShippingMethodEnabled property value. Indicates if shipping methods should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled.
     * @param bool|null $value Value to set for the localMarketShippingMethodEnabled property.
    */
    public function setLocalMarketShippingMethodEnabled(?bool $value): void {
        $this->localMarketShippingMethodEnabled = $value;
    }

    /**
     * Sets the localMarketSpecialitySubscription property value. Indicates whether the category supports the Specialty level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     * @param bool|null $value Value to set for the localMarketSpecialitySubscription property.
    */
    public function setLocalMarketSpecialitySubscription(?bool $value): void {
        $this->localMarketSpecialitySubscription = $value;
    }

    /**
     * Sets the localMarketStreetCount property value. Indicates which address option is enabled for the seller's contact information.
     * @param int|null $value Value to set for the localMarketStreetCount property.
    */
    public function setLocalMarketStreetCount(?int $value): void {
        $this->localMarketStreetCount = $value;
    }

    /**
     * Sets the maxGranularFitmentCount property value. Indicates the maximum number of compatible applications allowed per item when adding or revising items with compatibilities provided at the most detailed granularity. For example, in Car and Truck Parts on the US site, the most granular application would include Year, Make, Model, Trim, and Engine.
     * @param int|null $value Value to set for the maxGranularFitmentCount property.
    */
    public function setMaxGranularFitmentCount(?int $value): void {
        $this->maxGranularFitmentCount = $value;
    }

    /**
     * Sets the maxItemCompatibility property value. Indicates the maximum number of compatible applications allowed per item when adding or revising items. This is relevant for specifying parts compatibility by application manually only. See <a href="/api-docs/user-guides/static/trading-user-guide/manually-specify-compatibility.html" target="_blank">Specify parts compatibility manually</a> and <a href="/api-docs/sell/static/inventory/managing-product-compatibility.html" target="_blank">Managing product compatibility</a> for more information.
     * @param int|null $value Value to set for the maxItemCompatibility property.
    */
    public function setMaxItemCompatibility(?int $value): void {
        $this->maxItemCompatibility = $value;
    }

    /**
     * Sets the minItemCompatibility property value. Indicates the minimum number of required compatible applications for listing items. A value of <code>0</code> indicates it is not mandatory to specify parts compatibilities when listing.
     * @param int|null $value Value to set for the minItemCompatibility property.
    */
    public function setMinItemCompatibility(?int $value): void {
        $this->minItemCompatibility = $value;
    }

    /**
     * Sets the nonSubscription property value. The value in this field indicates whether the category supports Motors Local Market listings if the seller does not have a vehicle subscription.
     * @param GeographicExposureEnum|null $value Value to set for the nonSubscription property.
    */
    public function setNonSubscription(?GeographicExposureEnum $value): void {
        $this->nonSubscription = $value;
    }

    /**
     * Sets the premiumSubscription property value. The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Premium vehicle subscription.
     * @param GeographicExposureEnum|null $value Value to set for the premiumSubscription property.
    */
    public function setPremiumSubscription(?GeographicExposureEnum $value): void {
        $this->premiumSubscription = $value;
    }

    /**
     * Sets the regularSubscription property value. The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Regular vehicle subscription.
     * @param GeographicExposureEnum|null $value Value to set for the regularSubscription property.
    */
    public function setRegularSubscription(?GeographicExposureEnum $value): void {
        $this->regularSubscription = $value;
    }

    /**
     * Sets the sellerProvidedTitleSupported property value. This field is returned as <code>true</code> if the corresponding category supports the use of a seller-provided title for a motor vehicle listing on the US or Canada Motors marketplaces. A seller-provided title is a descriptive title, given by the seller, that appears below eBay's pre-filled listing title for the motor vehicle. Visually, the seller-provided title is similar to a subtitle on other types of eBay listings (non-vehicle). A seller-provided title can assist in helping buyers discover the vehicle.
     * @param bool|null $value Value to set for the sellerProvidedTitleSupported property.
    */
    public function setSellerProvidedTitleSupported(?bool $value): void {
        $this->sellerProvidedTitleSupported = $value;
    }

    /**
     * Sets the specialitySubscription property value. The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Specialty vehicle subscription.
     * @param GeographicExposureEnum|null $value Value to set for the specialitySubscription property.
    */
    public function setSpecialitySubscription(?GeographicExposureEnum $value): void {
        $this->specialitySubscription = $value;
    }

    /**
     * Sets the vinSupported property value. Indicates if Vehicle Identification Number is supported.
     * @param bool|null $value Value to set for the vinSupported property.
    */
    public function setVinSupported(?bool $value): void {
        $this->vinSupported = $value;
    }

    /**
     * Sets the vrmSupported property value. Indicates if Vehicle Registration Mark is supported.
     * @param bool|null $value Value to set for the vrmSupported property.
    */
    public function setVrmSupported(?bool $value): void {
        $this->vrmSupported = $value;
    }

}
