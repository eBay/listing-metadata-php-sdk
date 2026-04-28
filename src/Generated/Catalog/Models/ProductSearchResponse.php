<?php

namespace EBay\ListingMetadata\Generated\Catalog\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains the specifications for the collection of products that match the search or filter criteria of a <b>search</b> call. A maximum of 200 product summaries is returned (the result set), fewer if you include the <b>limit</b> query parameter in the request. 
*/
class ProductSearchResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href This field is reserved for internal or future use. <!-- The URI of the <b>search</b> method request that produced this result set. -->
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The number of product summaries returned in the response. This is the <i>result set</i>, a subset of the full collection of products that match the search or filter criteria of this call. If the <b>limit</b> query parameter was included in the request, this field will have the same value. <br /><br /> <b>Default:</b> <code>50</code>
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next This field is reserved for internal or future use. <!-- <i>Returned only if</i> there are more product records to retrieve from the current collection of matching products, this field contains the <b>search</b> call URI for the next result set. For example, the following URI returns records 41 thru 50 from the collection of matched products: <br /><br /> <code><i>path</i>/product_summary/search?limit=10&offset=40</code> <br /><br />  <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first product in the list has an offset of <code>0</code>.</span> -->
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset This field is reserved for internal or future use. <!-- The distance (number of records) from the first product in the collection to the first product in this result set. If the <b>offset</b> query parameter was included in the request, this field will have the same value. The <b>offset</b> value is used in conjunction with the <b>limit</b> value to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the call retrieves products 31 thru 40 from the resulting collection of products. <br /><br />  <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span> <br /><br /> <b>Default:</b> <code>0</code> (zero) -->
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $prev This field is reserved for internal or future use.  <!-- <i>Not returned if</i> the currently returned result set is the first set of product records from the current collection of matching products. This field contains the <b>search</b> call URI for the previous result set. For example, the following URI returns products 21 thru 30 from the collection of products: <br /><br /> <code><i>path</i>/product_summary/search?limit=10&offset=20</code> <br /><br />  <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first product in the list has an offset of <code>0</code>.</span> -->
    */
    private ?string $prev = null;
    
    /**
     * @var array<ProductSummary>|null $productSummaries <i>Returned if</i> the <b>fieldGroups</b> query parameter was omitted from the request, or if it was included with a value of <code>MATCHING_PRODUCTS</code> or <code>FULL</code>. This container provides an array of product summaries in the current result set for products that match the combination of the <b>q</b>, <b>category_ids</b>, and <b>aspect_filter</b> parameters that were provided in the request. Each product summary includes information about the product's identifiers, product images, aspects, the product page URL, and the <b>getProduct</b> URL for retrieving the product details.
    */
    private ?array $productSummaries = null;
    
    /**
     * @var Refinement|null $refinement This type identifies a product category and the aspects associated with that category. Each aspect distribution container returns the distribution of values that have been used for the aspect.
    */
    private ?Refinement $refinement = null;
    
    /**
     * @var int|null $total This field is reserved for internal or future use. <!-- The total number of product records in the returned collection of matched products. -->
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new ProductSearchResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductSearchResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductSearchResponse {
        return new ProductSearchResponse();
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
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'productSummaries' => fn(ParseNode $n) => $o->setProductSummaries($n->getCollectionOfObjectValues([ProductSummary::class, 'createFromDiscriminatorValue'])),
            'refinement' => fn(ParseNode $n) => $o->setRefinement($n->getObjectValue([Refinement::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. This field is reserved for internal or future use. <!-- The URI of the <b>search</b> method request that produced this result set. -->
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The number of product summaries returned in the response. This is the <i>result set</i>, a subset of the full collection of products that match the search or filter criteria of this call. If the <b>limit</b> query parameter was included in the request, this field will have the same value. <br /><br /> <b>Default:</b> <code>50</code>
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. This field is reserved for internal or future use. <!-- <i>Returned only if</i> there are more product records to retrieve from the current collection of matching products, this field contains the <b>search</b> call URI for the next result set. For example, the following URI returns records 41 thru 50 from the collection of matched products: <br /><br /> <code><i>path</i>/product_summary/search?limit=10&offset=40</code> <br /><br />  <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first product in the list has an offset of <code>0</code>.</span> -->
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. This field is reserved for internal or future use. <!-- The distance (number of records) from the first product in the collection to the first product in this result set. If the <b>offset</b> query parameter was included in the request, this field will have the same value. The <b>offset</b> value is used in conjunction with the <b>limit</b> value to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the call retrieves products 31 thru 40 from the resulting collection of products. <br /><br />  <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span> <br /><br /> <b>Default:</b> <code>0</code> (zero) -->
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the prev property value. This field is reserved for internal or future use.  <!-- <i>Not returned if</i> the currently returned result set is the first set of product records from the current collection of matching products. This field contains the <b>search</b> call URI for the previous result set. For example, the following URI returns products 21 thru 30 from the collection of products: <br /><br /> <code><i>path</i>/product_summary/search?limit=10&offset=20</code> <br /><br />  <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first product in the list has an offset of <code>0</code>.</span> -->
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the productSummaries property value. <i>Returned if</i> the <b>fieldGroups</b> query parameter was omitted from the request, or if it was included with a value of <code>MATCHING_PRODUCTS</code> or <code>FULL</code>. This container provides an array of product summaries in the current result set for products that match the combination of the <b>q</b>, <b>category_ids</b>, and <b>aspect_filter</b> parameters that were provided in the request. Each product summary includes information about the product's identifiers, product images, aspects, the product page URL, and the <b>getProduct</b> URL for retrieving the product details.
     * @return array<ProductSummary>|null
    */
    public function getProductSummaries(): ?array {
        return $this->productSummaries;
    }

    /**
     * Gets the refinement property value. This type identifies a product category and the aspects associated with that category. Each aspect distribution container returns the distribution of values that have been used for the aspect.
     * @return Refinement|null
    */
    public function getRefinement(): ?Refinement {
        return $this->refinement;
    }

    /**
     * Gets the total property value. This field is reserved for internal or future use. <!-- The total number of product records in the returned collection of matched products. -->
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeCollectionOfObjectValues('productSummaries', $this->getProductSummaries());
        $writer->writeObjectValue('refinement', $this->getRefinement());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the href property value. This field is reserved for internal or future use. <!-- The URI of the <b>search</b> method request that produced this result set. -->
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The number of product summaries returned in the response. This is the <i>result set</i>, a subset of the full collection of products that match the search or filter criteria of this call. If the <b>limit</b> query parameter was included in the request, this field will have the same value. <br /><br /> <b>Default:</b> <code>50</code>
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. This field is reserved for internal or future use. <!-- <i>Returned only if</i> there are more product records to retrieve from the current collection of matching products, this field contains the <b>search</b> call URI for the next result set. For example, the following URI returns records 41 thru 50 from the collection of matched products: <br /><br /> <code><i>path</i>/product_summary/search?limit=10&offset=40</code> <br /><br />  <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first product in the list has an offset of <code>0</code>.</span> -->
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. This field is reserved for internal or future use. <!-- The distance (number of records) from the first product in the collection to the first product in this result set. If the <b>offset</b> query parameter was included in the request, this field will have the same value. The <b>offset</b> value is used in conjunction with the <b>limit</b> value to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the call retrieves products 31 thru 40 from the resulting collection of products. <br /><br />  <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span> <br /><br /> <b>Default:</b> <code>0</code> (zero) -->
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the prev property value. This field is reserved for internal or future use.  <!-- <i>Not returned if</i> the currently returned result set is the first set of product records from the current collection of matching products. This field contains the <b>search</b> call URI for the previous result set. For example, the following URI returns products 21 thru 30 from the collection of products: <br /><br /> <code><i>path</i>/product_summary/search?limit=10&offset=20</code> <br /><br />  <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first product in the list has an offset of <code>0</code>.</span> -->
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the productSummaries property value. <i>Returned if</i> the <b>fieldGroups</b> query parameter was omitted from the request, or if it was included with a value of <code>MATCHING_PRODUCTS</code> or <code>FULL</code>. This container provides an array of product summaries in the current result set for products that match the combination of the <b>q</b>, <b>category_ids</b>, and <b>aspect_filter</b> parameters that were provided in the request. Each product summary includes information about the product's identifiers, product images, aspects, the product page URL, and the <b>getProduct</b> URL for retrieving the product details.
     * @param array<ProductSummary>|null $value Value to set for the productSummaries property.
    */
    public function setProductSummaries(?array $value): void {
        $this->productSummaries = $value;
    }

    /**
     * Sets the refinement property value. This type identifies a product category and the aspects associated with that category. Each aspect distribution container returns the distribution of values that have been used for the aspect.
     * @param Refinement|null $value Value to set for the refinement property.
    */
    public function setRefinement(?Refinement $value): void {
        $this->refinement = $value;
    }

    /**
     * Sets the total property value. This field is reserved for internal or future use. <!-- The total number of product records in the returned collection of matched products. -->
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
