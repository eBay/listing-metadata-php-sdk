<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides applicable shipping handling times returned for the specified marketplace.
*/
class ShippingHandlingTimeResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ShippingHandlingTime>|null $handlingTimes A list of supported handling times for the marketplace.
    */
    private ?array $handlingTimes = null;
    
    /**
     * Instantiates a new ShippingHandlingTimeResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingHandlingTimeResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingHandlingTimeResponse {
        return new ShippingHandlingTimeResponse();
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
            'handlingTimes' => fn(ParseNode $n) => $o->setHandlingTimes($n->getCollectionOfObjectValues([ShippingHandlingTime::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the handlingTimes property value. A list of supported handling times for the marketplace.
     * @return array<ShippingHandlingTime>|null
    */
    public function getHandlingTimes(): ?array {
        return $this->handlingTimes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('handlingTimes', $this->getHandlingTimes());
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
     * Sets the handlingTimes property value. A list of supported handling times for the marketplace.
     * @param array<ShippingHandlingTime>|null $value Value to set for the handlingTimes property.
    */
    public function setHandlingTimes(?array $value): void {
        $this->handlingTimes = $value;
    }

}
