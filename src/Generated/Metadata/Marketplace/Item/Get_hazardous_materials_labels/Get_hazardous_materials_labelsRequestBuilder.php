<?php

namespace EBay\ListingMetadata\Generated\Metadata\Marketplace\Item\Get_hazardous_materials_labels;

use EBay\ListingMetadata\Generated\Metadata\Models\HazardousMaterialDetailsResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /marketplace/{marketplace_id}/get_hazardous_materials_labels
*/
class Get_hazardous_materials_labelsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_hazardous_materials_labelsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/marketplace/{marketplace_id}/get_hazardous_materials_labels');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns hazardous materials label information for the specified eBay marketplace. The information includes IDs, descriptions, and URLs (as applicable) for the available signal words, statements, and pictograms. The returned statements are localized for the default language of the marketplace. If a marketplace does not support hazardous materials label information, no response payload is returned, but only a <b>204 No content</b> status code.<p>This information is used by the seller to add hazardous materials label related information to their listings (see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html'>Specifying hazardous material related information</a>).</p>
     * @param Get_hazardous_materials_labelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HazardousMaterialDetailsResponse|null>
     * @throws Exception
    */
    public function get(?Get_hazardous_materials_labelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [HazardousMaterialDetailsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method returns hazardous materials label information for the specified eBay marketplace. The information includes IDs, descriptions, and URLs (as applicable) for the available signal words, statements, and pictograms. The returned statements are localized for the default language of the marketplace. If a marketplace does not support hazardous materials label information, no response payload is returned, but only a <b>204 No content</b> status code.<p>This information is used by the seller to add hazardous materials label related information to their listings (see <a href='/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html'>Specifying hazardous material related information</a>).</p>
     * @param Get_hazardous_materials_labelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Get_hazardous_materials_labelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Get_hazardous_materials_labelsRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_hazardous_materials_labelsRequestBuilder {
        return new Get_hazardous_materials_labelsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
