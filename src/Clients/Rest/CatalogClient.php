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
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function search(
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ProductSearchResponse {
        TokenContext::set($accessToken);
        try {
            $rc = new SearchRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
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
