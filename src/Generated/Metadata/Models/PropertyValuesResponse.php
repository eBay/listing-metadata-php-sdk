<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the response fields used in the <b>getCompatibilityPropertyValues</b> method.
*/
class PropertyValuesResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $metadataVersion The version number of the metadata. This version is upticked whenever there are compatibility name changes for the specified marketplace.
    */
    private ?string $metadataVersion = null;
    
    /**
     * @var string|null $propertyName The name of the property specified in the request.
    */
    private ?string $propertyName = null;
    
    /**
     * @var array<string>|null $propertyValues This array specifies the property values associated with the specified <b>propertyName</b>, in the specified category.
    */
    private ?array $propertyValues = null;
    
    /**
     * Instantiates a new PropertyValuesResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PropertyValuesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PropertyValuesResponse {
        return new PropertyValuesResponse();
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
            'metadataVersion' => fn(ParseNode $n) => $o->setMetadataVersion($n->getStringValue()),
            'propertyName' => fn(ParseNode $n) => $o->setPropertyName($n->getStringValue()),
            'propertyValues' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPropertyValues($val);
            },
        ];
    }

    /**
     * Gets the metadataVersion property value. The version number of the metadata. This version is upticked whenever there are compatibility name changes for the specified marketplace.
     * @return string|null
    */
    public function getMetadataVersion(): ?string {
        return $this->metadataVersion;
    }

    /**
     * Gets the propertyName property value. The name of the property specified in the request.
     * @return string|null
    */
    public function getPropertyName(): ?string {
        return $this->propertyName;
    }

    /**
     * Gets the propertyValues property value. This array specifies the property values associated with the specified <b>propertyName</b>, in the specified category.
     * @return array<string>|null
    */
    public function getPropertyValues(): ?array {
        return $this->propertyValues;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('metadataVersion', $this->getMetadataVersion());
        $writer->writeStringValue('propertyName', $this->getPropertyName());
        $writer->writeCollectionOfPrimitiveValues('propertyValues', $this->getPropertyValues());
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
     * Sets the metadataVersion property value. The version number of the metadata. This version is upticked whenever there are compatibility name changes for the specified marketplace.
     * @param string|null $value Value to set for the metadataVersion property.
    */
    public function setMetadataVersion(?string $value): void {
        $this->metadataVersion = $value;
    }

    /**
     * Sets the propertyName property value. The name of the property specified in the request.
     * @param string|null $value Value to set for the propertyName property.
    */
    public function setPropertyName(?string $value): void {
        $this->propertyName = $value;
    }

    /**
     * Sets the propertyValues property value. This array specifies the property values associated with the specified <b>propertyName</b>, in the specified category.
     * @param array<string>|null $value Value to set for the propertyValues property.
    */
    public function setPropertyValues(?array $value): void {
        $this->propertyValues = $value;
    }

}
