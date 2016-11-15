# Swagger\Client\ShipmentApi

All URIs are relative to *https://demo.channelengine.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentCreate**](ShipmentApi.md#shipmentCreate) | **POST** /v2/shipments | Merchant: Create Shipment
[**shipmentIndex**](ShipmentApi.md#shipmentIndex) | **GET** /v2/shipments | Channel: Get Shipments


# **shipmentCreate**
> \Swagger\Client\Model\ApiResponse shipmentCreate($model)

Merchant: Create Shipment

For merchants.    Mark (part of) an order as shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ShipmentApi();
$model = new \Swagger\Client\Model\MerchantShipmentRequest(); // \Swagger\Client\Model\MerchantShipmentRequest | 

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
 **model** | [**\Swagger\Client\Model\MerchantShipmentRequest**](../Model/\Swagger\Client\Model\MerchantShipmentRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentIndex**
> \Swagger\Client\Model\CollectionOfChannelShipmentResponse shipmentIndex($created_since)

Channel: Get Shipments

For channels.    Gets all shipments created since the supplied date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ShipmentApi();
$created_since = new \DateTime(); // \DateTime | 

try {
    $result = $api_instance->shipmentIndex($created_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_since** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\CollectionOfChannelShipmentResponse**](../Model/CollectionOfChannelShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

