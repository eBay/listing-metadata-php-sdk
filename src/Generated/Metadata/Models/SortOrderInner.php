<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide the sort order of compatibility properties returned in the response.
*/
class SortOrderInner implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var SortOrderProperties|null $sortOrder This type is used to define the property to be used in sorting. 
    */
    private ?SortOrderProperties $sortOrder = null;
    
    /**
     * @var string|null $sortPriority The priority of the specified sort order provided.<br><br>For example, when a property is assigned <code>Sort1</code>, its values are sorted first. Values for the property assigned <code>Sort2</code> are sorted second, and so on.<br><br><b>Valid values</b>:<ul><li><code>Sort1</code></li><li><code>Sort2</code></li><li><code>Sort3</code></li><li><code>Sort4</code></li><li><code>Sort5</code></li></ul>
    */
    private ?string $sortPriority = null;
    
    /**
     * Instantiates a new SortOrderInner and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SortOrderInner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SortOrderInner {
        return new SortOrderInner();
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
            'sortOrder' => fn(ParseNode $n) => $o->setSortOrder($n->getObjectValue([SortOrderProperties::class, 'createFromDiscriminatorValue'])),
            'sortPriority' => fn(ParseNode $n) => $o->setSortPriority($n->getStringValue()),
        ];
    }

    /**
     * Gets the sortOrder property value. This type is used to define the property to be used in sorting. 
     * @return SortOrderProperties|null
    */
    public function getSortOrder(): ?SortOrderProperties {
        return $this->sortOrder;
    }

    /**
     * Gets the sortPriority property value. The priority of the specified sort order provided.<br><br>For example, when a property is assigned <code>Sort1</code>, its values are sorted first. Values for the property assigned <code>Sort2</code> are sorted second, and so on.<br><br><b>Valid values</b>:<ul><li><code>Sort1</code></li><li><code>Sort2</code></li><li><code>Sort3</code></li><li><code>Sort4</code></li><li><code>Sort5</code></li></ul>
     * @return string|null
    */
    public function getSortPriority(): ?string {
        return $this->sortPriority;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('sortOrder', $this->getSortOrder());
        $writer->writeStringValue('sortPriority', $this->getSortPriority());
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
     * Sets the sortOrder property value. This type is used to define the property to be used in sorting. 
     * @param SortOrderProperties|null $value Value to set for the sortOrder property.
    */
    public function setSortOrder(?SortOrderProperties $value): void {
        $this->sortOrder = $value;
    }

    /**
     * Sets the sortPriority property value. The priority of the specified sort order provided.<br><br>For example, when a property is assigned <code>Sort1</code>, its values are sorted first. Values for the property assigned <code>Sort2</code> are sorted second, and so on.<br><br><b>Valid values</b>:<ul><li><code>Sort1</code></li><li><code>Sort2</code></li><li><code>Sort3</code></li><li><code>Sort4</code></li><li><code>Sort5</code></li></ul>
     * @param string|null $value Value to set for the sortPriority property.
    */
    public function setSortPriority(?string $value): void {
        $this->sortPriority = $value;
    }

}
