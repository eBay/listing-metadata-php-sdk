<?php

namespace EBay\ListingMetadata\Generated\Charity\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Location implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Address|null $address The physical location of the item.
    */
    private ?Address $address = null;
    
    /**
     * @var GeoCoordinates|null $geoCoordinates Defines the format of a geographic coordinate.
    */
    private ?GeoCoordinates $geoCoordinates = null;
    
    /**
     * Instantiates a new Location and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Location
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Location {
        return new Location();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. The physical location of the item.
     * @return Address|null
    */
    public function getAddress(): ?Address {
        return $this->address;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([Address::class, 'createFromDiscriminatorValue'])),
            'geoCoordinates' => fn(ParseNode $n) => $o->setGeoCoordinates($n->getObjectValue([GeoCoordinates::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the geoCoordinates property value. Defines the format of a geographic coordinate.
     * @return GeoCoordinates|null
    */
    public function getGeoCoordinates(): ?GeoCoordinates {
        return $this->geoCoordinates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeObjectValue('geoCoordinates', $this->getGeoCoordinates());
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
     * Sets the address property value. The physical location of the item.
     * @param Address|null $value Value to set for the address property.
    */
    public function setAddress(?Address $value): void {
        $this->address = $value;
    }

    /**
     * Sets the geoCoordinates property value. Defines the format of a geographic coordinate.
     * @param GeoCoordinates|null $value Value to set for the geoCoordinates property.
    */
    public function setGeoCoordinates(?GeoCoordinates $value): void {
        $this->geoCoordinates = $value;
    }

}
