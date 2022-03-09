<?php
/**
 * FulfillmentType
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: 2.9.12
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * FulfillmentType Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentType
{
    /**
     * Possible values of this enum
     */
    const ALL = 'ALL';
    const ONLY_MERCHANT = 'ONLY_MERCHANT';
    const ONLY_CHANNEL = 'ONLY_CHANNEL';
    const MIXED = 'MIXED';
    const INCLUDES_MERCHANT = 'INCLUDES_MERCHANT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::ONLY_MERCHANT,
            self::ONLY_CHANNEL,
            self::MIXED,
            self::INCLUDES_MERCHANT,
        ];
    }
}


