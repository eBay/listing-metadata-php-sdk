<?php

namespace EBay\ListingMetadata\Generated\Charity\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The logo of the charitable organization.
*/
class Image implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $height The height of the logo image.
    */
    private ?string $height = null;
    
    /**
     * @var string|null $imageUrl The URL to the logo image location.
    */
    private ?string $imageUrl = null;
    
    /**
     * @var string|null $width The width of the logo image.
    */
    private ?string $width = null;
    
    /**
     * Instantiates a new Image and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Image
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Image {
        return new Image();
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
            'height' => fn(ParseNode $n) => $o->setHeight($n->getStringValue()),
            'imageUrl' => fn(ParseNode $n) => $o->setImageUrl($n->getStringValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getStringValue()),
        ];
    }

    /**
     * Gets the height property value. The height of the logo image.
     * @return string|null
    */
    public function getHeight(): ?string {
        return $this->height;
    }

    /**
     * Gets the imageUrl property value. The URL to the logo image location.
     * @return string|null
    */
    public function getImageUrl(): ?string {
        return $this->imageUrl;
    }

    /**
     * Gets the width property value. The width of the logo image.
     * @return string|null
    */
    public function getWidth(): ?string {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('height', $this->getHeight());
        $writer->writeStringValue('imageUrl', $this->getImageUrl());
        $writer->writeStringValue('width', $this->getWidth());
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
     * Sets the height property value. The height of the logo image.
     * @param string|null $value Value to set for the height property.
    */
    public function setHeight(?string $value): void {
        $this->height = $value;
    }

    /**
     * Sets the imageUrl property value. The URL to the logo image location.
     * @param string|null $value Value to set for the imageUrl property.
    */
    public function setImageUrl(?string $value): void {
        $this->imageUrl = $value;
    }

    /**
     * Sets the width property value. The width of the logo image.
     * @param string|null $value Value to set for the width property.
    */
    public function setWidth(?string $value): void {
        $this->width = $value;
    }

}
