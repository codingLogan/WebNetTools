<?php
/*
dashboard.php
Author: Logan Rasmussen
Date: 2/20/2016
*/
echo "dashboard.php";
require_once "Controllers/DashboardController.php";
echo "past require";

$controller = new DashboardController();
var_dump($controller);
$controller->start();
?>