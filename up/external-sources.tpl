<?php 
require_once 'up/misc/header.tpl'; 
?>

<!-- header -->
<header>
<h1><?php echo $this->header_h1; ?></h1>
<h2><?php echo $this->header_h2; ?></h2>
<img src="<?php echo $this->logo; ?>" width="70" height="80" alt="external-sources" class="ex8 h3d"/>
</header>
<!-- end header -->

<!-- content  css3 accordation -->
<section class="ac-holder ex8">
<?php foreach ($this->acc as $row) { ?>
<div>
<input id="<?php echo $row['ac']; ?>" name="<?php echo $row['acc']; ?>" type="checkbox"/>
<label for="<?php echo $row['ac']; ?>"><?php echo $row['acl']; ?></label>
<article class="ac-small">
<p><?php echo $row['acp']; ?></p>
</article>
</div>		
<?php } ?>
</section>
<!-- end content  css3 accordation -->


<!-- clearfix --><div class="clr"></div><!-- clearfix -->



<!-- footer -->	
<?php require_once 'up/misc/footer.tpl'; ?>
<!-- end footer -->	
