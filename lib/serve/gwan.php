<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'hyper serve, gwan, higher, fly, server, programming, cpu cores, web sever, ansi c';
$eng->desc = 'G-WAN better uses CPU Cores to make the Internet of Things fly thousand times higher !';

$eng->page = 'gwan';
$eng->title = 'GWAN Server';
$eng->logo = 'media/gwan.png';
$eng->logo_width = '70';
$eng->logo_height = '70';

$eng->header_h1 = 'GWAN <span class="ex8">Server</span>';
$eng->header_h2 = '<span class="ex8">Leverage legacy servers and low-consumption CPUs to do more with less!</span>'; 

$eng->acc = array( 
	array(  
	"id" => "1",
	"title" => "Wget GWAN Server from 'net",
	"code" => "wget http://gwan.com/archives/gwan_linux64-bit.tar.bz2"
	),
	array(  
	"id" => "2",
	"title" => "Tarball GWAN 64 bit Server",
	"code" => "tar -xjf gwan_linux64-bit.tar.bz2; cd gwan_linux64-bit"
	),
	array(  
	"id" => "3",
	"title" => "Run GWAN Server with Super User",
	"code" => " sudo ./gwan "
	)
);


//$eng->footer = '';


//render page
echo $eng->render('up/serve/it.tpl');

?>
