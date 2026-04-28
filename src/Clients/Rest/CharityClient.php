<?php

declare(strict_types=1);

namespace EBay\ListingMetadata\Clients\Rest;

use EBay\ListingMetadata\Configuration\ListingMetadataConfiguration;
use EBay\ListingMetadata\Configuration\RequestOptions;
use EBay\ListingMetadata\Configuration\TokenContext;
use EBay\ListingMetadata\Generated\Charity\CharityApiClient;
use EBay\ListingMetadata\Generated\Charity\Charity_org\Charity_orgRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Charity\Charity_org\Item\WithCharity_org_ItemRequestBuilderGetRequestConfiguration;
use EBay\ListingMetadata\Generated\Charity\Models\CharityOrg;
use EBay\ListingMetadata\Generated\Charity\Models\CharitySearchResponse;

final class CharityClient
{
    public function __construct(
        private readonly CharityApiClient $kiota,
        private readonly ListingMetadataConfiguration $config,
    ) {}

    /**
     * Retrieve detailed information about a specific charitable organization.
     *
     * @param string      $charityOrgId   The unique ID of the charitable organization.
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCharityOrg(
        string $charityOrgId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CharityOrg {
        TokenContext::set($accessToken);
        try {
            $rc = new WithCharity_org_ItemRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->charity_org()->byCharity_org_id($charityOrgId)->get($rc)->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Search for charitable organizations.
     *
     * @param string|null $accessToken    Per-call token; overrides config fallback.
     * @param RequestOptions|null $requestOptions Per-call headers; merged over defaults.
     */
    public function getCharityOrgs(
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CharitySearchResponse {
        TokenContext::set($accessToken);
        try {
            $rc = new Charity_orgRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
            );
            return $this->kiota->charity_org()->get($rc)->wait();
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
