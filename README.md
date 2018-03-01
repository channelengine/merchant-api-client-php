# ChannelEngine
Please visit https://www.channelengine.com/developers/ for more information.
The API reference can be found at https://demo.channelengine.net/api/swagger/ui/index

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "channelengine/api-client-php": "*"
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
