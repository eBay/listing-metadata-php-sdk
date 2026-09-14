# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`CatalogClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getProduct` | `(string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?RequestOptions)` |
| `search` | `(?string, ?string, ?string, ?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(?string, ?string, ?string, ?string, ?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` |

`CharityClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getCharityOrg` | `(string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?RequestOptions)` |
| `getCharityOrgs` | `(?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` |

`MetadataClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getAutomotivePartsCompatibilityPolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?RequestOptions)` |
| `getCategoryPolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?RequestOptions)` |
| `getClassifiedAdPolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?RequestOptions)` |
| `getCompatibilitiesBySpecification` | `(SpecificationRequest, ?string, ?RequestOptions)` | `(SpecificationRequest, ?string, ?string, ?RequestOptions)` |
| `getCompatibilityPropertyNames` | `(PropertyNamesRequest, ?string, ?RequestOptions)` | `(PropertyNamesRequest, ?string, ?string, ?RequestOptions)` |
| `getCompatibilityPropertyValues` | `(PropertyValuesRequest, ?string, ?RequestOptions)` | `(PropertyValuesRequest, ?string, ?string, ?RequestOptions)` |
| `getCurrencies` | `(string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?RequestOptions)` |
| `getExcludeShippingLocations` | `(string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?RequestOptions)` |
| `getExtendedProducerResponsibilityPolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?string, ?RequestOptions)` |
| `getHandlingTimes` | `(string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?RequestOptions)` |
| `getHazardousMaterialsLabels` | `(string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?RequestOptions)` |
| `getItemConditionPolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?string, ?RequestOptions)` |
| `getListingStructurePolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?string, ?RequestOptions)` |
| `getListingTypePolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?RequestOptions)` |
| `getMotorsListingPolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?RequestOptions)` |
| `getMultiCompatibilityPropertyValues` | `(MultiCompatibilityPropertyValuesRequest, ?string, ?RequestOptions)` | `(MultiCompatibilityPropertyValuesRequest, ?string, ?string, ?RequestOptions)` |
| `getNegotiatedPricePolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?string, ?RequestOptions)` |
| `getProductCompatibilities` | `(ProductRequest, ?string, ?RequestOptions)` | `(ProductRequest, ?string, ?string, ?RequestOptions)` |
| `getRegulatoryPolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?RequestOptions)` |
| `getReturnPolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?string, ?RequestOptions)` |
| `getShippingCarriers` | `(string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?RequestOptions)` |
| `getShippingLocations` | `(string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?RequestOptions)` |
| `getShippingPolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?RequestOptions)` |
| `getShippingServices` | `(string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?RequestOptions)` |
| `getSiteVisibilityPolicies` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?RequestOptions)` |

`TaxonomyClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getCategorySubtree` | `(string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?RequestOptions)` |
| `getCategoryTree` | `(string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?RequestOptions)` |

### Added

#### `MetadataClient`

- `getMinimumListingPricePolicies`
