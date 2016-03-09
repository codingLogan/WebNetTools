<?php
/*
Author: Logan Rasmussen
Date: 3/8/2016
*/

require_once "Models/Index.php";

class IndexController {
	public $index;

	public function __construct(){
		$this->$index = new Index();
	}

	public function start(){
		$index = $this->index;
		include "Views/index.html";
	}
}