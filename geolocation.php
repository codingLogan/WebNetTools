<?php
/*
geolocation.php
Author: Logan Rasmussen
Date: 3/8/2016
*/
require_once "Controllers/GeoController.php";
var_dump($_REQUEST);
$ip = null;
if(isset($_REQUEST['ip'])){
	$ip = $_REQUEST['ip'];
}

$controller = new GeoController($ip);
$controller->start();

?>