<?php
/*
dashboard.php
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
		include "Views/dashboard/begin.html";
		include "Views/dashboard/end.html";
	}
}
?>