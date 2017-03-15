# Swagger\Client\ClientApi

All URIs are relative to *https://demo.channelengine.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientGet**](ClientApi.md#clientGet) | **GET** /v2/clients/{language} | Get API Client


# **clientGet**
> \SplFileObject clientGet($language)

Get API Client

This call generates a Swagger API client and returns it as a ZIP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ClientApi();
$language = "language_example"; // string | The programming language

try {
    $result = $api_instance->clientGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| The programming language |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

