# Swagger\Client\BackOrderApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**backOrderCreate**](BackOrderApi.md#backOrderCreate) | **POST** /v2/backorders | Mark (part of) an order as in backorder.
[**backOrderGet**](BackOrderApi.md#backOrderGet) | **GET** /v2/backorders/{merchantReference} | Retrieve a backorder by its reference. A back order references the order\r\n            which is temporarly out of stock.
[**backOrderIndex**](BackOrderApi.md#backOrderIndex) | **GET** /v2/backorders | Gets all backorders created since the supplied date.


# **backOrderCreate**
> \Swagger\Client\Model\Object backOrderCreate($back_order)

Mark (part of) an order as in backorder.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BackOrderApi();
$back_order = new \Swagger\Client\Model\BackOrderViewModel(); // \Swagger\Client\Model\BackOrderViewModel | 

try { 
    $result = $api_instance->backOrderCreate($back_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackOrderApi->backOrderCreate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **back_order** | [**\Swagger\Client\Model\BackOrderViewModel**](\Swagger\Client\Model\BackOrderViewModel.md)|  | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **backOrderGet**
> \Swagger\Client\Model\Object backOrderGet($merchant_reference)

Retrieve a backorder by its reference. A back order references the order\r\n            which is temporarly out of stock.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BackOrderApi();
$merchant_reference = "merchant_reference_example"; // string | The unique backorder reference supplied by the merchant

try { 
    $result = $api_instance->backOrderGet($merchant_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackOrderApi->backOrderGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_reference** | **string**| The unique backorder reference supplied by the merchant | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **backOrderIndex**
> \Swagger\Client\Model\Object backOrderIndex($created_since)

Gets all backorders created since the supplied date.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BackOrderApi();
$created_since = new \DateTime(); // \DateTime | 

try { 
    $result = $api_instance->backOrderIndex($created_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackOrderApi->backOrderIndex: ', $e->getMessage(), "\n";
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

