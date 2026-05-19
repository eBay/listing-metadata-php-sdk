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
 * A type that defines the response fields for the <b>getExtendedProducerResponsibilityPolicies</b> method.
*/
class ExtendedProducerResponsibilityPolicyResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ExtendedProducerResponsibilityPolicy>|null $extendedProducerResponsibilities An array of response fields detailing the Extended Producer Responsibility policies supported for the specified marketplace.
    */
    private ?array $extendedProducerResponsibilities = null;
    
    /**
     * @var array<Error>|null $warnings A collection of warnings generated for the request.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new ExtendedProducerResponsibilityPolicyResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtendedProducerResponsibilityPolicyResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExtendedProducerResponsibilityPolicyResponse {
        return new ExtendedProducerResponsibilityPolicyResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the extendedProducerResponsibilities property value. An array of response fields detailing the Extended Producer Responsibility policies supported for the specified marketplace.
     * @return array<ExtendedProducerResponsibilityPolicy>|null
    */
    public function getExtendedProducerResponsibilities(): ?array {
        return $this->extendedProducerResponsibilities;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'extendedProducerResponsibilities' => fn(ParseNode $n) => $o->setExtendedProducerResponsibilities($n->getCollectionOfObjectValues([ExtendedProducerResponsibilityPolicy::class, 'createFromDiscriminatorValue'])),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the warnings property value. A collection of warnings generated for the request.
     * @return array<Error>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('extendedProducerResponsibilities', $this->getExtendedProducerResponsibilities());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the extendedProducerResponsibilities property value. An array of response fields detailing the Extended Producer Responsibility policies supported for the specified marketplace.
     * @param array<ExtendedProducerResponsibilityPolicy>|null $value Value to set for the extendedProducerResponsibilities property.
    */
    public function setExtendedProducerResponsibilities(?array $value): void {
        $this->extendedProducerResponsibilities = $value;
    }

    /**
     * Sets the warnings property value. A collection of warnings generated for the request.
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
