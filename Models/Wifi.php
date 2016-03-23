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
		$current_hotspot = array();
		foreach($this->results as $result){
			// See if we should create a new hotspot array
			if(preg_match('/cell/i', $result)){
				$hotspots[] = $current_hotspot;
				$current_hotspot = null;
				$current_hotspot = array();
			}

			// Store current value
			$current_hotspot[] = $result;
		}
		// Store the last hotspot
		$hotspots[] = $current_hotspot;
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