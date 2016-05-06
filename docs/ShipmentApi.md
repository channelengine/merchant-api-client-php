# Swagger\Client\ShipmentApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentCreate**](ShipmentApi.md#shipmentCreate) | **POST** /v2/shipments | Mark (part of) an order as shipped.
[**shipmentGet**](ShipmentApi.md#shipmentGet) | **GET** /v2/shipments/{merchantReference} | Get a shipment by its merchant reference.
[**shipmentIndex**](ShipmentApi.md#shipmentIndex) | **GET** /v2/shipments | Gets all shipments created since the supplied date.


# **shipmentCreate**
> \Swagger\Client\Model\Object shipmentCreate($model)

Mark (part of) an order as shipped.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ShipmentApi();
$model = new \Swagger\Client\Model\ShipmentViewModel(); // \Swagger\Client\Model\ShipmentViewModel | 

try { 
    $result = $api_instance->shipmentCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentCreate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\ShipmentViewModel**](\Swagger\Client\Model\ShipmentViewModel.md)|  | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **shipmentGet**
> \Swagger\Client\Model\Object shipmentGet($merchant_reference)

Get a shipment by its merchant reference.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ShipmentApi();
$merchant_reference = "merchant_reference_example"; // string | The unique shipment reference supplied by the merchant

try { 
    $result = $api_instance->shipmentGet($merchant_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_reference** | **string**| The unique shipment reference supplied by the merchant | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **shipmentIndex**
> \Swagger\Client\Model\Object shipmentIndex($created_since)

Gets all shipments created since the supplied date.

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
    echo 'Exception when calling ShipmentApi->shipmentIndex: ', $e->getMessage(), "\n";
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

