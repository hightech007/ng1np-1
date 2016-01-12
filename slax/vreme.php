<html>
<head>
<style>
body {background:#111;color:#17f118;width:100%;}
marquee {font-size:1.5em;color:#17f118;}
h1 {color: orangered;}
</style>
</head>
<body>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$pagina = $_SERVER['REQUEST_URI'];
$datum = date("d-m-y / H:i:s");
$invoegen = $datum . " - " . $ip . " - " . $pagina . "<br />";
$fopen = fopen("log/ip.html", "a");
fwrite($fopen, $invoegen);
fclose($fopen);
echo '<marquee>system failure !!! reboot server !!!</marquee>';
echo '<h1>Your Ip adrress ' . $ip . ' will be reported</h1>';
?>
</body>
</html>
