# ChannelOrderLineRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_product_reference** | **string** | An orderline is supposed to only reference one product. Furthermore,  multiple orderlines cannot reference the same product. Therefore we can  use the product reference as a reference for the orderline. The reference of  the order and the product reference uniquely identify an orderline. | 
**quantity** | **int** |  | 
**unit_price_incl_vat** | **double** | The value of a single unit of the ordered product including VAT  (in the tenant&#39;s base currency calculated using the exchange rate at the time of ordering). | 
**fee_fixed** | **double** | A fixed fee that is charged by the Channel for this orderline.  This field is optional, send 0 if not applicable. | [optional] 
**fee_rate** | **double** | A percentage fee that is charged by the Channel for this orderline.  This field is optional, send 0 if not applicable. | [optional] 
**condition** | **string** | The condition of the product, this can be used to indicate that a product is a second-hand product | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


