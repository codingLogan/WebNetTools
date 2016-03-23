<?php
/*
Wifi.php
Author: Logan Rasmussen
Date: 3/8/2016
*/

class Wifi{
	public $results;

	public function __construct(){
		exec("sudo /sbin/iwlist wlan0 scan", $this->results);
		echo $this->results;
	}
}

?>