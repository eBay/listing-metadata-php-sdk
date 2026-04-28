<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AutomotivePartsCompatibilityPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryId The category ID to which the automotive parts compatibility policies apply.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryTreeId A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy information returned by this call pertains to the categories included below this root node of the tree.    <br><br>A <i>category tree</i> is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category that is represented by a unique <b>categoryId</b> value. Within a category tree, the root node has no parent node and <i>leaf nodes</i> are nodes that have no child nodes.
    */
    private ?string $categoryTreeId = null;
    
    /**
     * @var string|null $compatibilityBasedOn Indicates whether the category supports parts compatibility by either <code>ASSEMBLY</code> or by <code>SPECIFICATION</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:CompatibilityTypeEnum'>eBay API documentation</a>
    */
    private ?string $compatibilityBasedOn = null;
    
    /**
     * @var array<string>|null $compatibleVehicleTypes Indicates the compatibility classification of the part based on high-level vehicle types.
    */
    private ?array $compatibleVehicleTypes = null;
    
    /**
     * @var int|null $maxNumberOfCompatibleVehicles Specifies the maximum number of compatible vehicle-applications allowed per item.
    */
    private ?int $maxNumberOfCompatibleVehicles = null;
    
    /**
     * Instantiates a new AutomotivePartsCompatibilityPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomotivePartsCompatibilityPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomotivePartsCompatibilityPolicy {
        return new AutomotivePartsCompatibilityPolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryId property value. The category ID to which the automotive parts compatibility policies apply.
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
     * Gets the compatibilityBasedOn property value. Indicates whether the category supports parts compatibility by either <code>ASSEMBLY</code> or by <code>SPECIFICATION</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:CompatibilityTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCompatibilityBasedOn(): ?string {
        return $this->compatibilityBasedOn;
    }

    /**
     * Gets the compatibleVehicleTypes property value. Indicates the compatibility classification of the part based on high-level vehicle types.
     * @return array<string>|null
    */
    public function getCompatibleVehicleTypes(): ?array {
        return $this->compatibleVehicleTypes;
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
            'compatibilityBasedOn' => fn(ParseNode $n) => $o->setCompatibilityBasedOn($n->getStringValue()),
            'compatibleVehicleTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCompatibleVehicleTypes($val);
            },
            'maxNumberOfCompatibleVehicles' => fn(ParseNode $n) => $o->setMaxNumberOfCompatibleVehicles($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the maxNumberOfCompatibleVehicles property value. Specifies the maximum number of compatible vehicle-applications allowed per item.
     * @return int|null
    */
    public function getMaxNumberOfCompatibleVehicles(): ?int {
        return $this->maxNumberOfCompatibleVehicles;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeStringValue('compatibilityBasedOn', $this->getCompatibilityBasedOn());
        $writer->writeCollectionOfPrimitiveValues('compatibleVehicleTypes', $this->getCompatibleVehicleTypes());
        $writer->writeIntegerValue('maxNumberOfCompatibleVehicles', $this->getMaxNumberOfCompatibleVehicles());
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
     * Sets the categoryId property value. The category ID to which the automotive parts compatibility policies apply.
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
     * Sets the compatibilityBasedOn property value. Indicates whether the category supports parts compatibility by either <code>ASSEMBLY</code> or by <code>SPECIFICATION</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:CompatibilityTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the compatibilityBasedOn property.
    */
    public function setCompatibilityBasedOn(?string $value): void {
        $this->compatibilityBasedOn = $value;
    }

    /**
     * Sets the compatibleVehicleTypes property value. Indicates the compatibility classification of the part based on high-level vehicle types.
     * @param array<string>|null $value Value to set for the compatibleVehicleTypes property.
    */
    public function setCompatibleVehicleTypes(?array $value): void {
        $this->compatibleVehicleTypes = $value;
    }

    /**
     * Sets the maxNumberOfCompatibleVehicles property value. Specifies the maximum number of compatible vehicle-applications allowed per item.
     * @param int|null $value Value to set for the maxNumberOfCompatibleVehicles property.
    */
    public function setMaxNumberOfCompatibleVehicles(?int $value): void {
        $this->maxNumberOfCompatibleVehicles = $value;
    }

}
