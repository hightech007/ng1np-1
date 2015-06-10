<!doctype html>
<html lang="sr">
<head>
<meta charset="utf-8" />
<title>Aska | <?php echo $this->title; ?></title>
<meta name="description" content="<?php echo $this->opis; ?>" />
<meta name="keywords" content="<?php echo $this->keywords; ?>" />
<meta name="robots" content="index,follow"/> 
<meta name="robots" content="noydir"/> 
<meta name="robots" content="noodp"/>
<link rel="stylesheet" href="css/stil.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>
<link rel="shortcut icon" href="favicon.ico"> 
<script src="js/livesearch.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>
	 // DOM ready
	 $(function() {
	   
      // Create the dropdown base
      $("<select />").appendTo("nav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
	 
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
	 
	 });
	</script>
</head>

<body>

<header>
<h1 class="fontface" id="title"></h1>
</header>

<?php echo $this->body; ?>

<footer>
<p>Sva prava zadržana - 2015 @ aska</p>
<p>
<a href="http://www.igraoniceaska.co.rs/">
<img src="http://tool.motoricerca.info/pic/valid-robots-small.png" border="0"
alt="Valid Robots.txt" width="80" height="15">
</a>
</p>
</footer>
</body>
</html>
