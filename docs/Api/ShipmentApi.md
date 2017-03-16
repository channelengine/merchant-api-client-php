# ChannelEngine\ApiClient\ShipmentApi

All URIs are relative to *https://demo.channelengine.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentCreate**](ShipmentApi.md#shipmentCreate) | **POST** /v2/shipments | Merchant: Create Shipment
[**shipmentIndex**](ShipmentApi.md#shipmentIndex) | **GET** /v2/shipments | Channel: Get Shipments


# **shipmentCreate**
> \ChannelEngine\ApiClient\Model\ApiResponse shipmentCreate($model)

Merchant: Create Shipment

For merchants.    Mark (part of) an order as shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChannelEngine\ApiClient\Api\ShipmentApi();
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
 **model** | [**\ChannelEngine\ApiClient\Model\MerchantShipmentRequest**](../Model/\ChannelEngine\ApiClient\Model\MerchantShipmentRequest.md)|  |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

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

$api_instance = new ChannelEngine\ApiClient\Api\ShipmentApi();
$createdSince = new \DateTime(); // \DateTime | 

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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

