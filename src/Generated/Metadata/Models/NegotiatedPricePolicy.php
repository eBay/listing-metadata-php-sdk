<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NegotiatedPricePolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $bestOfferAutoAcceptEnabled This flag denotes whether or not the category supports the setting of a price at which best offers are automatically accepted. If set to <code>true</code>, the category does support the setting of an automatic price for best-offers.
    */
    private ?bool $bestOfferAutoAcceptEnabled = null;
    
    /**
     * @var bool|null $bestOfferAutoDeclineEnabled This flag denotes whether or not the category supports the setting of an auto-decline price for best offers. If set to <code>true</code>, the category does support the setting of an automatic-decline price for best-offers.
    */
    private ?bool $bestOfferAutoDeclineEnabled = null;
    
    /**
     * @var bool|null $bestOfferCounterEnabled This flag denotes whether or not the category supports the setting for an automatic counter-offer on best offers. If set to <code>true</code>, the category does support the setting of an automatic counter-offer price for best-offers.
    */
    private ?bool $bestOfferCounterEnabled = null;
    
    /**
     * @var string|null $categoryId The category ID to which the negotiated-price policies apply.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryTreeId A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy information returned by this call pertains to the categories included below this root node of the tree.    <br><br>A <i>category tree</i> is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category that is represented by a unique <b>categoryId</b> value. Within a category tree, the root node has no parent node and <i>leaf nodes</i> are nodes that have no child nodes.
    */
    private ?string $categoryTreeId = null;
    
    /**
     * Instantiates a new NegotiatedPricePolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NegotiatedPricePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NegotiatedPricePolicy {
        return new NegotiatedPricePolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the bestOfferAutoAcceptEnabled property value. This flag denotes whether or not the category supports the setting of a price at which best offers are automatically accepted. If set to <code>true</code>, the category does support the setting of an automatic price for best-offers.
     * @return bool|null
    */
    public function getBestOfferAutoAcceptEnabled(): ?bool {
        return $this->bestOfferAutoAcceptEnabled;
    }

    /**
     * Gets the bestOfferAutoDeclineEnabled property value. This flag denotes whether or not the category supports the setting of an auto-decline price for best offers. If set to <code>true</code>, the category does support the setting of an automatic-decline price for best-offers.
     * @return bool|null
    */
    public function getBestOfferAutoDeclineEnabled(): ?bool {
        return $this->bestOfferAutoDeclineEnabled;
    }

    /**
     * Gets the bestOfferCounterEnabled property value. This flag denotes whether or not the category supports the setting for an automatic counter-offer on best offers. If set to <code>true</code>, the category does support the setting of an automatic counter-offer price for best-offers.
     * @return bool|null
    */
    public function getBestOfferCounterEnabled(): ?bool {
        return $this->bestOfferCounterEnabled;
    }

    /**
     * Gets the categoryId property value. The category ID to which the negotiated-price policies apply.
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
            'bestOfferAutoAcceptEnabled' => fn(ParseNode $n) => $o->setBestOfferAutoAcceptEnabled($n->getBooleanValue()),
            'bestOfferAutoDeclineEnabled' => fn(ParseNode $n) => $o->setBestOfferAutoDeclineEnabled($n->getBooleanValue()),
            'bestOfferCounterEnabled' => fn(ParseNode $n) => $o->setBestOfferCounterEnabled($n->getBooleanValue()),
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'categoryTreeId' => fn(ParseNode $n) => $o->setCategoryTreeId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('bestOfferAutoAcceptEnabled', $this->getBestOfferAutoAcceptEnabled());
        $writer->writeBooleanValue('bestOfferAutoDeclineEnabled', $this->getBestOfferAutoDeclineEnabled());
        $writer->writeBooleanValue('bestOfferCounterEnabled', $this->getBestOfferCounterEnabled());
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryTreeId', $this->getCategoryTreeId());
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
     * Sets the bestOfferAutoAcceptEnabled property value. This flag denotes whether or not the category supports the setting of a price at which best offers are automatically accepted. If set to <code>true</code>, the category does support the setting of an automatic price for best-offers.
     * @param bool|null $value Value to set for the bestOfferAutoAcceptEnabled property.
    */
    public function setBestOfferAutoAcceptEnabled(?bool $value): void {
        $this->bestOfferAutoAcceptEnabled = $value;
    }

    /**
     * Sets the bestOfferAutoDeclineEnabled property value. This flag denotes whether or not the category supports the setting of an auto-decline price for best offers. If set to <code>true</code>, the category does support the setting of an automatic-decline price for best-offers.
     * @param bool|null $value Value to set for the bestOfferAutoDeclineEnabled property.
    */
    public function setBestOfferAutoDeclineEnabled(?bool $value): void {
        $this->bestOfferAutoDeclineEnabled = $value;
    }

    /**
     * Sets the bestOfferCounterEnabled property value. This flag denotes whether or not the category supports the setting for an automatic counter-offer on best offers. If set to <code>true</code>, the category does support the setting of an automatic counter-offer price for best-offers.
     * @param bool|null $value Value to set for the bestOfferCounterEnabled property.
    */
    public function setBestOfferCounterEnabled(?bool $value): void {
        $this->bestOfferCounterEnabled = $value;
    }

    /**
     * Sets the categoryId property value. The category ID to which the negotiated-price policies apply.
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

}
