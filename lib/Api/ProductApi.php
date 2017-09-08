<?php
/**
 * ProductApi
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\ApiClient\Api;

use \ChannelEngine\ApiClient\ApiClient;
use \ChannelEngine\ApiClient\ApiException;
use \ChannelEngine\ApiClient\Configuration;
use \ChannelEngine\ApiClient\ObjectSerializer;

/**
 * ProductApi Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductApi
{
    /**
     * API Client
     *
     * @var \ChannelEngine\ApiClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ChannelEngine\ApiClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ChannelEngine\ApiClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ChannelEngine\ApiClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ChannelEngine\ApiClient\ApiClient $apiClient set the API client
     *
     * @return ProductApi
     */
    public function setApiClient(\ChannelEngine\ApiClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation productAcknowledgeDataChanges
     *
     * Channel: Acknowledge Product Data Changes
     *
     * @param \ChannelEngine\ApiClient\Model\ChannelProcessedChangesRequest $changes The merchant references of the products which have been                successfully created, updated or deleted (after a call to &#39;GetDataChanges&#39;) (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\ApiResponse
     */
    public function productAcknowledgeDataChanges($changes)
    {
        list($response) = $this->productAcknowledgeDataChangesWithHttpInfo($changes);
        return $response;
    }

    /**
     * Operation productAcknowledgeDataChangesWithHttpInfo
     *
     * Channel: Acknowledge Product Data Changes
     *
     * @param \ChannelEngine\ApiClient\Model\ChannelProcessedChangesRequest $changes The merchant references of the products which have been                successfully created, updated or deleted (after a call to &#39;GetDataChanges&#39;) (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function productAcknowledgeDataChangesWithHttpInfo($changes)
    {
        // verify the required parameter 'changes' is set
        if ($changes === null) {
            throw new \InvalidArgumentException('Missing the required parameter $changes when calling productAcknowledgeDataChanges');
        }
        // parse inputs
        $resourcePath = "/v2/products/data";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($changes)) {
            $_tempBody = $changes;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
            $queryParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChannelEngine\ApiClient\Model\ApiResponse',
                '/v2/products/data'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation productAcknowledgeOfferChanges
     *
     * Channel: Acknowledge Product Offer Changes
     *
     * @param string[] $changes The channel references of the updated products (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\ApiResponse
     */
    public function productAcknowledgeOfferChanges($changes)
    {
        list($response) = $this->productAcknowledgeOfferChangesWithHttpInfo($changes);
        return $response;
    }

    /**
     * Operation productAcknowledgeOfferChangesWithHttpInfo
     *
     * Channel: Acknowledge Product Offer Changes
     *
     * @param string[] $changes The channel references of the updated products (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function productAcknowledgeOfferChangesWithHttpInfo($changes)
    {
        // verify the required parameter 'changes' is set
        if ($changes === null) {
            throw new \InvalidArgumentException('Missing the required parameter $changes when calling productAcknowledgeOfferChanges');
        }
        // parse inputs
        $resourcePath = "/v2/products/offers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($changes)) {
            $_tempBody = $changes;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
            $queryParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChannelEngine\ApiClient\Model\ApiResponse',
                '/v2/products/offers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation productCreate
     *
     * Merchant: Create Product
     *
     * @param \ChannelEngine\ApiClient\Model\MerchantProductRequest[] $products  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\SingleOfProductCreationResult
     */
    public function productCreate($products)
    {
        list($response) = $this->productCreateWithHttpInfo($products);
        return $response;
    }

    /**
     * Operation productCreateWithHttpInfo
     *
     * Merchant: Create Product
     *
     * @param \ChannelEngine\ApiClient\Model\MerchantProductRequest[] $products  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\SingleOfProductCreationResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function productCreateWithHttpInfo($products)
    {
        // verify the required parameter 'products' is set
        if ($products === null) {
            throw new \InvalidArgumentException('Missing the required parameter $products when calling productCreate');
        }
        // parse inputs
        $resourcePath = "/v2/products";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'text/json', 'application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($products)) {
            $_tempBody = $products;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
            $queryParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChannelEngine\ApiClient\Model\SingleOfProductCreationResult',
                '/v2/products'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\SingleOfProductCreationResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\SingleOfProductCreationResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation productDelete
     *
     * Merchant: Delete Product
     *
     * @param string $merchantProductNo  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\ApiResponse
     */
    public function productDelete($merchantProductNo)
    {
        list($response) = $this->productDeleteWithHttpInfo($merchantProductNo);
        return $response;
    }

    /**
     * Operation productDeleteWithHttpInfo
     *
     * Merchant: Delete Product
     *
     * @param string $merchantProductNo  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function productDeleteWithHttpInfo($merchantProductNo)
    {
        // verify the required parameter 'merchantProductNo' is set
        if ($merchantProductNo === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchantProductNo when calling productDelete');
        }
        // parse inputs
        $resourcePath = "/v2/products/{merchantProductNo}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($merchantProductNo !== null) {
            $resourcePath = str_replace(
                "{" . "merchantProductNo" . "}",
                $this->apiClient->getSerializer()->toPathValue($merchantProductNo),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
            $queryParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChannelEngine\ApiClient\Model\ApiResponse',
                '/v2/products/{merchantProductNo}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation productGetByMerchantProductNo
     *
     * Merchant: Get Product
     *
     * @param string $merchantProductNo  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\SingleOfMerchantProductResponse
     */
    public function productGetByMerchantProductNo($merchantProductNo)
    {
        list($response) = $this->productGetByMerchantProductNoWithHttpInfo($merchantProductNo);
        return $response;
    }

    /**
     * Operation productGetByMerchantProductNoWithHttpInfo
     *
     * Merchant: Get Product
     *
     * @param string $merchantProductNo  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\SingleOfMerchantProductResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function productGetByMerchantProductNoWithHttpInfo($merchantProductNo)
    {
        // verify the required parameter 'merchantProductNo' is set
        if ($merchantProductNo === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchantProductNo when calling productGetByMerchantProductNo');
        }
        // parse inputs
        $resourcePath = "/v2/products/merchant/{merchantProductNo}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($merchantProductNo !== null) {
            $resourcePath = str_replace(
                "{" . "merchantProductNo" . "}",
                $this->apiClient->getSerializer()->toPathValue($merchantProductNo),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
            $queryParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChannelEngine\ApiClient\Model\SingleOfMerchantProductResponse',
                '/v2/products/merchant/{merchantProductNo}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\SingleOfMerchantProductResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\SingleOfMerchantProductResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\SingleOfMerchantProductResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation productGetDataChanges
     *
     * Channel: Get Product Data Changes
     *
     * @param int $maxCount Optional - limit the amount of products returned for each field              (ToBeCreated, ToBeUpdated, ToBeRemoved) to this number. (optional)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\SingleOfChannelProductChangesResponse
     */
    public function productGetDataChanges($maxCount = null)
    {
        list($response) = $this->productGetDataChangesWithHttpInfo($maxCount);
        return $response;
    }

    /**
     * Operation productGetDataChangesWithHttpInfo
     *
     * Channel: Get Product Data Changes
     *
     * @param int $maxCount Optional - limit the amount of products returned for each field              (ToBeCreated, ToBeUpdated, ToBeRemoved) to this number. (optional)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\SingleOfChannelProductChangesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function productGetDataChangesWithHttpInfo($maxCount = null)
    {
        // parse inputs
        $resourcePath = "/v2/products/data";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($maxCount !== null) {
            $queryParams['maxCount'] = $this->apiClient->getSerializer()->toQueryValue($maxCount);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
            $queryParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChannelEngine\ApiClient\Model\SingleOfChannelProductChangesResponse',
                '/v2/products/data'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\SingleOfChannelProductChangesResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\SingleOfChannelProductChangesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation productGetOfferChanges
     *
     * Channel: Get Product Offer Changes
     *
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\CollectionOfChannelOfferResponse
     */
    public function productGetOfferChanges()
    {
        list($response) = $this->productGetOfferChangesWithHttpInfo();
        return $response;
    }

    /**
     * Operation productGetOfferChangesWithHttpInfo
     *
     * Channel: Get Product Offer Changes
     *
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\CollectionOfChannelOfferResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function productGetOfferChangesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v2/products/offers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('apikey');
        if (strlen($apiKey) !== 0) {
            $queryParams['apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChannelEngine\ApiClient\Model\CollectionOfChannelOfferResponse',
                '/v2/products/offers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\CollectionOfChannelOfferResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\CollectionOfChannelOfferResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
