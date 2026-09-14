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
 * This type provides the properties and specifications to use to search for compatibilities.
*/
class SpecificationRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryId The unique identifier of the eBay leaf category for which compatibility details are being retrieved. This category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.<br><br>Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getautomotivepartscompatibilitypolicies">getAutomotivePartsCompatibilityPolicies</a> method to retrieve a list of categories that support parts compatibility by specification. For the categories in the response that support compatibility by specification, you’ll see <code>SPECIFICATIONS</code> as the value for the <b>compatibilityBasedOn</b> field 
    */
    private ?string $categoryId = null;
    
    /**
     * @var array<PropertyFilterInner>|null $compatibilityPropertyFilters This comma-delimited array can be used to restrict the number of compatible application name-value pairs returned in the response by specifying the properties that the seller wishes to be included in the response.<br><br>Only compatible applications with the specified properties will be returned. Properties that can be specified here include make, model, year, and trim.
    */
    private ?array $compatibilityPropertyFilters = null;
    
    /**
     * @var string|null $dataset This field can be used to define the type of properties that will be returned in the response.<br><br> For example, if you specify <code>Searchable</code>, the compatibility details will contain properties that can be used to search for products, such as make or model.<br><br><span class="tablenote"><b>Note:</b> This field cannot be used alongside <b>dataPropertyName</b>. If both are used, an error will occur.</span><br><b>Valid values:</b><ul><li><code>DisplayableProductDetails</code>: Properties for use in a user interface to describe products.</li><li><code>DisplayableSearchResults</code>: Properties for use in results for product searches.</li><li><code>Searchable</code>: Properties for use in searches.</li><li><code>Sortable</code>: Properties that are suitable for sorting.</li></ul><b>Default value:</b> <code>DisplayableSearchResults</code>
    */
    private ?string $dataset = null;
    
    /**
     * @var array<string>|null $datasetPropertyName This comma-delimited array can be used to define the specific property name(s) that will be returned in the response.<br><br>For example, if you specify <code>Engine</code>, the result set will only contain engines that are compatible with the input criteria.<br><br><span class="tablenote"><b>Note:</b> This array cannot be used alongside <b>dataset</b>. If both are used, an error will occur.</span>
    */
    private ?array $datasetPropertyName = null;
    
    /**
     * @var bool|null $exactMatch This boolean can be used to specify that the compatibilities returned in the response are to be defined by an exact match on the input value of specification properties.<br><br>By default, an expanded compatibility match is done when it applies, such as for Load Index, where a compatible vehicle is one that has a load index requirement that is less than or equal to the input. By specifying this field as <code>true</code>, only exact matches are returned.
    */
    private ?bool $exactMatch = null;
    
    /**
     * @var PaginationInput|null $paginationInput <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Pagination is not yet supported by this method. If this container is included in the request, it will be ignored.</p></div>
    */
    private ?PaginationInput $paginationInput = null;
    
    /**
     * @var array<SortOrderInner>|null $sortOrders This array specifies the sorting order of the compatibility properties. Any of the searchable properties can be used to specify search order. Up to 5 levels of sort order may be specified.<br><br><span class="tablenote"><b>Note:</b> If no sort order is specified through this field, the default sort order of <b>popularity descending</b> is applied.</span>
    */
    private ?array $sortOrders = null;
    
    /**
     * @var array<PropertyFilterInner>|null $specifications This array defines the specifications of the part, in the form of name-value pairs, for which compatible applications will be retrieved.
    */
    private ?array $specifications = null;
    
    /**
     * Instantiates a new SpecificationRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SpecificationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SpecificationRequest {
        return new SpecificationRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryId property value. The unique identifier of the eBay leaf category for which compatibility details are being retrieved. This category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.<br><br>Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getautomotivepartscompatibilitypolicies">getAutomotivePartsCompatibilityPolicies</a> method to retrieve a list of categories that support parts compatibility by specification. For the categories in the response that support compatibility by specification, you’ll see <code>SPECIFICATIONS</code> as the value for the <b>compatibilityBasedOn</b> field 
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the compatibilityPropertyFilters property value. This comma-delimited array can be used to restrict the number of compatible application name-value pairs returned in the response by specifying the properties that the seller wishes to be included in the response.<br><br>Only compatible applications with the specified properties will be returned. Properties that can be specified here include make, model, year, and trim.
     * @return array<PropertyFilterInner>|null
    */
    public function getCompatibilityPropertyFilters(): ?array {
        return $this->compatibilityPropertyFilters;
    }

    /**
     * Gets the dataset property value. This field can be used to define the type of properties that will be returned in the response.<br><br> For example, if you specify <code>Searchable</code>, the compatibility details will contain properties that can be used to search for products, such as make or model.<br><br><span class="tablenote"><b>Note:</b> This field cannot be used alongside <b>dataPropertyName</b>. If both are used, an error will occur.</span><br><b>Valid values:</b><ul><li><code>DisplayableProductDetails</code>: Properties for use in a user interface to describe products.</li><li><code>DisplayableSearchResults</code>: Properties for use in results for product searches.</li><li><code>Searchable</code>: Properties for use in searches.</li><li><code>Sortable</code>: Properties that are suitable for sorting.</li></ul><b>Default value:</b> <code>DisplayableSearchResults</code>
     * @return string|null
    */
    public function getDataset(): ?string {
        return $this->dataset;
    }

    /**
     * Gets the datasetPropertyName property value. This comma-delimited array can be used to define the specific property name(s) that will be returned in the response.<br><br>For example, if you specify <code>Engine</code>, the result set will only contain engines that are compatible with the input criteria.<br><br><span class="tablenote"><b>Note:</b> This array cannot be used alongside <b>dataset</b>. If both are used, an error will occur.</span>
     * @return array<string>|null
    */
    public function getDatasetPropertyName(): ?array {
        return $this->datasetPropertyName;
    }

    /**
     * Gets the exactMatch property value. This boolean can be used to specify that the compatibilities returned in the response are to be defined by an exact match on the input value of specification properties.<br><br>By default, an expanded compatibility match is done when it applies, such as for Load Index, where a compatible vehicle is one that has a load index requirement that is less than or equal to the input. By specifying this field as <code>true</code>, only exact matches are returned.
     * @return bool|null
    */
    public function getExactMatch(): ?bool {
        return $this->exactMatch;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'compatibilityPropertyFilters' => fn(ParseNode $n) => $o->setCompatibilityPropertyFilters($n->getCollectionOfObjectValues([PropertyFilterInner::class, 'createFromDiscriminatorValue'])),
            'dataset' => fn(ParseNode $n) => $o->setDataset($n->getStringValue()),
            'datasetPropertyName' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDatasetPropertyName($val);
            },
            'exactMatch' => fn(ParseNode $n) => $o->setExactMatch($n->getBooleanValue()),
            'paginationInput' => fn(ParseNode $n) => $o->setPaginationInput($n->getObjectValue([PaginationInput::class, 'createFromDiscriminatorValue'])),
            'sortOrders' => fn(ParseNode $n) => $o->setSortOrders($n->getCollectionOfObjectValues([SortOrderInner::class, 'createFromDiscriminatorValue'])),
            'specifications' => fn(ParseNode $n) => $o->setSpecifications($n->getCollectionOfObjectValues([PropertyFilterInner::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the paginationInput property value. <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Pagination is not yet supported by this method. If this container is included in the request, it will be ignored.</p></div>
     * @return PaginationInput|null
    */
    public function getPaginationInput(): ?PaginationInput {
        return $this->paginationInput;
    }

    /**
     * Gets the sortOrders property value. This array specifies the sorting order of the compatibility properties. Any of the searchable properties can be used to specify search order. Up to 5 levels of sort order may be specified.<br><br><span class="tablenote"><b>Note:</b> If no sort order is specified through this field, the default sort order of <b>popularity descending</b> is applied.</span>
     * @return array<SortOrderInner>|null
    */
    public function getSortOrders(): ?array {
        return $this->sortOrders;
    }

    /**
     * Gets the specifications property value. This array defines the specifications of the part, in the form of name-value pairs, for which compatible applications will be retrieved.
     * @return array<PropertyFilterInner>|null
    */
    public function getSpecifications(): ?array {
        return $this->specifications;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeCollectionOfObjectValues('compatibilityPropertyFilters', $this->getCompatibilityPropertyFilters());
        $writer->writeStringValue('dataset', $this->getDataset());
        $writer->writeCollectionOfPrimitiveValues('datasetPropertyName', $this->getDatasetPropertyName());
        $writer->writeBooleanValue('exactMatch', $this->getExactMatch());
        $writer->writeObjectValue('paginationInput', $this->getPaginationInput());
        $writer->writeCollectionOfObjectValues('sortOrders', $this->getSortOrders());
        $writer->writeCollectionOfObjectValues('specifications', $this->getSpecifications());
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
     * Sets the categoryId property value. The unique identifier of the eBay leaf category for which compatibility details are being retrieved. This category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.<br><br>Use the <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getautomotivepartscompatibilitypolicies">getAutomotivePartsCompatibilityPolicies</a> method to retrieve a list of categories that support parts compatibility by specification. For the categories in the response that support compatibility by specification, you’ll see <code>SPECIFICATIONS</code> as the value for the <b>compatibilityBasedOn</b> field 
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the compatibilityPropertyFilters property value. This comma-delimited array can be used to restrict the number of compatible application name-value pairs returned in the response by specifying the properties that the seller wishes to be included in the response.<br><br>Only compatible applications with the specified properties will be returned. Properties that can be specified here include make, model, year, and trim.
     * @param array<PropertyFilterInner>|null $value Value to set for the compatibilityPropertyFilters property.
    */
    public function setCompatibilityPropertyFilters(?array $value): void {
        $this->compatibilityPropertyFilters = $value;
    }

    /**
     * Sets the dataset property value. This field can be used to define the type of properties that will be returned in the response.<br><br> For example, if you specify <code>Searchable</code>, the compatibility details will contain properties that can be used to search for products, such as make or model.<br><br><span class="tablenote"><b>Note:</b> This field cannot be used alongside <b>dataPropertyName</b>. If both are used, an error will occur.</span><br><b>Valid values:</b><ul><li><code>DisplayableProductDetails</code>: Properties for use in a user interface to describe products.</li><li><code>DisplayableSearchResults</code>: Properties for use in results for product searches.</li><li><code>Searchable</code>: Properties for use in searches.</li><li><code>Sortable</code>: Properties that are suitable for sorting.</li></ul><b>Default value:</b> <code>DisplayableSearchResults</code>
     * @param string|null $value Value to set for the dataset property.
    */
    public function setDataset(?string $value): void {
        $this->dataset = $value;
    }

    /**
     * Sets the datasetPropertyName property value. This comma-delimited array can be used to define the specific property name(s) that will be returned in the response.<br><br>For example, if you specify <code>Engine</code>, the result set will only contain engines that are compatible with the input criteria.<br><br><span class="tablenote"><b>Note:</b> This array cannot be used alongside <b>dataset</b>. If both are used, an error will occur.</span>
     * @param array<string>|null $value Value to set for the datasetPropertyName property.
    */
    public function setDatasetPropertyName(?array $value): void {
        $this->datasetPropertyName = $value;
    }

    /**
     * Sets the exactMatch property value. This boolean can be used to specify that the compatibilities returned in the response are to be defined by an exact match on the input value of specification properties.<br><br>By default, an expanded compatibility match is done when it applies, such as for Load Index, where a compatible vehicle is one that has a load index requirement that is less than or equal to the input. By specifying this field as <code>true</code>, only exact matches are returned.
     * @param bool|null $value Value to set for the exactMatch property.
    */
    public function setExactMatch(?bool $value): void {
        $this->exactMatch = $value;
    }

    /**
     * Sets the paginationInput property value. <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Pagination is not yet supported by this method. If this container is included in the request, it will be ignored.</p></div>
     * @param PaginationInput|null $value Value to set for the paginationInput property.
    */
    public function setPaginationInput(?PaginationInput $value): void {
        $this->paginationInput = $value;
    }

    /**
     * Sets the sortOrders property value. This array specifies the sorting order of the compatibility properties. Any of the searchable properties can be used to specify search order. Up to 5 levels of sort order may be specified.<br><br><span class="tablenote"><b>Note:</b> If no sort order is specified through this field, the default sort order of <b>popularity descending</b> is applied.</span>
     * @param array<SortOrderInner>|null $value Value to set for the sortOrders property.
    */
    public function setSortOrders(?array $value): void {
        $this->sortOrders = $value;
    }

    /**
     * Sets the specifications property value. This array defines the specifications of the part, in the form of name-value pairs, for which compatible applications will be retrieved.
     * @param array<PropertyFilterInner>|null $value Value to set for the specifications property.
    */
    public function setSpecifications(?array $value): void {
        $this->specifications = $value;
    }

}
