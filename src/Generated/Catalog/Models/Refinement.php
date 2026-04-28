<?php

namespace EBay\ListingMetadata\Generated\Catalog\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type identifies a product category and the aspects associated with that category. Each aspect distribution container returns the distribution of values that have been used for the aspect.
*/
class Refinement implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AspectDistribution>|null $aspectDistributions Contains information about one or more aspects that are associated with the category identified by <b>dominantCategoryId</b>.
    */
    private ?array $aspectDistributions = null;
    
    /**
     * @var string|null $dominantCategoryId The ID of the category that eBay determines is most likely to cover the products matching the search criteria.
    */
    private ?string $dominantCategoryId = null;
    
    /**
     * Instantiates a new Refinement and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Refinement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Refinement {
        return new Refinement();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the aspectDistributions property value. Contains information about one or more aspects that are associated with the category identified by <b>dominantCategoryId</b>.
     * @return array<AspectDistribution>|null
    */
    public function getAspectDistributions(): ?array {
        return $this->aspectDistributions;
    }

    /**
     * Gets the dominantCategoryId property value. The ID of the category that eBay determines is most likely to cover the products matching the search criteria.
     * @return string|null
    */
    public function getDominantCategoryId(): ?string {
        return $this->dominantCategoryId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aspectDistributions' => fn(ParseNode $n) => $o->setAspectDistributions($n->getCollectionOfObjectValues([AspectDistribution::class, 'createFromDiscriminatorValue'])),
            'dominantCategoryId' => fn(ParseNode $n) => $o->setDominantCategoryId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('aspectDistributions', $this->getAspectDistributions());
        $writer->writeStringValue('dominantCategoryId', $this->getDominantCategoryId());
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
     * Sets the aspectDistributions property value. Contains information about one or more aspects that are associated with the category identified by <b>dominantCategoryId</b>.
     * @param array<AspectDistribution>|null $value Value to set for the aspectDistributions property.
    */
    public function setAspectDistributions(?array $value): void {
        $this->aspectDistributions = $value;
    }

    /**
     * Sets the dominantCategoryId property value. The ID of the category that eBay determines is most likely to cover the products matching the search criteria.
     * @param string|null $value Value to set for the dominantCategoryId property.
    */
    public function setDominantCategoryId(?string $value): void {
        $this->dominantCategoryId = $value;
    }

}
