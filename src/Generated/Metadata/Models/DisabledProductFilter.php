<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the booleans used to determine if a product is excluded from eBay selling and/or review.
*/
class DisabledProductFilter implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $excludeForEbayReviews Specifies whether to filter out products excluded for eBay reviews.<br><br>If set to <code>true</code>, items excluded from eBay reviews are not returned.
    */
    private ?bool $excludeForEbayReviews = null;
    
    /**
     * @var bool|null $excludeForEbaySelling Specifies whether to filter out products excluded for eBay selling.<br><br>If set to <code>true</code>, items excluded from eBay selling are not returned.
    */
    private ?bool $excludeForEbaySelling = null;
    
    /**
     * Instantiates a new DisabledProductFilter and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DisabledProductFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DisabledProductFilter {
        return new DisabledProductFilter();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeForEbayReviews property value. Specifies whether to filter out products excluded for eBay reviews.<br><br>If set to <code>true</code>, items excluded from eBay reviews are not returned.
     * @return bool|null
    */
    public function getExcludeForEbayReviews(): ?bool {
        return $this->excludeForEbayReviews;
    }

    /**
     * Gets the excludeForEbaySelling property value. Specifies whether to filter out products excluded for eBay selling.<br><br>If set to <code>true</code>, items excluded from eBay selling are not returned.
     * @return bool|null
    */
    public function getExcludeForEbaySelling(): ?bool {
        return $this->excludeForEbaySelling;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeForEbayReviews' => fn(ParseNode $n) => $o->setExcludeForEbayReviews($n->getBooleanValue()),
            'excludeForEbaySelling' => fn(ParseNode $n) => $o->setExcludeForEbaySelling($n->getBooleanValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('excludeForEbayReviews', $this->getExcludeForEbayReviews());
        $writer->writeBooleanValue('excludeForEbaySelling', $this->getExcludeForEbaySelling());
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
     * Sets the excludeForEbayReviews property value. Specifies whether to filter out products excluded for eBay reviews.<br><br>If set to <code>true</code>, items excluded from eBay reviews are not returned.
     * @param bool|null $value Value to set for the excludeForEbayReviews property.
    */
    public function setExcludeForEbayReviews(?bool $value): void {
        $this->excludeForEbayReviews = $value;
    }

    /**
     * Sets the excludeForEbaySelling property value. Specifies whether to filter out products excluded for eBay selling.<br><br>If set to <code>true</code>, items excluded from eBay selling are not returned.
     * @param bool|null $value Value to set for the excludeForEbaySelling property.
    */
    public function setExcludeForEbaySelling(?bool $value): void {
        $this->excludeForEbaySelling = $value;
    }

}
