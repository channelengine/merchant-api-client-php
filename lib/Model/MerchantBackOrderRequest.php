<?php
/**
 * MerchantBackOrderRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\ApiClient\Model;

use \ArrayAccess;

/**
 * MerchantBackOrderRequest Class Doc Comment
 *
 * @category    Class
 * @package     ChannelEngine\ApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MerchantBackOrderRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MerchantBackOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantBackOrderNo' => 'string',
        'merchantOrderNo' => 'string',
        'lines' => '\ChannelEngine\ApiClient\Model\MerchantBackOrderLineRequest[]'
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
        'merchantBackOrderNo' => 'MerchantBackOrderNo',
        'merchantOrderNo' => 'MerchantOrderNo',
        'lines' => 'Lines'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantBackOrderNo' => 'setMerchantBackOrderNo',
        'merchantOrderNo' => 'setMerchantOrderNo',
        'lines' => 'setLines'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantBackOrderNo' => 'getMerchantBackOrderNo',
        'merchantOrderNo' => 'getMerchantOrderNo',
        'lines' => 'getLines'
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
        $this->container['merchantBackOrderNo'] = isset($data['merchantBackOrderNo']) ? $data['merchantBackOrderNo'] : null;
        $this->container['merchantOrderNo'] = isset($data['merchantOrderNo']) ? $data['merchantOrderNo'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['merchantBackOrderNo'] === null) {
            $invalid_properties[] = "'merchantBackOrderNo' can't be null";
        }
        if ($this->container['merchantOrderNo'] === null) {
            $invalid_properties[] = "'merchantOrderNo' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalid_properties[] = "'lines' can't be null";
        }
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

        if ($this->container['merchantBackOrderNo'] === null) {
            return false;
        }
        if ($this->container['merchantOrderNo'] === null) {
            return false;
        }
        if ($this->container['lines'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets merchantBackOrderNo
     * @return string
     */
    public function getMerchantBackOrderNo()
    {
        return $this->container['merchantBackOrderNo'];
    }

    /**
     * Sets merchantBackOrderNo
     * @param string $merchantBackOrderNo
     * @return $this
     */
    public function setMerchantBackOrderNo($merchantBackOrderNo)
    {
        $this->container['merchantBackOrderNo'] = $merchantBackOrderNo;

        return $this;
    }

    /**
     * Gets merchantOrderNo
     * @return string
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     * @param string $merchantOrderNo
     * @return $this
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets lines
     * @return \ChannelEngine\ApiClient\Model\MerchantBackOrderLineRequest[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     * @param \ChannelEngine\ApiClient\Model\MerchantBackOrderLineRequest[] $lines
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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
            return json_encode(\ChannelEngine\ApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ChannelEngine\ApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


