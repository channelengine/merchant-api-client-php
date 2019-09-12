<?php
/**
 * MerchantReturnResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;

use \ArrayAccess;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * MerchantReturnResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantReturnResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MerchantReturnResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantOrderNo' => 'string',
        'lines' => '\ChannelEngine\Merchant\ApiClient\Model\MerchantReturnLineResponse[]',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'merchantReturnNo' => 'string',
        'channelReturnNo' => 'string',
        'id' => 'int',
        'reason' => 'string',
        'customerComment' => 'string',
        'merchantComment' => 'string',
        'refundInclVat' => 'float',
        'refundExclVat' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantOrderNo' => null,
        'lines' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'merchantReturnNo' => null,
        'channelReturnNo' => null,
        'id' => 'int32',
        'reason' => null,
        'customerComment' => null,
        'merchantComment' => null,
        'refundInclVat' => 'decimal',
        'refundExclVat' => 'decimal'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantOrderNo' => 'MerchantOrderNo',
        'lines' => 'Lines',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
        'merchantReturnNo' => 'MerchantReturnNo',
        'channelReturnNo' => 'ChannelReturnNo',
        'id' => 'Id',
        'reason' => 'Reason',
        'customerComment' => 'CustomerComment',
        'merchantComment' => 'MerchantComment',
        'refundInclVat' => 'RefundInclVat',
        'refundExclVat' => 'RefundExclVat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantOrderNo' => 'setMerchantOrderNo',
        'lines' => 'setLines',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'merchantReturnNo' => 'setMerchantReturnNo',
        'channelReturnNo' => 'setChannelReturnNo',
        'id' => 'setId',
        'reason' => 'setReason',
        'customerComment' => 'setCustomerComment',
        'merchantComment' => 'setMerchantComment',
        'refundInclVat' => 'setRefundInclVat',
        'refundExclVat' => 'setRefundExclVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantOrderNo' => 'getMerchantOrderNo',
        'lines' => 'getLines',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'merchantReturnNo' => 'getMerchantReturnNo',
        'channelReturnNo' => 'getChannelReturnNo',
        'id' => 'getId',
        'reason' => 'getReason',
        'customerComment' => 'getCustomerComment',
        'merchantComment' => 'getMerchantComment',
        'refundInclVat' => 'getRefundInclVat',
        'refundExclVat' => 'getRefundExclVat'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const REASON_PRODUCT_DEFECT = 'PRODUCT_DEFECT';
    const REASON_PRODUCT_UNSATISFACTORY = 'PRODUCT_UNSATISFACTORY';
    const REASON_WRONG_PRODUCT = 'WRONG_PRODUCT';
    const REASON_TOO_MANY_PRODUCTS = 'TOO_MANY_PRODUCTS';
    const REASON_REFUSED = 'REFUSED';
    const REASON_REFUSED_DAMAGED = 'REFUSED_DAMAGED';
    const REASON_WRONG_ADDRESS = 'WRONG_ADDRESS';
    const REASON_NOT_COLLECTED = 'NOT_COLLECTED';
    const REASON_WRONG_SIZE = 'WRONG_SIZE';
    const REASON_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_PRODUCT_DEFECT,
            self::REASON_PRODUCT_UNSATISFACTORY,
            self::REASON_WRONG_PRODUCT,
            self::REASON_TOO_MANY_PRODUCTS,
            self::REASON_REFUSED,
            self::REASON_REFUSED_DAMAGED,
            self::REASON_WRONG_ADDRESS,
            self::REASON_NOT_COLLECTED,
            self::REASON_WRONG_SIZE,
            self::REASON_OTHER,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchantOrderNo'] = isset($data['merchantOrderNo']) ? $data['merchantOrderNo'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['merchantReturnNo'] = isset($data['merchantReturnNo']) ? $data['merchantReturnNo'] : null;
        $this->container['channelReturnNo'] = isset($data['channelReturnNo']) ? $data['channelReturnNo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['customerComment'] = isset($data['customerComment']) ? $data['customerComment'] : null;
        $this->container['merchantComment'] = isset($data['merchantComment']) ? $data['merchantComment'] : null;
        $this->container['refundInclVat'] = isset($data['refundInclVat']) ? $data['refundInclVat'] : null;
        $this->container['refundExclVat'] = isset($data['refundExclVat']) ? $data['refundExclVat'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['customerComment']) && (mb_strlen($this->container['customerComment']) > 4001)) {
            $invalidProperties[] = "invalid value for 'customerComment', the character length must be smaller than or equal to 4001.";
        }

        if (!is_null($this->container['customerComment']) && (mb_strlen($this->container['customerComment']) < 0)) {
            $invalidProperties[] = "invalid value for 'customerComment', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchantComment']) && (mb_strlen($this->container['merchantComment']) > 4001)) {
            $invalidProperties[] = "invalid value for 'merchantComment', the character length must be smaller than or equal to 4001.";
        }

        if (!is_null($this->container['merchantComment']) && (mb_strlen($this->container['merchantComment']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantComment', the character length must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets merchantOrderNo
     *
     * @return string
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string $merchantOrderNo The unique order reference used by the Merchant
     *
     * @return $this
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\MerchantReturnLineResponse[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\MerchantReturnLineResponse[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt The date at which the return was created in ChannelEngine
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt The date at which the return was last modified in ChannelEngine
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets merchantReturnNo
     *
     * @return string
     */
    public function getMerchantReturnNo()
    {
        return $this->container['merchantReturnNo'];
    }

    /**
     * Sets merchantReturnNo
     *
     * @param string $merchantReturnNo The unique return reference used by the Merchant, will be empty in case of a channel or unacknowledged return
     *
     * @return $this
     */
    public function setMerchantReturnNo($merchantReturnNo)
    {
        $this->container['merchantReturnNo'] = $merchantReturnNo;

        return $this;
    }

    /**
     * Gets channelReturnNo
     *
     * @return string
     */
    public function getChannelReturnNo()
    {
        return $this->container['channelReturnNo'];
    }

    /**
     * Sets channelReturnNo
     *
     * @param string $channelReturnNo The unique return reference used by the Channel, will be empty in case of a merchant return
     *
     * @return $this
     */
    public function setChannelReturnNo($channelReturnNo)
    {
        $this->container['channelReturnNo'] = $channelReturnNo;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The unique return reference used by ChannelEngine
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason The reason code of the return
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($reason) && !in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets customerComment
     *
     * @return string
     */
    public function getCustomerComment()
    {
        return $this->container['customerComment'];
    }

    /**
     * Sets customerComment
     *
     * @param string $customerComment Optional. Comment of customer on the (reason of) the return
     *
     * @return $this
     */
    public function setCustomerComment($customerComment)
    {
        if (!is_null($customerComment) && (mb_strlen($customerComment) > 4001)) {
            throw new \InvalidArgumentException('invalid length for $customerComment when calling MerchantReturnResponse., must be smaller than or equal to 4001.');
        }
        if (!is_null($customerComment) && (mb_strlen($customerComment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $customerComment when calling MerchantReturnResponse., must be bigger than or equal to 0.');
        }

        $this->container['customerComment'] = $customerComment;

        return $this;
    }

    /**
     * Gets merchantComment
     *
     * @return string
     */
    public function getMerchantComment()
    {
        return $this->container['merchantComment'];
    }

    /**
     * Sets merchantComment
     *
     * @param string $merchantComment Optional. Comment of merchant on the return.
     *
     * @return $this
     */
    public function setMerchantComment($merchantComment)
    {
        if (!is_null($merchantComment) && (mb_strlen($merchantComment) > 4001)) {
            throw new \InvalidArgumentException('invalid length for $merchantComment when calling MerchantReturnResponse., must be smaller than or equal to 4001.');
        }
        if (!is_null($merchantComment) && (mb_strlen($merchantComment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantComment when calling MerchantReturnResponse., must be bigger than or equal to 0.');
        }

        $this->container['merchantComment'] = $merchantComment;

        return $this;
    }

    /**
     * Gets refundInclVat
     *
     * @return float
     */
    public function getRefundInclVat()
    {
        return $this->container['refundInclVat'];
    }

    /**
     * Sets refundInclVat
     *
     * @param float $refundInclVat Refund amount incl. VAT
     *
     * @return $this
     */
    public function setRefundInclVat($refundInclVat)
    {
        $this->container['refundInclVat'] = $refundInclVat;

        return $this;
    }

    /**
     * Gets refundExclVat
     *
     * @return float
     */
    public function getRefundExclVat()
    {
        return $this->container['refundExclVat'];
    }

    /**
     * Sets refundExclVat
     *
     * @param float $refundExclVat Refund amount excl. VAT
     *
     * @return $this
     */
    public function setRefundExclVat($refundExclVat)
    {
        $this->container['refundExclVat'] = $refundExclVat;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


