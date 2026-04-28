<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemConditionPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryId The category ID to which the item-condition policy applies.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryTreeId A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy information returned by this call pertains to the categories included below this root node of the tree.    <br><br>A <i>category tree</i> is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category that is represented by a unique <b>categoryId</b> value. Within a category tree, the root node has no parent node and <i>leaf nodes</i> are nodes that have no child nodes.
    */
    private ?string $categoryTreeId = null;
    
    /**
     * @var bool|null $itemConditionRequired This flag denotes whether or not you must list the item condition in a listing for the specified category. If set to <code>true</code>, you must specify an item condition for the associated category.
    */
    private ?bool $itemConditionRequired = null;
    
    /**
     * @var array<ItemCondition>|null $itemConditions The item-condition values allowed in the category.<br><br><span class="tablenote"><b>Note:</b> The ‘Seller Refurbished’ item condition (condition ID 2500) has been replaced by the 'Excellent - Refurbished', 'Very Good - Refurbished', and 'Good - Refurbished' item conditions in a select number of eBay marketplaces and categories.<br/><br/>Similar to the ‘Certified Refurbished’ item condition (condition ID 2000), a seller’s OAuth user token will have to be used instead of an OAuth application token, since each seller must  go through an application and qualification process before using any of these new refurbished item conditions in supported categories. If a seller is not qualified to use the new refurbished item conditions, these item condition values will not be returned by <b>getItemConditionPolicies</b>.</span>
    */
    private ?array $itemConditions = null;
    
    /**
     * Instantiates a new ItemConditionPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemConditionPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemConditionPolicy {
        return new ItemConditionPolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryId property value. The category ID to which the item-condition policy applies.
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the categoryTreeId property value. A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy information returned by this call pertains to the categories included below this root node of the tree.    <br><br>A <i>category tree</i> is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category that is represented by a unique <b>categoryId</b> value. Within a category tree, the root node has no parent node and <i>leaf nodes</i> are nodes that have no child nodes.
     * @return string|null
    */
    public function getCategoryTreeId(): ?string {
        return $this->categoryTreeId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'categoryTreeId' => fn(ParseNode $n) => $o->setCategoryTreeId($n->getStringValue()),
            'itemConditionRequired' => fn(ParseNode $n) => $o->setItemConditionRequired($n->getBooleanValue()),
            'itemConditions' => fn(ParseNode $n) => $o->setItemConditions($n->getCollectionOfObjectValues([ItemCondition::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the itemConditionRequired property value. This flag denotes whether or not you must list the item condition in a listing for the specified category. If set to <code>true</code>, you must specify an item condition for the associated category.
     * @return bool|null
    */
    public function getItemConditionRequired(): ?bool {
        return $this->itemConditionRequired;
    }

    /**
     * Gets the itemConditions property value. The item-condition values allowed in the category.<br><br><span class="tablenote"><b>Note:</b> The ‘Seller Refurbished’ item condition (condition ID 2500) has been replaced by the 'Excellent - Refurbished', 'Very Good - Refurbished', and 'Good - Refurbished' item conditions in a select number of eBay marketplaces and categories.<br/><br/>Similar to the ‘Certified Refurbished’ item condition (condition ID 2000), a seller’s OAuth user token will have to be used instead of an OAuth application token, since each seller must  go through an application and qualification process before using any of these new refurbished item conditions in supported categories. If a seller is not qualified to use the new refurbished item conditions, these item condition values will not be returned by <b>getItemConditionPolicies</b>.</span>
     * @return array<ItemCondition>|null
    */
    public function getItemConditions(): ?array {
        return $this->itemConditions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeBooleanValue('itemConditionRequired', $this->getItemConditionRequired());
        $writer->writeCollectionOfObjectValues('itemConditions', $this->getItemConditions());
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
     * Sets the categoryId property value. The category ID to which the item-condition policy applies.
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the categoryTreeId property value. A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy information returned by this call pertains to the categories included below this root node of the tree.    <br><br>A <i>category tree</i> is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category that is represented by a unique <b>categoryId</b> value. Within a category tree, the root node has no parent node and <i>leaf nodes</i> are nodes that have no child nodes.
     * @param string|null $value Value to set for the categoryTreeId property.
    */
    public function setCategoryTreeId(?string $value): void {
        $this->categoryTreeId = $value;
    }

    /**
     * Sets the itemConditionRequired property value. This flag denotes whether or not you must list the item condition in a listing for the specified category. If set to <code>true</code>, you must specify an item condition for the associated category.
     * @param bool|null $value Value to set for the itemConditionRequired property.
    */
    public function setItemConditionRequired(?bool $value): void {
        $this->itemConditionRequired = $value;
    }

    /**
     * Sets the itemConditions property value. The item-condition values allowed in the category.<br><br><span class="tablenote"><b>Note:</b> The ‘Seller Refurbished’ item condition (condition ID 2500) has been replaced by the 'Excellent - Refurbished', 'Very Good - Refurbished', and 'Good - Refurbished' item conditions in a select number of eBay marketplaces and categories.<br/><br/>Similar to the ‘Certified Refurbished’ item condition (condition ID 2000), a seller’s OAuth user token will have to be used instead of an OAuth application token, since each seller must  go through an application and qualification process before using any of these new refurbished item conditions in supported categories. If a seller is not qualified to use the new refurbished item conditions, these item condition values will not be returned by <b>getItemConditionPolicies</b>.</span>
     * @param array<ItemCondition>|null $value Value to set for the itemConditions property.
    */
    public function setItemConditions(?array $value): void {
        $this->itemConditions = $value;
    }

}
