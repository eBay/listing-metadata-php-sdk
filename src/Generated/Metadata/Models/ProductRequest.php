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
 * This type defines the request fields for the <b>getProductCompatibilities</b> method.
*/
class ProductRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<PropertyFilterInner>|null $applicationPropertyFilters This array is used to filter the properties of an application, such as a vehicle's make or model, that will be returned in the response.<br><br>Application property filters are specified as name-value pairs. Only products compatible with these name-value pairs will be returned.
    */
    private ?array $applicationPropertyFilters = null;
    
    /**
     * @var array<string>|null $dataset This array defines the type of properties that are returned for the catalog-enabled category.<br><br>For example, if you specify <code>Searchable</code>, the compatibility details will contain properties that can be used to search for products, such as make or model.<br><br><span class="tablenote"><b>Note:</b> This field cannot be used alongside <b>dataPropertyName</b>. If both are used, an error will occur.</span><br><b>Valid values:</b><ul><li><code>DisplayableProductDetails</code>: Properties for use in a user interface to describe products.</li><li><code>DisplayableSearchResults</code>: Properties for use in results for product searches.</li><li><code>Searchable</code>: Properties for use in searches.</li><li><code>Sortable</code>: Properties that are suitable for sorting.</li></ul><br><b>Default:</b> <code>DisplayableSearchResults</code>
    */
    private ?array $dataset = null;
    
    /**
     * @var array<string>|null $datasetPropertyName This comma-delimted array can be used to define the specific property name(s) that will be returned in the response.<br><br>For example, if you specify <code>Engine</code>, the result set will only contain engines that are compatible with the input criteria.<br><br><span class="tablenote"><b>Note:</b> This array cannot be used alongside <b>dataset</b>. If both are used, an error will occur.</span>
    */
    private ?array $datasetPropertyName = null;
    
    /**
     * @var DisabledProductFilter|null $disabledProductFilter This container can be used to specify whether or not to filter out products which are disabled for selling on eBay and/or disabled for product review. 
    */
    private ?DisabledProductFilter $disabledProductFilter = null;
    
    /**
     * @var PaginationInput|null $paginationInput This container controls the pagination of the result set.
    */
    private ?PaginationInput $paginationInput = null;
    
    /**
     * @var ProductIdentifier|null $productIdentifier This container is used to provide unique identifier for the product. The product identifier consists of an identifier type and value, and are unique across all sites.
    */
    private ?ProductIdentifier $productIdentifier = null;
    
    /**
     * @var array<SortOrderInner>|null $sortOrders This array controls the sort order of compatibility properties.
    */
    private ?array $sortOrders = null;
    
    /**
     * Instantiates a new ProductRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductRequest {
        return new ProductRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationPropertyFilters property value. This array is used to filter the properties of an application, such as a vehicle's make or model, that will be returned in the response.<br><br>Application property filters are specified as name-value pairs. Only products compatible with these name-value pairs will be returned.
     * @return array<PropertyFilterInner>|null
    */
    public function getApplicationPropertyFilters(): ?array {
        return $this->applicationPropertyFilters;
    }

    /**
     * Gets the dataset property value. This array defines the type of properties that are returned for the catalog-enabled category.<br><br>For example, if you specify <code>Searchable</code>, the compatibility details will contain properties that can be used to search for products, such as make or model.<br><br><span class="tablenote"><b>Note:</b> This field cannot be used alongside <b>dataPropertyName</b>. If both are used, an error will occur.</span><br><b>Valid values:</b><ul><li><code>DisplayableProductDetails</code>: Properties for use in a user interface to describe products.</li><li><code>DisplayableSearchResults</code>: Properties for use in results for product searches.</li><li><code>Searchable</code>: Properties for use in searches.</li><li><code>Sortable</code>: Properties that are suitable for sorting.</li></ul><br><b>Default:</b> <code>DisplayableSearchResults</code>
     * @return array<string>|null
    */
    public function getDataset(): ?array {
        return $this->dataset;
    }

    /**
     * Gets the datasetPropertyName property value. This comma-delimted array can be used to define the specific property name(s) that will be returned in the response.<br><br>For example, if you specify <code>Engine</code>, the result set will only contain engines that are compatible with the input criteria.<br><br><span class="tablenote"><b>Note:</b> This array cannot be used alongside <b>dataset</b>. If both are used, an error will occur.</span>
     * @return array<string>|null
    */
    public function getDatasetPropertyName(): ?array {
        return $this->datasetPropertyName;
    }

    /**
     * Gets the disabledProductFilter property value. This container can be used to specify whether or not to filter out products which are disabled for selling on eBay and/or disabled for product review. 
     * @return DisabledProductFilter|null
    */
    public function getDisabledProductFilter(): ?DisabledProductFilter {
        return $this->disabledProductFilter;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationPropertyFilters' => fn(ParseNode $n) => $o->setApplicationPropertyFilters($n->getCollectionOfObjectValues([PropertyFilterInner::class, 'createFromDiscriminatorValue'])),
            'dataset' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDataset($val);
            },
            'datasetPropertyName' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDatasetPropertyName($val);
            },
            'disabledProductFilter' => fn(ParseNode $n) => $o->setDisabledProductFilter($n->getObjectValue([DisabledProductFilter::class, 'createFromDiscriminatorValue'])),
            'paginationInput' => fn(ParseNode $n) => $o->setPaginationInput($n->getObjectValue([PaginationInput::class, 'createFromDiscriminatorValue'])),
            'productIdentifier' => fn(ParseNode $n) => $o->setProductIdentifier($n->getObjectValue([ProductIdentifier::class, 'createFromDiscriminatorValue'])),
            'sortOrders' => fn(ParseNode $n) => $o->setSortOrders($n->getCollectionOfObjectValues([SortOrderInner::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the paginationInput property value. This container controls the pagination of the result set.
     * @return PaginationInput|null
    */
    public function getPaginationInput(): ?PaginationInput {
        return $this->paginationInput;
    }

    /**
     * Gets the productIdentifier property value. This container is used to provide unique identifier for the product. The product identifier consists of an identifier type and value, and are unique across all sites.
     * @return ProductIdentifier|null
    */
    public function getProductIdentifier(): ?ProductIdentifier {
        return $this->productIdentifier;
    }

    /**
     * Gets the sortOrders property value. This array controls the sort order of compatibility properties.
     * @return array<SortOrderInner>|null
    */
    public function getSortOrders(): ?array {
        return $this->sortOrders;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('applicationPropertyFilters', $this->getApplicationPropertyFilters());
        $writer->writeCollectionOfPrimitiveValues('dataset', $this->getDataset());
        $writer->writeCollectionOfPrimitiveValues('datasetPropertyName', $this->getDatasetPropertyName());
        $writer->writeObjectValue('disabledProductFilter', $this->getDisabledProductFilter());
        $writer->writeObjectValue('paginationInput', $this->getPaginationInput());
        $writer->writeObjectValue('productIdentifier', $this->getProductIdentifier());
        $writer->writeCollectionOfObjectValues('sortOrders', $this->getSortOrders());
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
     * Sets the applicationPropertyFilters property value. This array is used to filter the properties of an application, such as a vehicle's make or model, that will be returned in the response.<br><br>Application property filters are specified as name-value pairs. Only products compatible with these name-value pairs will be returned.
     * @param array<PropertyFilterInner>|null $value Value to set for the applicationPropertyFilters property.
    */
    public function setApplicationPropertyFilters(?array $value): void {
        $this->applicationPropertyFilters = $value;
    }

    /**
     * Sets the dataset property value. This array defines the type of properties that are returned for the catalog-enabled category.<br><br>For example, if you specify <code>Searchable</code>, the compatibility details will contain properties that can be used to search for products, such as make or model.<br><br><span class="tablenote"><b>Note:</b> This field cannot be used alongside <b>dataPropertyName</b>. If both are used, an error will occur.</span><br><b>Valid values:</b><ul><li><code>DisplayableProductDetails</code>: Properties for use in a user interface to describe products.</li><li><code>DisplayableSearchResults</code>: Properties for use in results for product searches.</li><li><code>Searchable</code>: Properties for use in searches.</li><li><code>Sortable</code>: Properties that are suitable for sorting.</li></ul><br><b>Default:</b> <code>DisplayableSearchResults</code>
     * @param array<string>|null $value Value to set for the dataset property.
    */
    public function setDataset(?array $value): void {
        $this->dataset = $value;
    }

    /**
     * Sets the datasetPropertyName property value. This comma-delimted array can be used to define the specific property name(s) that will be returned in the response.<br><br>For example, if you specify <code>Engine</code>, the result set will only contain engines that are compatible with the input criteria.<br><br><span class="tablenote"><b>Note:</b> This array cannot be used alongside <b>dataset</b>. If both are used, an error will occur.</span>
     * @param array<string>|null $value Value to set for the datasetPropertyName property.
    */
    public function setDatasetPropertyName(?array $value): void {
        $this->datasetPropertyName = $value;
    }

    /**
     * Sets the disabledProductFilter property value. This container can be used to specify whether or not to filter out products which are disabled for selling on eBay and/or disabled for product review. 
     * @param DisabledProductFilter|null $value Value to set for the disabledProductFilter property.
    */
    public function setDisabledProductFilter(?DisabledProductFilter $value): void {
        $this->disabledProductFilter = $value;
    }

    /**
     * Sets the paginationInput property value. This container controls the pagination of the result set.
     * @param PaginationInput|null $value Value to set for the paginationInput property.
    */
    public function setPaginationInput(?PaginationInput $value): void {
        $this->paginationInput = $value;
    }

    /**
     * Sets the productIdentifier property value. This container is used to provide unique identifier for the product. The product identifier consists of an identifier type and value, and are unique across all sites.
     * @param ProductIdentifier|null $value Value to set for the productIdentifier property.
    */
    public function setProductIdentifier(?ProductIdentifier $value): void {
        $this->productIdentifier = $value;
    }

    /**
     * Sets the sortOrders property value. This array controls the sort order of compatibility properties.
     * @param array<SortOrderInner>|null $value Value to set for the sortOrders property.
    */
    public function setSortOrders(?array $value): void {
        $this->sortOrders = $value;
    }

}
