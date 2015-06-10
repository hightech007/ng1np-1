<?php
require_once('lib/str.php');
$page = new Str;
$page->setTitle('Tržni centri');
$page->setKeywords('Aska, Oprema igraonica u trznom centru, Indoor playgrounds in Shopping Centers, Scene, Maskote, 
Scenografija, Shopping mol');
$page->setOpis('dečija igrališta - proizvodnja i prodaja - anemos.rs');
$page->startBody();
?>

<nav class="nav">
<ul>
		<li><a href="index.php">Početna</a></li>
		<li class="current"><a href="trzni-centri.php">Tržni centri</a></li>
		<li><a href="unutrasnja-decija-igralista.php">Unutrašnja dečija igrališta</a></li>
		<li><a href="avantura-parkovi.php">Avantura parkovi</a></li>
		<li><a href="trampolina-parkovi.php">Trampolina parkovi</a></li>
		<li><a href="kontakt.php">Kontakt</a></li>
</ul>
</nav>

<section>
 
<!-- leva strana -->
<article class="jedan">
  
<h2>Tržni centri</h2>
<p>
<a href="#">
<img src="images/trzni_centri1.jpg" alt="trzni-centri""/>
</a>
</p>
<ul>
<li><a href="#">Detaljnije »</a></li>
</ul>


<h2>Idejna rešenja zabave u tržnim centrima</h2>
<p>
<a href="#">
<img src="images/trzni_centri1.jpg" alt="trzni-centri""/>
</a>
</p> 
<ul>
<li><a href="#">Detaljnije »</a></li>
</ul>

<h2 id="projektovanje-i-izrada">Projektovanje i izrada igrališta za tržne centre</h2>
<p>
<a href="#">
<img src="images/trzni_centri1.jpg" alt="trzni-centri""/>
</a>
</p>
<ul>
<li><a href="#">Detaljnije »</a></li>
</ul>  

</article>

<!-- widgeti - desna strana -->
<article class="dva">

<h2>Odaberite jezik</h2>
<?php include 'markup/odaberite_jezik.php'; ?>
 
<?php include 'markup/pretrazi.php'; ?>
    
<h3>Poslednje vesti</h3>
<?php include 'markup/poslednje_vesti.php'; ?>

<h3>Pratite nas i na ...</h3>
<?php include 'markup/socijalne_mreze.php'; ?>

<h3>Pošaljite nam poruku!</h3>
<p>
<div class="dugme">
<a href="kontakt.php">Kontakt forma</a>
</div>
</p>
    
</article>

</section>

<?php
$page->endBody();
echo $page->render('inc/tpl.php');
?>
