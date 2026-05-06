<?php

declare(strict_types=1);

namespace EBay\ListingMetadata\Configuration;

final class ListingMetadataConfiguration
{
    public string $catalogBaseUrl  = 'https://api.ebay.com/commerce/catalog/v1_beta';
    public string $charityBaseUrl  = 'https://api.ebay.com/commerce/charity/v1';
    public string $metadataBaseUrl = 'https://api.ebay.com/sell/metadata/v1';
    public string $taxonomyBaseUrl = 'https://api.ebay.com/commerce/taxonomy/v1';

    /** Static fallback token; per-call token takes precedence. */
    public ?string $accessToken = null;

    public bool $diagnosticLogging = false;

    public RequestOptions $defaultRequestOptions;

    public function __construct()
    {
        $this->defaultRequestOptions = new RequestOptions();
    }

    /** Hostnames tokens may be sent to — passed to AllowedHostsValidator. */
    public function getAllowedHosts(): array
    {
        return array_values(array_unique(array_map(
            fn(string $url) => parse_url($url, PHP_URL_HOST),
            [
                $this->catalogBaseUrl,
                $this->charityBaseUrl,
                $this->metadataBaseUrl,
                $this->taxonomyBaseUrl,
            ]
        )));
    }
}
