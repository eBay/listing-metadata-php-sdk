<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that defines the response fields for the <b>getProductSafetyLabels</b> method.
*/
class ProductSafetyLabelsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ProductSafetyLabelPictogram>|null $pictograms This array contains a list of pictograms of product safety labels  for the specified marketplace.
    */
    private ?array $pictograms = null;
    
    /**
     * @var array<ProductSafetyLabelStatement>|null $statements This array contains available product safety labels statements for the specified marketplace. 
    */
    private ?array $statements = null;
    
    /**
     * Instantiates a new ProductSafetyLabelsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductSafetyLabelsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductSafetyLabelsResponse {
        return new ProductSafetyLabelsResponse();
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
            'pictograms' => fn(ParseNode $n) => $o->setPictograms($n->getCollectionOfObjectValues([ProductSafetyLabelPictogram::class, 'createFromDiscriminatorValue'])),
            'statements' => fn(ParseNode $n) => $o->setStatements($n->getCollectionOfObjectValues([ProductSafetyLabelStatement::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the pictograms property value. This array contains a list of pictograms of product safety labels  for the specified marketplace.
     * @return array<ProductSafetyLabelPictogram>|null
    */
    public function getPictograms(): ?array {
        return $this->pictograms;
    }

    /**
     * Gets the statements property value. This array contains available product safety labels statements for the specified marketplace. 
     * @return array<ProductSafetyLabelStatement>|null
    */
    public function getStatements(): ?array {
        return $this->statements;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('pictograms', $this->getPictograms());
        $writer->writeCollectionOfObjectValues('statements', $this->getStatements());
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
     * Sets the pictograms property value. This array contains a list of pictograms of product safety labels  for the specified marketplace.
     * @param array<ProductSafetyLabelPictogram>|null $value Value to set for the pictograms property.
    */
    public function setPictograms(?array $value): void {
        $this->pictograms = $value;
    }

    /**
     * Sets the statements property value. This array contains available product safety labels statements for the specified marketplace. 
     * @param array<ProductSafetyLabelStatement>|null $value Value to set for the statements property.
    */
    public function setStatements(?array $value): void {
        $this->statements = $value;
    }

}
