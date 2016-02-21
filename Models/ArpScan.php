<?php
/*
File: ArpScan.php
Author: Logan Rasmussen
Date: 2/20/2016

Contains all the data for building the Dashboard's pages
Should be included in any page that needs a dashboard view
*/

class ArpScan {
	// array of output
	public $results;
	public $machines;

	public function __construct(){
		exec("sudo /usr/bin/arp-scan --localnet | tee localnet.txt", $this->results);
		$this->machines = array();
	}

	public function parse_results(){
		if(is_array($this->results)){
			foreach($this->results as $line){
				$strings = explode(' ',$line);
				if(array_key_exists(0,$strings)){
					if(filter_var($strings[0], FILTER_VALIDATE_IP) !== false){
						$this->machines[] = new Machine($strings[0], $strings[1]);
					}
				}
			}
		}
	}
}

class Machine {
	public $ip;
	public $mac;

	public function __construct($ip, $mac){
		$this->ip = $ip;
		$this->mac = $mac;
	}
}
?>