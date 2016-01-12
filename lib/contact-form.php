<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'contact, cooperation, feedback, contact us, connection ...';
$eng->desc = 'Feel free to contact us. Feedback to us if you have some idea or concept to share. Thanks.';

$eng->page = 'contact';
$eng->title = 'Contact Us';
$eng->logo = 'media/contact-us.png';

$eng->header_h1 = '<span class="ex8">Feedback</span> Please. <span class="ex8">Feel</span> Free To <span class="ex8">Contact Us :)</span>';
 

//$eng->footer = '';


//render page
echo $eng->render('up/contact-form.tpl');

?>
