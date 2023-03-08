<?php
/**
 * ReturnReason
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * ReturnReason Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnReason
{
    /**
     * Possible values of this enum
     */
    public const PRODUCT_DEFECT = 'PRODUCT_DEFECT';

    public const PRODUCT_UNSATISFACTORY = 'PRODUCT_UNSATISFACTORY';

    public const WRONG_PRODUCT = 'WRONG_PRODUCT';

    public const TOO_MANY_PRODUCTS = 'TOO_MANY_PRODUCTS';

    public const REFUSED = 'REFUSED';

    public const REFUSED_DAMAGED = 'REFUSED_DAMAGED';

    public const WRONG_ADDRESS = 'WRONG_ADDRESS';

    public const NOT_COLLECTED = 'NOT_COLLECTED';

    public const WRONG_SIZE = 'WRONG_SIZE';

    public const OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRODUCT_DEFECT,
            self::PRODUCT_UNSATISFACTORY,
            self::WRONG_PRODUCT,
            self::TOO_MANY_PRODUCTS,
            self::REFUSED,
            self::REFUSED_DAMAGED,
            self::WRONG_ADDRESS,
            self::NOT_COLLECTED,
            self::WRONG_SIZE,
            self::OTHER
        ];
    }
}


