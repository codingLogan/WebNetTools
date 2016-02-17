<?php
require_once "functions/output_helpers.php";

echo date('Y-m-d H:i:s');

echo "<hr>";
$output = array();
exec("ls -al", $output);
outputArray($output);
unset($output);

exec("sudo /usr/bin/arp-scan --localnet | tee localnet.txt", $output);

// Print output from arp-scan command
echo "<hr>";
outputArray($output);


echo "<hr>";
?>
