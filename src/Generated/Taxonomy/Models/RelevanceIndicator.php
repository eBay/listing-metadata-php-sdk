<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The relevance of this aspect. This field is returned if eBay has data on how many searches have been performed for listings in the category using this item aspect.<br><br><span class="tablenote"> <strong>Note:</strong> This container is restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check ">App Check ticket</a> to request this access. In the App Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to 'Buyer Demand Data' in the Taxonomy API.</span>
*/
class RelevanceIndicator implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $searchCount The number of recent searches (based on 30 days of data) for the aspect.
    */
    private ?int $searchCount = null;
    
    /**
     * Instantiates a new RelevanceIndicator and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelevanceIndicator
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelevanceIndicator {
        return new RelevanceIndicator();
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
            'searchCount' => fn(ParseNode $n) => $o->setSearchCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the searchCount property value. The number of recent searches (based on 30 days of data) for the aspect.
     * @return int|null
    */
    public function getSearchCount(): ?int {
        return $this->searchCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('searchCount', $this->getSearchCount());
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
     * Sets the searchCount property value. The number of recent searches (based on 30 days of data) for the aspect.
     * @param int|null $value Value to set for the searchCount property.
    */
    public function setSearchCount(?int $value): void {
        $this->searchCount = $value;
    }

}
