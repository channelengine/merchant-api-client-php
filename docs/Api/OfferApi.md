# ChannelEngine\ApiClient\OfferApi

All URIs are relative to *http://dev.channelengine.local/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**offerStockPriceUpdate**](OfferApi.md#offerStockPriceUpdate) | **PUT** /v2/offer | Update stock or price.


# **offerStockPriceUpdate**
> \ChannelEngine\ApiClient\Model\SingleOfCollectionsDictionary2Generic offerStockPriceUpdate($updates)

Update stock or price.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\OfferApi(new \Http\Adapter\Guzzle6\Client());
$updates = array(new \ChannelEngine\ApiClient\Model\MerchantStockPriceUpdateRequest()); // \ChannelEngine\ApiClient\Model\MerchantStockPriceUpdateRequest[] | References to the products that should be updated, and the new values  for the stock or price fields. It is possible to supply only one of the two fields  or both.

try {
    $result = $api_instance->offerStockPriceUpdate($updates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->offerStockPriceUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updates** | [**\ChannelEngine\ApiClient\Model\MerchantStockPriceUpdateRequest[]**](../Model/MerchantStockPriceUpdateRequest.md)| References to the products that should be updated, and the new values  for the stock or price fields. It is possible to supply only one of the two fields  or both. |

### Return type

[**\ChannelEngine\ApiClient\Model\SingleOfCollectionsDictionary2Generic**](../Model/SingleOfCollectionsDictionary2Generic.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

