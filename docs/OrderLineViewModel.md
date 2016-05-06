# OrderLineViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_reference** | **string** |  | 
**channel_product_no** | **string** |  | [optional] 
**quantity** | **int** |  | 
**vat_rate** | **double** |  | 
**unit_price_incl_vat** | **double** | The value of a single unit of the ordered product including VAT\r\n            (in the tenant&#39;s base currency calculated using the exchange rate at the time of ordering). | 
**unit_vat** | **double** | The total amount of VAT charged over the value of a single unit of the ordered product\r\n            (in the tenant&#39;s base currency calculated using the exchange rate at the time of ordering). | 
**original_unit_price_incl_vat** | **double** | The value of a single unit of the ordered product including VAT\r\n            (in the currency in which the order was paid for). | 
**original_unit_vat** | **double** | The total amount of VAT charged over the value of a single unit of the ordered product\r\n            (in the currency in which the order was paid for). | 
**fee_fixed** | **double** |  | [optional] 
**fee_rate** | **double** |  | [optional] 
**delivery_time_indication** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


