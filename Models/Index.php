<?php
/*
Author: Logan Rasmussen
Date: 3/8/2016
*/

class Index {
	public $title;
	public $description;
	public $enter_text;
	public $footer_text;

	public function __construct(){
		$this->title = "WebNet Tools";
		$this->description = "This site was created for Network Administrators who would like to have a collection of tools available to them in one place.  This web portal is limited in scope, but should still be useful in learning how to use a few tools.";
		$this->enter_text = "Load Dashboard";
		$this->footer_text = "-Created by Logan Rasmussen-";
	}
}