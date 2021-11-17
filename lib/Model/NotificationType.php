<?php
/**
 * NotificationType
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
 * The version of the OpenAPI document: 2.9.10
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
 * NotificationType Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NotificationType
{
    /**
     * Possible values of this enum
     */
    const CHANNEL_ORDER_ANONYMIZED_BY_REQUEST = 'CHANNEL_ORDER_ANONYMIZED_BY_REQUEST';
    const CHANNEL_ORDER_ANONYMIZED_AUTOMATICALLY = 'CHANNEL_ORDER_ANONYMIZED_AUTOMATICALLY';
    const CHANNEL_ORDER_CORRECTION_NEEDED = 'CHANNEL_ORDER_CORRECTION_NEEDED';
    const CHANNEL_ORDER_DUPLICATE_LINE = 'CHANNEL_ORDER_DUPLICATE_LINE';
    const CHANNEL_ORDER_INVOICE_SEND_FAILED = 'CHANNEL_ORDER_INVOICE_SEND_FAILED';
    const CHANNEL_ORDER_IMPORT_FAILED = 'CHANNEL_ORDER_IMPORT_FAILED';
    const CHANNEL_ORDER_NEW = 'CHANNEL_ORDER_NEW';
    const CHANNEL_ORDER_OVERDUE = 'CHANNEL_ORDER_OVERDUE';
    const CHANNEL_ORDER_TOO_LONG_ON_NEW = 'CHANNEL_ORDER_TOO_LONG_ON_NEW';
    const CHANNEL_PRODUCT_DATA_EXPORT_FAILED = 'CHANNEL_PRODUCT_DATA_EXPORT_FAILED';
    const CHANNEL_PRODUCT_DATA_IMPORT_FAILED = 'CHANNEL_PRODUCT_DATA_IMPORT_FAILED';
    const CHANNEL_RETURN_EXPORT_FAILED = 'CHANNEL_RETURN_EXPORT_FAILED';
    const CHANNEL_RETURN_IMPORT_FAILED = 'CHANNEL_RETURN_IMPORT_FAILED';
    const CHANNEL_RETURN_NEW = 'CHANNEL_RETURN_NEW';
    const CHANNEL_RETURN_OVERDUE = 'CHANNEL_RETURN_OVERDUE';
    const CHANNEL_REFUND_EXPORT_FAILED = 'CHANNEL_REFUND_EXPORT_FAILED';
    const CHANNEL_REFUND_LINE_ITEMS_ERROR = 'CHANNEL_REFUND_LINE_ITEMS_ERROR';
    const CHANNEL_RETURN_DELETED = 'CHANNEL_RETURN_DELETED';
    const CHANNEL_SHIPMENT_IMPORT_FAILED = 'CHANNEL_SHIPMENT_IMPORT_FAILED';
    const CHANNEL_SHIPMENT_IMPORT_STATUS_FAILED = 'CHANNEL_SHIPMENT_IMPORT_STATUS_FAILED';
    const CHANNEL_SHIPMENT_EXPORT_FAILED = 'CHANNEL_SHIPMENT_EXPORT_FAILED';
    const CHANNEL_SHIPMENT_IMPORT_MISSING_LINE_FAILED = 'CHANNEL_SHIPMENT_IMPORT_MISSING_LINE_FAILED';
    const CHANNEL_FULFILLMENT_SHIPMENT_IMPORT_STATUS_FAILED = 'CHANNEL_FULFILLMENT_SHIPMENT_IMPORT_STATUS_FAILED';
    const CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_FAILED = 'CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_FAILED';
    const CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_SUCCEEDED = 'CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_SUCCEEDED';
    const CHANNEL_FULFILLMENT_SHIPMENT_LINE_FOR_CLOSED_ORDER = 'CHANNEL_FULFILLMENT_SHIPMENT_LINE_FOR_CLOSED_ORDER';
    const CHANNELENGINE_SUPPORT_NOTIFICATION = 'CHANNELENGINE_SUPPORT_NOTIFICATION';
    const CHANNELENGINE_WEBHOOK_RQUEST_FAILED = 'CHANNELENGINE_WEBHOOK_RQUEST_FAILED';
    const FEED_NO_PRODUCTS_FAILED = 'FEED_NO_PRODUCTS_FAILED';
    const FEED_IMPORT_FAILED = 'FEED_IMPORT_FAILED';
    const GLOBAL_MESSAGE = 'GLOBAL_MESSAGE';
    const MERCHANT_ORDER_EXPORT_FAILED = 'MERCHANT_ORDER_EXPORT_FAILED';
    const MERCHANT_ORDER_EXPORT_LINES_CANCELLED = 'MERCHANT_ORDER_EXPORT_LINES_CANCELLED';
    const PLUGIN_INVALID_SETTING = 'PLUGIN_INVALID_SETTING';
    const PLUGIN_DEACTIVATED = 'PLUGIN_DEACTIVATED';
    const PRODUCT_BUNDLE_IMPORT_FAILED = 'PRODUCT_BUNDLE_IMPORT_FAILED';
    const CHANNEL_ORDER_CANCELLATION_REQUEST_NEW = 'CHANNEL_ORDER_CANCELLATION_REQUEST_NEW';
    const CHANNEL_CANCELLATION_EXPORT_FAILED = 'CHANNEL_CANCELLATION_EXPORT_FAILED';
    const MERCHANT_CANCELLATION_IMPORT_FAILED = 'MERCHANT_CANCELLATION_IMPORT_FAILED';
    const OAUTH_REFRESH_TOKEN_EXPIRATION = 'OAUTH_REFRESH_TOKEN_EXPIRATION';
    const MERCHANT_STOCK_UPDATE_FAILED = 'MERCHANT_STOCK_UPDATE_FAILED';
    const FEED_INVALID_PRODUCTS_OCCURED = 'FEED_INVALID_PRODUCTS_OCCURED';
    const CHANNEL_SHIPMENT_EXPORT_INVALID_MERCHANTSHIPMENTNO = 'CHANNEL_SHIPMENT_EXPORT_INVALID_MERCHANTSHIPMENTNO';
    const CHANNEL_PRODUCT_OFFER_EXPORT_FAILED = 'CHANNEL_PRODUCT_OFFER_EXPORT_FAILED';
    const TRANLATIONS_IMAGE_TAGS_BROKEN = 'TRANLATIONS_IMAGE_TAGS_BROKEN';
    const TAX_PROVIDER_NOT_ACTIVATED = 'TAX_PROVIDER_NOT_ACTIVATED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHANNEL_ORDER_ANONYMIZED_BY_REQUEST,
            self::CHANNEL_ORDER_ANONYMIZED_AUTOMATICALLY,
            self::CHANNEL_ORDER_CORRECTION_NEEDED,
            self::CHANNEL_ORDER_DUPLICATE_LINE,
            self::CHANNEL_ORDER_INVOICE_SEND_FAILED,
            self::CHANNEL_ORDER_IMPORT_FAILED,
            self::CHANNEL_ORDER_NEW,
            self::CHANNEL_ORDER_OVERDUE,
            self::CHANNEL_ORDER_TOO_LONG_ON_NEW,
            self::CHANNEL_PRODUCT_DATA_EXPORT_FAILED,
            self::CHANNEL_PRODUCT_DATA_IMPORT_FAILED,
            self::CHANNEL_RETURN_EXPORT_FAILED,
            self::CHANNEL_RETURN_IMPORT_FAILED,
            self::CHANNEL_RETURN_NEW,
            self::CHANNEL_RETURN_OVERDUE,
            self::CHANNEL_REFUND_EXPORT_FAILED,
            self::CHANNEL_REFUND_LINE_ITEMS_ERROR,
            self::CHANNEL_RETURN_DELETED,
            self::CHANNEL_SHIPMENT_IMPORT_FAILED,
            self::CHANNEL_SHIPMENT_IMPORT_STATUS_FAILED,
            self::CHANNEL_SHIPMENT_EXPORT_FAILED,
            self::CHANNEL_SHIPMENT_IMPORT_MISSING_LINE_FAILED,
            self::CHANNEL_FULFILLMENT_SHIPMENT_IMPORT_STATUS_FAILED,
            self::CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_FAILED,
            self::CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_SUCCEEDED,
            self::CHANNEL_FULFILLMENT_SHIPMENT_LINE_FOR_CLOSED_ORDER,
            self::CHANNELENGINE_SUPPORT_NOTIFICATION,
            self::CHANNELENGINE_WEBHOOK_RQUEST_FAILED,
            self::FEED_NO_PRODUCTS_FAILED,
            self::FEED_IMPORT_FAILED,
            self::GLOBAL_MESSAGE,
            self::MERCHANT_ORDER_EXPORT_FAILED,
            self::MERCHANT_ORDER_EXPORT_LINES_CANCELLED,
            self::PLUGIN_INVALID_SETTING,
            self::PLUGIN_DEACTIVATED,
            self::PRODUCT_BUNDLE_IMPORT_FAILED,
            self::CHANNEL_ORDER_CANCELLATION_REQUEST_NEW,
            self::CHANNEL_CANCELLATION_EXPORT_FAILED,
            self::MERCHANT_CANCELLATION_IMPORT_FAILED,
            self::OAUTH_REFRESH_TOKEN_EXPIRATION,
            self::MERCHANT_STOCK_UPDATE_FAILED,
            self::FEED_INVALID_PRODUCTS_OCCURED,
            self::CHANNEL_SHIPMENT_EXPORT_INVALID_MERCHANTSHIPMENTNO,
            self::CHANNEL_PRODUCT_OFFER_EXPORT_FAILED,
            self::TRANLATIONS_IMAGE_TAGS_BROKEN,
            self::TAX_PROVIDER_NOT_ACTIVATED,
        ];
    }
}


