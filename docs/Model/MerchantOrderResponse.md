# MerchantOrderResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier used by ChannelEngine. This identifier does  not have to be saved. It should only be used in a call to acknowledge the order. | [optional] 
**channelName** | **string** |  | [optional] 
**channelOrderSupport** | **string** |  | [optional] 
**channelOrderNo** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**lines** | [**\ChannelEngine\ApiClient\Model\MerchantOrderLineResponse[]**](MerchantOrderLineResponse.md) |  | [optional] 
**phone** | **string** |  | [optional] 
**email** | **string** |  | 
**companyRegistrationNo** | **string** |  | [optional] 
**vatNo** | **string** |  | [optional] 
**paymentMethod** | **string** |  | 
**shippingCostsInclVat** | **double** | The shipping fee including VAT  (in the tenant&#39;s base currency calculated using the exchange rate at the time of ordering). | 
**currencyCode** | **string** |  | 
**orderDate** | [**\DateTime**](\DateTime.md) |  | 
**channelCustomerNo** | **string** |  | [optional] 
**billingAddress** | [**\ChannelEngine\ApiClient\Model\EntitiesAddressModels**](EntitiesAddressModels.md) |  | 
**shippingAddress** | [**\ChannelEngine\ApiClient\Model\EntitiesAddressModels**](EntitiesAddressModels.md) |  | 
**extraData** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


