<?php

declare(strict_types=1);

namespace EBay\ListingMetadata\Configuration;

final class ListingMetadataConfiguration
{
    public string $catalogBaseUrl  = 'https://api.ebay.com';
    public string $charityBaseUrl  = 'https://api.ebay.com';
    public string $metadataBaseUrl = 'https://api.ebay.com';
    public string $taxonomyBaseUrl = 'https://api.ebay.com';

    /** Static fallback token; per-call token takes precedence. */
    public ?string $accessToken = null;

    public bool $diagnosticLogging = false;

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
