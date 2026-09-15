# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`CatalogClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getProduct` | `(string $epid, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $epid, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `search` | `(?string $aspectFilter, ?string $categoryIds, ?string $fieldgroups, ?string $gtin, ?string $limit, ?string $mpn, ?string $offset, ?string $q, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $aspectFilter, ?string $categoryIds, ?string $fieldgroups, ?string $gtin, ?string $limit, ?string $mpn, ?string $offset, ?string $q, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |

`CharityClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getCharityOrg` | `(string $charityOrgId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $charityOrgId, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getCharityOrgs` | `(?string $limit, ?string $offset, ?string $q, ?string $registrationIds, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $limit, ?string $offset, ?string $q, ?string $registrationIds, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |

`MetadataClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getAutomotivePartsCompatibilityPolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptEncoding, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getCategoryPolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getClassifiedAdPolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getCompatibilitiesBySpecification` | `(SpecificationRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(SpecificationRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getCompatibilityPropertyNames` | `(PropertyNamesRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(PropertyNamesRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getCompatibilityPropertyValues` | `(PropertyValuesRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(PropertyValuesRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getCurrencies` | `(string $marketplaceId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getExcludeShippingLocations` | `(string $marketplaceId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getExtendedProducerResponsibilityPolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptEncoding, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getHandlingTimes` | `(string $marketplaceId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getHazardousMaterialsLabels` | `(string $marketplaceId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getItemConditionPolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptEncoding, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getListingStructurePolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptEncoding, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getListingTypePolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getMotorsListingPolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getMultiCompatibilityPropertyValues` | `(MultiCompatibilityPropertyValuesRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(MultiCompatibilityPropertyValuesRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getNegotiatedPricePolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptEncoding, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getProductCompatibilities` | `(ProductRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(ProductRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getRegulatoryPolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getReturnPolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptEncoding, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getShippingCarriers` | `(string $marketplaceId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getShippingLocations` | `(string $marketplaceId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getShippingPolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getShippingServices` | `(string $marketplaceId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getSiteVisibilityPolicies` | `(string $marketplaceId, ?string $filter, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $marketplaceId, ?string $filter, ?string $acceptLanguage, ?string $accessToken, ?RequestOptions $requestOptions)` |

`TaxonomyClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getCategorySubtree` | `(string $categoryTreeId, ?string $categoryId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $categoryTreeId, ?string $categoryId, ?string $acceptEncoding, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getCategoryTree` | `(string $categoryTreeId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $categoryTreeId, ?string $acceptEncoding, ?string $accessToken, ?RequestOptions $requestOptions)` |

### Added

#### `MetadataClient`

- `getMinimumListingPricePolicies`
