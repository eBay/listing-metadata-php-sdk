<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields associated with a property name.
*/
class PropertyNamesResponsePropertyNames implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $propertyDisplayName The display name of a property. This is the localized name of the compatible property.
    */
    private ?string $propertyDisplayName = null;
    
    /**
     * @var string|null $propertyName The canonical name of a property. This value is used as part of the name-value pairs used to specify compatibility.
    */
    private ?string $propertyName = null;
    
    /**
     * @var PropertyNamesResponsePropertyNameMetadata|null $propertyNameMetadata This type defines the property name metadata.
    */
    private ?PropertyNamesResponsePropertyNameMetadata $propertyNameMetadata = null;
    
    /**
     * Instantiates a new PropertyNamesResponsePropertyNames and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PropertyNamesResponsePropertyNames
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PropertyNamesResponsePropertyNames {
        return new PropertyNamesResponsePropertyNames();
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
            'propertyDisplayName' => fn(ParseNode $n) => $o->setPropertyDisplayName($n->getStringValue()),
            'propertyName' => fn(ParseNode $n) => $o->setPropertyName($n->getStringValue()),
            'propertyNameMetadata' => fn(ParseNode $n) => $o->setPropertyNameMetadata($n->getObjectValue([PropertyNamesResponsePropertyNameMetadata::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the propertyDisplayName property value. The display name of a property. This is the localized name of the compatible property.
     * @return string|null
    */
    public function getPropertyDisplayName(): ?string {
        return $this->propertyDisplayName;
    }

    /**
     * Gets the propertyName property value. The canonical name of a property. This value is used as part of the name-value pairs used to specify compatibility.
     * @return string|null
    */
    public function getPropertyName(): ?string {
        return $this->propertyName;
    }

    /**
     * Gets the propertyNameMetadata property value. This type defines the property name metadata.
     * @return PropertyNamesResponsePropertyNameMetadata|null
    */
    public function getPropertyNameMetadata(): ?PropertyNamesResponsePropertyNameMetadata {
        return $this->propertyNameMetadata;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('propertyDisplayName', $this->getPropertyDisplayName());
        $writer->writeStringValue('propertyName', $this->getPropertyName());
        $writer->writeObjectValue('propertyNameMetadata', $this->getPropertyNameMetadata());
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
     * Sets the propertyDisplayName property value. The display name of a property. This is the localized name of the compatible property.
     * @param string|null $value Value to set for the propertyDisplayName property.
    */
    public function setPropertyDisplayName(?string $value): void {
        $this->propertyDisplayName = $value;
    }

    /**
     * Sets the propertyName property value. The canonical name of a property. This value is used as part of the name-value pairs used to specify compatibility.
     * @param string|null $value Value to set for the propertyName property.
    */
    public function setPropertyName(?string $value): void {
        $this->propertyName = $value;
    }

    /**
     * Sets the propertyNameMetadata property value. This type defines the property name metadata.
     * @param PropertyNamesResponsePropertyNameMetadata|null $value Value to set for the propertyNameMetadata property.
    */
    public function setPropertyNameMetadata(?PropertyNamesResponsePropertyNameMetadata $value): void {
        $this->propertyNameMetadata = $value;
    }

}
