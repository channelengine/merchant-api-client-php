# ChannelEngine\ApiClient\CancellationApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancellationCreate**](CancellationApi.md#cancellationCreate) | **POST** /v2/cancellations | Merchant: Create Cancellation
[**cancellationIndex**](CancellationApi.md#cancellationIndex) | **GET** /v2/cancellations | Channel: Get Cancellations


# **cancellationCreate**
> \ChannelEngine\ApiClient\Model\ApiResponse cancellationCreate($cancellation)

Merchant: Create Cancellation

For merchants.    Mark (part of) an order as cancelled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\CancellationApi();
$cancellation = new \ChannelEngine\ApiClient\Model\MerchantCancellationRequest(); // \ChannelEngine\ApiClient\Model\MerchantCancellationRequest | 

try {
    $result = $api_instance->cancellationCreate($cancellation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationApi->cancellationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancellation** | [**\ChannelEngine\ApiClient\Model\MerchantCancellationRequest**](../Model/\ChannelEngine\ApiClient\Model\MerchantCancellationRequest.md)|  |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancellationIndex**
> \ChannelEngine\ApiClient\Model\CollectionOfChannelCancellationResponse cancellationIndex($createdSince)

Channel: Get Cancellations

For channels.    Gets all cancellations created since the supplied date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\CancellationApi();
$createdSince = new \DateTime(); // \DateTime | 

try {
    $result = $api_instance->cancellationIndex($createdSince);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationApi->cancellationIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createdSince** | **\DateTime**|  |

### Return type

[**\ChannelEngine\ApiClient\Model\CollectionOfChannelCancellationResponse**](../Model/CollectionOfChannelCancellationResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

