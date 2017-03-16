# ChannelEngine\ApiClient\ReturnApi

All URIs are relative to *https://demo.channelengine.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**returnCreate**](ReturnApi.md#returnCreate) | **POST** /v2/returns/channel | Channel: Create Return
[**returnCreate_0**](ReturnApi.md#returnCreate_0) | **POST** /v2/returns/merchant | Merchant: Create Return
[**returnGetChannelReturns**](ReturnApi.md#returnGetChannelReturns) | **GET** /v2/returns/merchant | Merchant: Get Returns
[**returnGetMerchantReturns**](ReturnApi.md#returnGetMerchantReturns) | **GET** /v2/returns/channel | Channel: Get Returns


# **returnCreate**
> \ChannelEngine\ApiClient\Model\ApiResponse returnCreate($model)

Channel: Create Return

For channels.                Mark (part of) an order as returned by the customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ReturnApi();
$model = new \ChannelEngine\ApiClient\Model\ChannelReturnRequest(); // \ChannelEngine\ApiClient\Model\ChannelReturnRequest | 

try {
    $result = $api_instance->returnCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\ChannelEngine\ApiClient\Model\ChannelReturnRequest**](../Model/\ChannelEngine\ApiClient\Model\ChannelReturnRequest.md)|  |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnCreate_0**
> \ChannelEngine\ApiClient\Model\ApiResponse returnCreate_0($model)

Merchant: Create Return

For merchants.    Mark (part of) an order as returned by the customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ReturnApi();
$model = new \ChannelEngine\ApiClient\Model\MerchantReturnRequest(); // \ChannelEngine\ApiClient\Model\MerchantReturnRequest | 

try {
    $result = $api_instance->returnCreate_0($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnCreate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\ChannelEngine\ApiClient\Model\MerchantReturnRequest**](../Model/\ChannelEngine\ApiClient\Model\MerchantReturnRequest.md)|  |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnGetChannelReturns**
> \ChannelEngine\ApiClient\Model\CollectionOfMerchantReturnResponse returnGetChannelReturns($createdSince)

Merchant: Get Returns

For merchants.    Get all returns created by the channel. This call is supposed  to be used by merchants. Channels should use the 'GET /v2/returns/channel'  call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ReturnApi();
$createdSince = new \DateTime(); // \DateTime | 

try {
    $result = $api_instance->returnGetChannelReturns($createdSince);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetChannelReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createdSince** | **\DateTime**|  |

### Return type

[**\ChannelEngine\ApiClient\Model\CollectionOfMerchantReturnResponse**](../Model/CollectionOfMerchantReturnResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnGetMerchantReturns**
> \ChannelEngine\ApiClient\Model\CollectionOfChannelReturnResponse returnGetMerchantReturns($createdSince)

Channel: Get Returns

For channels.                Get all returns created by the merchant. This call is supposed  to be used by channels. Merchants should use the 'GET /v2/returns/merchant'  call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ReturnApi();
$createdSince = new \DateTime(); // \DateTime | 

try {
    $result = $api_instance->returnGetMerchantReturns($createdSince);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetMerchantReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createdSince** | **\DateTime**|  |

### Return type

[**\ChannelEngine\ApiClient\Model\CollectionOfChannelReturnResponse**](../Model/CollectionOfChannelReturnResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

