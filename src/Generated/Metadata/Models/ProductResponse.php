<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response fields for the <b>getProductCompatibilities</b> method.
*/
class ProductResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ProductResponseCompatibilityDetails>|null $compatibilityDetails This container provides compatibility details for the specified product.
    */
    private ?array $compatibilityDetails = null;
    
    /**
     * @var Pagination|null $pagination This type defines the pagination settings for a result set.
    */
    private ?Pagination $pagination = null;
    
    /**
     * Instantiates a new ProductResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductResponse {
        return new ProductResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the compatibilityDetails property value. This container provides compatibility details for the specified product.
     * @return array<ProductResponseCompatibilityDetails>|null
    */
    public function getCompatibilityDetails(): ?array {
        return $this->compatibilityDetails;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compatibilityDetails' => fn(ParseNode $n) => $o->setCompatibilityDetails($n->getCollectionOfObjectValues([ProductResponseCompatibilityDetails::class, 'createFromDiscriminatorValue'])),
            'pagination' => fn(ParseNode $n) => $o->setPagination($n->getObjectValue([Pagination::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the pagination property value. This type defines the pagination settings for a result set.
     * @return Pagination|null
    */
    public function getPagination(): ?Pagination {
        return $this->pagination;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('compatibilityDetails', $this->getCompatibilityDetails());
        $writer->writeObjectValue('pagination', $this->getPagination());
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
     * Sets the compatibilityDetails property value. This container provides compatibility details for the specified product.
     * @param array<ProductResponseCompatibilityDetails>|null $value Value to set for the compatibilityDetails property.
    */
    public function setCompatibilityDetails(?array $value): void {
        $this->compatibilityDetails = $value;
    }

    /**
     * Sets the pagination property value. This type defines the pagination settings for a result set.
     * @param Pagination|null $value Value to set for the pagination property.
    */
    public function setPagination(?Pagination $value): void {
        $this->pagination = $value;
    }

}
