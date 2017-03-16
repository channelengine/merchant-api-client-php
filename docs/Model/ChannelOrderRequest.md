# ChannelOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_reference** | **string** | The unique order reference used by the Channel | 
**lines** | [**\Swagger\Client\Model\ChannelOrderLineRequest[]**](ChannelOrderLineRequest.md) | The order lines | 
**phone** | **string** |  | [optional] 
**email** | **string** |  | 
**company_registration_no** | **string** |  | [optional] 
**vat_no** | **string** |  | [optional] 
**payment_method** | **string** |  | 
**shipping_costs_incl_vat** | **double** | The shipping fee including VAT  (in the tenant&#39;s base currency calculated using the exchange rate at the time of ordering). | 
**currency_code** | **string** |  | 
**order_date** | [**\DateTime**](\DateTime.md) |  | 
**channel_customer_reference** | **string** |  | [optional] 
**billing_address** | [**\Swagger\Client\Model\EntitiesAddressModels**](EntitiesAddressModels.md) |  | 
**shipping_address** | [**\Swagger\Client\Model\EntitiesAddressModels**](EntitiesAddressModels.md) |  | 
**extra_data** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


