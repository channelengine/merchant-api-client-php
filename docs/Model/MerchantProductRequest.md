# MerchantProductRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_reference** | **string** | A unique identifier of the product. | [optional] 
**parent_merchant_reference** | **string** | If this product is a different version of another  product (for example, all fields are the same except  size and/or color), then this field should contain  the &#39;MerchantProductReference&#39; of the parent. The parent  should already exist (or be present between the products  in the content of the API call, it does not matter whether   the parent is behind the child in the list). | [optional] 
**name** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**brand** | **string** |  | [optional] 
**size** | **string** |  | [optional] 
**color** | **string** |  | [optional] 
**ean** | **string** |  | [optional] 
**manufacturer_product_number** | **string** |  | [optional] 
**stock** | **int** |  | [optional] 
**price** | **double** | Price, including VAT. | [optional] 
**msrp** | **double** | Manufacturer&#39;s suggested retail price | [optional] 
**purchase_price** | **double** |  | [optional] 
**vat_rate_type** | **string** | The type of VAT which applies to this product.  See: http://ec.europa.eu/taxation_customs/taxation/vat/topics/rates_en.htm | [optional] 
**shipping_cost** | **double** |  | [optional] 
**shipping_time** | **string** | A textual representation of the shippingtime.  For example, in Dutch: &#39;Op werkdagen voor 22:00 uur besteld, morgen in huis&#39; | [optional] 
**url** | **string** | A URL pointing to the merchant&#39;s webpage  which displays this product. | [optional] 
**image_url** | **string** | A URL at which an image of this product  can be found. | [optional] 
**category_trail** | **string** | The category to which this product belongs.  Please supply this field in the following format:  &#39;maincategory &amp;gt; category &amp;gt; subcategory&#39;  For example:  &#39;vehicles &amp;gt; bikes &amp;gt; mountainbike&#39; | [optional] 
**extra_data** | [**\Swagger\Client\Model\ExtraDataItem[]**](ExtraDataItem.md) | An optional list of key-value pairs containing  extra data about this product. This data can be  sent to channels or used for filtering products. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


