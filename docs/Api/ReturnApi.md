# Swagger\Client\ReturnApi

All URIs are relative to *https://demo.channelengine.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**returnCreate**](ReturnApi.md#returnCreate) | **POST** /v2/returns/channel | Channel: Create Return
[**returnCreate_0**](ReturnApi.md#returnCreate_0) | **POST** /v2/returns/merchant | Merchant: Create Return
[**returnGetChannelReturns**](ReturnApi.md#returnGetChannelReturns) | **GET** /v2/returns/merchant | Merchant: Get Returns
[**returnGetMerchantReturns**](ReturnApi.md#returnGetMerchantReturns) | **GET** /v2/returns/channel | Channel: Get Returns


# **returnCreate**
> \Swagger\Client\Model\ApiResponse returnCreate($model)

Channel: Create Return

For channels.                Mark (part of) an order as returned by the customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReturnApi();
$model = new \Swagger\Client\Model\ChannelReturnRequest(); // \Swagger\Client\Model\ChannelReturnRequest | 

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
 **model** | [**\Swagger\Client\Model\ChannelReturnRequest**](../Model/\Swagger\Client\Model\ChannelReturnRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnCreate_0**
> \Swagger\Client\Model\ApiResponse returnCreate_0($model)

Merchant: Create Return

For merchants.    Mark (part of) an order as returned by the customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReturnApi();
$model = new \Swagger\Client\Model\MerchantReturnRequest(); // \Swagger\Client\Model\MerchantReturnRequest | 

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
 **model** | [**\Swagger\Client\Model\MerchantReturnRequest**](../Model/\Swagger\Client\Model\MerchantReturnRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnGetChannelReturns**
> \Swagger\Client\Model\CollectionOfMerchantReturnResponse returnGetChannelReturns($created_since)

Merchant: Get Returns

For merchants.    Get all returns created by the channel. This call is supposed  to be used by merchants. Channels should use the 'GET /v2/returns/channel'  call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReturnApi();
$created_since = new \DateTime(); // \DateTime | 

try {
    $result = $api_instance->returnGetChannelReturns($created_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetChannelReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_since** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\CollectionOfMerchantReturnResponse**](../Model/CollectionOfMerchantReturnResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnGetMerchantReturns**
> \Swagger\Client\Model\CollectionOfChannelReturnResponse returnGetMerchantReturns($created_since)

Channel: Get Returns

For channels.                Get all returns created by the merchant. This call is supposed  to be used by channels. Merchants should use the 'GET /v2/returns/merchant'  call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReturnApi();
$created_since = new \DateTime(); // \DateTime | 

try {
    $result = $api_instance->returnGetMerchantReturns($created_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetMerchantReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_since** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\CollectionOfChannelReturnResponse**](../Model/CollectionOfChannelReturnResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

