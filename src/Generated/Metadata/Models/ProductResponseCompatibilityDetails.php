<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the compatibility details for a product.
*/
class ProductResponseCompatibilityDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<PropertyFilterInner>|null $noteDetails This array returns additional comments about the corresponding product in the form of name-value pairs.
    */
    private ?array $noteDetails = null;
    
    /**
     * @var array<PropertyValues>|null $productDetails This array returns details about the product in the form of name-value pairs. 
    */
    private ?array $productDetails = null;
    
    /**
     * Instantiates a new ProductResponseCompatibilityDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductResponseCompatibilityDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductResponseCompatibilityDetails {
        return new ProductResponseCompatibilityDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'noteDetails' => fn(ParseNode $n) => $o->setNoteDetails($n->getCollectionOfObjectValues([PropertyFilterInner::class, 'createFromDiscriminatorValue'])),
            'productDetails' => fn(ParseNode $n) => $o->setProductDetails($n->getCollectionOfObjectValues([PropertyValues::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the noteDetails property value. This array returns additional comments about the corresponding product in the form of name-value pairs.
     * @return array<PropertyFilterInner>|null
    */
    public function getNoteDetails(): ?array {
        return $this->noteDetails;
    }

    /**
     * Gets the productDetails property value. This array returns details about the product in the form of name-value pairs. 
     * @return array<PropertyValues>|null
    */
    public function getProductDetails(): ?array {
        return $this->productDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('noteDetails', $this->getNoteDetails());
        $writer->writeCollectionOfObjectValues('productDetails', $this->getProductDetails());
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
     * Sets the noteDetails property value. This array returns additional comments about the corresponding product in the form of name-value pairs.
     * @param array<PropertyFilterInner>|null $value Value to set for the noteDetails property.
    */
    public function setNoteDetails(?array $value): void {
        $this->noteDetails = $value;
    }

    /**
     * Sets the productDetails property value. This array returns details about the product in the form of name-value pairs. 
     * @param array<PropertyValues>|null $value Value to set for the productDetails property.
    */
    public function setProductDetails(?array $value): void {
        $this->productDetails = $value;
    }

}
