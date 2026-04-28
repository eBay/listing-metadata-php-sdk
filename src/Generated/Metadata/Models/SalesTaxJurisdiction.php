<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A unique ID for a sales tax jurisdiction.
*/
class SalesTaxJurisdiction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $salesTaxJurisdictionId The unique ID for a sales-tax jurisdiction.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> When <code>countryCode</code> is set to <code>US</code>, IDs for all 50 states, Washington, DC, and all US territories will be returned. However, the only <code>salesTaxJurisdictionId</code> values currently supported are:<ul><li><code>AS</code> (American Samoa)</li><li><code>GU</code> (Guam</li><li><code>MP</code> Northern Mariana Islands</li><li><code>PW (Palau)</li><li><code>VI</code> (US Virgin Islands)</li></ul></p></div>
    */
    private ?string $salesTaxJurisdictionId = null;
    
    /**
     * Instantiates a new SalesTaxJurisdiction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SalesTaxJurisdiction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SalesTaxJurisdiction {
        return new SalesTaxJurisdiction();
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
            'salesTaxJurisdictionId' => fn(ParseNode $n) => $o->setSalesTaxJurisdictionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the salesTaxJurisdictionId property value. The unique ID for a sales-tax jurisdiction.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> When <code>countryCode</code> is set to <code>US</code>, IDs for all 50 states, Washington, DC, and all US territories will be returned. However, the only <code>salesTaxJurisdictionId</code> values currently supported are:<ul><li><code>AS</code> (American Samoa)</li><li><code>GU</code> (Guam</li><li><code>MP</code> Northern Mariana Islands</li><li><code>PW (Palau)</li><li><code>VI</code> (US Virgin Islands)</li></ul></p></div>
     * @return string|null
    */
    public function getSalesTaxJurisdictionId(): ?string {
        return $this->salesTaxJurisdictionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('salesTaxJurisdictionId', $this->getSalesTaxJurisdictionId());
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
     * Sets the salesTaxJurisdictionId property value. The unique ID for a sales-tax jurisdiction.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> When <code>countryCode</code> is set to <code>US</code>, IDs for all 50 states, Washington, DC, and all US territories will be returned. However, the only <code>salesTaxJurisdictionId</code> values currently supported are:<ul><li><code>AS</code> (American Samoa)</li><li><code>GU</code> (Guam</li><li><code>MP</code> Northern Mariana Islands</li><li><code>PW (Palau)</li><li><code>VI</code> (US Virgin Islands)</li></ul></p></div>
     * @param string|null $value Value to set for the salesTaxJurisdictionId property.
    */
    public function setSalesTaxJurisdictionId(?string $value): void {
        $this->salesTaxJurisdictionId = $value;
    }

}
