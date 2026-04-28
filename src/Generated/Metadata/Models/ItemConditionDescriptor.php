<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to display the possible condition descriptors and condition values applicable for a specified category. It also returns usage requirements, maximum length, cardinality, and help text.
*/
class ItemConditionDescriptor implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ItemConditionDescriptorConstraint|null $conditionDescriptorConstraint This type specifies the constraints on a condition descriptor, such as the maximum length, default condition descriptor value ID, cardinality, mode, usage, and applicable descriptor IDs.
    */
    private ?ItemConditionDescriptorConstraint $conditionDescriptorConstraint = null;
    
    /**
     * @var string|null $conditionDescriptorHelpText A description of the condition descriptor that directs a user to its condition descriptor values.<br><br> For example, the help text for <code>Card Condition</code> is <code>Select ungraded condition</code>.
    */
    private ?string $conditionDescriptorHelpText = null;
    
    /**
     * @var string|null $conditionDescriptorId The unique identification number of a condition descriptor associated with with a <b>conditionDescriptorName</b>. <br><br>For example, <code>40001</code> is the ID for <code>Card Condition</code>.<br><br>These IDs are used in the addItem family of calls of the <b>Trading API</b> to provide condition descriptor names for the item. These IDs are used by the inventoryItem family of calls of the <b>Inventory API</b> to provide condition descriptor names for the item.
    */
    private ?string $conditionDescriptorId = null;
    
    /**
     * @var string|null $conditionDescriptorName The human-readable label for the condition descriptor associated with the <b>conditionDescriptorID</b>. <br><br>For example, <code>Card Condition</code> is the condition descriptor name for ID <code>40001</code>
    */
    private ?string $conditionDescriptorName = null;
    
    /**
     * @var array<ItemConditionDescriptorValue>|null $conditionDescriptorValues This array shows the possible values that map to the corresponding <b>conditionDescriptorName</b> values. Constraint information and help text are also shown for each value. <br><br>For example, The ID <code>40001</code> is ID for the condition descriptor <code>card condition</code>. The ID <code>400012</code> is the ID for the <code>Very Good</code> card condition value.
    */
    private ?array $conditionDescriptorValues = null;
    
    /**
     * Instantiates a new ItemConditionDescriptor and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemConditionDescriptor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemConditionDescriptor {
        return new ItemConditionDescriptor();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conditionDescriptorConstraint property value. This type specifies the constraints on a condition descriptor, such as the maximum length, default condition descriptor value ID, cardinality, mode, usage, and applicable descriptor IDs.
     * @return ItemConditionDescriptorConstraint|null
    */
    public function getConditionDescriptorConstraint(): ?ItemConditionDescriptorConstraint {
        return $this->conditionDescriptorConstraint;
    }

    /**
     * Gets the conditionDescriptorHelpText property value. A description of the condition descriptor that directs a user to its condition descriptor values.<br><br> For example, the help text for <code>Card Condition</code> is <code>Select ungraded condition</code>.
     * @return string|null
    */
    public function getConditionDescriptorHelpText(): ?string {
        return $this->conditionDescriptorHelpText;
    }

    /**
     * Gets the conditionDescriptorId property value. The unique identification number of a condition descriptor associated with with a <b>conditionDescriptorName</b>. <br><br>For example, <code>40001</code> is the ID for <code>Card Condition</code>.<br><br>These IDs are used in the addItem family of calls of the <b>Trading API</b> to provide condition descriptor names for the item. These IDs are used by the inventoryItem family of calls of the <b>Inventory API</b> to provide condition descriptor names for the item.
     * @return string|null
    */
    public function getConditionDescriptorId(): ?string {
        return $this->conditionDescriptorId;
    }

    /**
     * Gets the conditionDescriptorName property value. The human-readable label for the condition descriptor associated with the <b>conditionDescriptorID</b>. <br><br>For example, <code>Card Condition</code> is the condition descriptor name for ID <code>40001</code>
     * @return string|null
    */
    public function getConditionDescriptorName(): ?string {
        return $this->conditionDescriptorName;
    }

    /**
     * Gets the conditionDescriptorValues property value. This array shows the possible values that map to the corresponding <b>conditionDescriptorName</b> values. Constraint information and help text are also shown for each value. <br><br>For example, The ID <code>40001</code> is ID for the condition descriptor <code>card condition</code>. The ID <code>400012</code> is the ID for the <code>Very Good</code> card condition value.
     * @return array<ItemConditionDescriptorValue>|null
    */
    public function getConditionDescriptorValues(): ?array {
        return $this->conditionDescriptorValues;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conditionDescriptorConstraint' => fn(ParseNode $n) => $o->setConditionDescriptorConstraint($n->getObjectValue([ItemConditionDescriptorConstraint::class, 'createFromDiscriminatorValue'])),
            'conditionDescriptorHelpText' => fn(ParseNode $n) => $o->setConditionDescriptorHelpText($n->getStringValue()),
            'conditionDescriptorId' => fn(ParseNode $n) => $o->setConditionDescriptorId($n->getStringValue()),
            'conditionDescriptorName' => fn(ParseNode $n) => $o->setConditionDescriptorName($n->getStringValue()),
            'conditionDescriptorValues' => fn(ParseNode $n) => $o->setConditionDescriptorValues($n->getCollectionOfObjectValues([ItemConditionDescriptorValue::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('conditionDescriptorConstraint', $this->getConditionDescriptorConstraint());
        $writer->writeStringValue('conditionDescriptorHelpText', $this->getConditionDescriptorHelpText());
        $writer->writeStringValue('conditionDescriptorId', $this->getConditionDescriptorId());
        $writer->writeStringValue('conditionDescriptorName', $this->getConditionDescriptorName());
        $writer->writeCollectionOfObjectValues('conditionDescriptorValues', $this->getConditionDescriptorValues());
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
     * Sets the conditionDescriptorConstraint property value. This type specifies the constraints on a condition descriptor, such as the maximum length, default condition descriptor value ID, cardinality, mode, usage, and applicable descriptor IDs.
     * @param ItemConditionDescriptorConstraint|null $value Value to set for the conditionDescriptorConstraint property.
    */
    public function setConditionDescriptorConstraint(?ItemConditionDescriptorConstraint $value): void {
        $this->conditionDescriptorConstraint = $value;
    }

    /**
     * Sets the conditionDescriptorHelpText property value. A description of the condition descriptor that directs a user to its condition descriptor values.<br><br> For example, the help text for <code>Card Condition</code> is <code>Select ungraded condition</code>.
     * @param string|null $value Value to set for the conditionDescriptorHelpText property.
    */
    public function setConditionDescriptorHelpText(?string $value): void {
        $this->conditionDescriptorHelpText = $value;
    }

    /**
     * Sets the conditionDescriptorId property value. The unique identification number of a condition descriptor associated with with a <b>conditionDescriptorName</b>. <br><br>For example, <code>40001</code> is the ID for <code>Card Condition</code>.<br><br>These IDs are used in the addItem family of calls of the <b>Trading API</b> to provide condition descriptor names for the item. These IDs are used by the inventoryItem family of calls of the <b>Inventory API</b> to provide condition descriptor names for the item.
     * @param string|null $value Value to set for the conditionDescriptorId property.
    */
    public function setConditionDescriptorId(?string $value): void {
        $this->conditionDescriptorId = $value;
    }

    /**
     * Sets the conditionDescriptorName property value. The human-readable label for the condition descriptor associated with the <b>conditionDescriptorID</b>. <br><br>For example, <code>Card Condition</code> is the condition descriptor name for ID <code>40001</code>
     * @param string|null $value Value to set for the conditionDescriptorName property.
    */
    public function setConditionDescriptorName(?string $value): void {
        $this->conditionDescriptorName = $value;
    }

    /**
     * Sets the conditionDescriptorValues property value. This array shows the possible values that map to the corresponding <b>conditionDescriptorName</b> values. Constraint information and help text are also shown for each value. <br><br>For example, The ID <code>40001</code> is ID for the condition descriptor <code>card condition</code>. The ID <code>400012</code> is the ID for the <code>Very Good</code> card condition value.
     * @param array<ItemConditionDescriptorValue>|null $value Value to set for the conditionDescriptorValues property.
    */
    public function setConditionDescriptorValues(?array $value): void {
        $this->conditionDescriptorValues = $value;
    }

}
