<?php

//count pages
function count_pages() {
  $xmlDoc=new DOMDocument(); 
  $xmlDoc->load("sitemap.xml");
  $count = $xmlDoc->getElementsByTagName('loc')->length; 
  echo '<p>' . $count . ' pages</p>';
}

//nav from xml sitemap - select box
function nav_xml_htaccess() {
  //dinamic pages
  $pages = simplexml_load_file('sitemap.xml');
  echo "<form><select name='list' size=1 OnChange='location=getSelect(this)'>
  <option value='#'>page</option>";
    foreach ($pages as $link):
      $loc=$link->loc;
      echo "<option value='".$loc."'>".$loc."</option>";
    endforeach;
    echo "</select></form>";
}


$eng->id = $_GET['rss'];
$eng->rss = array (
'cnn-top'   => 'http://rss.cnn.com/rss/edition.rss',
'cnn-world'   => 'http://rss.cnn.com/rss/edition_world.rss',
'cnn-africa'   => 'http://feeds.bbci.co.uk/news/world/africa/rss.xml',
'bbc-top'   => 'http://feeds.bbci.co.uk/news/world/africa/rss.xml',
'rts-vesti'   => 'http://www.rts.rs/page/stories/sr/rss.html'
);

<?php
if ( (strlen($this->rss[$this->id]) > 0) && (in_array($this->rss[$this->id], $this->rss)) ) {
	require_once("_set/php/rsslib.php");
	echo RSS_Display($this->rss[$this->id], 25);
} else { header('Location: ./default'); }
?>
?>

