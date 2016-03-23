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
					$this->hotspots[] = $current_hotspot;
				}
				$current_hotspot = null;
				$current_hotspot = array();
			}

			// Store current value
			if(isset($current_hotspot) && is_array($current_hotspot)) {
				$current_hotspot[] = $result;
			}
		}
		// Store the last hotspot
		$this->hotspots[] = $current_hotspot;
	}
}

class HotSpot {
	public $SSID;
	public $channel;
	public $frequency;
	public $quality;
	public $encryption_key;
}

?>