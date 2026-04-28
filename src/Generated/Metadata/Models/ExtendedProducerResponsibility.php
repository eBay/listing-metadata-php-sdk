<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that defines the attributes of an Extended Producer Responsibility policy.
*/
class ExtendedProducerResponsibility implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $enabledForVariations An indication of whether the attribute can be enabled for listing variations.<br><br>If the value is <code>true</code>, the attribute may be specified at the variation level.
    */
    private ?bool $enabledForVariations = null;
    
    /**
     * @var string|null $name The name of the attribute included in the policy. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ExtendedProducerResponsibilityEnum'>eBay API documentation</a>
    */
    private ?string $name = null;
    
    /**
     * @var string|null $usage The usage guidelines for the attribute, in the specified marketplace. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:GenericUsageEnum'>eBay API documentation</a>
    */
    private ?string $usage = null;
    
    /**
     * Instantiates a new ExtendedProducerResponsibility and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtendedProducerResponsibility
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExtendedProducerResponsibility {
        return new ExtendedProducerResponsibility();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the enabledForVariations property value. An indication of whether the attribute can be enabled for listing variations.<br><br>If the value is <code>true</code>, the attribute may be specified at the variation level.
     * @return bool|null
    */
    public function getEnabledForVariations(): ?bool {
        return $this->enabledForVariations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabledForVariations' => fn(ParseNode $n) => $o->setEnabledForVariations($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The name of the attribute included in the policy. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ExtendedProducerResponsibilityEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the usage property value. The usage guidelines for the attribute, in the specified marketplace. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:GenericUsageEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getUsage(): ?string {
        return $this->usage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enabledForVariations', $this->getEnabledForVariations());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('usage', $this->getUsage());
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
     * Sets the enabledForVariations property value. An indication of whether the attribute can be enabled for listing variations.<br><br>If the value is <code>true</code>, the attribute may be specified at the variation level.
     * @param bool|null $value Value to set for the enabledForVariations property.
    */
    public function setEnabledForVariations(?bool $value): void {
        $this->enabledForVariations = $value;
    }

    /**
     * Sets the name property value. The name of the attribute included in the policy. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ExtendedProducerResponsibilityEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the usage property value. The usage guidelines for the attribute, in the specified marketplace. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:GenericUsageEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the usage property.
    */
    public function setUsage(?string $value): void {
        $this->usage = $value;
    }

}
