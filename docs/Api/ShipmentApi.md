# ChannelEngine\ApiClient\ShipmentApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentCreate**](ShipmentApi.md#shipmentCreate) | **POST** /v2/shipments | Merchant: Create Shipment
[**shipmentIndex**](ShipmentApi.md#shipmentIndex) | **GET** /v2/shipments | Channel: Get Shipments
[**shipmentUpdate**](ShipmentApi.md#shipmentUpdate) | **PUT** /v2/shipments/{merchantShipmentNo} | Merchant: Update Shipment


# **shipmentCreate**
> \ChannelEngine\ApiClient\Model\ApiResponse shipmentCreate($model)

Merchant: Create Shipment

For merchants.    Mark (part of) an order as shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ShipmentApi(new \Http\Adapter\Guzzle6\Client());
$model = new \ChannelEngine\ApiClient\Model\MerchantShipmentRequest(); // \ChannelEngine\ApiClient\Model\MerchantShipmentRequest | 

try {
    $result = $api_instance->shipmentCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\ChannelEngine\ApiClient\Model\MerchantShipmentRequest**](../Model/MerchantShipmentRequest.md)|  |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentIndex**
> \ChannelEngine\ApiClient\Model\CollectionOfChannelShipmentResponse shipmentIndex($createdSince)

Channel: Get Shipments

For channels.    Gets all shipments created since the supplied date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ShipmentApi(new \Http\Adapter\Guzzle6\Client());
$createdSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $api_instance->shipmentIndex($createdSince);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createdSince** | **\DateTime**|  |

### Return type

[**\ChannelEngine\ApiClient\Model\CollectionOfChannelShipmentResponse**](../Model/CollectionOfChannelShipmentResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentUpdate**
> \ChannelEngine\ApiClient\Model\ApiResponse shipmentUpdate($merchantShipmentNo, $model)

Merchant: Update Shipment

For merchants.    Update an existing shipment with tracking information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ShipmentApi(new \Http\Adapter\Guzzle6\Client());
$merchantShipmentNo = "merchantShipmentNo_example"; // string | The merchant's shipment reference
$model = new \ChannelEngine\ApiClient\Model\MerchantShipmentTrackingRequest(); // \ChannelEngine\ApiClient\Model\MerchantShipmentTrackingRequest | The updated tracking information

try {
    $result = $api_instance->shipmentUpdate($merchantShipmentNo, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantShipmentNo** | **string**| The merchant&#39;s shipment reference |
 **model** | [**\ChannelEngine\ApiClient\Model\MerchantShipmentTrackingRequest**](../Model/MerchantShipmentTrackingRequest.md)| The updated tracking information |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

