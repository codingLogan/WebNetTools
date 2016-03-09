<?php
/*
DashboardController.php
Author: Logan Rasmussen
Date: 2/20/2016
*/

require_once "Models/Dashboard.php";

class DashboardController {
	public $dashboard;

	public function __construct(){
		$this->dashboard = new Dashboard();
	}

	public function start(){
		$dashboard = $this->dashboard;
		include "Views/dashboard/begin2.html";
		include "Views/dashboard/dashboard.html";
		include "Views/dashboard/end2.html";
	}
}
?>