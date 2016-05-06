# Swagger\Client\OrderApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderCreate**](OrderApi.md#orderCreate) | **POST** /v2/orders | 
[**orderGet**](OrderApi.md#orderGet) | **GET** /v2/orders/{merchantReference} | 
[**orderGetNew**](OrderApi.md#orderGetNew) | **GET** /v2/orders/new | 


# **orderCreate**
> \Swagger\Client\Model\Object orderCreate($model)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrderApi();
$model = new \Swagger\Client\Model\OrderViewModel(); // \Swagger\Client\Model\OrderViewModel | 

try { 
    $result = $api_instance->orderCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\OrderViewModel**](\Swagger\Client\Model\OrderViewModel.md)|  | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **orderGet**
> \Swagger\Client\Model\Object orderGet($merchant_reference)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrderApi();
$merchant_reference = "merchant_reference_example"; // string | 

try { 
    $result = $api_instance->orderGet($merchant_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_reference** | **string**|  | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **orderGetNew**
> \Swagger\Client\Model\OrderViewModel[] orderGetNew()



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrderApi();

try { 
    $result = $api_instance->orderGetNew();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetNew: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\OrderViewModel[]**](OrderViewModel.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

