<?php 
require_once 'up/misc/header.tpl'; 
?>

<!-- header &laquo; -->
<header>
	<h1><?php echo $this->header_h1; ?></h1>
	<h2><?php echo $this->header_h2; ?></h2>
	<img src="<?php echo $this->logo; ?>" width="90" height="70" alt="video-chat" class="ex8 h3d"/>
</header>

<!-- content -->			


<section>
<!-- Begin Fresh Tilled Soil Video Chat Embed Code -->
<div id="freshtilledsoil_embed_widget" class="video-chat-widget ex8"></div>
<script id="fts" src="http://freshtilledsoil.com/embed/webrtc-v5.js?r=FTS0316-CZ6NqG97"></script>
<!-- End Fresh Tilled Soil Video Chat Embed Code -->
</section>

<!-- clearfix -->
<div class="clr"></div>



<!-- footer -->	
<?php 
require_once 'up/misc/footer.tpl'; 
?>

