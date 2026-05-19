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
 * This type contains information about all nodes of a category tree or subtree hierarchy, including and below the specified <b>Category</b>, down to the leaf nodes. It is a recursive structure.
*/
class CategoryTreeNode implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Category|null $category This type contains information about a particular eBay category.
    */
    private ?Category $category = null;
    
    /**
     * @var int|null $categoryTreeNodeLevel The absolute level of the current category tree node in the hierarchy of its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>. </span>
    */
    private ?int $categoryTreeNodeLevel = null;
    
    /**
     * @var array<CategoryTreeNode>|null $childCategoryTreeNodes An array of one or more category tree nodes that are the immediate children of the current category tree node, as well as their children, recursively down to the leaf nodes.<br><br><i>Returned only if</i> the current category tree node is not a leaf node (the value of <b>leafCategoryTreeNode</b> is <code>false</code>).
    */
    private ?array $childCategoryTreeNodes = null;
    
    /**
     * @var bool|null $leafCategoryTreeNode A value of <code>true</code> indicates that the current category tree node is a leaf node (it has no child nodes). A value of <code>false</code> indicates that the current node has one or more child nodes, which are identified by the <b>childCategoryTreeNodes</b> array.<br><br><i>Returned only if</i> the value of this field is <code>true</code>.
    */
    private ?bool $leafCategoryTreeNode = null;
    
    /**
     * @var string|null $parentCategoryTreeNodeHref The href portion of the <b>getCategorySubtree</b> call that retrieves the subtree below the parent of this category tree node.<br><br><i>Not returned if</i> the current category tree node is the root node of its tree.
    */
    private ?string $parentCategoryTreeNodeHref = null;
    
    /**
     * Instantiates a new CategoryTreeNode and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CategoryTreeNode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CategoryTreeNode {
        return new CategoryTreeNode();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. This type contains information about a particular eBay category.
     * @return Category|null
    */
    public function getCategory(): ?Category {
        return $this->category;
    }

    /**
     * Gets the categoryTreeNodeLevel property value. The absolute level of the current category tree node in the hierarchy of its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>. </span>
     * @return int|null
    */
    public function getCategoryTreeNodeLevel(): ?int {
        return $this->categoryTreeNodeLevel;
    }

    /**
     * Gets the childCategoryTreeNodes property value. An array of one or more category tree nodes that are the immediate children of the current category tree node, as well as their children, recursively down to the leaf nodes.<br><br><i>Returned only if</i> the current category tree node is not a leaf node (the value of <b>leafCategoryTreeNode</b> is <code>false</code>).
     * @return array<CategoryTreeNode>|null
    */
    public function getChildCategoryTreeNodes(): ?array {
        return $this->childCategoryTreeNodes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getObjectValue([Category::class, 'createFromDiscriminatorValue'])),
            'categoryTreeNodeLevel' => fn(ParseNode $n) => $o->setCategoryTreeNodeLevel($n->getIntegerValue()),
            'childCategoryTreeNodes' => fn(ParseNode $n) => $o->setChildCategoryTreeNodes($n->getCollectionOfObjectValues([CategoryTreeNode::class, 'createFromDiscriminatorValue'])),
            'leafCategoryTreeNode' => fn(ParseNode $n) => $o->setLeafCategoryTreeNode($n->getBooleanValue()),
            'parentCategoryTreeNodeHref' => fn(ParseNode $n) => $o->setParentCategoryTreeNodeHref($n->getStringValue()),
        ];
    }

    /**
     * Gets the leafCategoryTreeNode property value. A value of <code>true</code> indicates that the current category tree node is a leaf node (it has no child nodes). A value of <code>false</code> indicates that the current node has one or more child nodes, which are identified by the <b>childCategoryTreeNodes</b> array.<br><br><i>Returned only if</i> the value of this field is <code>true</code>.
     * @return bool|null
    */
    public function getLeafCategoryTreeNode(): ?bool {
        return $this->leafCategoryTreeNode;
    }

    /**
     * Gets the parentCategoryTreeNodeHref property value. The href portion of the <b>getCategorySubtree</b> call that retrieves the subtree below the parent of this category tree node.<br><br><i>Not returned if</i> the current category tree node is the root node of its tree.
     * @return string|null
    */
    public function getParentCategoryTreeNodeHref(): ?string {
        return $this->parentCategoryTreeNodeHref;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('category', $this->getCategory());
        $writer->writeIntegerValue('categoryTreeNodeLevel', $this->getCategoryTreeNodeLevel());
        $writer->writeCollectionOfObjectValues('childCategoryTreeNodes', $this->getChildCategoryTreeNodes());
        $writer->writeBooleanValue('leafCategoryTreeNode', $this->getLeafCategoryTreeNode());
        $writer->writeStringValue('parentCategoryTreeNodeHref', $this->getParentCategoryTreeNodeHref());
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
     * Sets the category property value. This type contains information about a particular eBay category.
     * @param Category|null $value Value to set for the category property.
    */
    public function setCategory(?Category $value): void {
        $this->category = $value;
    }

    /**
     * Sets the categoryTreeNodeLevel property value. The absolute level of the current category tree node in the hierarchy of its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>. </span>
     * @param int|null $value Value to set for the categoryTreeNodeLevel property.
    */
    public function setCategoryTreeNodeLevel(?int $value): void {
        $this->categoryTreeNodeLevel = $value;
    }

    /**
     * Sets the childCategoryTreeNodes property value. An array of one or more category tree nodes that are the immediate children of the current category tree node, as well as their children, recursively down to the leaf nodes.<br><br><i>Returned only if</i> the current category tree node is not a leaf node (the value of <b>leafCategoryTreeNode</b> is <code>false</code>).
     * @param array<CategoryTreeNode>|null $value Value to set for the childCategoryTreeNodes property.
    */
    public function setChildCategoryTreeNodes(?array $value): void {
        $this->childCategoryTreeNodes = $value;
    }

    /**
     * Sets the leafCategoryTreeNode property value. A value of <code>true</code> indicates that the current category tree node is a leaf node (it has no child nodes). A value of <code>false</code> indicates that the current node has one or more child nodes, which are identified by the <b>childCategoryTreeNodes</b> array.<br><br><i>Returned only if</i> the value of this field is <code>true</code>.
     * @param bool|null $value Value to set for the leafCategoryTreeNode property.
    */
    public function setLeafCategoryTreeNode(?bool $value): void {
        $this->leafCategoryTreeNode = $value;
    }

    /**
     * Sets the parentCategoryTreeNodeHref property value. The href portion of the <b>getCategorySubtree</b> call that retrieves the subtree below the parent of this category tree node.<br><br><i>Not returned if</i> the current category tree node is the root node of its tree.
     * @param string|null $value Value to set for the parentCategoryTreeNodeHref property.
    */
    public function setParentCategoryTreeNodeHref(?string $value): void {
        $this->parentCategoryTreeNodeHref = $value;
    }

}
