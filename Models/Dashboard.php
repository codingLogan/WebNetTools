<?php
/*
File: Dashboard.php
Author: Logan Rasmussen
Date: 2/20/2016

Contains all the data for building the Dashboard's pages
Should be included in any page that needs a dashboard view
*/
require_once "Models/NavLink.php";

class Dashboard {
	public $title;
	public $site_nav;
	public $tools_nav;

	public function __construct(){
		// Create data for common dashboard pages
		$this->title = "WebNet Tools";
		$this->site_nav = array(
			new NavLink("Dashboard", "dashboard.php")
			,new NavLink("IP Gelocation", "geolocation.php")
			,new NavLink("Ping", "ping.php")
			,new NavLink("Scan Local IPs", "arpscan.php")
			,new NavLink("Wifi Scan", "wifi.php")
			,new NavLink("Wireshark", "wireshark.php")
		);
		$this->tools_nav = array(
			new NavLink("IP Gelocation", "geolocation.php", "images/geo2.jpg")
			,new NavLink("Ping", "ping.php", "images/ping.png")
			,new NavLink("Scan Local IPs", "arpscan.php", "images/arpscan.png")
			,new NavLink("Wifi Scan", "wifi.php", "images/wifi.png")
		);
	}
}

?>