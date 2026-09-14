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
 * This type defines the category ID and property names for which to retrieve values.
*/
class MultiCompatibilityPropertyValuesRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryId The unique identifier of the eBay leaf category for which to retrieve property values.<br><br>Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getautomotivepartscompatibilitypolicies">getAutomotivePartsCompatibilityPolicies</a> method to retrieve a list of categories that support parts compatibility.
    */
    private ?string $categoryId = null;
    
    /**
     * @var array<PropertyFilterInner>|null $propertyFilters This array can be used to specify the compatibility properties used to limit the result set. Only values associated with the specified name-value pairs will be returned in the response.<br><br>For example, if the <b>propertyName</b> is set to <code>Year</code> and the <b>propertyValue</b> is set to <code>2022</code>, only compatible vehicles from 2022 will be returned.<br><br>At least one property name-value pair must be used.
    */
    private ?array $propertyFilters = null;
    
    /**
     * @var array<string>|null $propertyNames This comma-delimited array specifies the names of the properties for which to retrieve associated property values.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
    */
    private ?array $propertyNames = null;
    
    /**
     * Instantiates a new MultiCompatibilityPropertyValuesRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MultiCompatibilityPropertyValuesRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MultiCompatibilityPropertyValuesRequest {
        return new MultiCompatibilityPropertyValuesRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryId property value. The unique identifier of the eBay leaf category for which to retrieve property values.<br><br>Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getautomotivepartscompatibilitypolicies">getAutomotivePartsCompatibilityPolicies</a> method to retrieve a list of categories that support parts compatibility.
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'propertyFilters' => fn(ParseNode $n) => $o->setPropertyFilters($n->getCollectionOfObjectValues([PropertyFilterInner::class, 'createFromDiscriminatorValue'])),
            'propertyNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPropertyNames($val);
            },
        ];
    }

    /**
     * Gets the propertyFilters property value. This array can be used to specify the compatibility properties used to limit the result set. Only values associated with the specified name-value pairs will be returned in the response.<br><br>For example, if the <b>propertyName</b> is set to <code>Year</code> and the <b>propertyValue</b> is set to <code>2022</code>, only compatible vehicles from 2022 will be returned.<br><br>At least one property name-value pair must be used.
     * @return array<PropertyFilterInner>|null
    */
    public function getPropertyFilters(): ?array {
        return $this->propertyFilters;
    }

    /**
     * Gets the propertyNames property value. This comma-delimited array specifies the names of the properties for which to retrieve associated property values.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
     * @return array<string>|null
    */
    public function getPropertyNames(): ?array {
        return $this->propertyNames;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeCollectionOfObjectValues('propertyFilters', $this->getPropertyFilters());
        $writer->writeCollectionOfPrimitiveValues('propertyNames', $this->getPropertyNames());
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
     * Sets the categoryId property value. The unique identifier of the eBay leaf category for which to retrieve property values.<br><br>Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getautomotivepartscompatibilitypolicies">getAutomotivePartsCompatibilityPolicies</a> method to retrieve a list of categories that support parts compatibility.
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the propertyFilters property value. This array can be used to specify the compatibility properties used to limit the result set. Only values associated with the specified name-value pairs will be returned in the response.<br><br>For example, if the <b>propertyName</b> is set to <code>Year</code> and the <b>propertyValue</b> is set to <code>2022</code>, only compatible vehicles from 2022 will be returned.<br><br>At least one property name-value pair must be used.
     * @param array<PropertyFilterInner>|null $value Value to set for the propertyFilters property.
    */
    public function setPropertyFilters(?array $value): void {
        $this->propertyFilters = $value;
    }

    /**
     * Sets the propertyNames property value. This comma-delimited array specifies the names of the properties for which to retrieve associated property values.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
     * @param array<string>|null $value Value to set for the propertyNames property.
    */
    public function setPropertyNames(?array $value): void {
        $this->propertyNames = $value;
    }

}
