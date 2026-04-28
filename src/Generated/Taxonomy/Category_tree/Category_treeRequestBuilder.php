<?php

namespace EBay\ListingMetadata\Generated\Taxonomy\Category_tree;

use EBay\ListingMetadata\Generated\Taxonomy\Category_tree\Item\WithCategory_tree_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /category_tree
*/
class Category_treeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/ListingMetadata/Generated/Taxonomy.category_tree.item collection
     * @param string $category_tree_id The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the <b>getDefaultCategoryTreeId</b> method.
     * @return WithCategory_tree_ItemRequestBuilder
    */
    public function byCategory_tree_id(string $category_tree_id): WithCategory_tree_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['category_tree_id'] = $category_tree_id;
        return new WithCategory_tree_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Category_treeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/category_tree');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
