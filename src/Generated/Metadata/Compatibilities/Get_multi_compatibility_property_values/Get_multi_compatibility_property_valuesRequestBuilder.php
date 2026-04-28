<?php

namespace EBay\ListingMetadata\Generated\Metadata\Compatibilities\Get_multi_compatibility_property_values;

use EBay\ListingMetadata\Generated\Metadata\Models\MultiCompatibilityPropertyValuesRequest;
use EBay\ListingMetadata\Generated\Metadata\Models\MultiCompatibilityPropertyValuesResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /compatibilities/get_multi_compatibility_property_values
*/
class Get_multi_compatibility_property_valuesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_multi_compatibility_property_valuesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compatibilities/get_multi_compatibility_property_values');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to retrieve product compatibility property values associated with multiple property names, in the specified category.<br><br>Compatibility property values can be used alongside the corresponding compatibility property name (retrieved using the <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyNames" target="_blank ">getCompatibilityPropertyNames</a> method) to describe the assembly for which an item is compatible.<br><br>The <b>categoryId</b> of the compatibility-enabled category for which to retrieve compatibility property values is required in the request body, as well as the <b>propertyNames</b> for which you wish to retrieve associated property values. The <b>propertyFilter</b> array is also required to constrain the output. Only property values associated with the specified name-value pairs will be returned.
     * @param MultiCompatibilityPropertyValuesRequest $body This type defines the request fields used in the <b>getMultiCompatibilityPropertyValues</b> method.
     * @param Get_multi_compatibility_property_valuesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MultiCompatibilityPropertyValuesResponse|null>
     * @throws Exception
    */
    public function post(MultiCompatibilityPropertyValuesRequest $body, ?Get_multi_compatibility_property_valuesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [MultiCompatibilityPropertyValuesResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method is used to retrieve product compatibility property values associated with multiple property names, in the specified category.<br><br>Compatibility property values can be used alongside the corresponding compatibility property name (retrieved using the <a href="/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyNames" target="_blank ">getCompatibilityPropertyNames</a> method) to describe the assembly for which an item is compatible.<br><br>The <b>categoryId</b> of the compatibility-enabled category for which to retrieve compatibility property values is required in the request body, as well as the <b>propertyNames</b> for which you wish to retrieve associated property values. The <b>propertyFilter</b> array is also required to constrain the output. Only property values associated with the specified name-value pairs will be returned.
     * @param MultiCompatibilityPropertyValuesRequest $body This type defines the request fields used in the <b>getMultiCompatibilityPropertyValues</b> method.
     * @param Get_multi_compatibility_property_valuesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MultiCompatibilityPropertyValuesRequest $body, ?Get_multi_compatibility_property_valuesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Get_multi_compatibility_property_valuesRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_multi_compatibility_property_valuesRequestBuilder {
        return new Get_multi_compatibility_property_valuesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
