# ChannelEngine\ApiClient\ProductApi

All URIs are relative to *https://demo.channelengine.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productAcknowledgeDataChanges**](ProductApi.md#productAcknowledgeDataChanges) | **POST** /v2/products/data | Channel: Acknowledge Product Data Changes
[**productAcknowledgeOfferChanges**](ProductApi.md#productAcknowledgeOfferChanges) | **POST** /v2/products/offers | Channel: Acknowledge Product Offer Changes
[**productCreate**](ProductApi.md#productCreate) | **POST** /v2/products | Merchant: Create Product
[**productDelete**](ProductApi.md#productDelete) | **DELETE** /v2/products/{merchantReference} | Merchant: Delete Product
[**productGetByMerchantReference**](ProductApi.md#productGetByMerchantReference) | **GET** /v2/products/merchant/{merchantReference} | Merchant: Get Product
[**productGetDataChanges**](ProductApi.md#productGetDataChanges) | **GET** /v2/products/data | Channel: Get Product Data Changes
[**productGetOfferChanges**](ProductApi.md#productGetOfferChanges) | **GET** /v2/products/offers | Channel: Get Product Offer Changes


# **productAcknowledgeDataChanges**
> \ChannelEngine\ApiClient\Model\ApiResponse productAcknowledgeDataChanges($changes)

Channel: Acknowledge Product Data Changes

For channels.                This endpoint should be called after a call to GET 'v2/products/data'. After a call to  this endpoint ChannelEngine 'knows' which products are known to the channel (and the last  time they have been updated) and is therefore able to only return the products  that really have changed since the last call to POST 'v2/products/data'.  The supplied ChannelReference will be saved  in our database and is supposed to be unique, the 'Updated' and 'Removed'  fields consist of ChannelReferences which are sent in a previous call  within the field 'Created'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ProductApi();
$changes = new \ChannelEngine\ApiClient\Model\ChannelProcessedChangesRequest(); // \ChannelEngine\ApiClient\Model\ChannelProcessedChangesRequest | The merchant references of the products which have been                successfully created, updated or deleted (after a call to 'GetDataChanges')

try {
    $result = $api_instance->productAcknowledgeDataChanges($changes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productAcknowledgeDataChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **changes** | [**\ChannelEngine\ApiClient\Model\ChannelProcessedChangesRequest**](../Model/\ChannelEngine\ApiClient\Model\ChannelProcessedChangesRequest.md)| The merchant references of the products which have been                successfully created, updated or deleted (after a call to &#39;GetDataChanges&#39;) |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAcknowledgeOfferChanges**
> \ChannelEngine\ApiClient\Model\ApiResponse productAcknowledgeOfferChanges($changes)

Channel: Acknowledge Product Offer Changes

For channels.                After a call to GET 'v2/products/offers' this endpoint should be called with the  ChannelReference of the products that are successfully updated.  Please see 'v2/products/data' and 'v2/products/data' for documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ProductApi();
$changes = array(new string[]()); // string[] | The channel references of the updated products

try {
    $result = $api_instance->productAcknowledgeOfferChanges($changes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productAcknowledgeOfferChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **changes** | **string[]**| The channel references of the updated products |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productCreate**
> \ChannelEngine\ApiClient\Model\SingleOfProductCreationResult productCreate($products)

Merchant: Create Product

For merchants.    Create a product. The parent serves as the 'base' product of the children.  For example, the children could be different sizes or colors of the parent product.  For channels where every size and color are different products this does not make any difference  (the children will just be sent separately, while ignoring the parent).  But there are channels where the parent and the children need to be sent together, for example  when there is one product with a list of sizes. In this case all the product information is retrieved  from the parent product while the size list is generated from the children.    Note that the parent itself is a 'blueprint' of the child products and we do our best to make sure it  does not end up on the marketplaces itself. Only the children can be purchased.    It's not possible to nest parent and children more than one level (A parent can have many children,  but any child cannot itself also have children).    The supplied MerchantProductReference needs to be unique.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ProductApi();
$products = array(new MerchantProductRequest()); // \ChannelEngine\ApiClient\Model\MerchantProductRequest[] | 

try {
    $result = $api_instance->productCreate($products);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **products** | [**\ChannelEngine\ApiClient\Model\MerchantProductRequest[]**](../Model/MerchantProductRequest.md)|  |

### Return type

[**\ChannelEngine\ApiClient\Model\SingleOfProductCreationResult**](../Model/SingleOfProductCreationResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productDelete**
> \ChannelEngine\ApiClient\Model\ApiResponse productDelete($merchantReference)

Merchant: Delete Product

For merchants.    Deactivate a product based on the merchant reference.  Note that we do not really delete a product, as the product  might still be referenced by orders etc. Therefore, the references  used for this product cannot be reused. We do however deactivate the product  which means that it will not be sent to channels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ProductApi();
$merchantReference = "merchantReference_example"; // string | 

try {
    $result = $api_instance->productDelete($merchantReference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantReference** | **string**|  |

### Return type

[**\ChannelEngine\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetByMerchantReference**
> \ChannelEngine\ApiClient\Model\SingleOfMerchantProductResponse productGetByMerchantReference($merchantReference)

Merchant: Get Product

For merchants.    Retrieve a product based on the merchant reference.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ProductApi();
$merchantReference = "merchantReference_example"; // string | 

try {
    $result = $api_instance->productGetByMerchantReference($merchantReference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetByMerchantReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantReference** | **string**|  |

### Return type

[**\ChannelEngine\ApiClient\Model\SingleOfMerchantProductResponse**](../Model/SingleOfMerchantProductResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetDataChanges**
> \ChannelEngine\ApiClient\Model\SingleOfChannelProductChangesResponse productGetDataChanges($maxCount)

Channel: Get Product Data Changes

For channels.    Get all products which have changes since the post http call to POST 'v2/products/data'.  The response contains the products which should be created, updated or removed from the channel.  After the products have been received and processed successfully 'v2/products/data' should  be called with the merchant references of the products which have been processed (see POST 'v2/products/data').   ChannelEnginewill save this information to make sure that the next call to GET 'v2/products/data' only returns the  products that really have changes (and therefore should be created, updated or deleted).  A channel willing to integrate with channelengine should therefore only do the following things:      1. Periodically poll 'v2/products/data' for changes.      2. If any products are returned, save, update or remove these products.      3. Send the merchant references of the products that have succesfully been processed      in step 2 to POST 'v2/products/data'.       These three simple steps will make sure that the products on the channel will be synchronized   with the products on ChannelEngine. ChannelEngine will use the API key to determine the customer  whose products should be returned. Note that child products are only returned if their parent product  has been acknowledged in a previous transaction. This way ChannelEngine knows the value of   'ChannelParentReference'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ProductApi();
$maxCount = 56; // int | Optional - limit the amount of products returned for each field              (ToBeCreated, ToBeUpdated, ToBeRemoved) to this number.

try {
    $result = $api_instance->productGetDataChanges($maxCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetDataChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxCount** | **int**| Optional - limit the amount of products returned for each field              (ToBeCreated, ToBeUpdated, ToBeRemoved) to this number. | [optional]

### Return type

[**\ChannelEngine\ApiClient\Model\SingleOfChannelProductChangesResponse**](../Model/SingleOfChannelProductChangesResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetOfferChanges**
> \ChannelEngine\ApiClient\Model\CollectionOfChannelOfferResponse productGetOfferChanges()

Channel: Get Product Offer Changes

For channels.                GET 'v2/products/offers' and POST 'v2/products/offers' closely resemble GET 'v2/products/data' and POST 'v2/products/data'. See the 'v2/products/data'  endpoints for documentation. The difference between both endpoints is that 'v2/products/offers' only returns Price and Stock updates and can (and should)  therefore be called more often to keep this information (which might change frequently) up to date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChannelEngine\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$api_instance = new ChannelEngine\ApiClient\Api\ProductApi();

try {
    $result = $api_instance->productGetOfferChanges();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetOfferChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ChannelEngine\ApiClient\Model\CollectionOfChannelOfferResponse**](../Model/CollectionOfChannelOfferResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

