<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains information about a suggested category tree leaf node that corresponds to keywords provided in the request. It includes details about each of the category's ancestor nodes extending up to the root of the category tree.
*/
class CategorySuggestion implements AdditionalDataHolder, Parsable 
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
     * @var array<AncestorReference>|null $categoryTreeNodeAncestors An ordered list of category references that describes the location of the suggested category in the specified category tree. The list identifies the category's ancestry as a sequence of parent nodes, from the current node's immediate parent to the root node of the category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of a full default category tree includes <b>categoryId</b> and <b>categoryName</b> fields, but their values should not be relied upon. They provide no useful information for application development.</span>
    */
    private ?array $categoryTreeNodeAncestors = null;
    
    /**
     * @var int|null $categoryTreeNodeLevel The absolute level of the category tree node in the hierarchy of its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>.</span>
    */
    private ?int $categoryTreeNodeLevel = null;
    
    /**
     * @var string|null $relevancy This field is reserved for internal or future use.
    */
    private ?string $relevancy = null;
    
    /**
     * Instantiates a new CategorySuggestion and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CategorySuggestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CategorySuggestion {
        return new CategorySuggestion();
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
     * Gets the categoryTreeNodeAncestors property value. An ordered list of category references that describes the location of the suggested category in the specified category tree. The list identifies the category's ancestry as a sequence of parent nodes, from the current node's immediate parent to the root node of the category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of a full default category tree includes <b>categoryId</b> and <b>categoryName</b> fields, but their values should not be relied upon. They provide no useful information for application development.</span>
     * @return array<AncestorReference>|null
    */
    public function getCategoryTreeNodeAncestors(): ?array {
        return $this->categoryTreeNodeAncestors;
    }

    /**
     * Gets the categoryTreeNodeLevel property value. The absolute level of the category tree node in the hierarchy of its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>.</span>
     * @return int|null
    */
    public function getCategoryTreeNodeLevel(): ?int {
        return $this->categoryTreeNodeLevel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getObjectValue([Category::class, 'createFromDiscriminatorValue'])),
            'categoryTreeNodeAncestors' => fn(ParseNode $n) => $o->setCategoryTreeNodeAncestors($n->getCollectionOfObjectValues([AncestorReference::class, 'createFromDiscriminatorValue'])),
            'categoryTreeNodeLevel' => fn(ParseNode $n) => $o->setCategoryTreeNodeLevel($n->getIntegerValue()),
            'relevancy' => fn(ParseNode $n) => $o->setRelevancy($n->getStringValue()),
        ];
    }

    /**
     * Gets the relevancy property value. This field is reserved for internal or future use.
     * @return string|null
    */
    public function getRelevancy(): ?string {
        return $this->relevancy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('category', $this->getCategory());
        $writer->writeCollectionOfObjectValues('categoryTreeNodeAncestors', $this->getCategoryTreeNodeAncestors());
        $writer->writeIntegerValue('categoryTreeNodeLevel', $this->getCategoryTreeNodeLevel());
        $writer->writeStringValue('relevancy', $this->getRelevancy());
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
     * Sets the categoryTreeNodeAncestors property value. An ordered list of category references that describes the location of the suggested category in the specified category tree. The list identifies the category's ancestry as a sequence of parent nodes, from the current node's immediate parent to the root node of the category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of a full default category tree includes <b>categoryId</b> and <b>categoryName</b> fields, but their values should not be relied upon. They provide no useful information for application development.</span>
     * @param array<AncestorReference>|null $value Value to set for the categoryTreeNodeAncestors property.
    */
    public function setCategoryTreeNodeAncestors(?array $value): void {
        $this->categoryTreeNodeAncestors = $value;
    }

    /**
     * Sets the categoryTreeNodeLevel property value. The absolute level of the category tree node in the hierarchy of its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>.</span>
     * @param int|null $value Value to set for the categoryTreeNodeLevel property.
    */
    public function setCategoryTreeNodeLevel(?int $value): void {
        $this->categoryTreeNodeLevel = $value;
    }

    /**
     * Sets the relevancy property value. This field is reserved for internal or future use.
     * @param string|null $value Value to set for the relevancy property.
    */
    public function setRelevancy(?string $value): void {
        $this->relevancy = $value;
    }

}
