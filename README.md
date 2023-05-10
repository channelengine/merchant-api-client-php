# ChannelEngine
[![No Maintenance Intended](https://img.shields.io/badge/STATUS-DEPRECATED-%23cf0000?style=for-the-badge)](https://support.channelengine.com/hc/en-us/articles/4409503691165-Merchant-API-API-clients)

### Deprecation of the Merchant API client libraries

This library is no longer supported by ChannelEngine. To build your own library via OpenAPI Generator, using your programming language of choice, check out the [Merchant API: API clients](https://support.channelengine.com/hc/en-us/articles/4409503691165-Merchant-API-API-clients) article in our Help Center.

ChannelEngine’s APIs follow the OpenAPI/Swagger specifications, which you can find in our [API reference](https://demo.channelengine.net/api/swagger/index.html). 

### Additional information for developers
For detailed information on ChannelEngine’s APIs, go to the [REST APIs category](https://support.channelengine.com/hc/en-us/categories/4419833201937-REST-APIs) in our Help Center.

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "channelengine/merchant-api-client-php": "*"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use ChannelEngine\Merchant\ApiClient\Configuration;
use ChannelEngine\Merchant\ApiClient\ApiException;
use ChannelEngine\Merchant\ApiClient\Api\OrderApi;

$apiConfig = Configuration::getDefaultConfiguration();
$apiConfig->setHost('https://demo.channelengine.net/api');
$apiConfig->setApiKey('apikey', 'xxxxxxxxxxxx');

$orderApi = new OrderApi(null, $apiConfig);

try {
	$response = $orderApi->orderGetNew();
	dd($response);
} catch (ApiException $e) {
	// In case of a non-2xx status an exception will be trown.
	// However, we can check getResponseBody() to get the deserialized response.
	echo($e->getMessage());
	dd($e->getResponseBody());
}

function dd($var) {
	echo("<pre>");
	print_r($var);
	echo("</pre>");
}
```
