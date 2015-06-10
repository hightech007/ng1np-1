

<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'php, programming, ternary, hard code ...';
$eng->desc = 'In computer science, a ternary operator (sometimes incorrectly called a tertiary operator) is an operator that takes three arguments.';

$eng->page = 'ternary-operater-php';
$eng->title = 'Ternary Operation';
$eng->logo = 'media/ternary.png';
$eng->logo_width = '100';
$eng->logo_height = '100';

$eng->header_h1 = 'TERNARY <span class="ex8">OPERATER</span>';
$eng->header_h2 = '<span class="ex8">PHP Programming Language</span>'; 

$eng->acc = array( 
	array(  
	"id" => "1",
	"title" => "Ternary operater PHP",
	"code" => '<script src="https://gist.github.com/antistereotip/daf4b9bf2e928e09ef3a.js"></script>'
	),
	array(  
	"id" => "2",
	"title" => "Syntax",
	"code" => "condition ? block1 : block2'; "
	)
);


//$eng->footer = '';


//render page
echo $eng->render('up/serve/it.tpl');

?>
