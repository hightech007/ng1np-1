<?php
require_once('lib/str.php');
$page = new Str;
$page->setTitle('Indoor playgrounds');
$page->setKeywords('Aska, Unutrasnja dečija igrališta, kombinovana igrališta, igrališta, kids playground ...');
$page->setOpis('kombinovana igrališta - proizvodnja i prodaja kombinovanih igrališta');
$page->startBody();
?>

<nav class="nav">
	<ul>
		<li><a href="index.php">Početna</a></li>
		<li><a href="trzni-centri.php">Tržni centri</a></li>
		<li class="current"><a href="unutrasnja-decija-igralista.php">Unutrašnja dečija igrališta</a></li>
		<li><a href="avantura-parkovi.php">Avantura parkovi</a></li>
		<li><a href="trampolina-parkovi.php">Trampolina parkovi</a></li>
		<li><a href="kontakt.php">Kontakt</a></li>
	</ul>
</nav>

<section>
 
<!-- leva strana -->
<article class="jedan">
<h2>Unutrašnja dečija igrališta</h2>
<p>
<img src="images/indoor2.jpg" width="120" height="80" alt="unutrasnja-decija-igralista"/>
<img src="images/indoor1.png" width="120" height="80" alt="indoor-playgrounds"/>
<img src="images/indoor3.jpg" width="120" height="80" alt="indoor-playgrounds"/>
</p>
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
