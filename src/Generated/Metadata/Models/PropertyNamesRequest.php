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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the request fields for the <b>getCompatibilityPropertyNames</b> method.
*/
class PropertyNamesRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryId The unique identifier of the eBay leaf category for which to retrieve compatibility property names. This category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility.<br><br>Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getautomotivepartscompatibilitypolicies">getAutomotivePartsCompatibilityPolicies</a> method to retrieve a list of categories that support parts compatibility.
    */
    private ?string $categoryId = null;
    
    /**
     * @var array<string>|null $dataset This array defines the properties that will be returned for the compatibility-enabled category.<br><br> For example, if you specify <code>Searchable</code>, the compatibility details will contain properties that can be used to search for products, such as make or model.<br><br><b>Valid values:</b><ul><li><code>DisplayableProductDetails</code>: Properties for use in a user interface to describe products.</li><li><code>DisplayableSearchResults</code>: Properties for use in results for product searches.</li><li><code>Searchable</code>: Properties for use in searches.</li><li><code>Sortable</code>: Properties that are suitable for sorting.</li></ul><b>Default:</b> <code>DisplayableSearchResults</code>
    */
    private ?array $dataset = null;
    
    /**
     * Instantiates a new PropertyNamesRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PropertyNamesRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PropertyNamesRequest {
        return new PropertyNamesRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryId property value. The unique identifier of the eBay leaf category for which to retrieve compatibility property names. This category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility.<br><br>Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getautomotivepartscompatibilitypolicies">getAutomotivePartsCompatibilityPolicies</a> method to retrieve a list of categories that support parts compatibility.
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the dataset property value. This array defines the properties that will be returned for the compatibility-enabled category.<br><br> For example, if you specify <code>Searchable</code>, the compatibility details will contain properties that can be used to search for products, such as make or model.<br><br><b>Valid values:</b><ul><li><code>DisplayableProductDetails</code>: Properties for use in a user interface to describe products.</li><li><code>DisplayableSearchResults</code>: Properties for use in results for product searches.</li><li><code>Searchable</code>: Properties for use in searches.</li><li><code>Sortable</code>: Properties that are suitable for sorting.</li></ul><b>Default:</b> <code>DisplayableSearchResults</code>
     * @return array<string>|null
    */
    public function getDataset(): ?array {
        return $this->dataset;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'dataset' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDataset($val);
            },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeCollectionOfPrimitiveValues('dataset', $this->getDataset());
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
     * Sets the categoryId property value. The unique identifier of the eBay leaf category for which to retrieve compatibility property names. This category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility.<br><br>Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getautomotivepartscompatibilitypolicies">getAutomotivePartsCompatibilityPolicies</a> method to retrieve a list of categories that support parts compatibility.
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the dataset property value. This array defines the properties that will be returned for the compatibility-enabled category.<br><br> For example, if you specify <code>Searchable</code>, the compatibility details will contain properties that can be used to search for products, such as make or model.<br><br><b>Valid values:</b><ul><li><code>DisplayableProductDetails</code>: Properties for use in a user interface to describe products.</li><li><code>DisplayableSearchResults</code>: Properties for use in results for product searches.</li><li><code>Searchable</code>: Properties for use in searches.</li><li><code>Sortable</code>: Properties that are suitable for sorting.</li></ul><b>Default:</b> <code>DisplayableSearchResults</code>
     * @param array<string>|null $value Value to set for the dataset property.
    */
    public function setDataset(?array $value): void {
        $this->dataset = $value;
    }

}
