<?php
/**
 * CollectionOfChannelReturnResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CollectionOfChannelReturnResponse Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CollectionOfChannelReturnResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CollectionOfChannelReturnResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'content' => '\Swagger\Client\Model\ChannelReturnResponse[]',
        'count' => 'int',
        'status_code' => 'int',
        'success' => 'bool',
        'message' => 'string',
        'validation_errors' => 'map[string,string[]]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'content' => 'Content',
        'count' => 'Count',
        'status_code' => 'StatusCode',
        'success' => 'Success',
        'message' => 'Message',
        'validation_errors' => 'ValidationErrors'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'count' => 'setCount',
        'status_code' => 'setStatusCode',
        'success' => 'setSuccess',
        'message' => 'setMessage',
        'validation_errors' => 'setValidationErrors'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'count' => 'getCount',
        'status_code' => 'getStatusCode',
        'success' => 'getSuccess',
        'message' => 'getMessage',
        'validation_errors' => 'getValidationErrors'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets content
     * @return \Swagger\Client\Model\ChannelReturnResponse[]
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param \Swagger\Client\Model\ChannelReturnResponse[] $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets status_code
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     * @param int $status_code
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets success
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     * @param bool $success
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets validation_errors
     * @return map[string,string[]]
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     * @param map[string,string[]] $validation_errors
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {
        $this->container['validation_errors'] = $validation_errors;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


