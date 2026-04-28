<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to define the available compatibility property filters.
*/
class PropertyFilterInner implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $propertyName The name of the property being described.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category. Use the <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyNames" target="_blank ">getCompatibilityPropertyNames</a> method to retrieve valid property names for a specified category.
    */
    private ?string $propertyName = null;
    
    /**
     * @var string|null $propertyValue The value for the property specified in the <b>properyName</b> field.<br><br>For example, if the <b>propertyName</b> is <code>Make</code>, then the <b>propertyValue</b> will be the specific make of the vehicle, such as <code>Toyota</code>. Use the <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyValues" target="_blank ">getCompatibilityPropertyValues</a> to retreive valid property values associated with a specified property name.
    */
    private ?string $propertyValue = null;
    
    /**
     * @var string|null $unitOfMeasurement The unit of measurement of the property being described, if applicable.
    */
    private ?string $unitOfMeasurement = null;
    
    /**
     * @var string|null $url The URL associated with the property being described, if applicable.
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new PropertyFilterInner and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PropertyFilterInner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PropertyFilterInner {
        return new PropertyFilterInner();
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
            'unitOfMeasurement' => fn(ParseNode $n) => $o->setUnitOfMeasurement($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the propertyName property value. The name of the property being described.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category. Use the <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyNames" target="_blank ">getCompatibilityPropertyNames</a> method to retrieve valid property names for a specified category.
     * @return string|null
    */
    public function getPropertyName(): ?string {
        return $this->propertyName;
    }

    /**
     * Gets the propertyValue property value. The value for the property specified in the <b>properyName</b> field.<br><br>For example, if the <b>propertyName</b> is <code>Make</code>, then the <b>propertyValue</b> will be the specific make of the vehicle, such as <code>Toyota</code>. Use the <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyValues" target="_blank ">getCompatibilityPropertyValues</a> to retreive valid property values associated with a specified property name.
     * @return string|null
    */
    public function getPropertyValue(): ?string {
        return $this->propertyValue;
    }

    /**
     * Gets the unitOfMeasurement property value. The unit of measurement of the property being described, if applicable.
     * @return string|null
    */
    public function getUnitOfMeasurement(): ?string {
        return $this->unitOfMeasurement;
    }

    /**
     * Gets the url property value. The URL associated with the property being described, if applicable.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('propertyName', $this->getPropertyName());
        $writer->writeStringValue('propertyValue', $this->getPropertyValue());
        $writer->writeStringValue('unitOfMeasurement', $this->getUnitOfMeasurement());
        $writer->writeStringValue('url', $this->getUrl());
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
     * Sets the propertyName property value. The name of the property being described.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category. Use the <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyNames" target="_blank ">getCompatibilityPropertyNames</a> method to retrieve valid property names for a specified category.
     * @param string|null $value Value to set for the propertyName property.
    */
    public function setPropertyName(?string $value): void {
        $this->propertyName = $value;
    }

    /**
     * Sets the propertyValue property value. The value for the property specified in the <b>properyName</b> field.<br><br>For example, if the <b>propertyName</b> is <code>Make</code>, then the <b>propertyValue</b> will be the specific make of the vehicle, such as <code>Toyota</code>. Use the <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyValues" target="_blank ">getCompatibilityPropertyValues</a> to retreive valid property values associated with a specified property name.
     * @param string|null $value Value to set for the propertyValue property.
    */
    public function setPropertyValue(?string $value): void {
        $this->propertyValue = $value;
    }

    /**
     * Sets the unitOfMeasurement property value. The unit of measurement of the property being described, if applicable.
     * @param string|null $value Value to set for the unitOfMeasurement property.
    */
    public function setUnitOfMeasurement(?string $value): void {
        $this->unitOfMeasurement = $value;
    }

    /**
     * Sets the url property value. The URL associated with the property being described, if applicable.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
