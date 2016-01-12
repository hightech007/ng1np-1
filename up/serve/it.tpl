<?php 
require_once 'up/misc/header.tpl'; 
?>

<!-- header -->
<header>
<h1><?php echo $this->header_h1; ?></h1>
<h2><?php echo $this->header_h2; ?></h2>
<img src="<?php echo $this->logo; ?>" width="<?php echo $this->logo_width; ?>" height="<?php echo $this->logo_height; ?>" alt="<?php echo $this->page; ?>" class="ex8 h3d" />
</header>
<!-- end header -->

<!-- content  css3 accordation -->
<section class="ac-holder ex8">
<?php foreach ($this->acc as $row) { ?>

<p><?php echo $row['title']; ?></p>
<code><?php echo $row['code']; ?></code>		

<?php } ?>
</section>
<!-- end content  css3 accordation -->


<!-- clearfix --><div class="clr"></div><!-- clearfix -->



<!-- footer -->	
<?php require_once 'up/misc/footer.tpl'; ?>
<!-- end footer -->	
