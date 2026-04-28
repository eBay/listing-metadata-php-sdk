<?php

namespace EBay\ListingMetadata\Generated\Catalog\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains information about one category aspect that is associated with a specified category.
*/
class AspectDistribution implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AspectValueDistribution>|null $aspectValueDistributions Contains information about one or more values of the category aspect identified by <b>localizedAspectName</b>. 
    */
    private ?array $aspectValueDistributions = null;
    
    /**
     * @var string|null $localizedAspectName The localized name of an aspect that is associated with the category identified by <b>dominantCategoryId</b>.
    */
    private ?string $localizedAspectName = null;
    
    /**
     * Instantiates a new AspectDistribution and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AspectDistribution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AspectDistribution {
        return new AspectDistribution();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the aspectValueDistributions property value. Contains information about one or more values of the category aspect identified by <b>localizedAspectName</b>. 
     * @return array<AspectValueDistribution>|null
    */
    public function getAspectValueDistributions(): ?array {
        return $this->aspectValueDistributions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aspectValueDistributions' => fn(ParseNode $n) => $o->setAspectValueDistributions($n->getCollectionOfObjectValues([AspectValueDistribution::class, 'createFromDiscriminatorValue'])),
            'localizedAspectName' => fn(ParseNode $n) => $o->setLocalizedAspectName($n->getStringValue()),
        ];
    }

    /**
     * Gets the localizedAspectName property value. The localized name of an aspect that is associated with the category identified by <b>dominantCategoryId</b>.
     * @return string|null
    */
    public function getLocalizedAspectName(): ?string {
        return $this->localizedAspectName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('aspectValueDistributions', $this->getAspectValueDistributions());
        $writer->writeStringValue('localizedAspectName', $this->getLocalizedAspectName());
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
     * Sets the aspectValueDistributions property value. Contains information about one or more values of the category aspect identified by <b>localizedAspectName</b>. 
     * @param array<AspectValueDistribution>|null $value Value to set for the aspectValueDistributions property.
    */
    public function setAspectValueDistributions(?array $value): void {
        $this->aspectValueDistributions = $value;
    }

    /**
     * Sets the localizedAspectName property value. The localized name of an aspect that is associated with the category identified by <b>dominantCategoryId</b>.
     * @param string|null $value Value to set for the localizedAspectName property.
    */
    public function setLocalizedAspectName(?string $value): void {
        $this->localizedAspectName = $value;
    }

}
