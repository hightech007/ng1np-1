<?php

//pages
require_once '_set/php/tpl.php';
$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'P2P, PeerToPeer, Video chat, video, chat, google video chat service, nodeJS, webcam, one2one';
$eng->desc = 'Peer2peer chat is a one2one (person to person) webcam video chat using nodeJS for meeting connection. It is similar to google video chat service.';

$eng->page = 'video-chat';
$eng->title = "Antistereotip's Video Chat";
$eng->logo = 'media/video-chat.png';

$eng->header_h1 = 'VIDEO <span class="ex8">CHAT</span>'; 
$eng->header_h2 = '<span class="ex8">Peer2Peer Video Chat</span>';


//$eng->footer = '';

//render page
echo $eng->render('up/video-chat.tpl');

?>

