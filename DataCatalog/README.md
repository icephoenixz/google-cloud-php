# Google Cloud Data Catalog for PHP

> Idiomatic PHP client for [Google Cloud Data Catalog](https://cloud.google.com/data-catalog).

[![Latest Stable Version](https://poser.pugx.org/google/cloud-data-catalog/v/stable)](https://packagist.org/packages/google/cloud-data-catalog) [![Packagist](https://img.shields.io/packagist/dm/google/cloud-data-catalog.svg)](https://packagist.org/packages/google/cloud-data-catalog)

* [API documentation](https://cloud.google.com/php/docs/reference/cloud-data-catalog/latest)

**NOTE:** This repository is part of [Google Cloud PHP](https://github.com/googleapis/google-cloud-php). Any
support requests, bug reports, or development contributions should be directed to
that project.

### Installation

To begin, install the preferred dependency manager for PHP, [Composer](https://getcomposer.org/).

Now install this component:

```sh
$ composer require google/cloud-data-catalog
```

This component supports both REST over HTTP/1.1 and gRPC. In order to take advantage of the benefits offered by gRPC (such as streaming methods)
please see our [gRPC installation guide](https://cloud.google.com/php/grpc).

### Authentication

Please see our [Authentication guide](https://github.com/googleapis/google-cloud-php/blob/main/AUTHENTICATION.md) for more information
on authenticating your client. Once authenticated, you'll be ready to start making requests.

### Sample

```php
require 'vendor/autoload.php';

use Google\Cloud\DataCatalog\V1\DataCatalogClient;

$client = new DataCatalogClient();
$location = DataCatalogClient::locationName('[MY_PROJECT_ID]', 'us-central1');

$entryGroup = $client->createEntryGroup($location, 'sample_entry_group');

printf('Created entry group: %s' . PHP_EOL, $entryGroup->getName());
```

### Debugging

Please see our [Debugging guide](https://github.com/googleapis/google-cloud-php/blob/main/DEBUG.md)
for more information about the debugging tools.

### Version

This component is considered GA (generally available). As such, it will not introduce backwards-incompatible changes in
any minor or patch releases. We will address issues and requests with the highest priority.

### Next Steps

1. Understand the [official documentation](https://cloud.google.com/data-catalog/docs).
