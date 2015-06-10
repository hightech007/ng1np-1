<?php
require_once('lib/str.php');
$page = new Str;
$page->setTitle('dečija igrališta');
$page->setKeywords('anemos, dečija igrališta, igrališta, parkovi, kids playground, park, bašte, igrališta za vrtiće ...');
$page->setOpis('dečija igrališta - proizvodnja i prodaja');
$page->startBody();
?>

<nav class="nav">
<ul>
<li><a href="index.php">Vrati se na početnu</a></li>
<li class="current"><a href="muzika.php">Muzika</a></li>
</ul>
</nav>

<section>
<!-- leva strana -->
<article class="jedan">
<h2>Muzika</h2>

<h3>Žanrovi</h3>
<ul>
<li><a href="#">Jazz »</a></li>
<li><a href="#">Soul »</a></li>
<li><a href="#">Blues »</a></li>
</ul>
</p>

<h3>Podnaslov Muzika -h4</h3>
<p class="belo">Tekst o muzici.</p>

<h4>Muzika</h4>
<p class="belo">Tekst o muzici</p>
  
</article>

<!-- widgeti - desna strana -->
<article class="dva">

<h2>Odaberite jezik</h2>
<?php include 'markup/odaberite_jezik.php'; ?>
    
<h3>Slušaj muziku</h3>
<?php include 'markup/muzika.php'; ?>


</article>

</section>

<?php
$page->endBody();
echo $page->render('inc/tpl.php');
?>