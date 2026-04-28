<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the property names and values that are compatible with the property name values specified in the request.
*/
class Compatibility implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CompatibilityDetails>|null $compatibilityDetails This array returns a list of compatibility details associated with the specified property name(s).
    */
    private ?array $compatibilityDetails = null;
    
    /**
     * Instantiates a new Compatibility and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Compatibility
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Compatibility {
        return new Compatibility();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the compatibilityDetails property value. This array returns a list of compatibility details associated with the specified property name(s).
     * @return array<CompatibilityDetails>|null
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
            'compatibilityDetails' => fn(ParseNode $n) => $o->setCompatibilityDetails($n->getCollectionOfObjectValues([CompatibilityDetails::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('compatibilityDetails', $this->getCompatibilityDetails());
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
     * Sets the compatibilityDetails property value. This array returns a list of compatibility details associated with the specified property name(s).
     * @param array<CompatibilityDetails>|null $value Value to set for the compatibilityDetails property.
    */
    public function setCompatibilityDetails(?array $value): void {
        $this->compatibilityDetails = $value;
    }

}
