<?php
/*
localnetwork.php
Logan Rasmussen
2/20/2016
*/

require_once "Controllers/ArpScan.php";

$controller = new ArpScanController();
$controller->start();
?>