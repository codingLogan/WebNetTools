<?php
echo date('Y-m-d H:i:s');
echo "<hr>";

$output = shell_exec("sudo arp-scan --localnet");

echo "<hr>";
phpinfo();
?>
