<?php
/*
test.php
used for debugging and testing functions
*/

require_once "functions/output_helpers.php";

$array = array(
	 "key" => "value"
	,"key" => "value"
	,"key" => "value"
	,"key" => "value"
	,"key" => "value"
	,"key" => "value"
	,"key" => "value"
	,"key" => "value"
);

outputTable($array, array("keys","values"), true);
?>