<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>

<!DOCTYPE html>
<html lang="sr">
<head>
<link href='http://fonts.googleapis.com/css?family=Bigelow+Rules|Peralta|Jacques+Francois+Shadow|Griffy' rel='stylesheet' type='text/css'>
	<meta charset="utf-8" />
	<meta name="description" content="servis i prodaja novih i polovnih racunara" />
	<meta name="keywords" content="kompjuter, hardver, disk ,delovi, racunari, software " />
	<meta name="author" content="slax" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="robots" content="index,follow"> 
	<meta name="robots" content="noodp, noydir"/> 
	<link rel="stylesheet" href="css/stil.css" />
	<link rel="stylesheet" href="css/animacija.css" />
	<link rel="shortcut icon" href="media/bf0.png" />
	<title>Servis Kompjutera</title>
	<!-- <script src="#" type="text/javascript"></script>  -- opciono -- -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

<!-- holder -->
<section class="holder">

<header>
<!-- dugmici -->
<div id="kursna" class="ex8">
<iframe src="http://www.kursna-lista.com/gedzeti/cache/gadget3.html" frameborder="0" height="100" scrolling="no" width="110"></iframe>
</div>
	<img src="media/bf1.png" class="ex8">
	<h1 id="ex8"><span id="l">Servis</span> - <span id="d">Racunara</span><br /><span id="dl">Service</span><span id="dc"> of </span><span id="dd">Computer</span></h1>
	
</header>
<!-- grid lenjir -->

<div class="navigacija ex8">
	<nav>
		<ul>
			<li><a href="?q=pocetna" id="zuta">Početna</a></li>
			<li><a href="?q=onama" id="zuta">O nama</a></li>
			<li><a href="?q=kontakt" id="zuta">Kontakt</a></li>
			</ul>
	
			
	</nav>
	</div>

<article>


<?php
$str = $_GET['q']; 
# dozvoljene putanje
switch ($str) {
	case 'onama':
	case 'kontakt':
	case 'russian':
 	   include 'lib/'.$str.'.php';
 	break;
 	default:
           include 'lib/pocetna.php';
	}
?>

</article>
<!-- kraj grid lenjira -->

<footer>	
	
	<p>
	 <a href="http://webserveri.info">designed by hightech & slax </a>
	</p>	
	<p>
<a href="http://tool.motoricerca.info/robots-checker.phtml?checkreferer=1">
<img src="http://tool.motoricerca.info/pic/valid-robots-small.png" border="0"
alt="Valid Robots.txt" width="80" height="15"></a>
</p>			
</footer>

</section>
<!-- kraj holder-a -->

</body>
</html>

<?php if(extension_loaded('gzip')){ob_end_flush();}?>
