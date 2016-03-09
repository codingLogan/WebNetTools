<?php
/*
GeoController.php
Author: Logan Rasmussen
Date: 3/8/2016
*/
require_once "Models/Geo.php";
require_once "Models/Dashboard.php";

class GeoController {
	public $geo;
	public $dashboard;

	public function __construct(){
		$this->geo = new Geo();
		$this->dashboard = new Dashboard();
	}

	public function start(){
		$geo = $this->geo;
		$dashboard = $this->dashboard;
		include "Views/dashboard/begin.html";
		include "Views/dashboard/end.html";
	}
}
?>