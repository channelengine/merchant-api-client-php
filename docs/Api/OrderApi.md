# ChannelEngine\ApiClient\OrderApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderAcknowledge**](OrderApi.md#orderAcknowledge) | **POST** /v2/orders/acknowledge | Merchant: Acknowledge Order
[**orderCreate**](OrderApi.md#orderCreate) | **POST** /v2/orders | Channel: Create Order
[**orderGetByFilter**](OrderApi.md#orderGetByFilter) | **GET** /v2/orders | Merchant: Get Orders By Filter
[**orderGetNew**](OrderApi.md#orderGetNew) | **GET** /v2/orders/new | Merchant: Get New Orders
[**orderInvoice**](OrderApi.md#orderInvoice) | **GET** /v2/orders/{merchantOrderNo}/invoice | Merchant: Download Invoice
[**orderPackingSlip**](OrderApi.md#orderPackingSlip) | **GET** /v2/orders/{merchantOrderNo}/packingslip | Merchant: Download Packing Slip


# **orderAcknowledge**
> \ChannelEngine\ApiClient\Model\ApiResponse orderAcknowledge($model)

Merchant: Acknowledge Order

For merchants.    Acknowledge an order. By acknowledging the order the merchant can confirm that  the order has been imported. When acknowledging an order the merchant has to supply  references that uniquely identify the order and the order lines. These references  will be used in the other API calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\OrderApi(new \Http\Adapter\Guzzle6\Client());
$model = new \ChannelEngine\ApiClient\Model\OrderAcknowledgement(); // \ChannelEngine\ApiClient\Model\OrderAcknowledgement | Relations between the id's returned by ChannelEngine and the references which the merchant uses

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
 **model** | [**\ChannelEngine\ApiClient\Model\OrderAcknowledgement**](../Model/OrderAcknowledgement.md)| Relations between the id&#39;s returned by ChannelEngine and the references which the merchant uses |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreate**
> \ChannelEngine\ApiClient\Model\ApiResponse orderCreate($model)

Channel: Create Order

For channels.    Create a new order in ChannelEngine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\OrderApi(new \Http\Adapter\Guzzle6\Client());
$model = new \ChannelEngine\ApiClient\Model\ChannelOrderRequest(); // \ChannelEngine\ApiClient\Model\ChannelOrderRequest | 

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
 **model** | [**\ChannelEngine\ApiClient\Model\ChannelOrderRequest**](../Model/ChannelOrderRequest.md)|  |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetByFilter**
> \ChannelEngine\ApiClient\Model\CollectionOfMerchantOrderResponse orderGetByFilter($filterStatuses, $filterMerchantOrderNos, $filterExcludeMarketplaceFulfilledOrdersAndLines, $filterFulfillmentType, $filterPage)

Merchant: Get Orders By Filter

For merchants.                Fetch orders based on the provided OrderFilter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\OrderApi(new \Http\Adapter\Guzzle6\Client());
$filterStatuses = array("filterStatuses_example"); // string[] | 
$filterMerchantOrderNos = array("filterMerchantOrderNos_example"); // string[] | 
$filterExcludeMarketplaceFulfilledOrdersAndLines = true; // bool | 
$filterFulfillmentType = "filterFulfillmentType_example"; // string | Filter orders on fulfillment type. This will include all orders lines, even if they are partially fulfilled by the marketplace.  To exclude orders and lines that are fulfilled by the marketplace from the response, set ExcludeMarketplaceFulfilledOrdersAndLines to true.
$filterPage = 56; // int | 

try {
    $result = $api_instance->orderGetByFilter($filterStatuses, $filterMerchantOrderNos, $filterExcludeMarketplaceFulfilledOrdersAndLines, $filterFulfillmentType, $filterPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetByFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filterStatuses** | [**string[]**](../Model/string.md)|  | [optional]
 **filterMerchantOrderNos** | [**string[]**](../Model/string.md)|  | [optional]
 **filterExcludeMarketplaceFulfilledOrdersAndLines** | **bool**|  | [optional]
 **filterFulfillmentType** | **string**| Filter orders on fulfillment type. This will include all orders lines, even if they are partially fulfilled by the marketplace.  To exclude orders and lines that are fulfilled by the marketplace from the response, set ExcludeMarketplaceFulfilledOrdersAndLines to true. | [optional]
 **filterPage** | **int**|  | [optional]

### Return type

[**\ChannelEngine\ApiClient\Model\CollectionOfMerchantOrderResponse**](../Model/CollectionOfMerchantOrderResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetNew**
> \ChannelEngine\ApiClient\Model\CollectionOfMerchantOrderResponse orderGetNew()

Merchant: Get New Orders

For merchants.                Fetch newly placed orders (order with status NEW).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\OrderApi(new \Http\Adapter\Guzzle6\Client());

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

[**\ChannelEngine\ApiClient\Model\CollectionOfMerchantOrderResponse**](../Model/CollectionOfMerchantOrderResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderInvoice**
> \SplFileObject orderInvoice($merchantOrderNo, $useCustomerCulture)

Merchant: Download Invoice

For merchants.    Generates the ChannelEngine VAT invoice for this order in PDF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\OrderApi(new \Http\Adapter\Guzzle6\Client());
$merchantOrderNo = "merchantOrderNo_example"; // string | The unique order reference as used by the merchant
$useCustomerCulture = true; // bool | Generate the invoice in the billing address' country's language

try {
    $result = $api_instance->orderInvoice($merchantOrderNo, $useCustomerCulture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantOrderNo** | **string**| The unique order reference as used by the merchant |
 **useCustomerCulture** | **bool**| Generate the invoice in the billing address&#39; country&#39;s language | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPackingSlip**
> \SplFileObject orderPackingSlip($merchantOrderNo, $useCustomerCulture)

Merchant: Download Packing Slip

For merchants.    Generates the ChannelEngine packing slip for this order in PDF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\OrderApi(new \Http\Adapter\Guzzle6\Client());
$merchantOrderNo = "merchantOrderNo_example"; // string | The unique order reference as used by the merchant
$useCustomerCulture = true; // bool | Generate the invoice in the billing address' country's language

try {
    $result = $api_instance->orderPackingSlip($merchantOrderNo, $useCustomerCulture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPackingSlip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantOrderNo** | **string**| The unique order reference as used by the merchant |
 **useCustomerCulture** | **bool**| Generate the invoice in the billing address&#39; country&#39;s language | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

