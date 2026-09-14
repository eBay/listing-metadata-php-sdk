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

namespace EBay\ListingMetadata\Generated\Catalog\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains information about one value of a specified aspect. This value serves as a product refinement.
*/
class AspectValueDistribution implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $localizedAspectValue The localized value of the category aspect identified by <strong>refinement.aspectDistributions.localizedAspectName</strong>.
    */
    private ?string $localizedAspectValue = null;
    
    /**
     * @var int|null $matchCount The number of times the value of <strong>localizedAspectValue</strong> has been used for eBay product listings. By comparing this quantity to the <strong>matchCount</strong> for other values of the same aspect, you can present a histogram of the values to sellers, who can use that information to select which aspect value is most appropriate for their product. You can then include the user-selected value in the the <strong>search</strong> call's <strong>aspect_filter</strong> parameter to refine your search.
    */
    private ?int $matchCount = null;
    
    /**
     * @var string|null $refinementHref A HATEOAS reference that further refines the search with this particular <strong>localizedAspectValue</strong>.
    */
    private ?string $refinementHref = null;
    
    /**
     * Instantiates a new AspectValueDistribution and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AspectValueDistribution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AspectValueDistribution {
        return new AspectValueDistribution();
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
            'localizedAspectValue' => fn(ParseNode $n) => $o->setLocalizedAspectValue($n->getStringValue()),
            'matchCount' => fn(ParseNode $n) => $o->setMatchCount($n->getIntegerValue()),
            'refinementHref' => fn(ParseNode $n) => $o->setRefinementHref($n->getStringValue()),
        ];
    }

    /**
     * Gets the localizedAspectValue property value. The localized value of the category aspect identified by <strong>refinement.aspectDistributions.localizedAspectName</strong>.
     * @return string|null
    */
    public function getLocalizedAspectValue(): ?string {
        return $this->localizedAspectValue;
    }

    /**
     * Gets the matchCount property value. The number of times the value of <strong>localizedAspectValue</strong> has been used for eBay product listings. By comparing this quantity to the <strong>matchCount</strong> for other values of the same aspect, you can present a histogram of the values to sellers, who can use that information to select which aspect value is most appropriate for their product. You can then include the user-selected value in the the <strong>search</strong> call's <strong>aspect_filter</strong> parameter to refine your search.
     * @return int|null
    */
    public function getMatchCount(): ?int {
        return $this->matchCount;
    }

    /**
     * Gets the refinementHref property value. A HATEOAS reference that further refines the search with this particular <strong>localizedAspectValue</strong>.
     * @return string|null
    */
    public function getRefinementHref(): ?string {
        return $this->refinementHref;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('localizedAspectValue', $this->getLocalizedAspectValue());
        $writer->writeIntegerValue('matchCount', $this->getMatchCount());
        $writer->writeStringValue('refinementHref', $this->getRefinementHref());
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
     * Sets the localizedAspectValue property value. The localized value of the category aspect identified by <strong>refinement.aspectDistributions.localizedAspectName</strong>.
     * @param string|null $value Value to set for the localizedAspectValue property.
    */
    public function setLocalizedAspectValue(?string $value): void {
        $this->localizedAspectValue = $value;
    }

    /**
     * Sets the matchCount property value. The number of times the value of <strong>localizedAspectValue</strong> has been used for eBay product listings. By comparing this quantity to the <strong>matchCount</strong> for other values of the same aspect, you can present a histogram of the values to sellers, who can use that information to select which aspect value is most appropriate for their product. You can then include the user-selected value in the the <strong>search</strong> call's <strong>aspect_filter</strong> parameter to refine your search.
     * @param int|null $value Value to set for the matchCount property.
    */
    public function setMatchCount(?int $value): void {
        $this->matchCount = $value;
    }

    /**
     * Sets the refinementHref property value. A HATEOAS reference that further refines the search with this particular <strong>localizedAspectValue</strong>.
     * @param string|null $value Value to set for the refinementHref property.
    */
    public function setRefinementHref(?string $value): void {
        $this->refinementHref = $value;
    }

}
