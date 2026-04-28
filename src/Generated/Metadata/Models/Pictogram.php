<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that describes pictograms for hazardous materials labels.
*/
class Pictogram implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $pictogramDescription The description of the pictogram localized to the default language of the marketplace. For sample values, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra'>Pictogram sample values</a>.
    */
    private ?string $pictogramDescription = null;
    
    /**
     * @var string|null $pictogramId The identifier of the pictogram. For sample values, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra'>Pictogram sample values</a>.
    */
    private ?string $pictogramId = null;
    
    /**
     * @var string|null $pictogramUrl The URL of the pictogram.
    */
    private ?string $pictogramUrl = null;
    
    /**
     * Instantiates a new Pictogram and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Pictogram
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Pictogram {
        return new Pictogram();
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
            'pictogramDescription' => fn(ParseNode $n) => $o->setPictogramDescription($n->getStringValue()),
            'pictogramId' => fn(ParseNode $n) => $o->setPictogramId($n->getStringValue()),
            'pictogramUrl' => fn(ParseNode $n) => $o->setPictogramUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the pictogramDescription property value. The description of the pictogram localized to the default language of the marketplace. For sample values, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra'>Pictogram sample values</a>.
     * @return string|null
    */
    public function getPictogramDescription(): ?string {
        return $this->pictogramDescription;
    }

    /**
     * Gets the pictogramId property value. The identifier of the pictogram. For sample values, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra'>Pictogram sample values</a>.
     * @return string|null
    */
    public function getPictogramId(): ?string {
        return $this->pictogramId;
    }

    /**
     * Gets the pictogramUrl property value. The URL of the pictogram.
     * @return string|null
    */
    public function getPictogramUrl(): ?string {
        return $this->pictogramUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('pictogramDescription', $this->getPictogramDescription());
        $writer->writeStringValue('pictogramId', $this->getPictogramId());
        $writer->writeStringValue('pictogramUrl', $this->getPictogramUrl());
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
     * Sets the pictogramDescription property value. The description of the pictogram localized to the default language of the marketplace. For sample values, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra'>Pictogram sample values</a>.
     * @param string|null $value Value to set for the pictogramDescription property.
    */
    public function setPictogramDescription(?string $value): void {
        $this->pictogramDescription = $value;
    }

    /**
     * Sets the pictogramId property value. The identifier of the pictogram. For sample values, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra'>Pictogram sample values</a>.
     * @param string|null $value Value to set for the pictogramId property.
    */
    public function setPictogramId(?string $value): void {
        $this->pictogramId = $value;
    }

    /**
     * Sets the pictogramUrl property value. The URL of the pictogram.
     * @param string|null $value Value to set for the pictogramUrl property.
    */
    public function setPictogramUrl(?string $value): void {
        $this->pictogramUrl = $value;
    }

}
