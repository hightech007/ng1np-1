<?php 
require_once 'up/misc/header.tpl'; 
?>

<!-- header &laquo; -->
<header>
	<h1><?php echo $this->header_h1; ?></h1>
	<select name="list" size=1 OnChange="location=getSelect(this)" style="padding: 0.5%;
	padding-left: 1%;
	padding-right: 1%;">
		<option value="#">RSS</option>
		<option value="./cnn-top">cnn-top</option>
		<option value="./cnn-world">cnn-world</option>
		<option value="./cnn-africa">cnn-africa</option>
		<option value="./bbc-top">bbc-top</option>
		<option value="./rts-vesti">rts-vesti</option>
	</select>
</header>

<!-- content -->			


<section class="rss">
<?php	
require_once("_set/php/rsslib.php");
echo RSS_Display($this->rss, 25);
?>
</section>

<!-- clearfix -->
<div class="clr"></div>

<script language="javascript" type="text/javascript">
	function getSelect(s) {
	  return s.options[s.selectedIndex].value
	}
</script> 

<!-- footer -->	
<?php 
require_once 'up/misc/footer.tpl'; 
?>

