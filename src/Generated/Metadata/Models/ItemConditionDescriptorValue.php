<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type displays the possible values for the corresponding condition descriptor, along with help text and constraint information.
*/
class ItemConditionDescriptorValue implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $conditionDescriptorValueAdditionalHelpText Additional information about the the condition of the item that is not included in the <b>conditionDescriptorValueHelpText</b> field.
    */
    private ?array $conditionDescriptorValueAdditionalHelpText = null;
    
    /**
     * @var array<ItemConditionDescriptorValueConstraint>|null $conditionDescriptorValueConstraints The constraints on a condition descriptor value, such as which descriptor value IDs and Descriptor ID it is associated with.
    */
    private ?array $conditionDescriptorValueConstraints = null;
    
    /**
     * @var string|null $conditionDescriptorValueHelpText A detailed description of the condition descriptor value. 
    */
    private ?string $conditionDescriptorValueHelpText = null;
    
    /**
     * @var string|null $conditionDescriptorValueId The unique identification number of a condition descriptor value associated with the <b>conditionDescriptorValueName</b>.
    */
    private ?string $conditionDescriptorValueId = null;
    
    /**
     * @var string|null $conditionDescriptorValueName The human-readable label for the condition descriptor value associated with the <b>conditionDescriptorValueID</b>.
    */
    private ?string $conditionDescriptorValueName = null;
    
    /**
     * Instantiates a new ItemConditionDescriptorValue and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemConditionDescriptorValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemConditionDescriptorValue {
        return new ItemConditionDescriptorValue();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conditionDescriptorValueAdditionalHelpText property value. Additional information about the the condition of the item that is not included in the <b>conditionDescriptorValueHelpText</b> field.
     * @return array<string>|null
    */
    public function getConditionDescriptorValueAdditionalHelpText(): ?array {
        return $this->conditionDescriptorValueAdditionalHelpText;
    }

    /**
     * Gets the conditionDescriptorValueConstraints property value. The constraints on a condition descriptor value, such as which descriptor value IDs and Descriptor ID it is associated with.
     * @return array<ItemConditionDescriptorValueConstraint>|null
    */
    public function getConditionDescriptorValueConstraints(): ?array {
        return $this->conditionDescriptorValueConstraints;
    }

    /**
     * Gets the conditionDescriptorValueHelpText property value. A detailed description of the condition descriptor value. 
     * @return string|null
    */
    public function getConditionDescriptorValueHelpText(): ?string {
        return $this->conditionDescriptorValueHelpText;
    }

    /**
     * Gets the conditionDescriptorValueId property value. The unique identification number of a condition descriptor value associated with the <b>conditionDescriptorValueName</b>.
     * @return string|null
    */
    public function getConditionDescriptorValueId(): ?string {
        return $this->conditionDescriptorValueId;
    }

    /**
     * Gets the conditionDescriptorValueName property value. The human-readable label for the condition descriptor value associated with the <b>conditionDescriptorValueID</b>.
     * @return string|null
    */
    public function getConditionDescriptorValueName(): ?string {
        return $this->conditionDescriptorValueName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conditionDescriptorValueAdditionalHelpText' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setConditionDescriptorValueAdditionalHelpText($val);
            },
            'conditionDescriptorValueConstraints' => fn(ParseNode $n) => $o->setConditionDescriptorValueConstraints($n->getCollectionOfObjectValues([ItemConditionDescriptorValueConstraint::class, 'createFromDiscriminatorValue'])),
            'conditionDescriptorValueHelpText' => fn(ParseNode $n) => $o->setConditionDescriptorValueHelpText($n->getStringValue()),
            'conditionDescriptorValueId' => fn(ParseNode $n) => $o->setConditionDescriptorValueId($n->getStringValue()),
            'conditionDescriptorValueName' => fn(ParseNode $n) => $o->setConditionDescriptorValueName($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('conditionDescriptorValueAdditionalHelpText', $this->getConditionDescriptorValueAdditionalHelpText());
        $writer->writeCollectionOfObjectValues('conditionDescriptorValueConstraints', $this->getConditionDescriptorValueConstraints());
        $writer->writeStringValue('conditionDescriptorValueHelpText', $this->getConditionDescriptorValueHelpText());
        $writer->writeStringValue('conditionDescriptorValueId', $this->getConditionDescriptorValueId());
        $writer->writeStringValue('conditionDescriptorValueName', $this->getConditionDescriptorValueName());
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
     * Sets the conditionDescriptorValueAdditionalHelpText property value. Additional information about the the condition of the item that is not included in the <b>conditionDescriptorValueHelpText</b> field.
     * @param array<string>|null $value Value to set for the conditionDescriptorValueAdditionalHelpText property.
    */
    public function setConditionDescriptorValueAdditionalHelpText(?array $value): void {
        $this->conditionDescriptorValueAdditionalHelpText = $value;
    }

    /**
     * Sets the conditionDescriptorValueConstraints property value. The constraints on a condition descriptor value, such as which descriptor value IDs and Descriptor ID it is associated with.
     * @param array<ItemConditionDescriptorValueConstraint>|null $value Value to set for the conditionDescriptorValueConstraints property.
    */
    public function setConditionDescriptorValueConstraints(?array $value): void {
        $this->conditionDescriptorValueConstraints = $value;
    }

    /**
     * Sets the conditionDescriptorValueHelpText property value. A detailed description of the condition descriptor value. 
     * @param string|null $value Value to set for the conditionDescriptorValueHelpText property.
    */
    public function setConditionDescriptorValueHelpText(?string $value): void {
        $this->conditionDescriptorValueHelpText = $value;
    }

    /**
     * Sets the conditionDescriptorValueId property value. The unique identification number of a condition descriptor value associated with the <b>conditionDescriptorValueName</b>.
     * @param string|null $value Value to set for the conditionDescriptorValueId property.
    */
    public function setConditionDescriptorValueId(?string $value): void {
        $this->conditionDescriptorValueId = $value;
    }

    /**
     * Sets the conditionDescriptorValueName property value. The human-readable label for the condition descriptor value associated with the <b>conditionDescriptorValueID</b>.
     * @param string|null $value Value to set for the conditionDescriptorValueName property.
    */
    public function setConditionDescriptorValueName(?string $value): void {
        $this->conditionDescriptorValueName = $value;
    }

}
