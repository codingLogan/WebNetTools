<?php
/*
test.php
used for debugging and testing functions
*/

require_once "functions/output_helpers.php";

$array = array(
	 "key" => "value"
	,"key1" => "value"
	,"key2" => "value"
	,"key3" => "value"
	,"key4" => "value"
	,"key5" => "value"
	,"key6" => "value"
	,"key7" => "value"
);

echo outputTable($array, array("keys","values"), true);
?>