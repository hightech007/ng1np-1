<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'application program interface, api, app, application, interface, building software, programming, software components, protocols';
$eng->desc = 'API, an abbreviation of application program interface, is a set of routines, protocols, and tools for building software applications.';

$eng->page = 'api';
$eng->title = 'API';
$eng->logo = 'media/api_image.png';
$eng->logo_width = '70';
$eng->logo_height = '70';

$eng->header_h1 = 'API <span class="ex8">Tricks</span>';
$eng->header_h2 = '<span class="ex8">Skill UP</span>'; 

$eng->acc = array( 
	array(  
	"ac" => "ac-1",
	"acc" => "accordion-1",
	"acl" => "What is API ?",
	"acp" => 'API, an abbreviation of application program interface, is a set of routines, protocols, and tools for building software applications. The API specifies how software components should interact and APIs are used when programming graphical user interface (GUI) components.'
	),
	array(  
	"ac" => "ac-2",
	"acc" => "accordion-2",
	"acl" => "W-API [ Tool for search WikiPedia ]",
	"acp" => '<a href="./wapi">Wikipedia API</a> is Live Search Aplication Interface.'
	),
	array(  
	"ac" => "ac-3",
	"acc" => "accordion-3",
	"acl" => "LS-XML-API [ Tool for search Internal SiteMap ]",
	"acp" => '<a href="./live-search">LS-XML-API</a> is Live Search XML Sitemap Aplication Interface.'
	)
 );


//$eng->footer = '';


//render page
echo $eng->render('up/default.tpl');

?>
