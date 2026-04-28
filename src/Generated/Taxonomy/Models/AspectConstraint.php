<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type contains information about the formatting, occurrence, and support of an aspect.
*/
class AspectConstraint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $aspectAdvancedDataType Indicates additional data type requirements for the aspect. For example, <code>NUMERIC_RANGE</code> indicates that the aspect value must be in numeric range format.<br><br><span class="tablenote"> <strong>Note:</strong> Currently only <code>NUMERIC_RANGE</code> is supported.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectAdvancedDataTypeEnum'>eBay API documentation</a>
    */
    private ?string $aspectAdvancedDataType = null;
    
    /**
     * @var array<string>|null $aspectApplicableTo This value indicate if the aspect identified by the <b>aspects.localizedAspectName</b> field is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular instance of the product.
    */
    private ?array $aspectApplicableTo = null;
    
    /**
     * @var string|null $aspectDataType The data type of this aspect. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectDataTypeEnum'>eBay API documentation</a>
    */
    private ?string $aspectDataType = null;
    
    /**
     * @var bool|null $aspectEnabledForVariations A value of <code>true</code> indicates that this aspect can be used to help identify item variations.
    */
    private ?bool $aspectEnabledForVariations = null;
    
    /**
     * @var string|null $aspectFormat <i>Returned only if</i> the value of <b>aspectDataType</b> identifies a data type that requires specific formatting. Currently, this field provides formatting hints as follows: <ul> <li><b>DATE</b>: <code>YYYY</code>, <code>YYYYMM</code>, <code>YYYYMMDD</code></li> <li><b>NUMBER</b>: <code>int32</code>, <code>double</code></li> </ul>
    */
    private ?string $aspectFormat = null;
    
    /**
     * @var int|null $aspectMaxLength The maximum length of the item/instance aspect's value. The seller must make sure not to exceed this length when specifying the instance aspect's value for a product. This field is only returned for instance aspects.
    */
    private ?int $aspectMaxLength = null;
    
    /**
     * @var string|null $aspectMode The manner in which values of this aspect must be specified by the seller (as free text or by selecting from available options).  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectModeEnum'>eBay API documentation</a>
    */
    private ?string $aspectMode = null;
    
    /**
     * @var bool|null $aspectRequired A value of <code>true</code> indicates that this aspect is required when offering items in the specified category.
    */
    private ?bool $aspectRequired = null;
    
    /**
     * @var string|null $aspectUsage The enumeration value returned in this field will indicate if the corresponding aspect is recommended or optional.<br><br><span class="tablenote"> <strong>Note:</strong> This field is always returned, even for hard-mandated/required aspects (where <code><strong>aspectRequired</strong>: true</code>). The value returned for required aspects will be <code>RECOMMENDED</code>, but they are actually required and a seller will be blocked from listing or revising an item without these aspects. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectUsageEnum'>eBay API documentation</a>
    */
    private ?string $aspectUsage = null;
    
    /**
     * @var string|null $expectedRequiredByDate The expected date after which the aspect will be required.<br><br><span class="tablenote"> <strong>Note:</strong> The value returned in this field specifies only an approximate date, which may not reflect the actual date after which the aspect is required.</span>
    */
    private ?string $expectedRequiredByDate = null;
    
    /**
     * @var string|null $itemToAspectCardinality Indicates whether this aspect can accept single or multiple values for items in the specified category.<br><br><span class="tablenote"> <strong>Note:</strong> Up to 30 values can be supplied for aspects that accept multiple values.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ItemToAspectCardinalityEnum'>eBay API documentation</a>
    */
    private ?string $itemToAspectCardinality = null;
    
    /**
     * Instantiates a new AspectConstraint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AspectConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AspectConstraint {
        return new AspectConstraint();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the aspectAdvancedDataType property value. Indicates additional data type requirements for the aspect. For example, <code>NUMERIC_RANGE</code> indicates that the aspect value must be in numeric range format.<br><br><span class="tablenote"> <strong>Note:</strong> Currently only <code>NUMERIC_RANGE</code> is supported.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectAdvancedDataTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAspectAdvancedDataType(): ?string {
        return $this->aspectAdvancedDataType;
    }

    /**
     * Gets the aspectApplicableTo property value. This value indicate if the aspect identified by the <b>aspects.localizedAspectName</b> field is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular instance of the product.
     * @return array<string>|null
    */
    public function getAspectApplicableTo(): ?array {
        return $this->aspectApplicableTo;
    }

    /**
     * Gets the aspectDataType property value. The data type of this aspect. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectDataTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAspectDataType(): ?string {
        return $this->aspectDataType;
    }

    /**
     * Gets the aspectEnabledForVariations property value. A value of <code>true</code> indicates that this aspect can be used to help identify item variations.
     * @return bool|null
    */
    public function getAspectEnabledForVariations(): ?bool {
        return $this->aspectEnabledForVariations;
    }

    /**
     * Gets the aspectFormat property value. <i>Returned only if</i> the value of <b>aspectDataType</b> identifies a data type that requires specific formatting. Currently, this field provides formatting hints as follows: <ul> <li><b>DATE</b>: <code>YYYY</code>, <code>YYYYMM</code>, <code>YYYYMMDD</code></li> <li><b>NUMBER</b>: <code>int32</code>, <code>double</code></li> </ul>
     * @return string|null
    */
    public function getAspectFormat(): ?string {
        return $this->aspectFormat;
    }

    /**
     * Gets the aspectMaxLength property value. The maximum length of the item/instance aspect's value. The seller must make sure not to exceed this length when specifying the instance aspect's value for a product. This field is only returned for instance aspects.
     * @return int|null
    */
    public function getAspectMaxLength(): ?int {
        return $this->aspectMaxLength;
    }

    /**
     * Gets the aspectMode property value. The manner in which values of this aspect must be specified by the seller (as free text or by selecting from available options).  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectModeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAspectMode(): ?string {
        return $this->aspectMode;
    }

    /**
     * Gets the aspectRequired property value. A value of <code>true</code> indicates that this aspect is required when offering items in the specified category.
     * @return bool|null
    */
    public function getAspectRequired(): ?bool {
        return $this->aspectRequired;
    }

    /**
     * Gets the aspectUsage property value. The enumeration value returned in this field will indicate if the corresponding aspect is recommended or optional.<br><br><span class="tablenote"> <strong>Note:</strong> This field is always returned, even for hard-mandated/required aspects (where <code><strong>aspectRequired</strong>: true</code>). The value returned for required aspects will be <code>RECOMMENDED</code>, but they are actually required and a seller will be blocked from listing or revising an item without these aspects. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectUsageEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAspectUsage(): ?string {
        return $this->aspectUsage;
    }

    /**
     * Gets the expectedRequiredByDate property value. The expected date after which the aspect will be required.<br><br><span class="tablenote"> <strong>Note:</strong> The value returned in this field specifies only an approximate date, which may not reflect the actual date after which the aspect is required.</span>
     * @return string|null
    */
    public function getExpectedRequiredByDate(): ?string {
        return $this->expectedRequiredByDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aspectAdvancedDataType' => fn(ParseNode $n) => $o->setAspectAdvancedDataType($n->getStringValue()),
            'aspectApplicableTo' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAspectApplicableTo($val);
            },
            'aspectDataType' => fn(ParseNode $n) => $o->setAspectDataType($n->getStringValue()),
            'aspectEnabledForVariations' => fn(ParseNode $n) => $o->setAspectEnabledForVariations($n->getBooleanValue()),
            'aspectFormat' => fn(ParseNode $n) => $o->setAspectFormat($n->getStringValue()),
            'aspectMaxLength' => fn(ParseNode $n) => $o->setAspectMaxLength($n->getIntegerValue()),
            'aspectMode' => fn(ParseNode $n) => $o->setAspectMode($n->getStringValue()),
            'aspectRequired' => fn(ParseNode $n) => $o->setAspectRequired($n->getBooleanValue()),
            'aspectUsage' => fn(ParseNode $n) => $o->setAspectUsage($n->getStringValue()),
            'expectedRequiredByDate' => fn(ParseNode $n) => $o->setExpectedRequiredByDate($n->getStringValue()),
            'itemToAspectCardinality' => fn(ParseNode $n) => $o->setItemToAspectCardinality($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemToAspectCardinality property value. Indicates whether this aspect can accept single or multiple values for items in the specified category.<br><br><span class="tablenote"> <strong>Note:</strong> Up to 30 values can be supplied for aspects that accept multiple values.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ItemToAspectCardinalityEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getItemToAspectCardinality(): ?string {
        return $this->itemToAspectCardinality;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('aspectAdvancedDataType', $this->getAspectAdvancedDataType());
        $writer->writeCollectionOfPrimitiveValues('aspectApplicableTo', $this->getAspectApplicableTo());
        $writer->writeStringValue('aspectDataType', $this->getAspectDataType());
        $writer->writeBooleanValue('aspectEnabledForVariations', $this->getAspectEnabledForVariations());
        $writer->writeStringValue('aspectFormat', $this->getAspectFormat());
        $writer->writeIntegerValue('aspectMaxLength', $this->getAspectMaxLength());
        $writer->writeStringValue('aspectMode', $this->getAspectMode());
        $writer->writeBooleanValue('aspectRequired', $this->getAspectRequired());
        $writer->writeStringValue('aspectUsage', $this->getAspectUsage());
        $writer->writeStringValue('expectedRequiredByDate', $this->getExpectedRequiredByDate());
        $writer->writeStringValue('itemToAspectCardinality', $this->getItemToAspectCardinality());
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
     * Sets the aspectAdvancedDataType property value. Indicates additional data type requirements for the aspect. For example, <code>NUMERIC_RANGE</code> indicates that the aspect value must be in numeric range format.<br><br><span class="tablenote"> <strong>Note:</strong> Currently only <code>NUMERIC_RANGE</code> is supported.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectAdvancedDataTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the aspectAdvancedDataType property.
    */
    public function setAspectAdvancedDataType(?string $value): void {
        $this->aspectAdvancedDataType = $value;
    }

    /**
     * Sets the aspectApplicableTo property value. This value indicate if the aspect identified by the <b>aspects.localizedAspectName</b> field is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular instance of the product.
     * @param array<string>|null $value Value to set for the aspectApplicableTo property.
    */
    public function setAspectApplicableTo(?array $value): void {
        $this->aspectApplicableTo = $value;
    }

    /**
     * Sets the aspectDataType property value. The data type of this aspect. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectDataTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the aspectDataType property.
    */
    public function setAspectDataType(?string $value): void {
        $this->aspectDataType = $value;
    }

    /**
     * Sets the aspectEnabledForVariations property value. A value of <code>true</code> indicates that this aspect can be used to help identify item variations.
     * @param bool|null $value Value to set for the aspectEnabledForVariations property.
    */
    public function setAspectEnabledForVariations(?bool $value): void {
        $this->aspectEnabledForVariations = $value;
    }

    /**
     * Sets the aspectFormat property value. <i>Returned only if</i> the value of <b>aspectDataType</b> identifies a data type that requires specific formatting. Currently, this field provides formatting hints as follows: <ul> <li><b>DATE</b>: <code>YYYY</code>, <code>YYYYMM</code>, <code>YYYYMMDD</code></li> <li><b>NUMBER</b>: <code>int32</code>, <code>double</code></li> </ul>
     * @param string|null $value Value to set for the aspectFormat property.
    */
    public function setAspectFormat(?string $value): void {
        $this->aspectFormat = $value;
    }

    /**
     * Sets the aspectMaxLength property value. The maximum length of the item/instance aspect's value. The seller must make sure not to exceed this length when specifying the instance aspect's value for a product. This field is only returned for instance aspects.
     * @param int|null $value Value to set for the aspectMaxLength property.
    */
    public function setAspectMaxLength(?int $value): void {
        $this->aspectMaxLength = $value;
    }

    /**
     * Sets the aspectMode property value. The manner in which values of this aspect must be specified by the seller (as free text or by selecting from available options).  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectModeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the aspectMode property.
    */
    public function setAspectMode(?string $value): void {
        $this->aspectMode = $value;
    }

    /**
     * Sets the aspectRequired property value. A value of <code>true</code> indicates that this aspect is required when offering items in the specified category.
     * @param bool|null $value Value to set for the aspectRequired property.
    */
    public function setAspectRequired(?bool $value): void {
        $this->aspectRequired = $value;
    }

    /**
     * Sets the aspectUsage property value. The enumeration value returned in this field will indicate if the corresponding aspect is recommended or optional.<br><br><span class="tablenote"> <strong>Note:</strong> This field is always returned, even for hard-mandated/required aspects (where <code><strong>aspectRequired</strong>: true</code>). The value returned for required aspects will be <code>RECOMMENDED</code>, but they are actually required and a seller will be blocked from listing or revising an item without these aspects. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectUsageEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the aspectUsage property.
    */
    public function setAspectUsage(?string $value): void {
        $this->aspectUsage = $value;
    }

    /**
     * Sets the expectedRequiredByDate property value. The expected date after which the aspect will be required.<br><br><span class="tablenote"> <strong>Note:</strong> The value returned in this field specifies only an approximate date, which may not reflect the actual date after which the aspect is required.</span>
     * @param string|null $value Value to set for the expectedRequiredByDate property.
    */
    public function setExpectedRequiredByDate(?string $value): void {
        $this->expectedRequiredByDate = $value;
    }

    /**
     * Sets the itemToAspectCardinality property value. Indicates whether this aspect can accept single or multiple values for items in the specified category.<br><br><span class="tablenote"> <strong>Note:</strong> Up to 30 values can be supplied for aspects that accept multiple values.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ItemToAspectCardinalityEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the itemToAspectCardinality property.
    */
    public function setItemToAspectCardinality(?string $value): void {
        $this->itemToAspectCardinality = $value;
    }

}
