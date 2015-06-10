<?php 
require_once 'up/misc/header.tpl'; 
?>

<!-- header -->
<header>
<h1><?php echo $this->header_h1; ?></h1>
<h2><?php echo $this->header_h2; ?></h2>
<p></p>
<button type="button"
onclick="document.getElementById('date').innerHTML = Date()">
Click for Date and Time</button>
<p id="date"></p>
<img src="<?php echo $this->logo; ?>" width="70" height="70" alt="API-picture" class="ex8 h3d"/>
</header>
<!-- end header -->



<!-- content  css3 accordation -->
<section class="ac-holder ex8">
<?php foreach ($this->acc as $row) { ?>
<a href="<?php echo $row['url']; ?>"><?php echo $row['title']; ?></a>
<?php } ?>
</section>
<!-- end content  css3 accordation -->


<!-- clearfix --><div class="clr"></div><!-- clearfix -->



<!-- footer -->	
<?php require_once 'up/misc/footer.tpl'; ?>
<!-- end footer -->	
