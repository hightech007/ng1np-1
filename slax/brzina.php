<?php
#$ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";

#$file = 'log/ip.log';

#$fp = fopen($file, 'a');

#fwrite($fp, $ipaddress);

#fclose($fp);
?>

<?php
$ip = $_SERVER['REMOTE_ADDR'];
$pagina = $_SERVER['REQUEST_URI'];
$datum = date("d-m-y / H:i:s");
$invoegen = $datum . " - " . $ip . " - " . $pagina . "<br />";
$fopen = fopen("log/ip.html", "a");
fwrite($fopen, $invoegen);
fclose($fopen);
?>