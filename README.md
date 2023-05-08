# ChannelEngine
[![No Maintenance Intended](https://img.shields.io/badge/STATUS-DEPRECATED-%23cf0000?style=for-the-badge)](https://support.channelengine.com/hc/en-us/articles/4409503691165-Merchant-API-API-clients)

### Deprecated, and now?
This library is no longer supported, please consider generating your own library with **OpenAPI generator**. There is extended documentation on how to create it for your programming language of choice: https://support.channelengine.com/hc/en-us/articles/4409503691165-Merchant-API-API-clients

The reason for no longer supporting this library is that developers can easily construct it in their programming language of choice. **ChannelEngine** provides an API that follows the OpenAPI specifications and has an API reference in [Swagger](https://demo.channelengine.net/api/swagger/index.html). 

### More information for developers
Please visit https://www.channelengine.com/developers/ for more information.
The API reference can be found at https://demo.channelengine.net/api/swagger/index.html

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
