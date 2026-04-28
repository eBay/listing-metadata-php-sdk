<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <b>getExpiredCategories</b> response to indicate any eBay leaf categories in the specified category tree that have expired and the currently active leaf categories that have replaced them.
*/
class ExpiredCategories implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ExpiredCategory>|null $expiredCategories An array of expired category ID(s) for the requested category tree, and the currently active category ID(s) that have replaced them.
    */
    private ?array $expiredCategories = null;
    
    /**
     * Instantiates a new ExpiredCategories and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExpiredCategories
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExpiredCategories {
        return new ExpiredCategories();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expiredCategories property value. An array of expired category ID(s) for the requested category tree, and the currently active category ID(s) that have replaced them.
     * @return array<ExpiredCategory>|null
    */
    public function getExpiredCategories(): ?array {
        return $this->expiredCategories;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expiredCategories' => fn(ParseNode $n) => $o->setExpiredCategories($n->getCollectionOfObjectValues([ExpiredCategory::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('expiredCategories', $this->getExpiredCategories());
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
     * Sets the expiredCategories property value. An array of expired category ID(s) for the requested category tree, and the currently active category ID(s) that have replaced them.
     * @param array<ExpiredCategory>|null $value Value to set for the expiredCategories property.
    */
    public function setExpiredCategories(?array $value): void {
        $this->expiredCategories = $value;
    }

}
