<?php

namespace EBay\ListingMetadata\Generated\Metadata\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This container defines the category policies that relate to domestic and international return policies (the return shipping is made via a domestic or an international shipping service, respectively).
*/
class ReturnPolicyDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $policyDescriptionEnabled If set to <code>true</code>, this flag indicates you can supply a detailed return policy description within your return policy (for example, by populating the <b>returnInstructions</b> field in the Account API's <b>createReturnPolicy</b>). User-supplied return policy details are allowed only in the DE, ES, FR, and IT marketplaces.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, return instructions are defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnInstructions" target="_blank">returnInstructions</a> to provide both domestic and international return instructions for the business policy.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using the legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.Description" target="_blank">Item.ReturnPolicyDescription</a> to provide both domestic and internation return instructions for the business policy.</li></ul></span>
    */
    private ?bool $policyDescriptionEnabled = null;
    
    /**
     * @var array<string>|null $refundMethods A list of refund methods allowed for the associated category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, available refund methods are defined differently.<ul><li><b>Account v1 API</b><br/>When using the <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> methods to create/manage business policies, use the appropriate <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy#request.refundMethod" target="_blank">refundMethod</a> field to specify the refund method for both domestic and international returns for the business policy.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.RefundOption" target="_blank">RefundOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalRefundOption" target="_blank">InternationalRefundOption</a> to specify the domestic and international refund method, respectively, for returns for the business policy.<br/><br/>Note that if <b>MONEY_BACK</b> is returned by <b>getReturnPolicies</b>, use <b>MoneyBack</b> in <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.RefundOption" target="_blank">RefundOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalRefundOption" target="_blank">InternationalRefundOption</a>.</li></ul></span>
    */
    private ?array $refundMethods = null;
    
    /**
     * @var array<string>|null $returnMethods A list of return methods allowed for the associated category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, available return methods are defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy#request.returnMethod" target="_blank">returnMethod</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.internationalOverride.returnMethod" target="_blank">internationalOverride.returnMethod</a> to specify the domestic and international return method, respectively, for the business policy.</li></ul></span>
    */
    private ?array $returnMethods = null;
    
    /**
     * @var array<TimeDuration>|null $returnPeriods A list of return periods allowed for the associated category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, return periods are defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use the <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnPeriod" target="_blank">returnPeriod</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.internationalOverride.returnPeriod" target="_blank">internationalOverride.returnPeriod</a> containers to set the return period(s) for the business policy. You will use the supported values returned under the <code>returnPeriods</code> array in the <b>getReturnPolicies</b> response.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ReturnsWithinOption" target="_blank">ReturnsWithinOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalReturnsWithinOption" target="_blank">InternationalReturnsWithinOption</a> to pass in one of the supported enum values defined in <a href="/devzone/xml/docs/Reference/eBay/types/ReturnsWithinOptionsCodeType.html" target="_blank">ReturnsWithinOptionsCodeType</a>.<br/><br/>For example, if a value of <b>30</b> is returned in the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies#response.returnPolicies.domestic.returnPeriods.value" target="_blank">returnPeriods.value</a> field of <b>getReturnPolicies</b>, use <b>Days_30</b> in <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ReturnsWithinOption" target="_blank">ReturnsWithinOption</a> or <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalReturnsWithinOption" target="_blank">InternationalReturnsWithinOption</a>.</li></ul></span>
    */
    private ?array $returnPeriods = null;
    
    /**
     * @var bool|null $returnsAcceptanceEnabled A value of <code>true</code> in this field indicates that return policies are applicable to the corresponding leaf category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, whether or not you accept returns is configured as follows:<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnsAccepted" target="_blank">returnsAccepted</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy#request.internationalOverride.returnsAccepted" target="_blank">internationalOverride.returnsAccepted</a> to indicate whether or not you accept returns.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ReturnsAcceptedOption" target="_blank">ReturnsAcceptedOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalReturnsAcceptedOption" target="_blank">InternationalReturnsAcceptedOption</a> to indicate whether or not you accept returns.</li></ul></span>
    */
    private ?bool $returnsAcceptanceEnabled = null;
    
    /**
     * @var array<string>|null $returnShippingCostPayers A list of allowed values for who pays for the return shipping cost.<br><br>Note that for SNAD returns, the seller is always responsible for the return shipping cost.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, specifiying that the buyer or seller is responsible for paying for return shipping costs is defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnShippingCostPayer" target="_blank">returnShippingCostPayer</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.internationalOverride.returnShippingCostPayer" target="_blank">internationalOverride.returnShippingCostPayer</a> to specify if the buyer or seller is responsible for paying return shipping charges for the business policy.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ShippingCostPaidByOption" target="_blank">ShippingCostPaidByOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalShippingCostPaidByOption" target="_blank">InternationalShippingCostPaidByOption</a> fields to specify if the buyer or seller is responsible for paying return shipping charges for the business policy.</li></ul></span>
    */
    private ?array $returnShippingCostPayers = null;
    
    /**
     * Instantiates a new ReturnPolicyDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReturnPolicyDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReturnPolicyDetails {
        return new ReturnPolicyDetails();
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
            'policyDescriptionEnabled' => fn(ParseNode $n) => $o->setPolicyDescriptionEnabled($n->getBooleanValue()),
            'refundMethods' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRefundMethods($val);
            },
            'returnMethods' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setReturnMethods($val);
            },
            'returnPeriods' => fn(ParseNode $n) => $o->setReturnPeriods($n->getCollectionOfObjectValues([TimeDuration::class, 'createFromDiscriminatorValue'])),
            'returnsAcceptanceEnabled' => fn(ParseNode $n) => $o->setReturnsAcceptanceEnabled($n->getBooleanValue()),
            'returnShippingCostPayers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setReturnShippingCostPayers($val);
            },
        ];
    }

    /**
     * Gets the policyDescriptionEnabled property value. If set to <code>true</code>, this flag indicates you can supply a detailed return policy description within your return policy (for example, by populating the <b>returnInstructions</b> field in the Account API's <b>createReturnPolicy</b>). User-supplied return policy details are allowed only in the DE, ES, FR, and IT marketplaces.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, return instructions are defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnInstructions" target="_blank">returnInstructions</a> to provide both domestic and international return instructions for the business policy.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using the legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.Description" target="_blank">Item.ReturnPolicyDescription</a> to provide both domestic and internation return instructions for the business policy.</li></ul></span>
     * @return bool|null
    */
    public function getPolicyDescriptionEnabled(): ?bool {
        return $this->policyDescriptionEnabled;
    }

    /**
     * Gets the refundMethods property value. A list of refund methods allowed for the associated category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, available refund methods are defined differently.<ul><li><b>Account v1 API</b><br/>When using the <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> methods to create/manage business policies, use the appropriate <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy#request.refundMethod" target="_blank">refundMethod</a> field to specify the refund method for both domestic and international returns for the business policy.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.RefundOption" target="_blank">RefundOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalRefundOption" target="_blank">InternationalRefundOption</a> to specify the domestic and international refund method, respectively, for returns for the business policy.<br/><br/>Note that if <b>MONEY_BACK</b> is returned by <b>getReturnPolicies</b>, use <b>MoneyBack</b> in <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.RefundOption" target="_blank">RefundOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalRefundOption" target="_blank">InternationalRefundOption</a>.</li></ul></span>
     * @return array<string>|null
    */
    public function getRefundMethods(): ?array {
        return $this->refundMethods;
    }

    /**
     * Gets the returnMethods property value. A list of return methods allowed for the associated category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, available return methods are defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy#request.returnMethod" target="_blank">returnMethod</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.internationalOverride.returnMethod" target="_blank">internationalOverride.returnMethod</a> to specify the domestic and international return method, respectively, for the business policy.</li></ul></span>
     * @return array<string>|null
    */
    public function getReturnMethods(): ?array {
        return $this->returnMethods;
    }

    /**
     * Gets the returnPeriods property value. A list of return periods allowed for the associated category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, return periods are defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use the <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnPeriod" target="_blank">returnPeriod</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.internationalOverride.returnPeriod" target="_blank">internationalOverride.returnPeriod</a> containers to set the return period(s) for the business policy. You will use the supported values returned under the <code>returnPeriods</code> array in the <b>getReturnPolicies</b> response.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ReturnsWithinOption" target="_blank">ReturnsWithinOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalReturnsWithinOption" target="_blank">InternationalReturnsWithinOption</a> to pass in one of the supported enum values defined in <a href="/devzone/xml/docs/Reference/eBay/types/ReturnsWithinOptionsCodeType.html" target="_blank">ReturnsWithinOptionsCodeType</a>.<br/><br/>For example, if a value of <b>30</b> is returned in the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies#response.returnPolicies.domestic.returnPeriods.value" target="_blank">returnPeriods.value</a> field of <b>getReturnPolicies</b>, use <b>Days_30</b> in <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ReturnsWithinOption" target="_blank">ReturnsWithinOption</a> or <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalReturnsWithinOption" target="_blank">InternationalReturnsWithinOption</a>.</li></ul></span>
     * @return array<TimeDuration>|null
    */
    public function getReturnPeriods(): ?array {
        return $this->returnPeriods;
    }

    /**
     * Gets the returnsAcceptanceEnabled property value. A value of <code>true</code> in this field indicates that return policies are applicable to the corresponding leaf category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, whether or not you accept returns is configured as follows:<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnsAccepted" target="_blank">returnsAccepted</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy#request.internationalOverride.returnsAccepted" target="_blank">internationalOverride.returnsAccepted</a> to indicate whether or not you accept returns.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ReturnsAcceptedOption" target="_blank">ReturnsAcceptedOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalReturnsAcceptedOption" target="_blank">InternationalReturnsAcceptedOption</a> to indicate whether or not you accept returns.</li></ul></span>
     * @return bool|null
    */
    public function getReturnsAcceptanceEnabled(): ?bool {
        return $this->returnsAcceptanceEnabled;
    }

    /**
     * Gets the returnShippingCostPayers property value. A list of allowed values for who pays for the return shipping cost.<br><br>Note that for SNAD returns, the seller is always responsible for the return shipping cost.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, specifiying that the buyer or seller is responsible for paying for return shipping costs is defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnShippingCostPayer" target="_blank">returnShippingCostPayer</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.internationalOverride.returnShippingCostPayer" target="_blank">internationalOverride.returnShippingCostPayer</a> to specify if the buyer or seller is responsible for paying return shipping charges for the business policy.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ShippingCostPaidByOption" target="_blank">ShippingCostPaidByOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalShippingCostPaidByOption" target="_blank">InternationalShippingCostPaidByOption</a> fields to specify if the buyer or seller is responsible for paying return shipping charges for the business policy.</li></ul></span>
     * @return array<string>|null
    */
    public function getReturnShippingCostPayers(): ?array {
        return $this->returnShippingCostPayers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('policyDescriptionEnabled', $this->getPolicyDescriptionEnabled());
        $writer->writeCollectionOfPrimitiveValues('refundMethods', $this->getRefundMethods());
        $writer->writeCollectionOfPrimitiveValues('returnMethods', $this->getReturnMethods());
        $writer->writeCollectionOfObjectValues('returnPeriods', $this->getReturnPeriods());
        $writer->writeBooleanValue('returnsAcceptanceEnabled', $this->getReturnsAcceptanceEnabled());
        $writer->writeCollectionOfPrimitiveValues('returnShippingCostPayers', $this->getReturnShippingCostPayers());
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
     * Sets the policyDescriptionEnabled property value. If set to <code>true</code>, this flag indicates you can supply a detailed return policy description within your return policy (for example, by populating the <b>returnInstructions</b> field in the Account API's <b>createReturnPolicy</b>). User-supplied return policy details are allowed only in the DE, ES, FR, and IT marketplaces.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, return instructions are defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnInstructions" target="_blank">returnInstructions</a> to provide both domestic and international return instructions for the business policy.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using the legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.Description" target="_blank">Item.ReturnPolicyDescription</a> to provide both domestic and internation return instructions for the business policy.</li></ul></span>
     * @param bool|null $value Value to set for the policyDescriptionEnabled property.
    */
    public function setPolicyDescriptionEnabled(?bool $value): void {
        $this->policyDescriptionEnabled = $value;
    }

    /**
     * Sets the refundMethods property value. A list of refund methods allowed for the associated category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, available refund methods are defined differently.<ul><li><b>Account v1 API</b><br/>When using the <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> methods to create/manage business policies, use the appropriate <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy#request.refundMethod" target="_blank">refundMethod</a> field to specify the refund method for both domestic and international returns for the business policy.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.RefundOption" target="_blank">RefundOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalRefundOption" target="_blank">InternationalRefundOption</a> to specify the domestic and international refund method, respectively, for returns for the business policy.<br/><br/>Note that if <b>MONEY_BACK</b> is returned by <b>getReturnPolicies</b>, use <b>MoneyBack</b> in <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.RefundOption" target="_blank">RefundOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalRefundOption" target="_blank">InternationalRefundOption</a>.</li></ul></span>
     * @param array<string>|null $value Value to set for the refundMethods property.
    */
    public function setRefundMethods(?array $value): void {
        $this->refundMethods = $value;
    }

    /**
     * Sets the returnMethods property value. A list of return methods allowed for the associated category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, available return methods are defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy#request.returnMethod" target="_blank">returnMethod</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.internationalOverride.returnMethod" target="_blank">internationalOverride.returnMethod</a> to specify the domestic and international return method, respectively, for the business policy.</li></ul></span>
     * @param array<string>|null $value Value to set for the returnMethods property.
    */
    public function setReturnMethods(?array $value): void {
        $this->returnMethods = $value;
    }

    /**
     * Sets the returnPeriods property value. A list of return periods allowed for the associated category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, return periods are defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use the <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnPeriod" target="_blank">returnPeriod</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.internationalOverride.returnPeriod" target="_blank">internationalOverride.returnPeriod</a> containers to set the return period(s) for the business policy. You will use the supported values returned under the <code>returnPeriods</code> array in the <b>getReturnPolicies</b> response.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ReturnsWithinOption" target="_blank">ReturnsWithinOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalReturnsWithinOption" target="_blank">InternationalReturnsWithinOption</a> to pass in one of the supported enum values defined in <a href="/devzone/xml/docs/Reference/eBay/types/ReturnsWithinOptionsCodeType.html" target="_blank">ReturnsWithinOptionsCodeType</a>.<br/><br/>For example, if a value of <b>30</b> is returned in the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies#response.returnPolicies.domestic.returnPeriods.value" target="_blank">returnPeriods.value</a> field of <b>getReturnPolicies</b>, use <b>Days_30</b> in <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ReturnsWithinOption" target="_blank">ReturnsWithinOption</a> or <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalReturnsWithinOption" target="_blank">InternationalReturnsWithinOption</a>.</li></ul></span>
     * @param array<TimeDuration>|null $value Value to set for the returnPeriods property.
    */
    public function setReturnPeriods(?array $value): void {
        $this->returnPeriods = $value;
    }

    /**
     * Sets the returnsAcceptanceEnabled property value. A value of <code>true</code> in this field indicates that return policies are applicable to the corresponding leaf category.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, whether or not you accept returns is configured as follows:<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnsAccepted" target="_blank">returnsAccepted</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy#request.internationalOverride.returnsAccepted" target="_blank">internationalOverride.returnsAccepted</a> to indicate whether or not you accept returns.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ReturnsAcceptedOption" target="_blank">ReturnsAcceptedOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalReturnsAcceptedOption" target="_blank">InternationalReturnsAcceptedOption</a> to indicate whether or not you accept returns.</li></ul></span>
     * @param bool|null $value Value to set for the returnsAcceptanceEnabled property.
    */
    public function setReturnsAcceptanceEnabled(?bool $value): void {
        $this->returnsAcceptanceEnabled = $value;
    }

    /**
     * Sets the returnShippingCostPayers property value. A list of allowed values for who pays for the return shipping cost.<br><br>Note that for SNAD returns, the seller is always responsible for the return shipping cost.<br/><br/><span class="tablenote"><strong>Note:</strong> Depending on the API used to setup your return policy, specifiying that the buyer or seller is responsible for paying for return shipping costs is defined differently.<ul><li><b>Account v1 API</b><br/>When using <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy" target="_blank">createReturnPolicy</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/updateReturnPolicy" target="_blank">updateReturnPolicy</a> to create/manage business policies, use <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.returnShippingCostPayer" target="_blank">returnShippingCostPayer</a> and <a href="/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy#request.internationalOverride.returnShippingCostPayer" target="_blank">internationalOverride.returnShippingCostPayer</a> to specify if the buyer or seller is responsible for paying return shipping charges for the business policy.</li><li><b>Trading API or Sell Feed API</b><br/><br.>When using legacy <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy" target="_blank">ReturnPolicy</a> fields, use <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.ShippingCostPaidByOption" target="_blank">ShippingCostPaidByOption</a> and <a href="/devzone/xml/docs/Reference/eBay/AddItem.html#Request.Item.ReturnPolicy.InternationalShippingCostPaidByOption" target="_blank">InternationalShippingCostPaidByOption</a> fields to specify if the buyer or seller is responsible for paying return shipping charges for the business policy.</li></ul></span>
     * @param array<string>|null $value Value to set for the returnShippingCostPayers property.
    */
    public function setReturnShippingCostPayers(?array $value): void {
        $this->returnShippingCostPayers = $value;
    }

}
