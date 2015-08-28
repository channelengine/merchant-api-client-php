<?php

use ChannelEngineApiClient\Models\BaseModel;

namespace ChannelEngineApiClient\Models {
	
	class Message extends BaseModel {
		
		public static $typeMap = array(

		);
		
		protected $message;
		
		function setMessage($message) { $this->message = $message; }
		function getMessage() { return $this->message; }
	}
}