<?php
/*
Author: Logan Rasmussen
Date: March 28, 2016
File: HelpController.php
*/

require_once "Models/Dashboard.php";
require_once "Models/Help.php";

class HelpController {
	public $dashboard;
	public $help;

	public function __construct() {
		$this->dashboard = new Dashboard();
		$this->help = new Help();
	}

	public function start() {
		$dashboard = $this->dashboard;
		$help = $this->help;

		include "Views/dashboard/begin.html";
		include "Views/help.html";
		include "Views/dashboard/end.html";
	}
}