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
 * This type defines the response fields specifying the default currency for the marketplace.
*/
class GetCurrenciesResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Currency|null $defaultCurrency The type defining valid currencies for the marketplace.
    */
    private ?Currency $defaultCurrency = null;
    
    /**
     * @var string|null $marketplaceId The ID of the eBay marketplace to which the default currency applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * Instantiates a new GetCurrenciesResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetCurrenciesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetCurrenciesResponse {
        return new GetCurrenciesResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultCurrency property value. The type defining valid currencies for the marketplace.
     * @return Currency|null
    */
    public function getDefaultCurrency(): ?Currency {
        return $this->defaultCurrency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultCurrency' => fn(ParseNode $n) => $o->setDefaultCurrency($n->getObjectValue([Currency::class, 'createFromDiscriminatorValue'])),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the marketplaceId property value. The ID of the eBay marketplace to which the default currency applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('defaultCurrency', $this->getDefaultCurrency());
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
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
     * Sets the defaultCurrency property value. The type defining valid currencies for the marketplace.
     * @param Currency|null $value Value to set for the defaultCurrency property.
    */
    public function setDefaultCurrency(?Currency $value): void {
        $this->defaultCurrency = $value;
    }

    /**
     * Sets the marketplaceId property value. The ID of the eBay marketplace to which the default currency applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

}
