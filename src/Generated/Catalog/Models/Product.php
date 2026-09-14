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

namespace EBay\ListingMetadata\Generated\Catalog\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type contains the full details of a specified product, including information about the product's identifiers, product images, aspects, and categories.
*/
class Product implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Image>|null $additionalImages This array is returned if the category product has additional images besides the primary image returned in the <strong>image</strong> container.
    */
    private ?array $additionalImages = null;
    
    /**
     * @var array<Aspect>|null $aspects Contains an array of the category aspects and their values that are associated with this product.
    */
    private ?array $aspects = null;
    
    /**
     * @var string|null $brand The manufacturer's brand name for this product.
    */
    private ?string $brand = null;
    
    /**
     * @var int|null $compatibilityCount The number of distinct motor vehicles that are compatible with the product.<br><br>This field is only applicable for and will only be returned for Parts & Accessory products on the eBay US Motors marketplace.
    */
    private ?int $compatibilityCount = null;
    
    /**
     * @var string|null $description The rich description of this product, which might contain HTML.
    */
    private ?string $description = null;
    
    /**
     * @var array<string>|null $ean A list of all European Article Numbers (EANs) that identify this product.
    */
    private ?array $ean = null;
    
    /**
     * @var string|null $epid The eBay product ID of this product.
    */
    private ?string $epid = null;
    
    /**
     * @var array<string>|null $gtin A list of all GTINs that identify this product. Currently this can include EAN, ISBN, and UPC identifier types.
    */
    private ?array $gtin = null;
    
    /**
     * @var Image|null $image Contains information about the primary image of this product. For more images of this product, see the <strong>additionalImages</strong> container.
    */
    private ?Image $image = null;
    
    /**
     * @var array<string>|null $isbn A list of all International Standard Book Numbers (ISBNs) that identify this product. 
    */
    private ?array $isbn = null;
    
    /**
     * @var array<string>|null $mpn A list of all MPN values that the manufacturer uses to identify this product.
    */
    private ?array $mpn = null;
    
    /**
     * @var array<string>|null $otherApplicableCategoryIds A list of category IDs (other than the value of <strong>primaryCategoryId</strong>) for all the leaf categories to which this product might belong.
    */
    private ?array $otherApplicableCategoryIds = null;
    
    /**
     * @var string|null $primaryCategoryId The identifier of the leaf category that eBay recommends using to list this product, based on previous listings of similar products. Products in the eBay catalog are not automatically associated with any particular category, but using an inappropriate category can make it difficult for prospective buyers to find the product. For other possible categories that might be used, see <strong>otherApplicableCategoryIds</strong>.
    */
    private ?string $primaryCategoryId = null;
    
    /**
     * @var string|null $productWebUrl The URL for this product's eBay product page.
    */
    private ?string $productWebUrl = null;
    
    /**
     * @var string|null $title The title of this product on eBay.
    */
    private ?string $title = null;
    
    /**
     * @var array<string>|null $upc A list of Universal Product Codes (UPCs) that identify this product.
    */
    private ?array $upc = null;
    
    /**
     * @var string|null $version The current version number of this product record in the catalog.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new Product and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Product
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Product {
        return new Product();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalImages property value. This array is returned if the category product has additional images besides the primary image returned in the <strong>image</strong> container.
     * @return array<Image>|null
    */
    public function getAdditionalImages(): ?array {
        return $this->additionalImages;
    }

    /**
     * Gets the aspects property value. Contains an array of the category aspects and their values that are associated with this product.
     * @return array<Aspect>|null
    */
    public function getAspects(): ?array {
        return $this->aspects;
    }

    /**
     * Gets the brand property value. The manufacturer's brand name for this product.
     * @return string|null
    */
    public function getBrand(): ?string {
        return $this->brand;
    }

    /**
     * Gets the compatibilityCount property value. The number of distinct motor vehicles that are compatible with the product.<br><br>This field is only applicable for and will only be returned for Parts & Accessory products on the eBay US Motors marketplace.
     * @return int|null
    */
    public function getCompatibilityCount(): ?int {
        return $this->compatibilityCount;
    }

    /**
     * Gets the description property value. The rich description of this product, which might contain HTML.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the ean property value. A list of all European Article Numbers (EANs) that identify this product.
     * @return array<string>|null
    */
    public function getEan(): ?array {
        return $this->ean;
    }

    /**
     * Gets the epid property value. The eBay product ID of this product.
     * @return string|null
    */
    public function getEpid(): ?string {
        return $this->epid;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalImages' => fn(ParseNode $n) => $o->setAdditionalImages($n->getCollectionOfObjectValues([Image::class, 'createFromDiscriminatorValue'])),
            'aspects' => fn(ParseNode $n) => $o->setAspects($n->getCollectionOfObjectValues([Aspect::class, 'createFromDiscriminatorValue'])),
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getStringValue()),
            'compatibilityCount' => fn(ParseNode $n) => $o->setCompatibilityCount($n->getIntegerValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'ean' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEan($val);
            },
            'epid' => fn(ParseNode $n) => $o->setEpid($n->getStringValue()),
            'gtin' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setGtin($val);
            },
            'image' => fn(ParseNode $n) => $o->setImage($n->getObjectValue([Image::class, 'createFromDiscriminatorValue'])),
            'isbn' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIsbn($val);
            },
            'mpn' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMpn($val);
            },
            'otherApplicableCategoryIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOtherApplicableCategoryIds($val);
            },
            'primaryCategoryId' => fn(ParseNode $n) => $o->setPrimaryCategoryId($n->getStringValue()),
            'productWebUrl' => fn(ParseNode $n) => $o->setProductWebUrl($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'upc' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUpc($val);
            },
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the gtin property value. A list of all GTINs that identify this product. Currently this can include EAN, ISBN, and UPC identifier types.
     * @return array<string>|null
    */
    public function getGtin(): ?array {
        return $this->gtin;
    }

    /**
     * Gets the image property value. Contains information about the primary image of this product. For more images of this product, see the <strong>additionalImages</strong> container.
     * @return Image|null
    */
    public function getImage(): ?Image {
        return $this->image;
    }

    /**
     * Gets the isbn property value. A list of all International Standard Book Numbers (ISBNs) that identify this product. 
     * @return array<string>|null
    */
    public function getIsbn(): ?array {
        return $this->isbn;
    }

    /**
     * Gets the mpn property value. A list of all MPN values that the manufacturer uses to identify this product.
     * @return array<string>|null
    */
    public function getMpn(): ?array {
        return $this->mpn;
    }

    /**
     * Gets the otherApplicableCategoryIds property value. A list of category IDs (other than the value of <strong>primaryCategoryId</strong>) for all the leaf categories to which this product might belong.
     * @return array<string>|null
    */
    public function getOtherApplicableCategoryIds(): ?array {
        return $this->otherApplicableCategoryIds;
    }

    /**
     * Gets the primaryCategoryId property value. The identifier of the leaf category that eBay recommends using to list this product, based on previous listings of similar products. Products in the eBay catalog are not automatically associated with any particular category, but using an inappropriate category can make it difficult for prospective buyers to find the product. For other possible categories that might be used, see <strong>otherApplicableCategoryIds</strong>.
     * @return string|null
    */
    public function getPrimaryCategoryId(): ?string {
        return $this->primaryCategoryId;
    }

    /**
     * Gets the productWebUrl property value. The URL for this product's eBay product page.
     * @return string|null
    */
    public function getProductWebUrl(): ?string {
        return $this->productWebUrl;
    }

    /**
     * Gets the title property value. The title of this product on eBay.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the upc property value. A list of Universal Product Codes (UPCs) that identify this product.
     * @return array<string>|null
    */
    public function getUpc(): ?array {
        return $this->upc;
    }

    /**
     * Gets the version property value. The current version number of this product record in the catalog.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('additionalImages', $this->getAdditionalImages());
        $writer->writeCollectionOfObjectValues('aspects', $this->getAspects());
        $writer->writeStringValue('brand', $this->getBrand());
        $writer->writeIntegerValue('compatibilityCount', $this->getCompatibilityCount());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfPrimitiveValues('ean', $this->getEan());
        $writer->writeStringValue('epid', $this->getEpid());
        $writer->writeCollectionOfPrimitiveValues('gtin', $this->getGtin());
        $writer->writeObjectValue('image', $this->getImage());
        $writer->writeCollectionOfPrimitiveValues('isbn', $this->getIsbn());
        $writer->writeCollectionOfPrimitiveValues('mpn', $this->getMpn());
        $writer->writeCollectionOfPrimitiveValues('otherApplicableCategoryIds', $this->getOtherApplicableCategoryIds());
        $writer->writeStringValue('primaryCategoryId', $this->getPrimaryCategoryId());
        $writer->writeStringValue('productWebUrl', $this->getProductWebUrl());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeCollectionOfPrimitiveValues('upc', $this->getUpc());
        $writer->writeStringValue('version', $this->getVersion());
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
     * Sets the additionalImages property value. This array is returned if the category product has additional images besides the primary image returned in the <strong>image</strong> container.
     * @param array<Image>|null $value Value to set for the additionalImages property.
    */
    public function setAdditionalImages(?array $value): void {
        $this->additionalImages = $value;
    }

    /**
     * Sets the aspects property value. Contains an array of the category aspects and their values that are associated with this product.
     * @param array<Aspect>|null $value Value to set for the aspects property.
    */
    public function setAspects(?array $value): void {
        $this->aspects = $value;
    }

    /**
     * Sets the brand property value. The manufacturer's brand name for this product.
     * @param string|null $value Value to set for the brand property.
    */
    public function setBrand(?string $value): void {
        $this->brand = $value;
    }

    /**
     * Sets the compatibilityCount property value. The number of distinct motor vehicles that are compatible with the product.<br><br>This field is only applicable for and will only be returned for Parts & Accessory products on the eBay US Motors marketplace.
     * @param int|null $value Value to set for the compatibilityCount property.
    */
    public function setCompatibilityCount(?int $value): void {
        $this->compatibilityCount = $value;
    }

    /**
     * Sets the description property value. The rich description of this product, which might contain HTML.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the ean property value. A list of all European Article Numbers (EANs) that identify this product.
     * @param array<string>|null $value Value to set for the ean property.
    */
    public function setEan(?array $value): void {
        $this->ean = $value;
    }

    /**
     * Sets the epid property value. The eBay product ID of this product.
     * @param string|null $value Value to set for the epid property.
    */
    public function setEpid(?string $value): void {
        $this->epid = $value;
    }

    /**
     * Sets the gtin property value. A list of all GTINs that identify this product. Currently this can include EAN, ISBN, and UPC identifier types.
     * @param array<string>|null $value Value to set for the gtin property.
    */
    public function setGtin(?array $value): void {
        $this->gtin = $value;
    }

    /**
     * Sets the image property value. Contains information about the primary image of this product. For more images of this product, see the <strong>additionalImages</strong> container.
     * @param Image|null $value Value to set for the image property.
    */
    public function setImage(?Image $value): void {
        $this->image = $value;
    }

    /**
     * Sets the isbn property value. A list of all International Standard Book Numbers (ISBNs) that identify this product. 
     * @param array<string>|null $value Value to set for the isbn property.
    */
    public function setIsbn(?array $value): void {
        $this->isbn = $value;
    }

    /**
     * Sets the mpn property value. A list of all MPN values that the manufacturer uses to identify this product.
     * @param array<string>|null $value Value to set for the mpn property.
    */
    public function setMpn(?array $value): void {
        $this->mpn = $value;
    }

    /**
     * Sets the otherApplicableCategoryIds property value. A list of category IDs (other than the value of <strong>primaryCategoryId</strong>) for all the leaf categories to which this product might belong.
     * @param array<string>|null $value Value to set for the otherApplicableCategoryIds property.
    */
    public function setOtherApplicableCategoryIds(?array $value): void {
        $this->otherApplicableCategoryIds = $value;
    }

    /**
     * Sets the primaryCategoryId property value. The identifier of the leaf category that eBay recommends using to list this product, based on previous listings of similar products. Products in the eBay catalog are not automatically associated with any particular category, but using an inappropriate category can make it difficult for prospective buyers to find the product. For other possible categories that might be used, see <strong>otherApplicableCategoryIds</strong>.
     * @param string|null $value Value to set for the primaryCategoryId property.
    */
    public function setPrimaryCategoryId(?string $value): void {
        $this->primaryCategoryId = $value;
    }

    /**
     * Sets the productWebUrl property value. The URL for this product's eBay product page.
     * @param string|null $value Value to set for the productWebUrl property.
    */
    public function setProductWebUrl(?string $value): void {
        $this->productWebUrl = $value;
    }

    /**
     * Sets the title property value. The title of this product on eBay.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the upc property value. A list of Universal Product Codes (UPCs) that identify this product.
     * @param array<string>|null $value Value to set for the upc property.
    */
    public function setUpc(?array $value): void {
        $this->upc = $value;
    }

    /**
     * Sets the version property value. The current version number of this product record in the catalog.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->version = $value;
    }

}
