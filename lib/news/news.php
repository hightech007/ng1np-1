<?php

//pages
require_once '_set/php/tpl.php';
$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'news, rss, IT, information, tech, feed, xtreme feed, profesional news, publising ...';
$eng->desc = 'Publishing as its best, like fire :) RSS feed and fresh News from world, political, culture and information tehnologies';

$eng->page = 'news';
$eng->title = 'News - RSS';
$eng->logo = 'media/rss.png';

$eng->header_h1 = 'RSS <span>NEWS</span>'; 
$eng->header_h2 = 'Publishing <span>Like a Fire :)</span>'; 
$eng->rss = './feed/engine.rss';


//$eng->footer = '';


//render page
echo $eng->render('up/fresh/news.tpl');

?>
