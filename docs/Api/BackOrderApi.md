# Swagger\Client\BackOrderApi

All URIs are relative to *https://demo.channelengine.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**backOrderCreate**](BackOrderApi.md#backOrderCreate) | **POST** /v2/backorders | Merchant: Create Backorder
[**backOrderGet**](BackOrderApi.md#backOrderGet) | **GET** /v2/backorders/{merchantReference} | Merchant: Get Backorder
[**backOrderIndex**](BackOrderApi.md#backOrderIndex) | **GET** /v2/backorders | Get Backorders


# **backOrderCreate**
> \Swagger\Client\Model\ApiResponse backOrderCreate($back_order)

Merchant: Create Backorder

Mark (part of) an order as in backorder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BackOrderApi();
$back_order = new \Swagger\Client\Model\BackOrder(); // \Swagger\Client\Model\BackOrder | The Backorder to create

try {
    $result = $api_instance->backOrderCreate($back_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackOrderApi->backOrderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **back_order** | [**\Swagger\Client\Model\BackOrder**](../Model/\Swagger\Client\Model\BackOrder.md)| The Backorder to create |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **backOrderGet**
> \Swagger\Client\Model\SingleOfBackOrder backOrderGet($merchant_reference)

Merchant: Get Backorder

Retrieve a backorder by its reference. A back order references the order  which is temporarly out of stock.

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
    echo 'Exception when calling BackOrderApi->backOrderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_reference** | **string**| The unique backorder reference supplied by the merchant |

### Return type

[**\Swagger\Client\Model\SingleOfBackOrder**](../Model/SingleOfBackOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **backOrderIndex**
> \Swagger\Client\Model\CollectionOfBackOrder backOrderIndex($created_since)

Get Backorders

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
    echo 'Exception when calling BackOrderApi->backOrderIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_since** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\CollectionOfBackOrder**](../Model/CollectionOfBackOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

