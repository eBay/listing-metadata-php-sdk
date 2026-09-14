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
use EBay\ListingMetadata\Configuration\ListingMetadataConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Main entry point for the eBay Listing Metadata PHP SDK.
 */
final class ListingMetadataClient
{
    public readonly CatalogClient $catalog;
    public readonly CharityClient $charity;
    public readonly MetadataClient $metadata;
    public readonly TaxonomyClient $taxonomy;

    public function __construct(
        ListingMetadataConfiguration $config,
        ?GuzzleClient $guzzle = null,
    ) {
        $guzzle ??= $this->buildGuzzle($config);

        $this->catalog = new CatalogClient($guzzle, $config);
        $this->charity = new CharityClient($guzzle, $config);
        $this->metadata = new MetadataClient($guzzle, $config);
        $this->taxonomy = new TaxonomyClient($guzzle, $config);
    }

    /**
     * Build a Guzzle client with optional diagnostic logging middleware.
     * When $config->diagnosticLogging is true, all non-2xx responses are
     * logged to STDERR with method, URI, status code, and response body.
     */
    private function buildGuzzle(ListingMetadataConfiguration $config): GuzzleClient
    {
        $stack = HandlerStack::create();

        if ($config->diagnosticLogging) {
            $stack->push(static function (callable $handler): callable {
                return static function (RequestInterface $request, array $options) use ($handler): mixed {
                    return $handler($request, $options)->then(
                        static function (ResponseInterface $response) use ($request): ResponseInterface {
                            $status = $response->getStatusCode();
                            if ($status < 200 || $status >= 300) {
                                $body = (string) $response->getBody();
                                fwrite(
                                    STDERR,
                                    sprintf(
                                        "[ListingMetadataSDK] %s %s -> HTTP %d\n%s\n",
                                        $request->getMethod(),
                                        str_replace(["\r", "\n"], ' ', (string) $request->getUri()),
                                        $status,
                                        $body
                                    )
                                );
                            }
                            return $response;
                        }
                    );
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
