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

$eng->page = 'live-search';
$eng->title = 'LiveSearch-API';
$eng->logo = 'media/livesearch.png';

$eng->header_h1 = '<span class="ex8">LiveSearch</span> API';
$eng->header_h2 = '<span class="ex8">Search Sitemap on AntiStereotip</span>'; 



$eng->footer = '<img src="media/wflat.png" width="32" height="32" /><img src="media/ng1np.png" width="32" height="32" />';


//render page
echo $eng->render('up/live-search.tpl');

?>
