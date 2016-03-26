<?php
/*
Author Logan Rasmusseh
Date 3/8/2016
*/

class NavLink {
	public $text;
	public $url;
	public $imagepath;

	public function __construct($text, $url = "#", $path = ""){
		$this->text = $text;
		$this->url = $url;
		$this->imagepath = $path;
	}

	public function html(){
		echo '<a href="'.$this->url.'">'.htmlentities($this->text).'</a>';
	}
}
?>