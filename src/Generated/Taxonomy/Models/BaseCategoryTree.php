<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains identifying information for the category tree associated with a particular eBay marketplace.
*/
class BaseCategoryTree implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $categoryTreeId The unique identifier of the eBay category tree for the specified marketplace.
    */
    private ?string $categoryTreeId = null;
    
    /**
     * @var string|null $categoryTreeVersion The version of the category tree identified by <b>categoryTreeId</b>. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
    */
    private ?string $categoryTreeVersion = null;
    
    /**
     * Instantiates a new BaseCategoryTree and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseCategoryTree
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BaseCategoryTree {
        return new BaseCategoryTree();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryTreeId property value. The unique identifier of the eBay category tree for the specified marketplace.
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
            'categoryTreeId' => fn(ParseNode $n) => $o->setCategoryTreeId($n->getStringValue()),
            'categoryTreeVersion' => fn(ParseNode $n) => $o->setCategoryTreeVersion($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
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
     * Sets the categoryTreeId property value. The unique identifier of the eBay category tree for the specified marketplace.
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
