<?php
/**
 * ReturnApi
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
 * ReturnApi Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReturnApi
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
     * @return ReturnApi
     */
    public function setApiClient(\ChannelEngine\ApiClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation returnDeclareForChannel
     *
     * Channel: Create Return
     *
     * @param \ChannelEngine\ApiClient\Model\ChannelReturnRequest $model  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\ApiResponse
     */
    public function returnDeclareForChannel($model)
    {
        list($response) = $this->returnDeclareForChannelWithHttpInfo($model);
        return $response;
    }

    /**
     * Operation returnDeclareForChannelWithHttpInfo
     *
     * Channel: Create Return
     *
     * @param \ChannelEngine\ApiClient\Model\ChannelReturnRequest $model  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function returnDeclareForChannelWithHttpInfo($model)
    {
        // verify the required parameter 'model' is set
        if ($model === null) {
            throw new \InvalidArgumentException('Missing the required parameter $model when calling returnDeclareForChannel');
        }
        // parse inputs
        $resourcePath = "/v2/returns/channel";
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
        if (isset($model)) {
            $_tempBody = $model;
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
                '/v2/returns/channel'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
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
     * Operation returnDeclareForMerchant
     *
     * Merchant: Create Return
     *
     * @param \ChannelEngine\ApiClient\Model\MerchantReturnRequest $model  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\ApiResponse
     */
    public function returnDeclareForMerchant($model)
    {
        list($response) = $this->returnDeclareForMerchantWithHttpInfo($model);
        return $response;
    }

    /**
     * Operation returnDeclareForMerchantWithHttpInfo
     *
     * Merchant: Create Return
     *
     * @param \ChannelEngine\ApiClient\Model\MerchantReturnRequest $model  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function returnDeclareForMerchantWithHttpInfo($model)
    {
        // verify the required parameter 'model' is set
        if ($model === null) {
            throw new \InvalidArgumentException('Missing the required parameter $model when calling returnDeclareForMerchant');
        }
        // parse inputs
        $resourcePath = "/v2/returns/merchant";
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
        if (isset($model)) {
            $_tempBody = $model;
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
                '/v2/returns/merchant'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
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
     * Operation returnGetDeclaredByChannel
     *
     * Merchant: Get Returns
     *
     * @param \DateTime $createdSince  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\CollectionOfMerchantReturnResponse
     */
    public function returnGetDeclaredByChannel($createdSince)
    {
        list($response) = $this->returnGetDeclaredByChannelWithHttpInfo($createdSince);
        return $response;
    }

    /**
     * Operation returnGetDeclaredByChannelWithHttpInfo
     *
     * Merchant: Get Returns
     *
     * @param \DateTime $createdSince  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\CollectionOfMerchantReturnResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function returnGetDeclaredByChannelWithHttpInfo($createdSince)
    {
        // verify the required parameter 'createdSince' is set
        if ($createdSince === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createdSince when calling returnGetDeclaredByChannel');
        }
        // parse inputs
        $resourcePath = "/v2/returns/merchant";
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
        if ($createdSince !== null) {
            $queryParams['createdSince'] = $this->apiClient->getSerializer()->toQueryValue($createdSince);
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
                '\ChannelEngine\ApiClient\Model\CollectionOfMerchantReturnResponse',
                '/v2/returns/merchant'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\CollectionOfMerchantReturnResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\CollectionOfMerchantReturnResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation returnGetDeclaredByMerchant
     *
     * Channel: Get Returns
     *
     * @param \DateTime $createdSince  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return \ChannelEngine\ApiClient\Model\CollectionOfChannelReturnResponse
     */
    public function returnGetDeclaredByMerchant($createdSince)
    {
        list($response) = $this->returnGetDeclaredByMerchantWithHttpInfo($createdSince);
        return $response;
    }

    /**
     * Operation returnGetDeclaredByMerchantWithHttpInfo
     *
     * Channel: Get Returns
     *
     * @param \DateTime $createdSince  (required)
     * @throws \ChannelEngine\ApiClient\ApiException on non-2xx response
     * @return array of \ChannelEngine\ApiClient\Model\CollectionOfChannelReturnResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function returnGetDeclaredByMerchantWithHttpInfo($createdSince)
    {
        // verify the required parameter 'createdSince' is set
        if ($createdSince === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createdSince when calling returnGetDeclaredByMerchant');
        }
        // parse inputs
        $resourcePath = "/v2/returns/channel";
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
        if ($createdSince !== null) {
            $queryParams['createdSince'] = $this->apiClient->getSerializer()->toQueryValue($createdSince);
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
                '\ChannelEngine\ApiClient\Model\CollectionOfChannelReturnResponse',
                '/v2/returns/channel'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChannelEngine\ApiClient\Model\CollectionOfChannelReturnResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChannelEngine\ApiClient\Model\CollectionOfChannelReturnResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
