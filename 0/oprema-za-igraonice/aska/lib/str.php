<?php
class Str {
	private $title, $stylesheets=array(),  $body;
	
	function Str() {
		$this->addCSS('css/stil.css');
	}
	
	function setTitle($title) {
		$this->title = $title;
	}

	function setKeywords($keywords) {
		$this->keywords = $keywords;
	}

	function setOpis($opis) {
		$this->opis = $opis;
	}
	
	function addCSS($path) {
		$this->stylesheets[] = $path;
	}
	

	function startBody() {
		ob_start();
	}
	
	function endBody() {
		$this->body = ob_get_clean();
	}
	
	function render($path) {
		if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
		include($path);
		if(extension_loaded('gzip')){ob_end_flush();}
	}
}
?>