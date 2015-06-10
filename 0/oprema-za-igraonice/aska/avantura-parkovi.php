<?php
require_once('lib/str.php');
$page = new Str;
$page->setTitle('Avantura parkovi');
$page->setKeywords('Aska, Avantura parkovi, Zidovi za penjanje, Climbing walls, Linijska koturača, Ekstremni padovi,
Kaskaderski sundjeri...');
$page->setOpis('Oprema za Avantura parkove');
$page->startBody();
?>

<nav class="nav">
	<ul>
		<li><a href="index.php">Početna</a></li>
		<li><a href="trzni-centri.php">Tržni centri</a></li>
		<li><a href="unutrasnja-decija-igralista.php">Unutrašnja dečija igrališta</a></li>
		<li class="current"><a href="avantura-parkovi.php">Avantura parkovi</a></li>
		<li><a href="trampolina-parkovi.php">Trampolina parkovi</a></li>
		<li><a href="kontakt.php">Kontakt</a></li>
	</ul>
</nav>

<section>
 
<!-- leva strana -->
<article class="jedan">
<h2>Avantura parkovi</h2>
<p>
<a href="#">
<img src="images/avantura_parkovi1.jpg" alt="avantura-parkovi"/>
</a>
<a href="#">
<img src="images/avantura_parkovi2.jpg" alt="avantura-parkovi"/>
</a>
<a href="#">
<img src="images/avantura_parkovi3.jpg" alt="avantura-parkovi"/>
</a>
</p>
<p>
<ul>
<li><a href="#">Detaljnije »</a></li>
</ul> 
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
