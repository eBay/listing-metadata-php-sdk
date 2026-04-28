<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains a valid value for an aspect, along with any constraints on the occurrence of that value.
*/
class AspectValue implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $localizedValue The localized value of this aspect.<br><br>          <span class="tablenote"> <strong>Note:</strong> This value is always localized for the specified marketplace. </span>
    */
    private ?string $localizedValue = null;
    
    /**
     * @var array<ValueConstraint>|null $valueConstraints <i>Not returned if</i> the value of the <b>localizedValue</b> field can always be selected for this aspect of the specified category.<br><br>Contains a list of the dependencies that identify when the value of the <b>localizedValue</b> field is available for the current aspect. Each dependency specifies the values of another aspect of the same category (a <i>control</i> aspect), for which the current value of the current aspect can also be selected by the seller. <br><br>          <b>Example:</b> A shirt is available in three sizes and three colors, but only the Small and Medium sizes come in Green. Thus for the Color aspect, the value Green is constrained by its dependency on Size (the control aspect). Only when the Size aspect value is Small or Medium, can the Color aspect value of Green be selected by the seller.
    */
    private ?array $valueConstraints = null;
    
    /**
     * Instantiates a new AspectValue and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AspectValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AspectValue {
        return new AspectValue();
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
            'localizedValue' => fn(ParseNode $n) => $o->setLocalizedValue($n->getStringValue()),
            'valueConstraints' => fn(ParseNode $n) => $o->setValueConstraints($n->getCollectionOfObjectValues([ValueConstraint::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the localizedValue property value. The localized value of this aspect.<br><br>          <span class="tablenote"> <strong>Note:</strong> This value is always localized for the specified marketplace. </span>
     * @return string|null
    */
    public function getLocalizedValue(): ?string {
        return $this->localizedValue;
    }

    /**
     * Gets the valueConstraints property value. <i>Not returned if</i> the value of the <b>localizedValue</b> field can always be selected for this aspect of the specified category.<br><br>Contains a list of the dependencies that identify when the value of the <b>localizedValue</b> field is available for the current aspect. Each dependency specifies the values of another aspect of the same category (a <i>control</i> aspect), for which the current value of the current aspect can also be selected by the seller. <br><br>          <b>Example:</b> A shirt is available in three sizes and three colors, but only the Small and Medium sizes come in Green. Thus for the Color aspect, the value Green is constrained by its dependency on Size (the control aspect). Only when the Size aspect value is Small or Medium, can the Color aspect value of Green be selected by the seller.
     * @return array<ValueConstraint>|null
    */
    public function getValueConstraints(): ?array {
        return $this->valueConstraints;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('localizedValue', $this->getLocalizedValue());
        $writer->writeCollectionOfObjectValues('valueConstraints', $this->getValueConstraints());
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
     * Sets the localizedValue property value. The localized value of this aspect.<br><br>          <span class="tablenote"> <strong>Note:</strong> This value is always localized for the specified marketplace. </span>
     * @param string|null $value Value to set for the localizedValue property.
    */
    public function setLocalizedValue(?string $value): void {
        $this->localizedValue = $value;
    }

    /**
     * Sets the valueConstraints property value. <i>Not returned if</i> the value of the <b>localizedValue</b> field can always be selected for this aspect of the specified category.<br><br>Contains a list of the dependencies that identify when the value of the <b>localizedValue</b> field is available for the current aspect. Each dependency specifies the values of another aspect of the same category (a <i>control</i> aspect), for which the current value of the current aspect can also be selected by the seller. <br><br>          <b>Example:</b> A shirt is available in three sizes and three colors, but only the Small and Medium sizes come in Green. Thus for the Color aspect, the value Green is constrained by its dependency on Size (the control aspect). Only when the Size aspect value is Small or Medium, can the Color aspect value of Green be selected by the seller.
     * @param array<ValueConstraint>|null $value Value to set for the valueConstraints property.
    */
    public function setValueConstraints(?array $value): void {
        $this->valueConstraints = $value;
    }

}
