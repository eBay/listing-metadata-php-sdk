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
 * A type that describes statements for product safety labels.
*/
class ProductSafetyLabelStatement implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $statementDescription The description of the statement localized to the default language of the marketplace. 
    */
    private ?string $statementDescription = null;
    
    /**
     * @var string|null $statementId The identifier of the statement.
    */
    private ?string $statementId = null;
    
    /**
     * Instantiates a new ProductSafetyLabelStatement and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductSafetyLabelStatement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductSafetyLabelStatement {
        return new ProductSafetyLabelStatement();
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
            'statementDescription' => fn(ParseNode $n) => $o->setStatementDescription($n->getStringValue()),
            'statementId' => fn(ParseNode $n) => $o->setStatementId($n->getStringValue()),
        ];
    }

    /**
     * Gets the statementDescription property value. The description of the statement localized to the default language of the marketplace. 
     * @return string|null
    */
    public function getStatementDescription(): ?string {
        return $this->statementDescription;
    }

    /**
     * Gets the statementId property value. The identifier of the statement.
     * @return string|null
    */
    public function getStatementId(): ?string {
        return $this->statementId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('statementDescription', $this->getStatementDescription());
        $writer->writeStringValue('statementId', $this->getStatementId());
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
     * Sets the statementDescription property value. The description of the statement localized to the default language of the marketplace. 
     * @param string|null $value Value to set for the statementDescription property.
    */
    public function setStatementDescription(?string $value): void {
        $this->statementDescription = $value;
    }

    /**
     * Sets the statementId property value. The identifier of the statement.
     * @param string|null $value Value to set for the statementId property.
    */
    public function setStatementId(?string $value): void {
        $this->statementId = $value;
    }

}
