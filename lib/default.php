<?php
//pages
require_once '_set/php/tpl.php';
$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'default, hyper default, shell, engine, fast, secure, programming, 
assets, web, forms, ng1np';
$eng->desc = 'description of ng1np - engine up with hyper shell';

$eng->page = 'home';
$eng->title = 'Ng1np';
$eng->logo = 'media/up.png';

$eng->header_h1 = 'Engine <span>Up</span>';
$eng->header_h2 = 'Open Source Engine'; 

$eng->acc = array( 
	array(  
	"ac" => "ac-1",
	"acc" => "accordion-1",
	"acl" => "What is Engine Up",
	"acp" => '3Ngin3^UP » ng1np ® « is open source engine based on flexibility, security, simplicity. Engine-UP is hyper shell productivity engine for super port locked machines. Ng1np is hypershell idea for hyper productivity, based on hyperloop.'
	),
        array( 
        "ac" => "ac-2",
	"acc" => "accordion-2",
	"acl" => "Tehnniques",
	"acp" => "html5, css3, php, fs."
        ),
	array( 
        "ac" => "ac-3",
	"acc" => "accordion-3",
	"acl" => "What is Idea",
	"acp" => "Idea is super UI and UX engine. Ng1np UI is based on psilosophy of colors and perception. We work on connection with sevices and API's. "
        ),
	array( 
        "ac" => "ac-4",
	"acc" => "accordion-4",
	"acl" => "Vision",
	"acp" => "Hypershell for milions sites. Ultrafast engine for hyper perception. Extended API for fast livesearch and data exchange."
        ),
	array( 
        "ac" => "ac-5",
	"acc" => "accordion-5",
	"acl" => "The team",
	"acp" => "All thanks to WS1 team. We work hard on some UI and UX concepts. We expect from You to respect Our work."
        ),
	array( 
        "ac" => "ac-6",
	"acc" => "accordion-6",
	"acl" => "Why Should You Use Ng1np ?",
	"acp" => "Because it's fast. Ng1np is secure, simple, flexibile."
        ),
	array( 
        "ac" => "ac-7",
	"acc" => "accordion-7",
	"acl" => "Creator of Ng1np",
	"acp" => "Ceo & Founder of Engine Up is hightech(Milutin Gavrilovic). All thanks to WS1 team (ZDroid, vladap, Gaddafi, kgb, ludus, nemysis)."
        )
 );


$eng->footer = '<!-- <img src="media/html5.png" width="32" height="32" /><img src="media/php.png" width="32" height="32" /><img src="media/css3.png" width="32" height="32" /> -->';


//render page
echo $eng->render('up/default.tpl');

?>
