<?php

declare(strict_types=1);

namespace EBay\ListingMetadata;

use EBay\ListingMetadata\Clients\Rest\CatalogClient;
use EBay\ListingMetadata\Clients\Rest\CharityClient;
use EBay\ListingMetadata\Clients\Rest\MetadataClient;
use EBay\ListingMetadata\Clients\Rest\TaxonomyClient;
use EBay\ListingMetadata\Configuration\KiotaAuthProvider;
use EBay\ListingMetadata\Configuration\ListingMetadataConfiguration;
use EBay\ListingMetadata\Generated\Catalog\CatalogApiClient;
use EBay\ListingMetadata\Generated\Charity\CharityApiClient;
use EBay\ListingMetadata\Generated\Metadata\MetadataApiClient;
use EBay\ListingMetadata\Generated\Taxonomy\TaxonomyApiClient;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class ListingMetadataClient
{
    public readonly CatalogClient  $catalog;
    public readonly CharityClient  $charity;
    public readonly MetadataClient $metadata;
    public readonly TaxonomyClient $taxonomy;

    public function __construct(
        ListingMetadataConfiguration $config,
        ?GuzzleClient $guzzle = null,
    ) {
        $guzzle ??= new GuzzleClient([
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $catalogAdapter = new GuzzleRequestAdapter($auth, null, null, $guzzle);
        $catalogAdapter->setBaseUrl($config->catalogBaseUrl);
        $this->catalog = new CatalogClient(new CatalogApiClient($catalogAdapter));

        $charityAdapter = new GuzzleRequestAdapter($auth, null, null, $guzzle);
        $charityAdapter->setBaseUrl($config->charityBaseUrl);
        $this->charity = new CharityClient(new CharityApiClient($charityAdapter));

        $metadataAdapter = new GuzzleRequestAdapter($auth, null, null, $guzzle);
        $metadataAdapter->setBaseUrl($config->metadataBaseUrl);
        $this->metadata = new MetadataClient(new MetadataApiClient($metadataAdapter));

        $taxonomyAdapter = new GuzzleRequestAdapter($auth, null, null, $guzzle);
        $taxonomyAdapter->setBaseUrl($config->taxonomyBaseUrl);
        $this->taxonomy = new TaxonomyClient(new TaxonomyApiClient($taxonomyAdapter));
    }
}
