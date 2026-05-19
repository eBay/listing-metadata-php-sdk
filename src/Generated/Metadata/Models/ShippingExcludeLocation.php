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

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides applicable locations or region codes to be excluded set by the seller.
*/
class ShippingExcludeLocation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description The localized location name.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $location  The location or region to be excluded. Countries are returned through <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166 codes</a>. This field may also include continents and other larger geographical regions (for example, the Middle East, Southeast Asia), as well as domestic/special locations (like APO/FPO, PO Box, Alaska/Hawaii). The values returned in this field are used in fulfillment business policies (such as in <a href="/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy#request.shippingOptions.shippingServices.shipToLocations.regionExcluded.regionName" target="_blank">regionName</a>) or through the <a href="/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ShippingDetails.ExcludeShipToLocation" target="_blank">ExcludeShipToLocation</a> field in an <b>AddItem</b> call.
    */
    private ?string $location = null;
    
    /**
     * @var string|null $region The region of the excluded shipping area specified, such as:<br><ul><li><code>Africa</code> </li> <li><code>Americas</code> </li> <li><code>Asia</code> </li>  <li><code>Central America and Caribbean</code> </li> <li><code>Europe</code> </li> <li><code>Middle East</code> </li> <li><code>North America</code> </li> <li><code>Oceania</code> </li>  <li><code>South America</code> </li> <li><code>Southeast Asia</code> </li></ul>
    */
    private ?string $region = null;
    
    /**
     * Instantiates a new ShippingExcludeLocation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingExcludeLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingExcludeLocation {
        return new ShippingExcludeLocation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The localized location name.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getStringValue()),
        ];
    }

    /**
     * Gets the location property value.  The location or region to be excluded. Countries are returned through <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166 codes</a>. This field may also include continents and other larger geographical regions (for example, the Middle East, Southeast Asia), as well as domestic/special locations (like APO/FPO, PO Box, Alaska/Hawaii). The values returned in this field are used in fulfillment business policies (such as in <a href="/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy#request.shippingOptions.shippingServices.shipToLocations.regionExcluded.regionName" target="_blank">regionName</a>) or through the <a href="/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ShippingDetails.ExcludeShipToLocation" target="_blank">ExcludeShipToLocation</a> field in an <b>AddItem</b> call.
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * Gets the region property value. The region of the excluded shipping area specified, such as:<br><ul><li><code>Africa</code> </li> <li><code>Americas</code> </li> <li><code>Asia</code> </li>  <li><code>Central America and Caribbean</code> </li> <li><code>Europe</code> </li> <li><code>Middle East</code> </li> <li><code>North America</code> </li> <li><code>Oceania</code> </li>  <li><code>South America</code> </li> <li><code>Southeast Asia</code> </li></ul>
     * @return string|null
    */
    public function getRegion(): ?string {
        return $this->region;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('location', $this->getLocation());
        $writer->writeStringValue('region', $this->getRegion());
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
     * Sets the description property value. The localized location name.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the location property value.  The location or region to be excluded. Countries are returned through <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166 codes</a>. This field may also include continents and other larger geographical regions (for example, the Middle East, Southeast Asia), as well as domestic/special locations (like APO/FPO, PO Box, Alaska/Hawaii). The values returned in this field are used in fulfillment business policies (such as in <a href="/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy#request.shippingOptions.shippingServices.shipToLocations.regionExcluded.regionName" target="_blank">regionName</a>) or through the <a href="/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ShippingDetails.ExcludeShipToLocation" target="_blank">ExcludeShipToLocation</a> field in an <b>AddItem</b> call.
     * @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value): void {
        $this->location = $value;
    }

    /**
     * Sets the region property value. The region of the excluded shipping area specified, such as:<br><ul><li><code>Africa</code> </li> <li><code>Americas</code> </li> <li><code>Asia</code> </li>  <li><code>Central America and Caribbean</code> </li> <li><code>Europe</code> </li> <li><code>Middle East</code> </li> <li><code>North America</code> </li> <li><code>Oceania</code> </li>  <li><code>South America</code> </li> <li><code>Southeast Asia</code> </li></ul>
     * @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->region = $value;
    }

}
