<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains information about one of the ancestors of a suggested category. An ordered list of these references describes the path from the suggested category to the root of the category tree it belongs to.
*/
class AncestorReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryId The unique identifier of the eBay ancestor category.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of a full default category tree includes the <b>categoryId</b> field, but its value should not be relied upon. It provides no useful information for application development.</span>
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryName The name of the ancestor category identified by <b>categoryId</b>.
    */
    private ?string $categoryName = null;
    
    /**
     * @var string|null $categorySubtreeNodeHref The href portion of the <b>getCategorySubtree</b> call that retrieves the subtree below the ancestor category node.
    */
    private ?string $categorySubtreeNodeHref = null;
    
    /**
     * @var int|null $categoryTreeNodeLevel The absolute level of the ancestor category node in the hierarchy of its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>. </span>
    */
    private ?int $categoryTreeNodeLevel = null;
    
    /**
     * Instantiates a new AncestorReference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AncestorReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AncestorReference {
        return new AncestorReference();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryId property value. The unique identifier of the eBay ancestor category.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of a full default category tree includes the <b>categoryId</b> field, but its value should not be relied upon. It provides no useful information for application development.</span>
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the categoryName property value. The name of the ancestor category identified by <b>categoryId</b>.
     * @return string|null
    */
    public function getCategoryName(): ?string {
        return $this->categoryName;
    }

    /**
     * Gets the categorySubtreeNodeHref property value. The href portion of the <b>getCategorySubtree</b> call that retrieves the subtree below the ancestor category node.
     * @return string|null
    */
    public function getCategorySubtreeNodeHref(): ?string {
        return $this->categorySubtreeNodeHref;
    }

    /**
     * Gets the categoryTreeNodeLevel property value. The absolute level of the ancestor category node in the hierarchy of its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>. </span>
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
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'categoryName' => fn(ParseNode $n) => $o->setCategoryName($n->getStringValue()),
            'categorySubtreeNodeHref' => fn(ParseNode $n) => $o->setCategorySubtreeNodeHref($n->getStringValue()),
            'categoryTreeNodeLevel' => fn(ParseNode $n) => $o->setCategoryTreeNodeLevel($n->getIntegerValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryName', $this->getCategoryName());
        $writer->writeStringValue('categorySubtreeNodeHref', $this->getCategorySubtreeNodeHref());
        $writer->writeIntegerValue('categoryTreeNodeLevel', $this->getCategoryTreeNodeLevel());
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
     * Sets the categoryId property value. The unique identifier of the eBay ancestor category.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of a full default category tree includes the <b>categoryId</b> field, but its value should not be relied upon. It provides no useful information for application development.</span>
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the categoryName property value. The name of the ancestor category identified by <b>categoryId</b>.
     * @param string|null $value Value to set for the categoryName property.
    */
    public function setCategoryName(?string $value): void {
        $this->categoryName = $value;
    }

    /**
     * Sets the categorySubtreeNodeHref property value. The href portion of the <b>getCategorySubtree</b> call that retrieves the subtree below the ancestor category node.
     * @param string|null $value Value to set for the categorySubtreeNodeHref property.
    */
    public function setCategorySubtreeNodeHref(?string $value): void {
        $this->categorySubtreeNodeHref = $value;
    }

    /**
     * Sets the categoryTreeNodeLevel property value. The absolute level of the ancestor category node in the hierarchy of its category tree.<br><br><span class="tablenote"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>. </span>
     * @param int|null $value Value to set for the categoryTreeNodeLevel property.
    */
    public function setCategoryTreeNodeLevel(?int $value): void {
        $this->categoryTreeNodeLevel = $value;
    }

}
