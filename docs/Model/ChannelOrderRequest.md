# ChannelOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channelReference** | **string** | The unique order reference used by the Channel | 
**lines** | [**\ChannelEngine\ApiClient\Model\ChannelOrderLineRequest[]**](ChannelOrderLineRequest.md) | The order lines | 
**phone** | **string** |  | [optional] 
**email** | **string** |  | 
**companyRegistrationNo** | **string** |  | [optional] 
**vatNo** | **string** |  | [optional] 
**paymentMethod** | **string** |  | 
**shippingCostsInclVat** | **double** | The shipping fee including VAT  (in the tenant&#39;s base currency calculated using the exchange rate at the time of ordering). | 
**currencyCode** | **string** |  | 
**orderDate** | [**\DateTime**](\DateTime.md) |  | 
**channelCustomerReference** | **string** |  | [optional] 
**billingAddress** | [**\ChannelEngine\ApiClient\Model\EntitiesAddressModels**](EntitiesAddressModels.md) |  | 
**shippingAddress** | [**\ChannelEngine\ApiClient\Model\EntitiesAddressModels**](EntitiesAddressModels.md) |  | 
**extraData** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


