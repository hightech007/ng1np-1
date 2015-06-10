<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>AJAX Photo Gallery</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="gallery">
  <div id="imagearea">
    <div id="image">
      <a href="javascript:slideShow.nav(-1)" class="imgnav " id="previmg"></a>
      <a href="javascript:slideShow.nav(1)" class="imgnav " id="nextimg"></a>
    </div>
  </div>
  <div id="thumbwrapper">
    <div id="thumbarea">
      <ul id="thumbs">
        <li value="1"><img src="thumbs/1.jpg" width="179" height="100" alt="" /></li>
        <li value="2"><img src="thumbs/2.jpg" width="179" height="100" alt="" /></li>
        <li value="3"><img src="thumbs/3.jpg" width="179" height="100" alt="" /></li>
        <li value="4"><img src="thumbs/4.jpg" width="179" height="100" alt="" /></li>
        <li value="5"><img src="thumbs/5.jpg" width="179" height="100" alt="" /></li>
	<li value="6"><img src="thumbs/6.jpg" width="179" height="100" alt="" /></li>
        <li value="7"><img src="thumbs/7.jpg" width="179" height="100" alt="" /></li>
        <li value="8"><img src="thumbs/8.jpg" width="179" height="100" alt="" /></li>
        <li value="9"><img src="thumbs/9.jpg" width="179" height="100" alt="" /></li>
        <li value="10"><img src="thumbs/10.jpg" width="179" height="100" alt="" /></li>
	<li value="11"><img src="thumbs/11.jpg" width="179" height="100" alt="" /></li>
        <li value="12"><img src="thumbs/12.jpg" width="179" height="100" alt="" /></li>
        <li value="13"><img src="thumbs/13.jpg" width="179" height="100" alt="" /></li>
        <li value="14"><img src="thumbs/14.jpg" width="179" height="100" alt="" /></li>
        <li value="15"><img src="thumbs/15.jpg" width="179" height="100" alt="" /></li>
	<li value="16"><img src="thumbs/16.jpg" width="179" height="100" alt="" /></li>
        <li value="17"><img src="thumbs/17.jpg" width="179" height="100" alt="" /></li>
        <li value="18"><img src="thumbs/18.jpg" width="179" height="100" alt="" /></li>
        <li value="19"><img src="thumbs/19.jpg" width="179" height="100" alt="" /></li>
        <li value="20"><img src="thumbs/20.jpg" width="179" height="100" alt="" /></li>
	<li value="21"><img src="thumbs/21.jpg" width="179" height="100" alt="" /></li>
        <li value="22"><img src="thumbs/22.jpg" width="179" height="100" alt="" /></li>
        <li value="23"><img src="thumbs/23.jpg" width="179" height="100" alt="" /></li>
        <li value="24"><img src="thumbs/24.jpg" width="179" height="100" alt="" /></li>
        <li value="25"><img src="thumbs/25.jpg" width="179" height="100" alt="" /></li>
	<li value="26"><img src="thumbs/26.jpg" width="179" height="100" alt="" /></li>
        <li value="27"><img src="thumbs/27.jpg" width="179" height="100" alt="" /></li>
        <li value="28"><img src="thumbs/28.jpg" width="179" height="100" alt="" /></li>
        <li value="29"><img src="thumbs/29.jpg" width="179" height="100" alt="" /></li>
        
        <li value="32"><img src="thumbs/32.jpg" width="179" height="100" alt="" /></li>
        <li value="33"><img src="thumbs/33.jpg" width="179" height="100" alt="" /></li>
        <li value="34"><img src="thumbs/34.jpg" width="179" height="100" alt="" /></li>
        <li value="35"><img src="thumbs/35.jpg" width="179" height="100" alt="" /></li>
	<li value="36"><img src="thumbs/36.jpg" width="179" height="100" alt="" /></li>
        <li value="37"><img src="thumbs/37.jpg" width="179" height="100" alt="" /></li>
        <li value="38"><img src="thumbs/38.jpg" width="179" height="100" alt="" /></li>
        <li value="39"><img src="thumbs/39.jpg" width="179" height="100" alt="" /></li>
        <li value="40"><img src="thumbs/40.jpg" width="179" height="100" alt="" /></li>
	<li value="41"><img src="thumbs/41.jpg" width="179" height="100" alt="" /></li>
        <li value="42"><img src="thumbs/42.jpg" width="179" height="100" alt="" /></li>
        <li value="43"><img src="thumbs/43.jpg" width="179" height="100" alt="" /></li>
        <li value="44"><img src="thumbs/44.jpg" width="179" height="100" alt="" /></li>
        <li value="45"><img src="thumbs/45.jpg" width="179" height="100" alt="" /></li>
	
      </ul>
    </div>
  </div>
</div>

<script type="text/javascript">
var imgid = 'image';
var imgdir = 'fullsize';
var imgext = '.jpg';
var thumbid = 'thumbs';
var auto = true;
var autodelay = 5;
</script>
<script type="text/javascript" src="slide.js"></script>

</body>
</html>
