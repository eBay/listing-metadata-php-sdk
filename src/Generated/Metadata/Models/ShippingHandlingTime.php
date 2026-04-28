<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides applicable shipping handling time metadata.
*/
class ShippingHandlingTime implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description The localized description of the maximum handling time.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $extendedHandling This field is only returned if its value is <code>true</code>. If returned, it indicates that the corresponding handling time is considered extended handling for the marketplace. Extended handling times may be used for freight shipping, but should generally be avoided if possible, as they might adversely affect the buying decisions of potential customers.
    */
    private ?bool $extendedHandling = null;
    
    /**
     * @var int|null $maxHandlingTime The integer value returned in this field indicates the maximum number of business days that the eBay site allows as a seller's handling time measured from when the buyer pays for the order. For example,  if the <b>maxHandlingTime</b> value is set to 1 and  a buyer pays for the order on a Wednesday, the seller would have to ship the item by the next day (Thursday). <br><br>A <b>maxHandlingTime</b> value of <code>0</code> indicates same day handling for an item. In this case, the seller's handling time commitment depends on the order cut off time set in the seller's user preferences. This defaults to 2:00 PM local time on most eBay sites. For orders placed (and cleared payment received) before the local order cut off time, the item must be shipped by the end of the current day. For orders completed on or after the order cut off time, the item must be shipped by the end of the following day (excluding weekends and local holidays).
    */
    private ?int $maxHandlingTime = null;
    
    /**
     * Instantiates a new ShippingHandlingTime and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingHandlingTime
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingHandlingTime {
        return new ShippingHandlingTime();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The localized description of the maximum handling time.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the extendedHandling property value. This field is only returned if its value is <code>true</code>. If returned, it indicates that the corresponding handling time is considered extended handling for the marketplace. Extended handling times may be used for freight shipping, but should generally be avoided if possible, as they might adversely affect the buying decisions of potential customers.
     * @return bool|null
    */
    public function getExtendedHandling(): ?bool {
        return $this->extendedHandling;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'extendedHandling' => fn(ParseNode $n) => $o->setExtendedHandling($n->getBooleanValue()),
            'maxHandlingTime' => fn(ParseNode $n) => $o->setMaxHandlingTime($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the maxHandlingTime property value. The integer value returned in this field indicates the maximum number of business days that the eBay site allows as a seller's handling time measured from when the buyer pays for the order. For example,  if the <b>maxHandlingTime</b> value is set to 1 and  a buyer pays for the order on a Wednesday, the seller would have to ship the item by the next day (Thursday). <br><br>A <b>maxHandlingTime</b> value of <code>0</code> indicates same day handling for an item. In this case, the seller's handling time commitment depends on the order cut off time set in the seller's user preferences. This defaults to 2:00 PM local time on most eBay sites. For orders placed (and cleared payment received) before the local order cut off time, the item must be shipped by the end of the current day. For orders completed on or after the order cut off time, the item must be shipped by the end of the following day (excluding weekends and local holidays).
     * @return int|null
    */
    public function getMaxHandlingTime(): ?int {
        return $this->maxHandlingTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('extendedHandling', $this->getExtendedHandling());
        $writer->writeIntegerValue('maxHandlingTime', $this->getMaxHandlingTime());
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
     * Sets the description property value. The localized description of the maximum handling time.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the extendedHandling property value. This field is only returned if its value is <code>true</code>. If returned, it indicates that the corresponding handling time is considered extended handling for the marketplace. Extended handling times may be used for freight shipping, but should generally be avoided if possible, as they might adversely affect the buying decisions of potential customers.
     * @param bool|null $value Value to set for the extendedHandling property.
    */
    public function setExtendedHandling(?bool $value): void {
        $this->extendedHandling = $value;
    }

    /**
     * Sets the maxHandlingTime property value. The integer value returned in this field indicates the maximum number of business days that the eBay site allows as a seller's handling time measured from when the buyer pays for the order. For example,  if the <b>maxHandlingTime</b> value is set to 1 and  a buyer pays for the order on a Wednesday, the seller would have to ship the item by the next day (Thursday). <br><br>A <b>maxHandlingTime</b> value of <code>0</code> indicates same day handling for an item. In this case, the seller's handling time commitment depends on the order cut off time set in the seller's user preferences. This defaults to 2:00 PM local time on most eBay sites. For orders placed (and cleared payment received) before the local order cut off time, the item must be shipped by the end of the current day. For orders completed on or after the order cut off time, the item must be shipped by the end of the following day (excluding weekends and local holidays).
     * @param int|null $value Value to set for the maxHandlingTime property.
    */
    public function setMaxHandlingTime(?int $value): void {
        $this->maxHandlingTime = $value;
    }

}
