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

	public function __construct(){
		exec("sudo /usr/bin/arp-scan --localnet | tee localnet.txt", $this->results);
	}
}
?>