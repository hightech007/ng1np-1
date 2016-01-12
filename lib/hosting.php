<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'webhosting-beograd-jeftino, hyper host, shell scripting, host engine, fast, secure host, programming, hosting, web hosting, chip hosting';
$eng->desc = 'Profesional chip web hyper shell hosting for all type of clients';

$eng->page = 'hosting';
$eng->title = 'eXtreme Pro Hosting';
$eng->logo = 'media/webhosting-beograd-jeftino.gif';

$eng->header_h1 = "Anti <span class='ex8'>Stereotip's Recommendation</span>";
$eng->header_h2 = '<span class="ex8">For Top Rated Hosting</span>'; 

$eng->acc = array( 
	array(  
	"ac" => "ac-1",
	"acc" => "accordion-1",
	"acl" => "extreme-prohosting.com :: 10/10",
	"acp" => '<a href="http://www.extreme-prohosting.com/">Extreme-ProHosting &raquo;</a>
<br />Profesional Web Hosting, 99% uptime, fast response of your sites.<br /><img src="media/webhosting-beograd-jeftino99.gif" width="200" height="auto">'
	),
	array(  
	"ac" => "ac-2",
	"acc" => "accordion-2",
	"acl" => "Custom Hosting - WS1 TEAM HOSTing PACKS :: 10/10",
	"acp" => '<img src="media/wflat.png" width="50" height="auto"><br />
<a href="./servers">Custom Hosting Packs &raquo;</a>'
	)
 );


//$eng->footer = '';


//render page
echo $eng->render('up/hosting.tpl');

?>
