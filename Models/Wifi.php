<?php
/*
Wifi.php
Author: Logan Rasmussen
Date: 3/8/2016
*/

class Wifi{
	public $results;
	public $hotspots;

	public function __construct(){
		$this->hotspots = array();
		exec("sudo /sbin/iwlist wlan0 scan", $this->results);

		// Parse through the results and obtain interesting info...
		foreach($this->results as $result){
			// See if we should create a new hotspot array
			if(preg_match('/cell/i', $result)){
				if(isset($current_hotspot) && is_array($current_hotspot)) {
					$this->hotspots[] = new HotSpot($current_hotspot);
				}
				$current_hotspot = null;
				$current_hotspot = array();
			}

			// Store current value
			if(isset($current_hotspot) && is_array($current_hotspot) && !empty($result)) {
				$current_hotspot[] = $result;
			}
		}
		// Store the last hotspot
		if(isset($current_hotspot) && is_array($current_hotspot) && !empty($current_hotspot))
			$this->hotspots[] = new HotSpot($current_hotspot);
	}
}

class HotSpot {
	// public $raw_data;

	public $ESSID;
	public $channel;
	public $frequency;
	public $quality;
	public $encryption_key_status;
	public $ieee_type;
	public $group_cipher;
	public $pairwise_ciphers;
	public $authentication_suite;
	public $mode;

	public function __construct($raw_data) {
		//$this->raw_data = $raw_data;

		// Set defaults in case they aren't found
		$this->ESSID = "";
		$this->channel = "";
		$this->frequency = "";
		$this->quality = "";
		$this->encryption_key_status = "";
		$this->ieee_type = "";
		$this->group_cipher = "";
		$this->pairwise_ciphers = "";
		$this->authentication_suite = "";
		$this->mode = "";
		$this->parseRawData($this->raw_data);
	}

	private function parseRawData($array) {
		foreach($array as $data){
			if(isset($data) && !empty($data)){
				switch ($data){
					case (preg_match('/ESSID/i', $data)):
						$this->ESSID = $data; break;
					case (preg_match('/Channel/i', $data)):
						$this->channel = $data; break;
					case (preg_match('/Frequency/i', $data)):
						$this->frequency = $data; break;
					case (preg_match('/Quality/i', $data)):
						$this->quality = $data; break;
					case (preg_match('/Encryption key/i', $data)):
						$this->encryption_key_status = $data; break;
					case (preg_match('/IEEE/i', $data)):
						$this->ieee_type = $data; break;
					case (preg_match('/Group Cipher/i', $data)):
						$this->group_cipher = $data; break;
					case (preg_match('/Pairwise Ciphers/i', $data)):
						$this->pairwise_ciphers = $data; break;
					case (preg_match('/Authentication Suite/i', $data)):
						$this->authentication_suite = $data; break;
					case (preg_match('/Mode/i', $data)):
						$this->mode = $data; break;
				}
			}
		}
	}
}

?>