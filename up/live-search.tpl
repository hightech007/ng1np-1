<?php require_once 'up/misc/header.tpl'; ?>

<!-- header -->
<header>
<h1><?php echo $this->header_h1; ?></h1>
<h2><?php echo $this->header_h2; ?></h2>
<img src="<?php echo $this->logo; ?>" width="70" height="70" alt="livesearch-api" class="ex8 h3d"/>
</header>
<!-- end header -->

<!-- content live-search -->
<form>
<input class="ex8" type="text" size="50" onkeyup="showResult(this.value)">
</form>
<div id="livesearch" style="margin-bottom: 15%;border: 0px solid rgb(65, 65, 65);"></div>

<!-- end content live-search -->

<!-- clearfix -->
<div class="clr"></div>
<!-- end clearfix -->

<!-- footer -->	
<?php require_once 'up/misc/footer.tpl'; ?>
<!-- end footer -->	
