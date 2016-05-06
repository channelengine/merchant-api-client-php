# OrderViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_reference** | **string** |  | 
**phone** | **string** |  | [optional] 
**email** | **string** |  | 
**company_registration_no** | **string** |  | [optional] 
**vat_no** | **string** |  | [optional] 
**purchase_order_no** | **string** |  | [optional] 
**payment_method** | **string** |  | [optional] 
**shipping_costs_incl_vat** | **double** | The shipping fee including VAT\r\n            (in the tenant&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional] 
**shipping_costs_vat** | **double** | The total amount of VAT charged over the shipping fee\r\n            (in the tenant&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional] 
**total_incl_vat** | **double** | The total value of the order including VAT\r\n            (in the tenant&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional] 
**total_vat** | **double** | The total amount of VAT charged over the total value of te order\r\n            (in the tenant&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional] 
**original_shipping_costs_incl_vat** | **double** | The shipping fee including VAT\r\n            (in the currency in which the order was paid for). | [optional] 
**original_shipping_costs_vat** | **double** | The total amount of VAT charged over the shipping fee\r\n            (in the currency in which the order was paid for). | [optional] 
**original_total_incl_vat** | **double** | The total value of the order including VAT\r\n            (in the currency in which the order was paid for). | [optional] 
**original_total_vat** | **double** | The total amount of VAT charged over the total value of te order\r\n            (in the currency in which the order was paid for). | [optional] 
**currency_code** | **string** |  | 
**order_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**status** | **int** |  | [optional] 
**acknowledged_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**channel_name** | **string** | Name of channel party (ie bol/vergelijk/amazon etc), used to make it easier to identify channels when using the api. | [optional] 
**can_ship_partial_order_lines** | **bool** | Indicates if the merchant can ship partial orderlines. | [optional] 
**channel_order_no** | **string** |  | [optional] 
**channel_customer_no** | **string** |  | [optional] 
**billing_address** | [**\Swagger\Client\Model\Address**](Address.md) |  | 
**max_vat_rate** | **double** |  | [optional] 
**extra_data** | **map[string,string]** |  | [optional] 
**shipping_address** | [**\Swagger\Client\Model\Address**](Address.md) |  | 
**lines** | [**\Swagger\Client\Model\OrderLineViewModel[]**](OrderLineViewModel.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


