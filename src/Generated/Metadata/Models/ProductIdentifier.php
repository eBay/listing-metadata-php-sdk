<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the supported product identifiers.
*/
class ProductIdentifier implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $ean The EAN of the item, if applicable. EAN is the European Article Number, a barcode standard for retail product labeling primarily used outside of North America.
    */
    private ?string $ean = null;
    
    /**
     * @var string|null $epid The ePID (eBay Product Identifier) of the item, if applicable. ePID is a unique identifier used by eBay to track products in its catalog.<br><br>Use the <a href="/api-docs/commerce/catalog/resources/product/methods/getProduct" target="_blank ">getProduct</a> method of the Catalog API to retrieve the ePID of an item.
    */
    private ?string $epid = null;
    
    /**
     * @var string|null $isbn The ISBN of the item, if applicable. ISBN is the International Standard Book Number, a unique identifier for books.
    */
    private ?string $isbn = null;
    
    /**
     * @var string|null $productId The product ID of the item, if applicable. The product ID is a general term for a unique identifier assigned to a product.
    */
    private ?string $productId = null;
    
    /**
     * @var string|null $upc The UPC of the item, if applicable. UPC stands for Universal Product Code, a unique identifier for products, primarily in North America.
    */
    private ?string $upc = null;
    
    /**
     * Instantiates a new ProductIdentifier and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductIdentifier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductIdentifier {
        return new ProductIdentifier();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ean property value. The EAN of the item, if applicable. EAN is the European Article Number, a barcode standard for retail product labeling primarily used outside of North America.
     * @return string|null
    */
    public function getEan(): ?string {
        return $this->ean;
    }

    /**
     * Gets the epid property value. The ePID (eBay Product Identifier) of the item, if applicable. ePID is a unique identifier used by eBay to track products in its catalog.<br><br>Use the <a href="/api-docs/commerce/catalog/resources/product/methods/getProduct" target="_blank ">getProduct</a> method of the Catalog API to retrieve the ePID of an item.
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
            'ean' => fn(ParseNode $n) => $o->setEan($n->getStringValue()),
            'epid' => fn(ParseNode $n) => $o->setEpid($n->getStringValue()),
            'isbn' => fn(ParseNode $n) => $o->setIsbn($n->getStringValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'upc' => fn(ParseNode $n) => $o->setUpc($n->getStringValue()),
        ];
    }

    /**
     * Gets the isbn property value. The ISBN of the item, if applicable. ISBN is the International Standard Book Number, a unique identifier for books.
     * @return string|null
    */
    public function getIsbn(): ?string {
        return $this->isbn;
    }

    /**
     * Gets the productId property value. The product ID of the item, if applicable. The product ID is a general term for a unique identifier assigned to a product.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the upc property value. The UPC of the item, if applicable. UPC stands for Universal Product Code, a unique identifier for products, primarily in North America.
     * @return string|null
    */
    public function getUpc(): ?string {
        return $this->upc;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ean', $this->getEan());
        $writer->writeStringValue('epid', $this->getEpid());
        $writer->writeStringValue('isbn', $this->getIsbn());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeStringValue('upc', $this->getUpc());
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
     * Sets the ean property value. The EAN of the item, if applicable. EAN is the European Article Number, a barcode standard for retail product labeling primarily used outside of North America.
     * @param string|null $value Value to set for the ean property.
    */
    public function setEan(?string $value): void {
        $this->ean = $value;
    }

    /**
     * Sets the epid property value. The ePID (eBay Product Identifier) of the item, if applicable. ePID is a unique identifier used by eBay to track products in its catalog.<br><br>Use the <a href="/api-docs/commerce/catalog/resources/product/methods/getProduct" target="_blank ">getProduct</a> method of the Catalog API to retrieve the ePID of an item.
     * @param string|null $value Value to set for the epid property.
    */
    public function setEpid(?string $value): void {
        $this->epid = $value;
    }

    /**
     * Sets the isbn property value. The ISBN of the item, if applicable. ISBN is the International Standard Book Number, a unique identifier for books.
     * @param string|null $value Value to set for the isbn property.
    */
    public function setIsbn(?string $value): void {
        $this->isbn = $value;
    }

    /**
     * Sets the productId property value. The product ID of the item, if applicable. The product ID is a general term for a unique identifier assigned to a product.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the upc property value. The UPC of the item, if applicable. UPC stands for Universal Product Code, a unique identifier for products, primarily in North America.
     * @param string|null $value Value to set for the upc property.
    */
    public function setUpc(?string $value): void {
        $this->upc = $value;
    }

}
