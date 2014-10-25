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

$eng->page = 'bbc-top';
$eng->title = 'BBC Top News - RSS';
$eng->logo = 'media/up.png';

$eng->header_h1 = 'RSS <span>NEWS</span>'; 
$eng->rss = 'http://feeds.bbci.co.uk/news/world/africa/rss.xml';


$eng->footer = '<!-- <img src="media/html5.png" width="32" height="32" /><img src="media/php.png" width="32" height="32" /><img src="media/css3.png" width="32" height="32" /> -->';


//render page
echo $eng->render('up/news.tpl');

?>
