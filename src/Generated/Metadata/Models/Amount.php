<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type that defines the fields for the currency and a monetary amount.
*/
class Amount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $currency The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> value</b> field.  <br /><br /><b>Restriction: </b> Only the currency of the marketplace is supported. For example, on the US marketplace the only currency supported is USD. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/bas:CurrencyCodeEnum'>eBay API documentation</a>
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $value The monetary amount, in the currency specified by the <b>currency</b> field.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new Amount and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Amount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Amount {
        return new Amount();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the currency property value. The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> value</b> field.  <br /><br /><b>Restriction: </b> Only the currency of the marketplace is supported. For example, on the US marketplace the only currency supported is USD. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/bas:CurrencyCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the value property value. The monetary amount, in the currency specified by the <b>currency</b> field.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the currency property value. The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> value</b> field.  <br /><br /><b>Restriction: </b> Only the currency of the marketplace is supported. For example, on the US marketplace the only currency supported is USD. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/bas:CurrencyCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the value property value. The monetary amount, in the currency specified by the <b>currency</b> field.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
