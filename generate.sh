#!/usr/bin/env bash
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

echo "Regenerating REST clients via Kiota..."

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/commerce_catalog_v1_beta_oas3 (2).yaml" \
  -c CatalogApiClient \
  -n 'EBay\ListingMetadata\Generated\Catalog' \
  -o "$SCRIPT_DIR/src/Generated/Catalog" \
  --ebc --co

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/commerce_charity_v1_oas3.yaml" \
  -c CharityApiClient \
  -n 'EBay\ListingMetadata\Generated\Charity' \
  -o "$SCRIPT_DIR/src/Generated/Charity" \
  --ebc --co

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/sell_metadata_v1_oas3.yaml" \
  -c MetadataApiClient \
  -n 'EBay\ListingMetadata\Generated\Metadata' \
  -o "$SCRIPT_DIR/src/Generated/Metadata" \
  --ebc --co

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/commerce_taxonomy_v1_oas3 (1).yaml" \
  -c TaxonomyApiClient \
  -n 'EBay\ListingMetadata\Generated\Taxonomy' \
  -o "$SCRIPT_DIR/src/Generated/Taxonomy" \
  --ebc --co

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
