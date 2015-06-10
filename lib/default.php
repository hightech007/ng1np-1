<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta

$eng->desc = 'Ng1np is hypershell idea for hyper productivity, based on hyperloop and implementation of services based on Windows and GNU/Linux operating systems ...';
$eng->key = 'hyperloop, hyper shell, engine, fast, secure, programming, web, ng1np, gnu/linux, debian, OS, Windows, services, servers, unix';

$eng->page = 'default';
$eng->title = 'Default - AntiStereotip';
$eng->logo = 'media/antistereotip.svg';
$eng->logo_width = '70';
$eng->logo_height = '70';

$eng->header_h1 = 'Anti <span class="ex8">Stereotip</span>';
$eng->header_h2 = '<span class="ex8">Powered by Engine UP [Made on Debian Jessie]</span>'; 

$eng->acc = array( 
	array(  
	"ac" => "ac-1",
	"acc" => "accordion-1",
	"acl" => "What is AntiStereotip ?",
	"acp" => 'Antistereotip is web3.0 AI platform. <br />Contact Us for more information on <strong> antistereotip [ at ] gmx [ dot ] com </strong>'
	),
	array(  
	"ac" => "ac-2",
	"acc" => "accordion-2",
	"acl" => "What is Ng1np ? What We Do ?",
	"acp" => '3Ngin3^UP » ng1np ® « is open source engine based on flexibility, security, simplicity. Engine-UP is hyper shell productivity engine for super port locked machines. Ng1np is hypershell idea for hyper productivity, based on hyperloop. Implementation of services based on Windows and GNU/Linux operating systems: DNS, DHCP, Samba, FTP, VPN. cherokee server, nginx server, apache server, gwan, lighttpd, WAMP,MAMP, XAMPP, LAMP, LEMP, audio stream-gnump3d, unrealircd irc server, ngircd irc server, pybot for rss, php-rss...'
	),
	array( 
        "ac" => "ac-3",
	"acc" => "accordion-3",
	"acl" => "Vision and Idea",
	"acp" => "Hypershell for bilion sites. Ultrafast engine for hyper perception. Extended API for fast livesearch and data exchange. Idea is super UI and UX engine. Ng1np UI is based on psilosophy of colors and perception. We work on connection with sevices and API's."
        ),
	array( 
        "ac" => "ac-4",
	"acc" => "accordion-4",
	"acl" => "Engine Possibility's",
	"acp" => "ng1np :: filesistem engine :: mirror tech :: url rewrite :: cache :: pso :: css3 :: html5 :: array data :: xml data exchange :: livesearch"
        ),
	array( 
        "ac" => "ac-5",
	"acc" => "accordion-5",
	"acl" => "The Team",
	"acp" => "Ceo & Founder of Engine Up - Ng1np is hightech (Milutin Gavrilović). <br />All thanks to WS1 team (ZDroid, vladap, Gaddafi, kgb, ludus, nemysis). We work hard on some UI and UX concepts. We expect from You to respect Our work. All thanks to WS1 team "
        )
 );


//$eng->footer = '';


//render page
echo $eng->render('up/default.tpl');

?>
