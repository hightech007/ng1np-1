<?php
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
require_once(ROOT_DIR .'_set/php/fnc.php');
ref_statistic_log();
//router
$route = $_GET['route'];

//allowed pages
$standard = array (
'default' => './lib/default.php',
'video-chat' => './lib/video-chat.php',
'api' => './lib/api.php',
'wapi' => './lib/wapi.php',
'live-search' => './lib/live-search.php',
'contact-form' => './lib/contact-form.php'
);

$ext = array (
'social' => './lib/social.php',
'external-sources' => './lib/external-sources.php'
);

$news = array (
'news' => './lib/news/news.php',
'cnn-top' => './lib/news/cnn-top.php',
'cnn-world' => './lib/news/cnn-world.php',
'cnn-africa' => './lib/news/cnn-africa.php',
'bbc-top' => './lib/news/bbc-top.php',
'rss' => './lib/news/rss.php'
);



$servers = array (
'servers' => './lib/servers.php',
'tcp-ip-networking' => './lib/serve/tcp-ip-networking.php',
'ternary-operater-php' => './lib/programming/ternary-operater-php.php',
'hosting' => './lib/hosting.php',
'nginx' => './lib/serve/nginx.php',
'ngircd' => './lib/serve/ngircd.php',
'gwan' => './lib/serve/gwan.php',
'cherokee' => './lib/serve/cherokee.php',
'hiawata' => './lib/serve/hiawata.php',
'hunchentoot' => './lib/serve/hunchentoot.php'
);
	
$pages = $standard + $ext + $news + $servers; 

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
	
} else { require_once(ROOT_DIR .'lib/default.php'); }
	
?>
