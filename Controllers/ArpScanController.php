<?php
/*
ArpScanController.php
Author: Logan Rasmussen
Date: 2/20/2016
*/

require_once "Models/ArpScan.php";

class ArpScanController {
	public $dashboard;
	public $arpscan_data;

	public function __construct(){
		$this->dashboard = new Dashboard();
		$this->arpscan_data = new ArpScan();
	}

	public function start(){
		$dashboard = $this->dashboard;
		$arpscan_data = $this->arpscan_data;
		include "Views/dashboard/begin.html";
		include "Views/arpscan.html";
		include "Views/dashboard/end.html";
	}
}
?>