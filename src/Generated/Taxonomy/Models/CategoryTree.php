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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type contains information about all nodes of a specified eBay category tree.
*/
class CategoryTree implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $applicableMarketplaceIds A list of one or more identifiers of the eBay marketplaces that use this category tree.
    */
    private ?array $applicableMarketplaceIds = null;
    
    /**
     * @var string|null $categoryTreeId The unique identifier of this eBay category tree.
    */
    private ?string $categoryTreeId = null;
    
    /**
     * @var string|null $categoryTreeVersion The version of this category tree. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
    */
    private ?string $categoryTreeVersion = null;
    
    /**
     * @var CategoryTreeNode|null $rootCategoryNode This type contains information about all nodes of a category tree or subtree hierarchy, including and below the specified <b>Category</b>, down to the leaf nodes. It is a recursive structure.
    */
    private ?CategoryTreeNode $rootCategoryNode = null;
    
    /**
     * Instantiates a new CategoryTree and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CategoryTree
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CategoryTree {
        return new CategoryTree();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the applicableMarketplaceIds property value. A list of one or more identifiers of the eBay marketplaces that use this category tree.
     * @return array<string>|null
    */
    public function getApplicableMarketplaceIds(): ?array {
        return $this->applicableMarketplaceIds;
    }

    /**
     * Gets the categoryTreeId property value. The unique identifier of this eBay category tree.
     * @return string|null
    */
    public function getCategoryTreeId(): ?string {
        return $this->categoryTreeId;
    }

    /**
     * Gets the categoryTreeVersion property value. The version of this category tree. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
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
            'applicableMarketplaceIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setApplicableMarketplaceIds($val);
            },
            'categoryTreeId' => fn(ParseNode $n) => $o->setCategoryTreeId($n->getStringValue()),
            'categoryTreeVersion' => fn(ParseNode $n) => $o->setCategoryTreeVersion($n->getStringValue()),
            'rootCategoryNode' => fn(ParseNode $n) => $o->setRootCategoryNode($n->getObjectValue([CategoryTreeNode::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the rootCategoryNode property value. This type contains information about all nodes of a category tree or subtree hierarchy, including and below the specified <b>Category</b>, down to the leaf nodes. It is a recursive structure.
     * @return CategoryTreeNode|null
    */
    public function getRootCategoryNode(): ?CategoryTreeNode {
        return $this->rootCategoryNode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('applicableMarketplaceIds', $this->getApplicableMarketplaceIds());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
        $writer->writeStringValue('categoryTreeVersion', $this->getCategoryTreeVersion());
        $writer->writeObjectValue('rootCategoryNode', $this->getRootCategoryNode());
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
     * Sets the applicableMarketplaceIds property value. A list of one or more identifiers of the eBay marketplaces that use this category tree.
     * @param array<string>|null $value Value to set for the applicableMarketplaceIds property.
    */
    public function setApplicableMarketplaceIds(?array $value): void {
        $this->applicableMarketplaceIds = $value;
    }

    /**
     * Sets the categoryTreeId property value. The unique identifier of this eBay category tree.
     * @param string|null $value Value to set for the categoryTreeId property.
    */
    public function setCategoryTreeId(?string $value): void {
        $this->categoryTreeId = $value;
    }

    /**
     * Sets the categoryTreeVersion property value. The version of this category tree. It's a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls.
     * @param string|null $value Value to set for the categoryTreeVersion property.
    */
    public function setCategoryTreeVersion(?string $value): void {
        $this->categoryTreeVersion = $value;
    }

    /**
     * Sets the rootCategoryNode property value. This type contains information about all nodes of a category tree or subtree hierarchy, including and below the specified <b>Category</b>, down to the leaf nodes. It is a recursive structure.
     * @param CategoryTreeNode|null $value Value to set for the rootCategoryNode property.
    */
    public function setRootCategoryNode(?CategoryTreeNode $value): void {
        $this->rootCategoryNode = $value;
    }

}
