# Swagger\Client\ProductApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productCreate**](ProductApi.md#productCreate) | **POST** /v2/products | 
[**productDelete**](ProductApi.md#productDelete) | **DELETE** /v2/product/{merchantReference} | 
[**productGet**](ProductApi.md#productGet) | **GET** /v2/product/{merchantReference} | 
[**productIndex**](ProductApi.md#productIndex) | **GET** /v2/product | Get products that have been updated since the given time. When a product gets\r\n            created its &#39;update&#39; time is set equal to its &#39;create&#39; time. Therefore, this\r\n            endpoint will also return products that have been created since the given time.


# **productCreate**
> \Swagger\Client\Model\Object productCreate($product_view)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductApi();
$product_view = new \Swagger\Client\Model\ProductRequestViewModel(); // \Swagger\Client\Model\ProductRequestViewModel | 

try { 
    $result = $api_instance->productCreate($product_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_view** | [**\Swagger\Client\Model\ProductRequestViewModel**](\Swagger\Client\Model\ProductRequestViewModel.md)|  | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **productDelete**
> \Swagger\Client\Model\Object productDelete($merchant_reference)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductApi();
$merchant_reference = "merchant_reference_example"; // string | 

try { 
    $result = $api_instance->productDelete($merchant_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDelete: ', $e->getMessage(), "\n";
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

# **productGet**
> \Swagger\Client\Model\Object productGet($merchant_reference)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductApi();
$merchant_reference = "merchant_reference_example"; // string | 

try { 
    $result = $api_instance->productGet($merchant_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGet: ', $e->getMessage(), "\n";
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

# **productIndex**
> \Swagger\Client\Model\Object productIndex($updated_since)

Get products that have been updated since the given time. When a product gets\r\n            created its 'update' time is set equal to its 'create' time. Therefore, this\r\n            endpoint will also return products that have been created since the given time.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductApi();
$updated_since = new \DateTime(); // \DateTime | 

try { 
    $result = $api_instance->productIndex($updated_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productIndex: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_since** | **\DateTime**|  | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

