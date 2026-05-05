<?php

declare(strict_types=1);

namespace EBay\ListingMetadata\Clients\Rest;

use EBay\ListingMetadata\Configuration\ListingMetadataConfiguration;
use EBay\ListingMetadata\Configuration\RequestOptions;
use EBay\ListingMetadata\Configuration\TokenContext;
use EBay\ListingMetadata\Generated\Catalog\CatalogApiClient;
use EBay\ListingMetadata\Generated\Catalog\Models\Product;
use EBay\ListingMetadata\Generated\Catalog\Models\ProductSearchResponse;
use EBay\ListingMetadata\Generated\Catalog\Product\Item\WithEpItemRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Catalog\Product_summary\Search\SearchRequestBuilderGetRequestConfiguration;

final class CatalogClient
{
    public function __construct(
        private readonly CatalogApiClient $kiota,
        private readonly ListingMetadataConfiguration $config,
    ) {}

    /**
     * Retrieve details of a catalog product by eBay product identifier (ePID).
     *
     * @param string      $epid           The eBay product ID.
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getProduct(
        string $epid,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Product {
        TokenContext::set($accessToken);
        try {
            $rc = new WithEpItemRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->product()->byEpid($epid)->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Search for catalog products by keyword, category, GTIN, or MPN.
     *
     * @param string|null $aspectFilter   Category and aspect value pairs to narrow down results.
     * @param string|null $categoryIds    Comma-separated category IDs to filter results.
     * @param string|null $fieldgroups    Type of information to return (ASPECT_REFINEMENTS, FULL, MATCHING_PRODUCTS).
     * @param string|null $gtin           Comma-separated GTINs (EAN, ISBN, UPC) to search for.
     * @param string|null $limit          Number of product summaries to return (max 200; default 50).
     * @param string|null $mpn            Comma-separated Manufacturer Part Numbers to search for.
     * @param string|null $offset         Number of items to skip (reserved for internal use).
     * @param string|null $q              Keywords to search for in product records.
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function search(
        ?string $aspectFilter = null,
        ?string $categoryIds = null,
        ?string $fieldgroups = null,
        ?string $gtin = null,
        ?string $limit = null,
        ?string $mpn = null,
        ?string $offset = null,
        ?string $q = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ProductSearchResponse {
        TokenContext::set($accessToken);
        try {
            $rc = new SearchRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: SearchRequestBuilderGetRequestConfiguration::createQueryParameters(
                    aspect_filter: $aspectFilter,
                    category_ids: $categoryIds,
                    fieldgroups: $fieldgroups,
                    gtin: $gtin,
                    limit: $limit,
                    mpn: $mpn,
                    offset: $offset,
                    q: $q,
                ),
            );
            return $this->kiota->product_summary()->search()->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        $headers = $this->config->defaultRequestOptions->headers;
        if ($requestOptions !== null) {
            foreach ($requestOptions->headers as $key => $value) {
                $headers[$key] = $value;
            }
        }
        return $headers;
    }
}
