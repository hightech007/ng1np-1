<?php require_once 'up/misc/header.tpl'; ?>

<!-- header -->
<header>
<h1><?php echo $this->header_h1; ?></h1>
<h2><?php echo $this->header_h2; ?></h2>
<img src="<?php echo $this->logo; ?>" width="80" height="70" alt="wikipedia-livesearch" class="ex8 h3d"/>
</header>
<!-- end header -->



<!-- content wapi -->
<?php include 'API/wikipedia.php'; ?>
<!-- end content wapi -->


<!-- footer -->	
<?php require_once 'up/misc/footer.tpl'; ?>
<!-- end footer -->	
