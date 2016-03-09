<?php
/*
arpscan.php
Logan Rasmussen
2/20/2016
*/

require_once "Controllers/ArpScanController.php";

$controller = new ArpScanController();
$controller->start();
?>