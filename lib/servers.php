<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = "default, hyper default, shell, engine, fast, secure, programming, 
assets, web, forms, ng1np";
$eng->desc = "Serve As It's Best";

$eng->page = 'servers';
$eng->title = 'Ng1np';
$eng->logo = 'media/ng1np.png';

$eng->header_h1 = "Serve <span class='ex8'>As It's Best</span>";
$eng->header_h2 = '<span class="ex8">Powered by ng1np</span>'; 

$eng->acc = array( 
	array(  
	"id" => "1",
	"title" => "GWAN Server",
	"url" => "./gwan"
	),
	array(  
	"id" => "2",
	"title" => "HUNCHENTOOT Server",
	"url" => "./hunchentoot"
	),
	array(  
	"id" => "3",
	"title" => "CHEROKEE Server",
	"url" => "#"
	),
	array(  
	"id" => "4",
	"title" => "NGINX Server",
	"url" => "#"
	),
	array(  
	"id" => "5",
	"title" => "HIAWATA Server",
	"url" => "#"
	),
	array(  
	"id" => "6",
	"title" => "LIGHTTPD Server",
	"url" => "#"
	),
	array(  
	"id" => "7",
	"title" => "APACHE2 Server",
	"url" => "#"
	)
);


//$eng->footer = '';


//render page
echo $eng->render('up/servers.tpl');

?>
