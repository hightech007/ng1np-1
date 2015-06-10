<?php

defined('ROOT_DIR') or exit('No direct script access allowed');


#--------broji_stranice_u_xml_mapi-----------#
function count_pages() {
  $xmlDoc=new DOMDocument(); 
  $xmlDoc->load("sitemap.xml");
  $count = $xmlDoc->getElementsByTagName('loc')->length; 
  echo  '(pages: ' . $count . ')';
}

#--------selektovana_navigacija_iz_xml_mape-----------#
function nav_xml_htaccess() {
  //dinamic pages
  $pages = simplexml_load_file('sitemap.xml');
  echo "<form><select name='list' size=1 OnChange='location=getSelect(this)'>
  <option value='#'>SiteMap</option>";
    foreach ($pages as $link):
      $loc=$link->loc;
      echo "<option value='".$loc."'>".$loc."</option>";
    endforeach;
    echo "</select></form>";
}

#--------loguje_ip_adrese-----------#
function ip_log() {
 $ip = '<p>IP <b>'.$_SERVER['REMOTE_ADDR'].'</b></p>'.'<p>date <b>'. date("Y-m-d").' </b></p>'; 
echo $ip . '<br />';
//loguj u ip.log 
$file = fopen ('_set/logs/ip.log', 'a'); fputs($file, $ip . ' | NEXT | '); 
}

#--------okruzenje-----------#
function tnv() {
	echo "PHP_SELF : " . $_SERVER['PHP_SELF'] . "<br />"; 
	echo "GATEWAY_INTERFACE : " . $_SERVER['GATEWAY_INTERFACE'] . "<br />"; 
	echo "SERVER_ADDR : " . $_SERVER['SERVER_ADDR'] . "<br />"; 
	echo "SERVER_NAME : " . $_SERVER['SERVER_NAME'] . "<br />"; 
	echo "SERVER_SOFTWARE : " . $_SERVER['SERVER_SOFTWARE'] . "<br />"; 
	echo "SERVER_PROTOCOL : " . $_SERVER['SERVER_PROTOCOL'] . "<br />"; 
	echo "REQUEST_METHOD : " . $_SERVER['REQUEST_METHOD'] . "<br />"; 
	echo "REQUEST_TIME : " . $_SERVER['REQUEST_TIME'] . "<br />"; 
	echo "REQUEST_TIME_FLOAT : " . $_SERVER['REQUEST_TIME_FLOAT'] . "<br />"; 
	echo "QUERY_STRING : " . $_SERVER['QUERY_STRING'] . "<br />"; 
	echo "DOCUMENT_ROOT : " . $_SERVER['DOCUMENT_ROOT'] . "<br />"; 
	echo "HTTP_ACCEPT : " . $_SERVER['HTTP_ACCEPT'] . "<br />"; 
	echo "HTTP_ACCEPT_CHARSET : " . $_SERVER['HTTP_ACCEPT_CHARSET'] . "<br />"; 
	echo "HTTP_ACCEPT_ENCODING : " . $_SERVER['HTTP_ACCEPT_ENCODING'] . "<br />"; 
	echo "HTTP_ACCEPT_LANGUAGE : " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br />"; 
	echo "HTTP_CONNECTION : " . $_SERVER['HTTP_CONNECTION'] . "<br />"; 
	echo "HTTP_HOST : " . $_SERVER['HTTP_HOST'] . "<br />"; 
	echo "HTTP_REFERER : " . $_SERVER['HTTP_REFERER'] . "<br />"; 
	echo "HTTP_USER_AGENT : " . $_SERVER['HTTP_USER_AGENT'] . "<br />"; 	
	echo "HTTPS : " . $_SERVER['HTTPS'] . "<br />"; 
	echo "REMOTE_ADDR : " . $_SERVER['REMOTE_ADDR'] . "<br />"; 
	echo "REMOTE_HOST : " . $_SERVER['REMOTE_HOST'] . "<br />"; 
	echo "REMOTE_PORT : " . $_SERVER['REMOTE_PORT'] . "<br />"; 	
	echo "REMOTE_USER : " . $_SERVER['REMOTE_USER'] . "<br />"; 
	echo "REDIRECT_REMOTE_USER : " . $_SERVER['REDIRECT_REMOTE_USER'] . "<br />"; 
	echo "SCRIPT_FILENAME : " . $_SERVER['SCRIPT_FILENAME'] . "<br />"; 
	echo "SERVER_ADMIN : " . $_SERVER['SERVER_ADMIN'] . "<br />"; 
	echo "SERVER_PORT : " . $_SERVER['SERVER_PORT'] . "<br />"; 
	echo "SERVER_SIGNATURE : " . $_SERVER['SERVER_SIGNATURE'] . "<br />"; 
	echo "PATH_TRANSLATED : " . $_SERVER['PATH_TRANSLATED'] . "<br />"; 
	echo "SCRIPT_NAME : " . $_SERVER['SCRIPT_NAME'] . "<br />"; 
	echo "REQUEST_URI : " . $_SERVER['REQUEST_URI'] . "<br />"; 
	echo "PHP_AUTH_DIGEST : " . $_SERVER['PHP_AUTH_DIGEST'] . "<br />"; 
	echo "PHP_AUTH_USER : " . $_SERVER['PHP_AUTH_USER'] . "<br />"; 
	echo "PHP_AUTH_PW : " . $_SERVER['PHP_AUTH_PW'] . "<br />"; 
	echo "AUTH_TYPE : " . $_SERVER['AUTH_TYPE'] . "<br />"; 
	echo "PATH_INFO : " . $_SERVER['PATH_INFO'] . "<br />"; 
	echo "ORIG_PATH_INFO : " . $_SERVER['ORIG_PATH_INFO'] . "<br />"; 
}

#--------mikro_data_google_seo-----------#
function mikro_blog($klasa, $naslov, $h1, $img, $desc, $veza, $url)
{
echo '<article itemscope itemtype="http://data-vocabulary.org/Organization" class="'.$klasa.'">
		<a itemprop="url" href="'.$veza.'"><h1 itemprop="name" >'.$h1.'</h1></a>
		<p><img itemprop="photo" src="'.$img.'" alt="'.$naslov.'" width="70" height="auto"></p>
		<p itemprop="description" class="desc">'.$desc.'</p>
      </article>';
}

#--------Iscitaj_fajlove_u_direktorijumu_kao_listu---#
function PreuzmiListuFajlova($Direktorijum) {

  $VratiVrednost = array();
  if(substr($Direktorijum, -1) != "/") $Direktorijum .= "/";
  $D = @dir($Direktorijum) or die("PreuzmiListuFajlova: Ne mogu otvoriti $Direktorijum za citanje niti pisanje");

  while(false !== ($Ulaz = $D->read())) {
  	if($Ulaz[0] == ".") continue;
    	if(is_dir("$Direktorijum$Ulaz")) {
      	$VratiVrednost[] = array(
        	"name" => "$Direktorijum$Ulaz/",
        	"type" => filetype("$Direktorijum$Ulaz"),
        	"size" => 0,
        	"lastmod" => date("F d Y H:i:s", filectime("$Direktorijum$Ulaz"))
    	);
    }
    elseif(is_readable("$Direktorijum$Ulaz")) {
    	$VratiVrednost[] = array(
        	"name" => "$Direktorijum$Ulaz",
        	"type" => mime_content_type("$Direktorijum$Ulaz"),
        	"size" => filesize("$Direktorijum$Ulaz"),
        	"lastmod" => filectime("$Direktorijum$Ulaz")
      	);
    }
  }
  $D->close();
  return $VratiVrednost;
}

#--------kompresuj_stranicu---------#
function KompresujStranu($Baferuj) {
  $Pretrazi = array(
        '/\>[^\S ]+/s',  // ocisti razmake izmedju tagova, izuzev spejsa
        '/[^\S ]+\</s',  // ocisti razmake pre tagova, izuzev spejsa
        '/(\s)+/s'       // skrati vise spojenih spejsova
    );
  $Zameni = array(
        '>',
        '<',
        '\\1'
    );
  return preg_replace($Pretrazi, $Zameni, $Baferuj);
}

#--------broji_fajlove_u_direktorijumu---------#
function BrojiFajlove($Direktorijum) {
  $i = 0;

  if ($Hendler = opendir($Direktorijum)) {
    while (($Fajl = readdir($Hendler)) !== false) {
    if (!in_array($Fajl, array('.', '..')) && !is_dir($dir.$file))
      $i++;
    }
  }

  echo $i;
}

#--------drzi_input_sigurnim---------#
function ObezbediInput($Sigurno) {
	$Sigurno = mysql_escape_string(trim($Sigurno));
	return strip_tags(htmlentities($Sigurno));
}


#--------referentni_statisticki_log---------#
function ref_statistic_log() {
	$ip = $_SERVER['REMOTE_ADDR'];
	$pagina = $_SERVER['REQUEST_URI'];
	$datum = date("d-m-y / H:i:s");
	$invoegen = $datum . " - " . $ip . " - " . $pagina . "<br />";
	$fopen = fopen("_set/logs/ip.html", "a");
	fwrite($fopen, $invoegen);
	fclose($fopen);
}


?>

