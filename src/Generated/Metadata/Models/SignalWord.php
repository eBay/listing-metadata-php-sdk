<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that describes signal words for hazardous materials labels.
*/
class SignalWord implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $signalWordDescription The description of the signal word localized to the default language of the marketplace. For more information, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal' target='_blank'>Signal word information</a>.
    */
    private ?string $signalWordDescription = null;
    
    /**
     * @var string|null $signalWordId The identifier of the signal word. For more information, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal' target='_blank'>Signal word information</a>.
    */
    private ?string $signalWordId = null;
    
    /**
     * Instantiates a new SignalWord and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignalWord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignalWord {
        return new SignalWord();
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
            'signalWordDescription' => fn(ParseNode $n) => $o->setSignalWordDescription($n->getStringValue()),
            'signalWordId' => fn(ParseNode $n) => $o->setSignalWordId($n->getStringValue()),
        ];
    }

    /**
     * Gets the signalWordDescription property value. The description of the signal word localized to the default language of the marketplace. For more information, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal' target='_blank'>Signal word information</a>.
     * @return string|null
    */
    public function getSignalWordDescription(): ?string {
        return $this->signalWordDescription;
    }

    /**
     * Gets the signalWordId property value. The identifier of the signal word. For more information, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal' target='_blank'>Signal word information</a>.
     * @return string|null
    */
    public function getSignalWordId(): ?string {
        return $this->signalWordId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('signalWordDescription', $this->getSignalWordDescription());
        $writer->writeStringValue('signalWordId', $this->getSignalWordId());
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
     * Sets the signalWordDescription property value. The description of the signal word localized to the default language of the marketplace. For more information, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal' target='_blank'>Signal word information</a>.
     * @param string|null $value Value to set for the signalWordDescription property.
    */
    public function setSignalWordDescription(?string $value): void {
        $this->signalWordDescription = $value;
    }

    /**
     * Sets the signalWordId property value. The identifier of the signal word. For more information, see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal' target='_blank'>Signal word information</a>.
     * @param string|null $value Value to set for the signalWordId property.
    */
    public function setSignalWordId(?string $value): void {
        $this->signalWordId = $value;
    }

}
