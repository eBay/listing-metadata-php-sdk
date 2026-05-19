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

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains an array of suggested category tree nodes that are considered by eBay to most closely correspond to the keywords provided in a query string, from a specified category tree.
*/
class CategorySuggestionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CategorySuggestion>|null $categorySuggestions Contains details about one or more suggested categories that correspond to the provided keywords. The array of suggested categories is sorted in order of eBay's confidence of the relevance of each category (the first category is the most relevant).<br><br><span class="tablenote"> <strong><span style="color:red">Important:</span></strong> This call is not supported in the Sandbox environment. It will return a response payload in which the <b>categoryName</b> fields contain random or boilerplate text regardless of the query submitted. </span>
    */
    private ?array $categorySuggestions = null;
    
    /**
     * @var string|null $categoryTreeId The unique identifier of the eBay category tree from which suggestions are returned.
    */
    private ?string $categoryTreeId = null;
    
    /**
     * @var string|null $categoryTreeVersion The version of the category tree identified by <b>categoryTreeId</b>. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
    */
    private ?string $categoryTreeVersion = null;
    
    /**
     * Instantiates a new CategorySuggestionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CategorySuggestionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CategorySuggestionResponse {
        return new CategorySuggestionResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categorySuggestions property value. Contains details about one or more suggested categories that correspond to the provided keywords. The array of suggested categories is sorted in order of eBay's confidence of the relevance of each category (the first category is the most relevant).<br><br><span class="tablenote"> <strong><span style="color:red">Important:</span></strong> This call is not supported in the Sandbox environment. It will return a response payload in which the <b>categoryName</b> fields contain random or boilerplate text regardless of the query submitted. </span>
     * @return array<CategorySuggestion>|null
    */
    public function getCategorySuggestions(): ?array {
        return $this->categorySuggestions;
    }

    /**
     * Gets the categoryTreeId property value. The unique identifier of the eBay category tree from which suggestions are returned.
     * @return string|null
    */
    public function getCategoryTreeId(): ?string {
        return $this->categoryTreeId;
    }

    /**
     * Gets the categoryTreeVersion property value. The version of the category tree identified by <b>categoryTreeId</b>. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
     * @return string|null
    */
    public function getCategoryTreeVersion(): ?string {
        return $this->categoryTreeVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categorySuggestions' => fn(ParseNode $n) => $o->setCategorySuggestions($n->getCollectionOfObjectValues([CategorySuggestion::class, 'createFromDiscriminatorValue'])),
            'categoryTreeId' => fn(ParseNode $n) => $o->setCategoryTreeId($n->getStringValue()),
            'categoryTreeVersion' => fn(ParseNode $n) => $o->setCategoryTreeVersion($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('categorySuggestions', $this->getCategorySuggestions());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeStringValue('categoryTreeVersion', $this->getCategoryTreeVersion());
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
     * Sets the categorySuggestions property value. Contains details about one or more suggested categories that correspond to the provided keywords. The array of suggested categories is sorted in order of eBay's confidence of the relevance of each category (the first category is the most relevant).<br><br><span class="tablenote"> <strong><span style="color:red">Important:</span></strong> This call is not supported in the Sandbox environment. It will return a response payload in which the <b>categoryName</b> fields contain random or boilerplate text regardless of the query submitted. </span>
     * @param array<CategorySuggestion>|null $value Value to set for the categorySuggestions property.
    */
    public function setCategorySuggestions(?array $value): void {
        $this->categorySuggestions = $value;
    }

    /**
     * Sets the categoryTreeId property value. The unique identifier of the eBay category tree from which suggestions are returned.
     * @param string|null $value Value to set for the categoryTreeId property.
    */
    public function setCategoryTreeId(?string $value): void {
        $this->categoryTreeId = $value;
    }

    /**
     * Sets the categoryTreeVersion property value. The version of the category tree identified by <b>categoryTreeId</b>. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
     * @param string|null $value Value to set for the categoryTreeVersion property.
    */
    public function setCategoryTreeVersion(?string $value): void {
        $this->categoryTreeVersion = $value;
    }

}
