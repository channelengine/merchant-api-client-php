# Swagger\Client\CancellationApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancellationCreate**](CancellationApi.md#cancellationCreate) | **POST** /v2/cancellations | Mark (part of) an order as cancelled.
[**cancellationGet**](CancellationApi.md#cancellationGet) | **GET** /v2/cancellations/{merchantReference} | Get a cancellation by its merchant reference.
[**cancellationIndex**](CancellationApi.md#cancellationIndex) | **GET** /v2/cancellations | Gets all cancellations created since the supplied date.


# **cancellationCreate**
> \Swagger\Client\Model\Object cancellationCreate($model)

Mark (part of) an order as cancelled.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CancellationApi();
$model = new \Swagger\Client\Model\CancellationViewModel(); // \Swagger\Client\Model\CancellationViewModel | 

try { 
    $result = $api_instance->cancellationCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationApi->cancellationCreate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\CancellationViewModel**](\Swagger\Client\Model\CancellationViewModel.md)|  | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancellationGet**
> \Swagger\Client\Model\Object cancellationGet($merchant_reference)

Get a cancellation by its merchant reference.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CancellationApi();
$merchant_reference = "merchant_reference_example"; // string | The unique cancellation reference supplied by the merchant

try { 
    $result = $api_instance->cancellationGet($merchant_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationApi->cancellationGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_reference** | **string**| The unique cancellation reference supplied by the merchant | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancellationIndex**
> \Swagger\Client\Model\Object cancellationIndex($created_since)

Gets all cancellations created since the supplied date.

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
    echo 'Exception when calling CancellationApi->cancellationIndex: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_since** | **\DateTime**|  | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

