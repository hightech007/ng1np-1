<?php 
require_once 'up/misc/header.tpl'; 
?>

<!-- header -->
<header>
	<h1><?php echo $this->header_h1; ?></h1>
	<h2><?php echo $this->header_h2; ?></h2>
	<img src="<?php echo $this->logo; ?>" width="70" height="70"/>
</header>

<!-- content accordation -->
<section class="ac-holder">
	<?php foreach ($this->acc as $row) { ?>
	<div>
	<input id="<?php echo $row['ac']; ?>" name="<?php echo $row['acc']; ?>" type="checkbox" />
	<label for="<?php echo $row['ac']; ?>"><?php echo $row['acl']; ?></label>
	<article class="ac-small">
	<p><?php echo $row['acp']; ?></p>
	</article>
	</div>		
	<?php } ?>
</section>

<!-- clearfix -->
<div class="clr"></div>

<!-- footer -->	
<?php 
require_once 'up/misc/footer.tpl'; 
?>
