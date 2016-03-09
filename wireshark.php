<?php
/*
wireshark.php
Author: Logan Rasmussen
Date: 3/8/2016
*/
require_once "Controllers/WiresharkController.php";

$controller = new WiresharkController();
$controller->start();

?>