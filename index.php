<?php
echo date('Y-m-d H:i:s');
echo "<hr>";
echo "<pre>";

$output = shell_exec("ls -al");
echo $output;

echo "<hr>";
$output = shell_exec("sudo /usr/bin/arp-scan --localnet > localnet.txt");
echo $output;

echo "</pre>";

echo "<hr>";
phpinfo();
?>
