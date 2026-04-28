<?php

declare(strict_types=1);

namespace EBay\ListingMetadata\Clients\Rest;

use EBay\ListingMetadata\Configuration\TokenContext;
use EBay\ListingMetadata\Generated\Catalog\CatalogApiClient;
use EBay\ListingMetadata\Generated\Catalog\Models\Product;
use EBay\ListingMetadata\Generated\Catalog\Models\ProductSearchResponse;

final class CatalogClient
{
    public function __construct(private readonly CatalogApiClient $kiota) {}

    /**
     * Retrieve details of a catalog product by eBay product identifier (ePID).
     *
     * @param string      $epid        The eBay product ID.
     * @param string|null $accessToken Per-call token; overrides config fallback.
     */
    public function getProduct(string $epid, ?string $accessToken = null): ?Product
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->product()->byEpid($epid)->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Search for catalog products by keyword, category, GTIN, or MPN.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     */
    public function search(?string $accessToken = null): ?ProductSearchResponse
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->product_summary()->search()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }
}
