<?php
$css = array("master.css", "acc.css", "anm.css", "qrs.css");
$bffr = "";
foreach ($css as $cs) { $bffr .= file_get_contents($cs); }
$bffr = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $bffr);
$bffr = str_replace(': ', ':', $bffr);
$bffr = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $bffr);
ob_start("ob_gzhandler");
header('Cache-Control: public');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
header("Content-type: text/css");

//cache 
$interval = 30 * 60;
$filename = "../../cache/css/".basename(md5(rtrim($_SERVER["REQUEST_URI"],'/'))).".cache";
if (file_exists($filename) && (time() - $interval) < filemtime($filename)) {
readfile($filename);
exit(); 
}
ob_start(); 


echo($bffr);


//buffer to cache file
$bffr = ob_get_contents(); 
$file = fopen($filename,'w');
fwrite($file, $bffr);
fclose($file);
ob_end_flush(); 
?>
