<?php
require_once('lib/str.php');
$page = new Str;
$page->setTitle('katalog proizvoda');
$page->setKeywords('anemos, dečija igrališta, igrališta, katalog proizvoda, kids playground ...');
$page->setOpis('katalog proizvoda - preuzmite pdf');
$page->startBody();
?>

<nav class="nav">
<ul>
<li><a href="index.php">Početna</a></li>
<li><a href="decija-igralista.php">Dečija igrališta</a></li>
<li><a href="oprema-za-parkove.php">Oprema za parkove</a></li>
<li><a href="oprema-za-bastu.php">Oprema za baštu</a></li>
<li><a href="fitnes-na-otvorenom.php">Fitnes na otvorenom</a></li>
<li class="current"><a href="katalog.php">Katalog</a></li>
<li><a href="galerija.php">Galerija</a></li>
<li><a href="kontakt.php">Kontakt</a></li>
</ul>
</nav>

<section>

<!-- leva strana -->
<article class="jedan">

<!----------------------------------------------------------- -- -->



<div itemscope itemtype="http://data-vocabulary.org/Product">
  <span itemprop="brand">ASKA</span> <span itemprop="name">Dečije igraonice</span>
  <img itemprop="image" src="images/image_2.jpg" />

  <span itemprop="description">Aska je sepcijalizovana radionica za izradu i opremanje dečijih igraonica. U izradi koristimo materijale koji zadovoljavaju protivpožarne standarde, konstrukcije imaju statičke proračune, a sva ostala oprema ima poreklo i sertifikate proizvođača, sve ovo je rezultiralo dobijanjem evropskog standarda EU1176. 
  </span>
  Category: <span itemprop="category" content="Hardware > Tools > Anvils">Igraonice</span>
  Product #: <span itemprop="identifier" content="mpn:925872">
    925872</span>
  <span itemprop="review" itemscope itemtype="http://data-vocabulary.org/Review-aggregate">
    <span itemprop="rating">4.4</span> stars, based on <span itemprop="count">89
      </span> reviews
  </span>

  <span itemprop="offerDetails" itemscope itemtype="http://data-vocabulary.org/Offer">
    Regular price: $179.99
    <meta itemprop="priceCurrency" content="USD" />
    $<span itemprop="price">119.99</span>
    (Sale ends <time itemprop="priceValidUntil" datetime="2020-11-05">
      5 November!</time>)
    Available from: <span itemprop="seller">Executive Objects</span>
    Condition: <span itemprop="condition" content="used">Previously owned, 
      in excellent condition</span>
    <span itemprop="availability" content="in_stock">In stock! Order now!</span>
  </span>
</div>




<!------------------------- ----------- --------------------------->





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
