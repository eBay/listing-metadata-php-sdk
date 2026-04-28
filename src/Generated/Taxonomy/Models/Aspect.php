<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains information about an item attribute (for example, color) that is appropriate or necessary for accurately describing items in a particular leaf category. Sellers are required or encouraged to provide one or more values of this aspect when offering an item in that category on eBay.
*/
class Aspect implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AspectConstraint|null $aspectConstraint This type contains information about the formatting, occurrence, and support of an aspect.
    */
    private ?AspectConstraint $aspectConstraint = null;
    
    /**
     * @var array<AspectValue>|null $aspectValues A list of valid values for this aspect (for example: <code>Red</code>, <code>Green</code>, and <code>Blue</code>), along with any constraints on those values.
    */
    private ?array $aspectValues = null;
    
    /**
     * @var string|null $localizedAspectName The localized name of this aspect (for example: <code>Colour</code> on the eBay UK site). <br><br><span class="tablenote"> <strong>Note:</strong> This name is always localized for the specified marketplace. </span>
    */
    private ?string $localizedAspectName = null;
    
    /**
     * @var RelevanceIndicator|null $relevanceIndicator The relevance of this aspect. This field is returned if eBay has data on how many searches have been performed for listings in the category using this item aspect.<br><br><span class="tablenote"> <strong>Note:</strong> This container is restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check ">App Check ticket</a> to request this access. In the App Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to 'Buyer Demand Data' in the Taxonomy API.</span>
    */
    private ?RelevanceIndicator $relevanceIndicator = null;
    
    /**
     * Instantiates a new Aspect and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Aspect
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Aspect {
        return new Aspect();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the aspectConstraint property value. This type contains information about the formatting, occurrence, and support of an aspect.
     * @return AspectConstraint|null
    */
    public function getAspectConstraint(): ?AspectConstraint {
        return $this->aspectConstraint;
    }

    /**
     * Gets the aspectValues property value. A list of valid values for this aspect (for example: <code>Red</code>, <code>Green</code>, and <code>Blue</code>), along with any constraints on those values.
     * @return array<AspectValue>|null
    */
    public function getAspectValues(): ?array {
        return $this->aspectValues;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aspectConstraint' => fn(ParseNode $n) => $o->setAspectConstraint($n->getObjectValue([AspectConstraint::class, 'createFromDiscriminatorValue'])),
            'aspectValues' => fn(ParseNode $n) => $o->setAspectValues($n->getCollectionOfObjectValues([AspectValue::class, 'createFromDiscriminatorValue'])),
            'localizedAspectName' => fn(ParseNode $n) => $o->setLocalizedAspectName($n->getStringValue()),
            'relevanceIndicator' => fn(ParseNode $n) => $o->setRelevanceIndicator($n->getObjectValue([RelevanceIndicator::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the localizedAspectName property value. The localized name of this aspect (for example: <code>Colour</code> on the eBay UK site). <br><br><span class="tablenote"> <strong>Note:</strong> This name is always localized for the specified marketplace. </span>
     * @return string|null
    */
    public function getLocalizedAspectName(): ?string {
        return $this->localizedAspectName;
    }

    /**
     * Gets the relevanceIndicator property value. The relevance of this aspect. This field is returned if eBay has data on how many searches have been performed for listings in the category using this item aspect.<br><br><span class="tablenote"> <strong>Note:</strong> This container is restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check ">App Check ticket</a> to request this access. In the App Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to 'Buyer Demand Data' in the Taxonomy API.</span>
     * @return RelevanceIndicator|null
    */
    public function getRelevanceIndicator(): ?RelevanceIndicator {
        return $this->relevanceIndicator;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('aspectConstraint', $this->getAspectConstraint());
        $writer->writeCollectionOfObjectValues('aspectValues', $this->getAspectValues());
        $writer->writeStringValue('localizedAspectName', $this->getLocalizedAspectName());
        $writer->writeObjectValue('relevanceIndicator', $this->getRelevanceIndicator());
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
     * Sets the aspectConstraint property value. This type contains information about the formatting, occurrence, and support of an aspect.
     * @param AspectConstraint|null $value Value to set for the aspectConstraint property.
    */
    public function setAspectConstraint(?AspectConstraint $value): void {
        $this->aspectConstraint = $value;
    }

    /**
     * Sets the aspectValues property value. A list of valid values for this aspect (for example: <code>Red</code>, <code>Green</code>, and <code>Blue</code>), along with any constraints on those values.
     * @param array<AspectValue>|null $value Value to set for the aspectValues property.
    */
    public function setAspectValues(?array $value): void {
        $this->aspectValues = $value;
    }

    /**
     * Sets the localizedAspectName property value. The localized name of this aspect (for example: <code>Colour</code> on the eBay UK site). <br><br><span class="tablenote"> <strong>Note:</strong> This name is always localized for the specified marketplace. </span>
     * @param string|null $value Value to set for the localizedAspectName property.
    */
    public function setLocalizedAspectName(?string $value): void {
        $this->localizedAspectName = $value;
    }

    /**
     * Sets the relevanceIndicator property value. The relevance of this aspect. This field is returned if eBay has data on how many searches have been performed for listings in the category using this item aspect.<br><br><span class="tablenote"> <strong>Note:</strong> This container is restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check ">App Check ticket</a> to request this access. In the App Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to 'Buyer Demand Data' in the Taxonomy API.</span>
     * @param RelevanceIndicator|null $value Value to set for the relevanceIndicator property.
    */
    public function setRelevanceIndicator(?RelevanceIndicator $value): void {
        $this->relevanceIndicator = $value;
    }

}
