<?php

declare(strict_types=1);

namespace EBay\ListingMetadata\Clients\Rest;

use EBay\ListingMetadata\Configuration\TokenContext;
use EBay\ListingMetadata\Generated\Charity\CharityApiClient;
use EBay\ListingMetadata\Generated\Charity\Models\CharityOrg;
use EBay\ListingMetadata\Generated\Charity\Models\CharitySearchResponse;

final class CharityClient
{
    public function __construct(private readonly CharityApiClient $kiota) {}

    /**
     * Retrieve detailed information about a specific charitable organization.
     *
     * @param string      $charityOrgId The unique ID of the charitable organization.
     * @param string|null $accessToken  Per-call token; overrides config fallback.
     */
    public function getCharityOrg(string $charityOrgId, ?string $accessToken = null): ?CharityOrg
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->charity_org()->byCharity_org_id($charityOrgId)->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }

    /**
     * Search for charitable organizations.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     */
    public function getCharityOrgs(?string $accessToken = null): ?CharitySearchResponse
    {
        TokenContext::set($accessToken);
        try {
            return $this->kiota->charity_org()->get()->wait();
        } finally {
            TokenContext::set(null);
        }
    }
}
