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

namespace EBay\ListingMetadata\Generated\Taxonomy\Models;

use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the fields that can be returned in an error.
*/
class Error extends ApiException implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Error_category|null $category The category type for this error or warning.
    */
    private ?Error_category $category = null;
    
    /**
     * @var string|null $domain The name of the domain that generated the error or warning.
    */
    private ?string $domain = null;
    
    /**
     * @var int|null $errorId A unique code associated with this error or warning.
    */
    private ?int $errorId = null;
    
    /**
     * @var string|null $escapedMessage The message associated with the error or warning that occurred, that describes the condition that caused the error or warning to be returned.
    */
    private ?string $escapedMessage = null;
    
    /**
     * @var array<string>|null $inputRefIds An array of reference IDs that indicate the specific fields in the request that caused this error or warning.
    */
    private ?array $inputRefIds = null;
    
    /**
     * @var string|null $longMessage A more detailed explanation of the condition that caused the error or warning, and information on what to do to correct the problem.
    */
    private ?string $longMessage = null;
    
    /**
     * @var array<string>|null $outputRefIds An array of reference IDs that indicate the specific fields in the response that most precisely identify the object that caused this error or warning.
    */
    private ?array $outputRefIds = null;
    
    /**
     * @var array<ErrorParameter>|null $parameters An array of name/value pairs that provide further details about the error condition.
    */
    private ?array $parameters = null;
    
    /**
     * @var string|null $subdomain The name of the subdomain where the error or warning occurred.
    */
    private ?string $subdomain = null;
    
    /**
     * Instantiates a new Error and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Error
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Error {
        return new Error();
    }

    /**
     * Gets the message property value. The message associated with the error or warning that occurred, that describes the condition that caused the error or warning to be returned.
     * @return string|null
    */
    public function escapedGetMessage(): ?string {
        return $this->escapedMessage;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. The category type for this error or warning.
     * @return Error_category|null
    */
    public function getCategory(): ?Error_category {
        return $this->category;
    }

    /**
     * Gets the domain property value. The name of the domain that generated the error or warning.
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * Gets the errorId property value. A unique code associated with this error or warning.
     * @return int|null
    */
    public function getErrorId(): ?int {
        return $this->errorId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(Error_category::class)),
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'errorId' => fn(ParseNode $n) => $o->setErrorId($n->getIntegerValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'inputRefIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInputRefIds($val);
            },
            'longMessage' => fn(ParseNode $n) => $o->setLongMessage($n->getStringValue()),
            'outputRefIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOutputRefIds($val);
            },
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getCollectionOfObjectValues([ErrorParameter::class, 'createFromDiscriminatorValue'])),
            'subdomain' => fn(ParseNode $n) => $o->setSubdomain($n->getStringValue()),
        ];
    }

    /**
     * Gets the inputRefIds property value. An array of reference IDs that indicate the specific fields in the request that caused this error or warning.
     * @return array<string>|null
    */
    public function getInputRefIds(): ?array {
        return $this->inputRefIds;
    }

    /**
     * Gets the longMessage property value. A more detailed explanation of the condition that caused the error or warning, and information on what to do to correct the problem.
     * @return string|null
    */
    public function getLongMessage(): ?string {
        return $this->longMessage;
    }

    /**
     * Gets the outputRefIds property value. An array of reference IDs that indicate the specific fields in the response that most precisely identify the object that caused this error or warning.
     * @return array<string>|null
    */
    public function getOutputRefIds(): ?array {
        return $this->outputRefIds;
    }

    /**
     * Gets the parameters property value. An array of name/value pairs that provide further details about the error condition.
     * @return array<ErrorParameter>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * The primary error message.
     * @return string
    */
    public function getPrimaryErrorMessage(): string {
        return parent::getMessage();
    }

    /**
     * Gets the subdomain property value. The name of the subdomain where the error or warning occurred.
     * @return string|null
    */
    public function getSubdomain(): ?string {
        return $this->subdomain;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeIntegerValue('errorId', $this->getErrorId());
        $writer->writeStringValue('message', $this->escapedGetMessage());
        $writer->writeCollectionOfPrimitiveValues('inputRefIds', $this->getInputRefIds());
        $writer->writeStringValue('longMessage', $this->getLongMessage());
        $writer->writeCollectionOfPrimitiveValues('outputRefIds', $this->getOutputRefIds());
        $writer->writeCollectionOfObjectValues('parameters', $this->getParameters());
        $writer->writeStringValue('subdomain', $this->getSubdomain());
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
     * Sets the category property value. The category type for this error or warning.
     * @param Error_category|null $value Value to set for the category property.
    */
    public function setCategory(?Error_category $value): void {
        $this->category = $value;
    }

    /**
     * Sets the domain property value. The name of the domain that generated the error or warning.
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
    }

    /**
     * Sets the errorId property value. A unique code associated with this error or warning.
     * @param int|null $value Value to set for the errorId property.
    */
    public function setErrorId(?int $value): void {
        $this->errorId = $value;
    }

    /**
     * Sets the inputRefIds property value. An array of reference IDs that indicate the specific fields in the request that caused this error or warning.
     * @param array<string>|null $value Value to set for the inputRefIds property.
    */
    public function setInputRefIds(?array $value): void {
        $this->inputRefIds = $value;
    }

    /**
     * Sets the longMessage property value. A more detailed explanation of the condition that caused the error or warning, and information on what to do to correct the problem.
     * @param string|null $value Value to set for the longMessage property.
    */
    public function setLongMessage(?string $value): void {
        $this->longMessage = $value;
    }

    /**
     * Sets the message property value. The message associated with the error or warning that occurred, that describes the condition that caused the error or warning to be returned.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->escapedMessage = $value;
    }

    /**
     * Sets the outputRefIds property value. An array of reference IDs that indicate the specific fields in the response that most precisely identify the object that caused this error or warning.
     * @param array<string>|null $value Value to set for the outputRefIds property.
    */
    public function setOutputRefIds(?array $value): void {
        $this->outputRefIds = $value;
    }

    /**
     * Sets the parameters property value. An array of name/value pairs that provide further details about the error condition.
     * @param array<ErrorParameter>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value): void {
        $this->parameters = $value;
    }

    /**
     * Sets the subdomain property value. The name of the subdomain where the error or warning occurred.
     * @param string|null $value Value to set for the subdomain property.
    */
    public function setSubdomain(?string $value): void {
        $this->subdomain = $value;
    }

}
