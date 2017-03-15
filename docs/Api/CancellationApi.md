# Swagger\Client\CancellationApi

All URIs are relative to *https://demo.channelengine.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancellationCreate**](CancellationApi.md#cancellationCreate) | **POST** /v2/cancellations | Merchant: Create Cancellation
[**cancellationIndex**](CancellationApi.md#cancellationIndex) | **GET** /v2/cancellations | Channel: Get Cancellations


# **cancellationCreate**
> \Swagger\Client\Model\ApiResponse cancellationCreate($cancellation)

Merchant: Create Cancellation

For merchants.    Mark (part of) an order as cancelled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CancellationApi();
$cancellation = new \Swagger\Client\Model\MerchantCancellationRequest(); // \Swagger\Client\Model\MerchantCancellationRequest | 

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
 **cancellation** | [**\Swagger\Client\Model\MerchantCancellationRequest**](../Model/\Swagger\Client\Model\MerchantCancellationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancellationIndex**
> \Swagger\Client\Model\CollectionOfChannelCancellationResponse cancellationIndex($created_since)

Channel: Get Cancellations

For channels.    Gets all cancellations created since the supplied date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CancellationApi();
$created_since = new \DateTime(); // \DateTime | 

try {
    $result = $api_instance->cancellationIndex($created_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationApi->cancellationIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_since** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\CollectionOfChannelCancellationResponse**](../Model/CollectionOfChannelCancellationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

