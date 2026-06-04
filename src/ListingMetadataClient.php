<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

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
use GuzzleHttp\HandlerStack;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

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
        $guzzle ??= $this->buildGuzzle($config);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $catalogAdapter = new GuzzleRequestAdapter($auth, null, null, $guzzle);
        $catalogAdapter->setBaseUrl($config->catalogBaseUrl);
        $this->catalog = new CatalogClient(new CatalogApiClient($catalogAdapter), $config);

        $charityAdapter = new GuzzleRequestAdapter($auth, null, null, $guzzle);
        $charityAdapter->setBaseUrl($config->charityBaseUrl);
        $this->charity = new CharityClient(new CharityApiClient($charityAdapter), $config);

        $metadataAdapter = new GuzzleRequestAdapter($auth, null, null, $guzzle);
        $metadataAdapter->setBaseUrl($config->metadataBaseUrl);
        $this->metadata = new MetadataClient(new MetadataApiClient($metadataAdapter), $config);

        $taxonomyAdapter = new GuzzleRequestAdapter($auth, null, null, $guzzle);
        $taxonomyAdapter->setBaseUrl($config->taxonomyBaseUrl);
        $this->taxonomy = new TaxonomyClient(new TaxonomyApiClient($taxonomyAdapter), $config);
    }

    private function buildGuzzle(ListingMetadataConfiguration $config): GuzzleClient
    {
        $stack = HandlerStack::create();

        if ($config->diagnosticLogging) {
            $stack->push(static function (callable $handler): callable {
                return static function (RequestInterface $request, array $options) use ($handler): mixed {
                    $promise = $handler($request, $options);
                    return $promise->then(static function (ResponseInterface $response) use ($request): ResponseInterface {
                        $status = $response->getStatusCode();
                        if ($status < 200 || $status >= 300) {
                            $body    = (string) $response->getBody();
                            $message = sprintf(
                                "[listing-metadata] %s %s => HTTP %d %s\n%s\n",
                                $request->getMethod(),
                                str_replace(["\r", "\n"], ' ', (string) $request->getUri()),
                                $status,
                                $response->getReasonPhrase(),
                                $body,
                            );
                            fwrite(STDERR, $message);
                        }
                        return $response;
                    });
                };
            });
        }

        return new GuzzleClient([
            'handler'         => $stack,
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);
    }
}
