<?php 
require_once 'inc/pth.php';
require_once($INC_DIR. "fnc.php");
require_once($INC_DIR. "var.php"); 
//Empty variables should be declared NULL (without quotes) like: $title=NULL;
require_once($MISC_DIR. "header.php"); 
?>

<!-- content -->

<h1><?php echo $title; ?></h1>

<!---------- left ----------><div class="left">

<?php require_once($DATA_DIR. "315.php"); ?> 

<!---------- end left ----------></div>

<!---------- right ----------><div class="right">

<h2>Member Area</h2>

<form>
<input name="id" type="search" class="inp" placeholder="Unesi komandu" autofocus="">
<input type="submit" value="ENTER ID">
</form>

<p>
<?php
(($_GET['id']) == 007) ? require_once 'page/user.php' : require_once 'page/guest.php';
?>
</p>


<h2>Connect</h2>
<p>

<img src="<?php echo $img; ?>" width="60" height="auto"/>
<img src="<?php echo $img_ast; ?>" width="60" height="auto"/>
<img src="<?php echo $img_hightech; ?>" width="60" height="auto"/>
<img src="<?php echo $img_zdroid; ?>" width="60" height="auto"/>
<img src="<?php echo $img_dog; ?>" width="60" height="auto"/>
<img src="<?php echo $img_b; ?>" width="60" height="auto"/>
<img src="<?php echo $img_cirko; ?>" width="60" height="auto"/>
<img src="<?php echo $img_darthvader; ?>" width="60" height="auto"/>
<img src="<?php echo $img_c3po; ?>" width="60" height="auto"/>

</p>
<p>
<form> 
	<select name="list" size=1 OnChange="location=getSelect(this)">
		<option value="#">Category</option>
		<option value="pics/x1.png">Unix</option>
		<option value="pics/x1.png">Gnu/Linux</option>
		<option value="pics/x1.png">Serveri</option>
			
	</select> 
<form>
</p>

<p>Tag Cloud  <span class="tag">
<?php echo implode(', ', array_keys($words)); echo ', '.strtolower($title); echo ', '.strtolower($description_article); ?>
</span></p>

<h3>Pizza Connection</h3>
<p>
<svg version="1.1" width="120" height="120" xmlns="">
  <defs>
    <radialGradient id="circleGrad">
      <stop offset="0%" stop-color="#212121"></stop>
      <stop offset="80%" stop-color="#014298"></stop>
    </radialGradient>
  </defs>

  <ellipse fill="url(#circleGrad)" stroke="#000" cx="50%" cy="50%" rx="33.5561%" ry="33.5561%">
    <animate attributeName="rx" values="0%;50%;0%" dur="1s" repeatCount="indefinite"></animate>
    <animate attributeName="ry" values="0%;50%;0%" dur="1s" repeatCount="indefinite"></animate>
  </ellipse>
</svg>
</p>
<p>
Top Rated Quality
</p>
<p>
<div class="dugme dugme-iko" id="dugme"><a href="#"><img src="<?php echo $img_wflat; ?>" width="60" height="auto" alt="flat wlogo">
     <div class="maska"><p>Pizza <br>Conn</p></div></a>
</div>
<div class="dugme dugme-iko" id="dugme"><a href="#"><img src="<?php echo $img_zpop; ?>" width="60" height="auto" alt="popivoda">
     <div class="maska"><p>Pizza <br>Conn</p></div></a>
</div>
<div class="dugme dugme-iko" id="dugme"><a href="#"><img src="<?php echo $img_lion; ?>" width="60" height="auto" alt="popivoda">
     <div class="maska"><p>Pizza <br>Conn</p></div></a>
</div>
<div class="dugme dugme-iko" id="dugme"><a href="#"><img src="<?php echo $img_routefor; ?>" width="60" height="auto" alt="route for net">
     <div class="maska"><p>Pizza <br>Conn</p></div></a>
</div>
</p>

<h2>extreme</h2>
<p><iframe width="400" height="250" src="https://www.youtube.com/embed/peHAm-dUzh4" frameborder="0" allowfullscreen></iframe></p>




<!---------- end right ----------></div>

<!-- end content -->

<?php require_once($MISC_DIR. "footer.php"); ?>


