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
 * This type defines the response container for the getMinimumListingPricePolicies method.
*/
class GetMinimumListingPricePoliciesResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<MinimumListingPricePoliciesType>|null $minimumListingPricePolicies This array returns a list of minimum listing price policies for supported types of listings on the specific marketplace.
    */
    private ?array $minimumListingPricePolicies = null;
    
    /**
     * Instantiates a new GetMinimumListingPricePoliciesResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetMinimumListingPricePoliciesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetMinimumListingPricePoliciesResponse {
        return new GetMinimumListingPricePoliciesResponse();
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
            'minimumListingPricePolicies' => fn(ParseNode $n) => $o->setMinimumListingPricePolicies($n->getCollectionOfObjectValues([MinimumListingPricePoliciesType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the minimumListingPricePolicies property value. This array returns a list of minimum listing price policies for supported types of listings on the specific marketplace.
     * @return array<MinimumListingPricePoliciesType>|null
    */
    public function getMinimumListingPricePolicies(): ?array {
        return $this->minimumListingPricePolicies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('minimumListingPricePolicies', $this->getMinimumListingPricePolicies());
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
     * Sets the minimumListingPricePolicies property value. This array returns a list of minimum listing price policies for supported types of listings on the specific marketplace.
     * @param array<MinimumListingPricePoliciesType>|null $value Value to set for the minimumListingPricePolicies property.
    */
    public function setMinimumListingPricePolicies(?array $value): void {
        $this->minimumListingPricePolicies = $value;
    }

}
