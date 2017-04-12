# ChannelEngine\ApiClient\BackOrderApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**backOrderCreate**](BackOrderApi.md#backOrderCreate) | **POST** /v2/backorders | Merchant: Create Backorder
[**backOrderGet**](BackOrderApi.md#backOrderGet) | **GET** /v2/backorders/{merchantBackorderNo} | Merchant: Get Backorder
[**backOrderIndex**](BackOrderApi.md#backOrderIndex) | **GET** /v2/backorders | Get Backorders


# **backOrderCreate**
> \ChannelEngine\ApiClient\Model\ApiResponse backOrderCreate($backOrder)

Merchant: Create Backorder

Mark (part of) an order as in backorder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\BackOrderApi();
$backOrder = new \ChannelEngine\ApiClient\Model\BackOrder(); // \ChannelEngine\ApiClient\Model\BackOrder | The Backorder to create

try {
    $result = $api_instance->backOrderCreate($backOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackOrderApi->backOrderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backOrder** | [**\ChannelEngine\ApiClient\Model\BackOrder**](../Model/\ChannelEngine\ApiClient\Model\BackOrder.md)| The Backorder to create |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **backOrderGet**
> \ChannelEngine\ApiClient\Model\SingleOfBackOrder backOrderGet($merchantBackorderNo)

Merchant: Get Backorder

Retrieve a backorder by its reference. A back order references the order  which is temporarly out of stock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\BackOrderApi();
$merchantBackorderNo = "merchantBackorderNo_example"; // string | The unique backorder reference supplied by the merchant

try {
    $result = $api_instance->backOrderGet($merchantBackorderNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackOrderApi->backOrderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantBackorderNo** | **string**| The unique backorder reference supplied by the merchant |

### Return type

[**\ChannelEngine\ApiClient\Model\SingleOfBackOrder**](../Model/SingleOfBackOrder.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **backOrderIndex**
> \ChannelEngine\ApiClient\Model\CollectionOfBackOrder backOrderIndex($createdSince)

Get Backorders

Gets all backorders created since the supplied date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\BackOrderApi();
$createdSince = new \DateTime(); // \DateTime | 

try {
    $result = $api_instance->backOrderIndex($createdSince);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackOrderApi->backOrderIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createdSince** | **\DateTime**|  |

### Return type

[**\ChannelEngine\ApiClient\Model\CollectionOfBackOrder**](../Model/CollectionOfBackOrder.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

