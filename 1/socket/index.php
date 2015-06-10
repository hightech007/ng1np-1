<?php
die('under construction socket msg');

function sendsimple($send,$simple) {
	global $socket;
	fputs($socket, "$send $simple\n");
	echo "~> $send $simple\n";
	return;
}
$data = $_GET['route'];
sendsimple($data, 'simple');

$date = date("n-j-y");
$logfile = fopen("$date-php-log.txt","a");
fwrite($logfile, " $data $date ");
fclose($logfile);
?>
