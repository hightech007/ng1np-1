<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'external hyper shell, external sites, cooperation, sources, ws1, as6, hightech, zdroid, routefor, xtreme prohosting, programming, manufacture, business';
$eng->desc = 'Using external sources to acquire the inputs into its manufacturing process means that a business is exposed to market price changes in those inputs when producing its goods.';

$eng->page = 'external-sources';
$eng->title = 'EXT: external sources';
$eng->logo = 'media/external-sources.png';

$eng->header_h1 = 'EXTERNAL <span class="ex8">SOURCES</span>';
$eng->header_h2 = '<span class="ex8">Extend UP</span>'; 

$eng->acc = array( 
	array(  
	"ac" => "ac-1",
	"acc" => "accordion-1",
	"acl" => "antistereotip.github.io",
	"acp" => '<a href="http://antistereotip.github.io" target="__blank">antistereotip.github.io</a>'
	),
	array(  
	"ac" => "ac-2",
	"acc" => "accordion-2",
	"acl" => "hightech007.github.io",
	"acp" => '<a href="http://hightech007.github.io" target="__blank">hightech007.github.io</a>'
	),
	array(  
	"ac" => "ac-3",
	"acc" => "accordion-3",
	"acl" => "ws1.github.io",
	"acp" => '<a href="http://ws1.github.io" target="__blank">ws1.github.io</a>'
	),
	array(  
	"ac" => "ac-4",
	"acc" => "accordion-4",
	"acl" => "hiper-univerzal.com",
	"acp" => '<a href="http://hiper-univerzal.com" target="__blank">hiper-univerzal.com</a>'
	),
	array(  
	"ac" => "ac-5",
	"acc" => "accordion-5",
	"acl" => "indoor-playgrounds.biz",
	"acp" => '<a href="http://indoor-playgrounds.biz" target="__blank">indoor-playgrounds.biz</a>'
	),
	array(  
	"ac" => "ac-6",
	"acc" => "accordion-6",
	"acl" => "opremanje-decijih-igraonica.net",
	"acp" => '<a href="http://opremanje-decijih-igraonica.net" target="__blank">opremanje-decijih-igraonica.net</a>'
	),
	array(  
	"ac" => "ac-7",
	"acc" => "accordion-7",
	"acl" => "opremanje-decijih-igraonica.com",
	"acp" => '<a href="http://opremanje-decijih-igraonica.com" target="__blank">opremanje-decijih-igraonica.com</a>'
	),
	array(  
	"ac" => "ac-8",
	"acc" => "accordion-8",
	"acl" => "hightechangel.wordpress.com",
	"acp" => '<a href="http://hightechangel.wordpress.com" target="__blank">hightechangel.wordpress.com</a>'
	),
	array(  
	"ac" => "ac-9",
	"acc" => "accordion-9",
	"acl" => "seeux.wordpress.com",
	"acp" => '<a href="http://seeux.wordpress.com" target="__blank">seeux.wordpress.com</a>'
	),
	array(  
	"ac" => "ac-10",
	"acc" => "accordion-10",
	"acl" => "zdroid.github.io",
	"acp" => '<a href="http://zdroid.github.io" target="__blank">zdroid.github.io</a>'
	),
	array(  
	"ac" => "ac-11",
	"acc" => "accordion-11",
	"acl" => "www.routefor.net",
	"acp" => '<a href="http://routefor.net" target="__blank">www.routefor.net</a>'
	),
	array(  
	"ac" => "ac-12",
	"acc" => "accordion-12",
	"acl" => "www.extreme-prohosting.com",
	"acp" => '<a href="http://www.extreme-prohosting.com/" target="__blank">www.extreme-prohosting.com</a>'
	), 
);


//$eng->footer = '';


//render page
echo $eng->render('up/external-sources.tpl');

?>
