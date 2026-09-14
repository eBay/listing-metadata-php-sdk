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

namespace EBay\ListingMetadata\Generated\Charity\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The full location, ID, logo and other details of the charity organization.
*/
class CharityOrg implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $charityOrgId The ID of the charitable organization.
    */
    private ?string $charityOrgId = null;
    
    /**
     * @var string|null $description The description of the charitable organization.
    */
    private ?string $description = null;
    
    /**
     * @var Location|null $location The location details of the charitable organization.
    */
    private ?Location $location = null;
    
    /**
     * @var Image|null $logoImage The logo of the charitable organization.
    */
    private ?Image $logoImage = null;
    
    /**
     * @var string|null $missionStatement The mission statement of the charitable organization.
    */
    private ?string $missionStatement = null;
    
    /**
     * @var string|null $name The name of the charitable organization.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $registrationId The registration ID for the charitable organization.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> For the US marketplace, this is the EIN.</span>
    */
    private ?string $registrationId = null;
    
    /**
     * @var string|null $website The link to the website for the charitable organization.
    */
    private ?string $website = null;
    
    /**
     * Instantiates a new CharityOrg and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CharityOrg
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CharityOrg {
        return new CharityOrg();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the charityOrgId property value. The ID of the charitable organization.
     * @return string|null
    */
    public function getCharityOrgId(): ?string {
        return $this->charityOrgId;
    }

    /**
     * Gets the description property value. The description of the charitable organization.
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
            'charityOrgId' => fn(ParseNode $n) => $o->setCharityOrgId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'logoImage' => fn(ParseNode $n) => $o->setLogoImage($n->getObjectValue([Image::class, 'createFromDiscriminatorValue'])),
            'missionStatement' => fn(ParseNode $n) => $o->setMissionStatement($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'registrationId' => fn(ParseNode $n) => $o->setRegistrationId($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
        ];
    }

    /**
     * Gets the location property value. The location details of the charitable organization.
     * @return Location|null
    */
    public function getLocation(): ?Location {
        return $this->location;
    }

    /**
     * Gets the logoImage property value. The logo of the charitable organization.
     * @return Image|null
    */
    public function getLogoImage(): ?Image {
        return $this->logoImage;
    }

    /**
     * Gets the missionStatement property value. The mission statement of the charitable organization.
     * @return string|null
    */
    public function getMissionStatement(): ?string {
        return $this->missionStatement;
    }

    /**
     * Gets the name property value. The name of the charitable organization.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the registrationId property value. The registration ID for the charitable organization.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> For the US marketplace, this is the EIN.</span>
     * @return string|null
    */
    public function getRegistrationId(): ?string {
        return $this->registrationId;
    }

    /**
     * Gets the website property value. The link to the website for the charitable organization.
     * @return string|null
    */
    public function getWebsite(): ?string {
        return $this->website;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('charityOrgId', $this->getCharityOrgId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeObjectValue('logoImage', $this->getLogoImage());
        $writer->writeStringValue('missionStatement', $this->getMissionStatement());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('registrationId', $this->getRegistrationId());
        $writer->writeStringValue('website', $this->getWebsite());
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
     * Sets the charityOrgId property value. The ID of the charitable organization.
     * @param string|null $value Value to set for the charityOrgId property.
    */
    public function setCharityOrgId(?string $value): void {
        $this->charityOrgId = $value;
    }

    /**
     * Sets the description property value. The description of the charitable organization.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the location property value. The location details of the charitable organization.
     * @param Location|null $value Value to set for the location property.
    */
    public function setLocation(?Location $value): void {
        $this->location = $value;
    }

    /**
     * Sets the logoImage property value. The logo of the charitable organization.
     * @param Image|null $value Value to set for the logoImage property.
    */
    public function setLogoImage(?Image $value): void {
        $this->logoImage = $value;
    }

    /**
     * Sets the missionStatement property value. The mission statement of the charitable organization.
     * @param string|null $value Value to set for the missionStatement property.
    */
    public function setMissionStatement(?string $value): void {
        $this->missionStatement = $value;
    }

    /**
     * Sets the name property value. The name of the charitable organization.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the registrationId property value. The registration ID for the charitable organization.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> For the US marketplace, this is the EIN.</span>
     * @param string|null $value Value to set for the registrationId property.
    */
    public function setRegistrationId(?string $value): void {
        $this->registrationId = $value;
    }

    /**
     * Sets the website property value. The link to the website for the charitable organization.
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->website = $value;
    }

}
