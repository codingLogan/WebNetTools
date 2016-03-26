<?php
/*
ping.php
Author: Logan Rasmussen
Date: 3/25/2016
*/
require_once "Controllers/PingController.php";

$ip = null;
if(isset($_REQUEST['ip'])){
	$ip = $_REQUEST['ip'];
}

$controller = new PingController($ip);
$controller->start();

?>