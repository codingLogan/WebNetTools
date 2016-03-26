<?php
/*
PingController.php
Author: Logan Rasmussen
Date: 3/25/2016
*/
require_once "Models/Ping.php";
require_once "Models/Dashboard.php";

class PingController {
	public $ping;
	public $dashboard;

	public function __construct($ip){
		$this->ping = new Ping($ip);
		$this->dashboard = new Dashboard();
	}

	public function start(){
		$ping = $this->ping;
		$dashboard = $this->dashboard;
		include "Views/dashboard/begin.html";
		include "Views/ping.html";
		include "Views/dashboard/end.html";
	}
}
?>