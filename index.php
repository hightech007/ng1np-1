<?php

//router
$route = $_GET['route'];
//allowed pages
$standard = array (
'default'   => './lib/default.php',
'news'   => './lib/news.php',
'video-chat'   => './lib/video-chat.php'
);

$news = array (
'svet-vina'   => './lib/svet-vina.php',
'cnn-top'   => './lib/cnn-top.php',
'cnn-world'   => './lib/cnn-world.php',
'cnn-africa'   => './lib/cnn-africa.php',
'bbc-top'   => './lib/bbc-top.php',
'rts-vesti'   => './lib/rts-vesti.php'
);
	
$pages = $standard + $news; 


if( (strlen($pages[$route]) > 0) && (in_array($pages[$route], $pages)) ){
	
	//cache -----------------------------------------------------------------------
	$interval = 30 * 60;
	$filename = "cache/".basename(rtrim($_SERVER["REQUEST_URI"],'/')).".cache";
	if (file_exists($filename) && (time() - $interval) < filemtime($filename)) {
		readfile($filename);
		exit(); 
	}
	ob_start(); 
	//end cache block -------------------------------------------------------------

	//require page out of cache
	require $pages[$route];

	//cache block down ------------------------------------------------------------
	$bffr = ob_get_contents(); 
	$file = fopen($filename,'w');
	fwrite($file, $bffr);
	fclose($file);
	ob_end_flush(); 
	//end cache block down --------------------------------------------------------
	
} else { require 'lib/default.php'; }
	
?>
