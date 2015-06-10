<?php
require_once('lib/str.php');
$page = new Str;
$page->setTitle('Kontakt strana');
$page->setKeywords('Aska, Dečija igrališta, Avantura i trampolina parkovi, Kontakt, Kontaktirajte nas ...');
$page->setOpis('Kontakt strana - Strana za kontakt i saradnju');
$page->startBody();
?>

<nav class="nav">
<ul>
		<li><a href="index.php">Početna</a></li>
		<li><a href="trzni-centri.php">Tržni centri</a></li>
		<li><a href="unutrasnja-decija-igralista.php">Unutrašnja dečija igrališta</a></li>
		<li><a href="avantura-parkovi.php">Avantura parkovi</a></li>
		<li><a href="trampolina-parkovi.php">Trampolina parkovi</a></li>
		<li class="current"><a href="kontakt.php">Kontakt</a></li>
</ul>
</nav>

<section>
 
<!-- leva strana -->
<article class="jedan">
<h2>ASKA</h2>
<p class="kontakt_slike">
<img src="images/job.png" width="60" height="60" alt="kontakt"/>
</p>
<p>
Naziv: <b>ASKA SZR.</b><br />
Puno ime: <b>ASKA SZR. Beograd</b><br />
Pravni oblik: <b>SZR.</b><br />
Adresa:	<b>adresa</b><br />
Pošta: <b>11000 BEOGRAD</b><br />
mat. broj: <b>-</b><br />
PIB: <b>-</b><br />
Primarna delatnost: <b>-</b>
</p>

<h3>Kontakt podaci:</h3>
<p class="kontakt_slike">
<img src="images/phone.png" width="60" height="60" alt="kontakt"/>
</p>
<p>
Mobilni telefon: <b>+381 (0)64 39 39 674</b><br />
Fiksni telefon: <b>-</b><br />
E-mail: <b>aska.szr@gmail.com</b><br />
</p>
</article>


<!-- widgeti - desna strana -->
<article class="dva">

<h2>Odaberite jezik</h2>
<?php include 'markup/odaberite_jezik.php'; ?>
    
<h2>Kontaktirajte nas!</a></h2><br />
<?php include 'markup/contact.php'; ?>
    
</article>

</section>

<?php
$page->endBody();
echo $page->render('inc/tpl.php');
?>
