<?php
/*
Geo.php
Author: Logan Rasmussen
Date: 3/8/2016
*/

class Geo{
	public $results;
	public $json;
	public $footer_text;

	public function __construct($ip){
		$valid = filter_var($ip, FILTER_VALIDATE_IP);

		if($ip == "localhost"){
			exec("curl ipinfo.io", $this->results);
		}
		elseif($valid !== false){
			exec("curl ipinfo.io/".$ip, $this->results);
		}
		
		$this->results = implode(' ', $this->results);
		$this->json = json_decode($this->results);
		$this->footer_text = "-Information provided by ipinfo.io-";
	}
}

?>