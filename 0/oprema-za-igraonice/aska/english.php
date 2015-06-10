<?php
require_once('lib/str.php');
$page = new Str;
$page->setTitle('Dečija igrališta');
$page->setKeywords('Aska, Dečija igrališta, Avantura parkovi, Trampolina parkovi, Indoor Playgrounds, Shopping Malls, Unutrašnja dečija igrališta');
$page->setOpis('Aska je sepcijalizovana radionica za izradu i opremanje dečijih igraonica. 
U izradi koristimo materijale koji zadovoljavaju protivpožarne standarde, konstrukcije imaju statičke proračune, 
a sva ostala oprema ima poreklo i sertifikate proizvođača, 
sve ovo je rezultiralo dobijanjem evropskog standarda EU1176..');
$page->startBody();
?>

<nav class="nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li class="current"><a href="english.php">English</a></li>
		<li><a href="kontakt.php">Contact</a></li>
</ul>
</nav>

<section>
<!-- leva strana -->
<article class="jedan">
<h2 id="opremanje-igraonica">Equipment for Playgrounds Aska</h2>
<p>
<a href="#">
<img src="images/image_2.jpg" alt="decija-igralista"/>
</a>
</p>

<h2>Projecting and Manufacturing Equipment for Shopping Malls</h2>
<p>
<a href="#">
<img src="images/trzni_centri1.jpg" alt="trzni-centri""/>
</a>
</p>

<h3>Aska Children Playgrounds</h3>
<p class="belo">Aska is a specialized workshop for designing and equipping playgrounds.
In making we use materials that meet fire standards, structures with statistical calculations, and all other equipment's origin  have manufacturers certificates , all of this has resulted in obtaining European standard EU1176.
Twine is certified, slides too. During the design and production we ensure the maximum safety of children.
Aska playgrounds for many years successfully engaged in designing and equipping playgrounds, respectively, since 2002. Our quality, professionalism, price, certified products we use in playgrounds puts us among the leading companies in this field.
We equip more than 300 facilities in birthday celebrations, malls, parks and entertainment centers, kindergartens ...</p>
<p>
<ul>
<li><a href="unutrasnja-decija-igralista.php">Indoor Playgrounds »</a></li>
<li><a href="trzni-centri.php">Shopping Malls »</a></li>
<li><a href="avantura-parkovi.php">Adventure parks »</a></li>
<li><a href="trampolina-parkovi.php">Trampolina parks »</a></li>
</ul>
</p>

<h4>Oprema koju ugrađujemo</h4>
<ul>
<li>Automobili i tramboline</li>		
<li>Sajle</li>		
<li>Avantura staze</li>
<li>Bazeni sa lopticama</li>		
<li>Strme ravni</li>		
<li>Vulkani</li>
<li>Gradovi i kulise</li>		
<li>Tobogani</li>		
<li>Ekstremni tobogani</li>
<li>Grede i mostovi</li>		
<li>Topovi</li>		
<li>Oslikavanje zidova</li>
<li>Kamikaze</li>		
<li>Tuneli</li>		
<li>I još mnogo toga...</li>
</ul>

  
<h2>Why Equipment for Playgrounds ASKA ?</h2>
<p>
<a href="#"><img src="images/image_5.jpg" alt="oprema-za-igraonice"/>
</a>
</p>

<p>
<ul>
<li>Iskustvo u poslu (preko 300 objekata)</li>
<li>Na sve proizvode godinu dana garancije</li>
<li>Profesionalnost</li>
<li>Maksimalno ćemo iskoristiti Vaš prostor</li>
<li>Tobogani atestirani</li>
<li>Popularne cene</li>
<li>Platna imaju fabričku garanciju (5god.)</li>
<li>Koristimo najkvalitetnije materijale</li>
<li>Kanap za mreže je atestiran</li>
<li>Sve to i još mnogo toga...</li>
</ul>
</p>

<h3>Proizvodnja elemenata i opreme za dečije igraonice</h3>

<h4>Sertifikovana i atestirana oprema</h4>
<p class="belo">Sertifikati opreme za igraonice.</p>
  
<h2>Evropski standardi za opremanje dečijih igraonica</h2>
<p>
<a href="galerija.php">
<img src="images/image_0.jpg" alt="oprema-za-igraonice"/>
</a>
</p>

<h3>Kvalitet kao polazna tačka.</h3>
<p>
<ul>
<li><a href="">Detaljnije »</a></li>
</ul>
</p>

<h4>Ponudićemo Vam samo najbolju opremu</h4>
<p class="belo">...</p>


<h4>Atesti</h4>
<p class="belo">Naši proizvodi su atestirani po evropskim standardima</p>
  
</article>

<!-- widgeti - desna strana -->
<article class="dva">

<h2>Odaberite jezik</h2>
<?php include 'markup/odaberite_jezik.php'; ?>
    
<h3>Slušaj muziku</h3>
<div id="dugme">
<div class="dugme">
<a href="muzika.php">Stream »</a>
</div>
</div>


<?php include 'markup/pretrazi.php'; ?>
    
<h3>Poslednje vesti</h3>
<?php include 'markup/poslednje_vesti.php'; ?>

<h3>Pratite nas i na ...</h3>
<?php include 'markup/socijalne_mreze.php'; ?>

<h3>Pošaljite nam poruku!</h3>
<div id="dugme">
<div class="dugme">
<a href="kontakt.php">Kontakt forma</a>
</div>
</div>
    
</article>

</section>

<?php
$page->endBody();
echo $page->render('inc/tpl.php');
?>
