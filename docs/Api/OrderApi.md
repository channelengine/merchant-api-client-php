# Swagger\Client\OrderApi

All URIs are relative to *https://demo.channelengine.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderAcknowledge**](OrderApi.md#orderAcknowledge) | **POST** /v2/orders/acknowledge | Marchant: Acknowledge Order
[**orderCreate**](OrderApi.md#orderCreate) | **POST** /v2/orders | Channel: Create Order
[**orderGetNew**](OrderApi.md#orderGetNew) | **GET** /v2/orders/new | Merchant: Get New Orders
[**orderInvoice**](OrderApi.md#orderInvoice) | **GET** /v2/orders/{merchantReference}/invoice | 
[**orderPackingSlip**](OrderApi.md#orderPackingSlip) | **GET** /v2/orders/{merchantReference}/packingslip | 


# **orderAcknowledge**
> \Swagger\Client\Model\ApiResponse orderAcknowledge($model)

Marchant: Acknowledge Order

For merchants.    Acknowledge an order. By acknowledging the order the merchant can confirm that  the order has been imported. When acknowledging an order the merchant has to supply  references that uniquely identify the order and the order lines. These references  will be used in the other API calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrderApi();
$model = new \Swagger\Client\Model\OrderAcknowledgement(); // \Swagger\Client\Model\OrderAcknowledgement | Relations between the id's returned by ChannelEngine and the references              which the merchant uses

try {
    $result = $api_instance->orderAcknowledge($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAcknowledge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\OrderAcknowledgement**](../Model/\Swagger\Client\Model\OrderAcknowledgement.md)| Relations between the id&#39;s returned by ChannelEngine and the references              which the merchant uses |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreate**
> \Swagger\Client\Model\ApiResponse orderCreate($model)

Channel: Create Order

For channels.    Create a new order in ChannelEngine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrderApi();
$model = new \Swagger\Client\Model\ChannelOrderRequest(); // \Swagger\Client\Model\ChannelOrderRequest | 

try {
    $result = $api_instance->orderCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\ChannelOrderRequest**](../Model/\Swagger\Client\Model\ChannelOrderRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetNew**
> \Swagger\Client\Model\CollectionOfMerchantOrderResponse orderGetNew()

Merchant: Get New Orders

For merchants.                Fetch newly placed orders (order with status NEW).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrderApi();

try {
    $result = $api_instance->orderGetNew();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CollectionOfMerchantOrderResponse**](../Model/CollectionOfMerchantOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderInvoice**
> \SplFileObject orderInvoice($merchant_reference, $use_customer_culture)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrderApi();
$merchant_reference = "merchant_reference_example"; // string | 
$use_customer_culture = true; // bool | 

try {
    $result = $api_instance->orderInvoice($merchant_reference, $use_customer_culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_reference** | **string**|  |
 **use_customer_culture** | **bool**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPackingSlip**
> \SplFileObject orderPackingSlip($merchant_reference, $use_customer_culture)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrderApi();
$merchant_reference = "merchant_reference_example"; // string | 
$use_customer_culture = true; // bool | 

try {
    $result = $api_instance->orderPackingSlip($merchant_reference, $use_customer_culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPackingSlip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_reference** | **string**|  |
 **use_customer_culture** | **bool**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

