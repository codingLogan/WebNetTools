<?php
require_once "functions/output_helpers.php";

echo date('Y-m-d H:i:s');

echo "<hr>";
$output = shell_exec("ls -al");
echo $output;


$output = array();
exec("sudo /usr/bin/arp-scan --localnet | tee localnet.txt", $output);

// Print output from arp-scan command
echo "<hr>";
outputArray($output);


echo "<hr>";
?>
