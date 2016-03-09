<?php
/*
Author Logan Rasmusseh
Date 3/8/2016
*/

class NavLink {
	public $text;
	public $url;

	public function __construct($text, $url = "#"){
		$this->text = $text;
		$this->url = $url;
	}

	public function html(){
		echo '<a href="'.$this->url.'">'.htmlentities($this->text).'</a>';
	}
}
?>