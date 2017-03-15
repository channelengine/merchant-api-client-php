<?php
/**
 * ChannelProductChangesResponse
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
 * ChannelProductChangesResponse Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChannelProductChangesResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ChannelProductChangesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'to_be_created' => '\Swagger\Client\Model\ChannelProductResponse[]',
        'to_be_updated' => '\Swagger\Client\Model\ChannelProductResponse[]',
        'to_be_removed' => 'string[]'
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
        'to_be_created' => 'ToBeCreated',
        'to_be_updated' => 'ToBeUpdated',
        'to_be_removed' => 'ToBeRemoved'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'to_be_created' => 'setToBeCreated',
        'to_be_updated' => 'setToBeUpdated',
        'to_be_removed' => 'setToBeRemoved'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'to_be_created' => 'getToBeCreated',
        'to_be_updated' => 'getToBeUpdated',
        'to_be_removed' => 'getToBeRemoved'
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
        $this->container['to_be_created'] = isset($data['to_be_created']) ? $data['to_be_created'] : null;
        $this->container['to_be_updated'] = isset($data['to_be_updated']) ? $data['to_be_updated'] : null;
        $this->container['to_be_removed'] = isset($data['to_be_removed']) ? $data['to_be_removed'] : null;
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
     * Gets to_be_created
     * @return \Swagger\Client\Model\ChannelProductResponse[]
     */
    public function getToBeCreated()
    {
        return $this->container['to_be_created'];
    }

    /**
     * Sets to_be_created
     * @param \Swagger\Client\Model\ChannelProductResponse[] $to_be_created
     * @return $this
     */
    public function setToBeCreated($to_be_created)
    {
        $this->container['to_be_created'] = $to_be_created;

        return $this;
    }

    /**
     * Gets to_be_updated
     * @return \Swagger\Client\Model\ChannelProductResponse[]
     */
    public function getToBeUpdated()
    {
        return $this->container['to_be_updated'];
    }

    /**
     * Sets to_be_updated
     * @param \Swagger\Client\Model\ChannelProductResponse[] $to_be_updated
     * @return $this
     */
    public function setToBeUpdated($to_be_updated)
    {
        $this->container['to_be_updated'] = $to_be_updated;

        return $this;
    }

    /**
     * Gets to_be_removed
     * @return string[]
     */
    public function getToBeRemoved()
    {
        return $this->container['to_be_removed'];
    }

    /**
     * Sets to_be_removed
     * @param string[] $to_be_removed
     * @return $this
     */
    public function setToBeRemoved($to_be_removed)
    {
        $this->container['to_be_removed'] = $to_be_removed;

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

