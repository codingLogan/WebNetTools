<?php
/*
Geo.php
Author: Logan Rasmussen
Date: 3/8/2016
*/

class Geo{
	public $results;
	public $json;

	public function __construct(){
		exec("curl ipinfo.io", $this->results);
		$this->results = implode('', $this->results);
		$this->json = json_decode($this->results);

		// Make sure JSON was decoded sucessfully
		if($this->json !== null){
			echo " -success- ";
		}
	}
}

?>