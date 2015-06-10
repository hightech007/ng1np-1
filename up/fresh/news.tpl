<?php 
require_once 'up/misc/header.tpl'; 
?>

<!-- header &laquo; -->
<header>
	<h1><?php echo $this->header_h1; ?></h1>
	<h2><?php echo $this->header_h2; ?></h2>
	<img src="<?php echo $this->logo; ?>" width="70" height="70" alt="rss-and-news" class="ex8 h3d"/><!-- clearfix -->
<div class="clr"></div>
	<select name="list" size=1 OnChange="location=getSelect(this)" style="padding: 0.5%;padding-left: 1%;padding-right: 1%;">
		<option value="#">RealySimpleSindication</option>
		<option value="./cnn-top">cnn-top</option>
		<option value="./cnn-world">cnn-world</option>
		<option value="./cnn-africa">cnn-africa</option>
		<option value="./bbc-top">bbc-top</option>
		<option value="./rss">rss</option>
		<option value="http://www.extreme-prohosting.com/info/feed/">EXT: extreme-pro-hosting</option>
	</select>
</header>
<!-- end header -->			


<section class="rss ex8">
<?php	
require_once("_set/php/rsslib.php");
echo RSS_Display($this->rss, 25);
?>
</section>

<br /><br />

<!-- clearfix -->
<div class="clr"></div>
<!-- end clearfix -->
 

<!-- footer -->	
<?php require_once 'up/misc/footer.tpl'; ?>
<!-- end footer -->	
