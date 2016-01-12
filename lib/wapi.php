<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'Wikipedia, wiki, search, livesearch, searching, informations, enciklopedia...';
$eng->desc = 'WikiPedia LiveSearch API is very fast and good servise for searching Wiki in Live mode';

$eng->page = 'wapi';
$eng->title = 'WikiPedia LiveSearch API';
$eng->logo = 'media/wikipedia-in-sunglasses.png';

$eng->header_h1 = 'W-API <span class="ex8">LiveSearch</span>';
$eng->header_h2 = '<span class="ex8">Fast Searching Wikipedia</span>'; 



$eng->footer = '<img src="media/wflat.png" width="32" height="32" /><img src="media/ng1np.png" width="32" height="32" />';


//render page
echo $eng->render('up/wapi.tpl');

?>
