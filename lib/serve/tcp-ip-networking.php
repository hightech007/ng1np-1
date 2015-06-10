<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'tcp/ip, networking, networks, subnet mask';
$eng->desc = 'TCP/IP (Transmission Control Protocol/Internet Protocol) is the basic communication language or protocol of the Internet!';

$eng->page = 'tcp-ip-networking';
$eng->title = 'TCP/IP';
$eng->logo = 'media/network-host-id.png';
$eng->logo_width = '100';
$eng->logo_height = '70';

$eng->header_h1 = 'TCP/IP <span class="ex8">NETWORKING</span>';
$eng->header_h2 = '<span class="ex8">Networks - tips and tricks</span>'; 

$eng->acc = array( 
	array(  
	"id" => "1",
	"title" => "Network and Host ID",
	"code" => "The default IP address ( eg . 148.35.45.158 ) consists of four parts , each 1 byte , separated by . The available range of addresses from 0.0.0.0 to 255.255.255.255 ."
	),
	array(  
	"id" => "2",
	"title" => "N,H ID Pic",
	"code" => "<img src='media/network-host-id.png' width='200' height='auto'/>"
	)
);


//$eng->footer = '';


//render page
echo $eng->render('up/serve/it.tpl');

?>
