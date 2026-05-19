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
 * A type that defines the response fields for the <b>getHazardousMaterialsLabels</b> method.
*/
class HazardousMaterialDetailsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Pictogram>|null $pictograms This array contains available hazardous materials hazard pictograms for the specified marketplace.
    */
    private ?array $pictograms = null;
    
    /**
     * @var array<SignalWord>|null $signalWords This array contains available hazardous materials signal words for the specified marketplace.
    */
    private ?array $signalWords = null;
    
    /**
     * @var array<HazardStatement>|null $statements This array contains available hazardous materials hazard statements for the specified marketplace.
    */
    private ?array $statements = null;
    
    /**
     * Instantiates a new HazardousMaterialDetailsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HazardousMaterialDetailsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HazardousMaterialDetailsResponse {
        return new HazardousMaterialDetailsResponse();
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
            'pictograms' => fn(ParseNode $n) => $o->setPictograms($n->getCollectionOfObjectValues([Pictogram::class, 'createFromDiscriminatorValue'])),
            'signalWords' => fn(ParseNode $n) => $o->setSignalWords($n->getCollectionOfObjectValues([SignalWord::class, 'createFromDiscriminatorValue'])),
            'statements' => fn(ParseNode $n) => $o->setStatements($n->getCollectionOfObjectValues([HazardStatement::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the pictograms property value. This array contains available hazardous materials hazard pictograms for the specified marketplace.
     * @return array<Pictogram>|null
    */
    public function getPictograms(): ?array {
        return $this->pictograms;
    }

    /**
     * Gets the signalWords property value. This array contains available hazardous materials signal words for the specified marketplace.
     * @return array<SignalWord>|null
    */
    public function getSignalWords(): ?array {
        return $this->signalWords;
    }

    /**
     * Gets the statements property value. This array contains available hazardous materials hazard statements for the specified marketplace.
     * @return array<HazardStatement>|null
    */
    public function getStatements(): ?array {
        return $this->statements;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('pictograms', $this->getPictograms());
        $writer->writeCollectionOfObjectValues('signalWords', $this->getSignalWords());
        $writer->writeCollectionOfObjectValues('statements', $this->getStatements());
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
     * Sets the pictograms property value. This array contains available hazardous materials hazard pictograms for the specified marketplace.
     * @param array<Pictogram>|null $value Value to set for the pictograms property.
    */
    public function setPictograms(?array $value): void {
        $this->pictograms = $value;
    }

    /**
     * Sets the signalWords property value. This array contains available hazardous materials signal words for the specified marketplace.
     * @param array<SignalWord>|null $value Value to set for the signalWords property.
    */
    public function setSignalWords(?array $value): void {
        $this->signalWords = $value;
    }

    /**
     * Sets the statements property value. This array contains available hazardous materials hazard statements for the specified marketplace.
     * @param array<HazardStatement>|null $value Value to set for the statements property.
    */
    public function setStatements(?array $value): void {
        $this->statements = $value;
    }

}
