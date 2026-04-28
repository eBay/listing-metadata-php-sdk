<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This complex type contains a list of sales-tax jurisdictions.
*/
class SalesTaxJurisdictions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<SalesTaxJurisdiction>|null $salesTaxJurisdictions A list of sales-tax jurisdictions.
    */
    private ?array $salesTaxJurisdictions = null;
    
    /**
     * Instantiates a new SalesTaxJurisdictions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SalesTaxJurisdictions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SalesTaxJurisdictions {
        return new SalesTaxJurisdictions();
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
            'salesTaxJurisdictions' => fn(ParseNode $n) => $o->setSalesTaxJurisdictions($n->getCollectionOfObjectValues([SalesTaxJurisdiction::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the salesTaxJurisdictions property value. A list of sales-tax jurisdictions.
     * @return array<SalesTaxJurisdiction>|null
    */
    public function getSalesTaxJurisdictions(): ?array {
        return $this->salesTaxJurisdictions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('salesTaxJurisdictions', $this->getSalesTaxJurisdictions());
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
     * Sets the salesTaxJurisdictions property value. A list of sales-tax jurisdictions.
     * @param array<SalesTaxJurisdiction>|null $value Value to set for the salesTaxJurisdictions property.
    */
    public function setSalesTaxJurisdictions(?array $value): void {
        $this->salesTaxJurisdictions = $value;
    }

}
