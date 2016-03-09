<?php
/*
WifiController.php
Author: Logan Rasmussen
Date: 3/8/2016
*/
require_once "Models/Wifi.php";
require_once "Models/Dashboard.php";

class WifiController {
	public $wifi;
	public $dashboard;

	public function __construct(){
		$this->wifi = new Wifi();
		$this->dashboard = new Dashboard();
	}

	public function start(){
		$wifi = $this->wifi;
		$dashboard = $this->dashboard;
		include "Views/dashboard/begin.html";
		include "Views/dashboard/end.html";
	}
}
?>