# Swagger\Client\ReturnApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**returnCreate**](ReturnApi.md#returnCreate) | **POST** /v2/returns | Mark (part of) an order as returned by the customer
[**returnGet**](ReturnApi.md#returnGet) | **GET** /v2/returns/{merchantReference} | Get a return by its merchant reference.
[**returnIndex**](ReturnApi.md#returnIndex) | **GET** /v2/returns | Gets all returns created since the supplied date.


# **returnCreate**
> \Swagger\Client\Model\Object returnCreate($model)

Mark (part of) an order as returned by the customer

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReturnApi();
$model = new \Swagger\Client\Model\ReturnViewModel(); // \Swagger\Client\Model\ReturnViewModel | 

try { 
    $result = $api_instance->returnCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnCreate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\ReturnViewModel**](\Swagger\Client\Model\ReturnViewModel.md)|  | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **returnGet**
> \Swagger\Client\Model\Object returnGet($merchant_reference)

Get a return by its merchant reference.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReturnApi();
$merchant_reference = "merchant_reference_example"; // string | The unique return reference supplied by the merchant

try { 
    $result = $api_instance->returnGet($merchant_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_reference** | **string**| The unique return reference supplied by the merchant | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **returnIndex**
> \Swagger\Client\Model\Object returnIndex($created_since)

Gets all returns created since the supplied date.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReturnApi();
$created_since = new \DateTime(); // \DateTime | 

try { 
    $result = $api_instance->returnIndex($created_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnIndex: ', $e->getMessage(), "\n";
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

