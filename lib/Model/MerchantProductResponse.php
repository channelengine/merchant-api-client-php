<?php
/**
 * MerchantProductResponse
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
 * MerchantProductResponse Class Doc Comment
 *
 * @category    Class
 * @package     ChannelEngine\ApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MerchantProductResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MerchantProductResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isActive' => 'bool',
        'name' => 'string',
        'description' => 'string',
        'brand' => 'string',
        'size' => 'string',
        'color' => 'string',
        'ean' => 'string',
        'manufacturerProductNumber' => 'string',
        'stock' => 'int',
        'price' => 'double',
        'mSRP' => 'double',
        'purchasePrice' => 'double',
        'vatRateType' => 'string',
        'shippingCost' => 'double',
        'shippingTime' => 'string',
        'url' => 'string',
        'imageUrl' => 'string',
        'categoryTrail' => 'string',
        'extraData' => '\ChannelEngine\ApiClient\Model\ExtraDataItem[]'
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
        'isActive' => 'IsActive',
        'name' => 'Name',
        'description' => 'Description',
        'brand' => 'Brand',
        'size' => 'Size',
        'color' => 'Color',
        'ean' => 'Ean',
        'manufacturerProductNumber' => 'ManufacturerProductNumber',
        'stock' => 'Stock',
        'price' => 'Price',
        'mSRP' => 'MSRP',
        'purchasePrice' => 'PurchasePrice',
        'vatRateType' => 'VatRateType',
        'shippingCost' => 'ShippingCost',
        'shippingTime' => 'ShippingTime',
        'url' => 'Url',
        'imageUrl' => 'ImageUrl',
        'categoryTrail' => 'CategoryTrail',
        'extraData' => 'ExtraData'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'isActive' => 'setIsActive',
        'name' => 'setName',
        'description' => 'setDescription',
        'brand' => 'setBrand',
        'size' => 'setSize',
        'color' => 'setColor',
        'ean' => 'setEan',
        'manufacturerProductNumber' => 'setManufacturerProductNumber',
        'stock' => 'setStock',
        'price' => 'setPrice',
        'mSRP' => 'setMSRP',
        'purchasePrice' => 'setPurchasePrice',
        'vatRateType' => 'setVatRateType',
        'shippingCost' => 'setShippingCost',
        'shippingTime' => 'setShippingTime',
        'url' => 'setUrl',
        'imageUrl' => 'setImageUrl',
        'categoryTrail' => 'setCategoryTrail',
        'extraData' => 'setExtraData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'isActive' => 'getIsActive',
        'name' => 'getName',
        'description' => 'getDescription',
        'brand' => 'getBrand',
        'size' => 'getSize',
        'color' => 'getColor',
        'ean' => 'getEan',
        'manufacturerProductNumber' => 'getManufacturerProductNumber',
        'stock' => 'getStock',
        'price' => 'getPrice',
        'mSRP' => 'getMSRP',
        'purchasePrice' => 'getPurchasePrice',
        'vatRateType' => 'getVatRateType',
        'shippingCost' => 'getShippingCost',
        'shippingTime' => 'getShippingTime',
        'url' => 'getUrl',
        'imageUrl' => 'getImageUrl',
        'categoryTrail' => 'getCategoryTrail',
        'extraData' => 'getExtraData'
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

    const VAT_RATE_TYPE_STANDARD = 'STANDARD';
    const VAT_RATE_TYPE_REDUCED = 'REDUCED';
    const VAT_RATE_TYPE_SUPER_REDUCED = 'SUPER_REDUCED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVatRateTypeAllowableValues()
    {
        return [
            self::VAT_RATE_TYPE_STANDARD,
            self::VAT_RATE_TYPE_REDUCED,
            self::VAT_RATE_TYPE_SUPER_REDUCED,
        ];
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
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['manufacturerProductNumber'] = isset($data['manufacturerProductNumber']) ? $data['manufacturerProductNumber'] : null;
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['mSRP'] = isset($data['mSRP']) ? $data['mSRP'] : null;
        $this->container['purchasePrice'] = isset($data['purchasePrice']) ? $data['purchasePrice'] : null;
        $this->container['vatRateType'] = isset($data['vatRateType']) ? $data['vatRateType'] : null;
        $this->container['shippingCost'] = isset($data['shippingCost']) ? $data['shippingCost'] : null;
        $this->container['shippingTime'] = isset($data['shippingTime']) ? $data['shippingTime'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['categoryTrail'] = isset($data['categoryTrail']) ? $data['categoryTrail'] : null;
        $this->container['extraData'] = isset($data['extraData']) ? $data['extraData'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["STANDARD", "REDUCED", "SUPER_REDUCED"];
        if (!in_array($this->container['vatRateType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'vatRateType', must be one of 'STANDARD', 'REDUCED', 'SUPER_REDUCED'.";
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

        $allowed_values = ["STANDARD", "REDUCED", "SUPER_REDUCED"];
        if (!in_array($this->container['vatRateType'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets isActive
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets brand
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     * @param string $brand
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets size
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param string $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param string $color
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets ean
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     * @param string $ean
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets manufacturerProductNumber
     * @return string
     */
    public function getManufacturerProductNumber()
    {
        return $this->container['manufacturerProductNumber'];
    }

    /**
     * Sets manufacturerProductNumber
     * @param string $manufacturerProductNumber
     * @return $this
     */
    public function setManufacturerProductNumber($manufacturerProductNumber)
    {
        $this->container['manufacturerProductNumber'] = $manufacturerProductNumber;

        return $this;
    }

    /**
     * Gets stock
     * @return int
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     * @param int $stock
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price Price, including VAT.
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets mSRP
     * @return double
     */
    public function getMSRP()
    {
        return $this->container['mSRP'];
    }

    /**
     * Sets mSRP
     * @param double $mSRP Manufacturer's suggested retail price
     * @return $this
     */
    public function setMSRP($mSRP)
    {
        $this->container['mSRP'] = $mSRP;

        return $this;
    }

    /**
     * Gets purchasePrice
     * @return double
     */
    public function getPurchasePrice()
    {
        return $this->container['purchasePrice'];
    }

    /**
     * Sets purchasePrice
     * @param double $purchasePrice
     * @return $this
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->container['purchasePrice'] = $purchasePrice;

        return $this;
    }

    /**
     * Gets vatRateType
     * @return string
     */
    public function getVatRateType()
    {
        return $this->container['vatRateType'];
    }

    /**
     * Sets vatRateType
     * @param string $vatRateType The type of VAT which applies to this product.  See: http://ec.europa.eu/taxation_customs/taxation/vat/topics/rates_en.htm
     * @return $this
     */
    public function setVatRateType($vatRateType)
    {
        $allowed_values = array('STANDARD', 'REDUCED', 'SUPER_REDUCED');
        if (!is_null($vatRateType) && (!in_array($vatRateType, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'vatRateType', must be one of 'STANDARD', 'REDUCED', 'SUPER_REDUCED'");
        }
        $this->container['vatRateType'] = $vatRateType;

        return $this;
    }

    /**
     * Gets shippingCost
     * @return double
     */
    public function getShippingCost()
    {
        return $this->container['shippingCost'];
    }

    /**
     * Sets shippingCost
     * @param double $shippingCost
     * @return $this
     */
    public function setShippingCost($shippingCost)
    {
        $this->container['shippingCost'] = $shippingCost;

        return $this;
    }

    /**
     * Gets shippingTime
     * @return string
     */
    public function getShippingTime()
    {
        return $this->container['shippingTime'];
    }

    /**
     * Sets shippingTime
     * @param string $shippingTime A textual representation of the shippingtime.  For example, in Dutch: 'Op werkdagen voor 22:00 uur besteld, morgen in huis'
     * @return $this
     */
    public function setShippingTime($shippingTime)
    {
        $this->container['shippingTime'] = $shippingTime;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url A URL pointing to the merchant's webpage  which displays this product.
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets imageUrl
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     * @param string $imageUrl A URL at which an image of this product  can be found.
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets categoryTrail
     * @return string
     */
    public function getCategoryTrail()
    {
        return $this->container['categoryTrail'];
    }

    /**
     * Sets categoryTrail
     * @param string $categoryTrail The category to which this product belongs.  Please supply this field in the following format:  'maincategory &gt; category &gt; subcategory'  For example:  'vehicles &gt; bikes &gt; mountainbike'
     * @return $this
     */
    public function setCategoryTrail($categoryTrail)
    {
        $this->container['categoryTrail'] = $categoryTrail;

        return $this;
    }

    /**
     * Gets extraData
     * @return \ChannelEngine\ApiClient\Model\ExtraDataItem[]
     */
    public function getExtraData()
    {
        return $this->container['extraData'];
    }

    /**
     * Sets extraData
     * @param \ChannelEngine\ApiClient\Model\ExtraDataItem[] $extraData An optional list of key-value pairs containing  extra data about this product. This data can be  sent to channels or used for filtering products.
     * @return $this
     */
    public function setExtraData($extraData)
    {
        $this->container['extraData'] = $extraData;

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


