<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the name-value pair associated with a property value.
*/
class PropertyValues implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $propertyName The name of the property.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
    */
    private ?string $propertyName = null;
    
    /**
     * @var string|null $propertyValue The value for the property specified in the <b>properyName</b> field.<br><br>For example, if the <b>propertyName</b> is <code>make</code>, then the <b>propertyValue</b> will be the specific make of the vehicle, such as <code>Toyota</code>.
    */
    private ?string $propertyValue = null;
    
    /**
     * Instantiates a new PropertyValues and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PropertyValues
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PropertyValues {
        return new PropertyValues();
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
            'propertyName' => fn(ParseNode $n) => $o->setPropertyName($n->getStringValue()),
            'propertyValue' => fn(ParseNode $n) => $o->setPropertyValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the propertyName property value. The name of the property.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
     * @return string|null
    */
    public function getPropertyName(): ?string {
        return $this->propertyName;
    }

    /**
     * Gets the propertyValue property value. The value for the property specified in the <b>properyName</b> field.<br><br>For example, if the <b>propertyName</b> is <code>make</code>, then the <b>propertyValue</b> will be the specific make of the vehicle, such as <code>Toyota</code>.
     * @return string|null
    */
    public function getPropertyValue(): ?string {
        return $this->propertyValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('propertyName', $this->getPropertyName());
        $writer->writeStringValue('propertyValue', $this->getPropertyValue());
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
     * Sets the propertyName property value. The name of the property.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
     * @param string|null $value Value to set for the propertyName property.
    */
    public function setPropertyName(?string $value): void {
        $this->propertyName = $value;
    }

    /**
     * Sets the propertyValue property value. The value for the property specified in the <b>properyName</b> field.<br><br>For example, if the <b>propertyName</b> is <code>make</code>, then the <b>propertyValue</b> will be the specific make of the vehicle, such as <code>Toyota</code>.
     * @param string|null $value Value to set for the propertyValue property.
    */
    public function setPropertyValue(?string $value): void {
        $this->propertyValue = $value;
    }

}
