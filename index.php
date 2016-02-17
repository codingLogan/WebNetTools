<?php
echo date('Y-m-d H:i:s');
echo "<hr>";
echo "<pre>";

$output = shell_exec("ls -al");
echo $output;

echo "<hr>";
$output = array();
exec("sudo /usr/bin/arp-scan --localnet | tee localnet.txt", $output);
var_dump($output);

echo "</pre>";

echo "<hr>";
phpinfo();
?>
