# MerchantProductResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isActive** | **bool** |  | [optional] 
**name** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**brand** | **string** |  | [optional] 
**size** | **string** |  | [optional] 
**color** | **string** |  | [optional] 
**ean** | **string** |  | [optional] 
**manufacturerProductNumber** | **string** |  | [optional] 
**stock** | **int** |  | [optional] 
**price** | **double** | Price, including VAT. | [optional] 
**mSRP** | **double** | Manufacturer&#39;s suggested retail price | [optional] 
**purchasePrice** | **double** |  | [optional] 
**vatRateType** | **string** | The type of VAT which applies to this product.  See: http://ec.europa.eu/taxation_customs/taxation/vat/topics/rates_en.htm | [optional] 
**shippingCost** | **double** |  | [optional] 
**shippingTime** | **string** | A textual representation of the shippingtime.  For example, in Dutch: &#39;Op werkdagen voor 22:00 uur besteld, morgen in huis&#39; | [optional] 
**url** | **string** | A URL pointing to the merchant&#39;s webpage  which displays this product. | [optional] 
**imageUrl** | **string** | A URL at which an image of this product  can be found. | [optional] 
**categoryTrail** | **string** | The category to which this product belongs.  Please supply this field in the following format:  &#39;maincategory &amp;gt; category &amp;gt; subcategory&#39;  For example:  &#39;vehicles &amp;gt; bikes &amp;gt; mountainbike&#39; | [optional] 
**extraData** | [**\ChannelEngine\ApiClient\Model\ExtraDataItem[]**](ExtraDataItem.md) | An optional list of key-value pairs containing  extra data about this product. This data can be  sent to channels or used for filtering products. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


