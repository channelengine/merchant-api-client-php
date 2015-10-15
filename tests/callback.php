<?php
	require_once __DIR__ . '/../vendor/autoload.php'; 
	
	use ChannelEngineApiClient\Client\ApiClient;

	use ChannelEngineApiClient\Helpers\Collection;
	use ChannelEngineApiClient\Helpers\JsonMapper;
	
	use ChannelEngineApiClient\Models\Address;
	use ChannelEngineApiClient\Models\Cancellation;
	use ChannelEngineApiClient\Models\CancellationLine;
	use ChannelEngineApiClient\Models\Message;
	use ChannelEngineApiClient\Models\Order;
	use ChannelEngineApiClient\Models\OrderLine;
	use ChannelEngineApiClient\Models\OrderExtraDataItem;
	use ChannelEngineApiClient\Models\ReturnObject;
	use ChannelEngineApiClient\Models\ReturnLine;
	use ChannelEngineApiClient\Models\Shipment;
	use ChannelEngineApiClient\Models\ShipmentLine;
	
	use ChannelEngineApiClient\Enums\CancellationLineStatus;
	use ChannelEngineApiClient\Enums\CancellationStatus;
	use ChannelEngineApiClient\Enums\Gender;
	use ChannelEngineApiClient\Enums\MancoReason;
	use ChannelEngineApiClient\Enums\OrderStatus;
	use ChannelEngineApiClient\Enums\ReturnReason;
	use ChannelEngineApiClient\Enums\ReturnStatus;
	use ChannelEngineApiClient\Enums\ReturnAcceptStatus;
	use ChannelEngineApiClient\Enums\ShipmentLineStatus;
	use ChannelEngineApiClient\Enums\ShipmentStatus;

	$this->client = new ApiClient('64c99c1c512a68be177f173371c2243356431e42', 'e6c2cf76bc681a61e53682fc2d01640731dc7843', 'yourstore');
	$client->validateCallbackHash();
	$type = $_GET["type"];

	switch($type) {
		case 'orders':
			$orders = $client->getOrders();
			break;
		case 'returns':
			$returns $client->getReturns();
			break;
	}

	?>