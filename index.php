<?php
echo date('Y-m-d H:i:s');
echo "<hr>";

$output = shell_exec("sudo arp-scan --localnet > localnet.txt");

echo "<hr>";
phpinfo();
?>
