# Swagger\Client\AcknowledgementApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acknowledgementCreate**](AcknowledgementApi.md#acknowledgementCreate) | **POST** /v2/acknowledgements | Acknowledge an order. By acknowledging the order the merchant can confirm that\r\n            the order has been imported. When acknowledging an order the merchant has to supply\r\n            references that uniquely identify the order and the order lines. These references\r\n            will be used in the other API calls.


# **acknowledgementCreate**
> \Swagger\Client\Model\Object acknowledgementCreate($model)

Acknowledge an order. By acknowledging the order the merchant can confirm that\r\n            the order has been imported. When acknowledging an order the merchant has to supply\r\n            references that uniquely identify the order and the order lines. These references\r\n            will be used in the other API calls.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AcknowledgementApi();
$model = new \Swagger\Client\Model\AcknowledgementViewModel(); // \Swagger\Client\Model\AcknowledgementViewModel | Relations between the id's returned by ChannelEngine and the references\r\n            which the merchant uses

try { 
    $result = $api_instance->acknowledgementCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcknowledgementApi->acknowledgementCreate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\AcknowledgementViewModel**](\Swagger\Client\Model\AcknowledgementViewModel.md)| Relations between the id&#39;s returned by ChannelEngine and the references\r\n            which the merchant uses | 

### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

