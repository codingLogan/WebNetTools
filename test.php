<?php
/*
test.php
used for debugging and testing functions
*/

require_once "functions/output_helpers.php";

$object = new stdClass();
$object->prop1 = "value";
$object->prop2 = "value";
$object->prop3 = "value";
echo outputTable($object, array("keys","values"),true);

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

$object_array = array(
	$object
	,$object
	,$object
	,$object
	,$object
	,$object
);
echo outputTable($object_array, array("prop1", "prop2", "prop3"));
?>