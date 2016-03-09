<?php
/*
WiresharkController.php
Author: Logan Rasmussen
Date: 3/8/2016
*/
require_once "Models/Wireshark.php";
require_once "Models/Dashboard.php";

class WiresharkController {
	public $wireshark;
	public $dashboard;

	public function __construct(){
		$this->wireshark = new Wireshark();
		$this->dashboard = new Dashboard();
	}

	public function start(){
		$wireshark = $this->wireshark;
		$dashboard = $this->dashboard;
		include "Views/dashboard/begin.html";
		include "Views/dashboard/end.html";
	}
}
?>