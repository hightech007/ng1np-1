<?php
//pages
require_once '_set/php/tpl.php';

$eng = new ng1np();

//variables
$eng->charset = 'utf-8';
$eng->css = '_set/css/stil.php';

//meta
$eng->key = 'sbcl, hunchentoot, lisp, compiler, ANSI Common Lisp, Steel Bank Common Lisp, Open Source';
$eng->desc = 'Steel Bank Common Lisp (SBCL) is an open source (free software)
compiler and runtime system for ANSI Common Lisp. It provides an
interactive environment including an integrated native compiler,
a debugger, and many extensions.';

$eng->page = 'hunchentoot';
$eng->title = 'HunchenToot Server';
$eng->logo = 'media/hunchentoot.png';
$eng->logo_width = '70';
$eng->logo_height = '70';

$eng->header_h1 = 'Lisp <span class="ex8">Server</span>';
$eng->header_h2 = '<span class="ex8">Powered by Engine UP</span>'; 

$eng->acc = array( 
	array(  
	"id" => "1",
	"title" => "Wget HunchenToot 32-bit Server from SlackBuild repo",
	"code" => "wget http://slackbuilds.org/repository/13.37/development/sbcl/sbcl-1.0.50-x86-linux-binary.tar.bz2"
	),
	array(  
	"id" => "2",
	"title" => "Tarball HunchenToot 32-bit Server",
	"code" => "tar zxf sbcl.tar.gz"
	),
	array(  
	"id" => "3",
	"title" => "Copy to sbcl/ folder",
	"code" => "cp sbcl-1.0.50-x86-linux-binary.tar.bz2 sbcl/"
	),
	array(  
	"id" => "4",
	"title" => "Enter into sbcl/ folder",
	"code" => "cd sbcl"
	),
	array(  
	"id" => "5",
	"title" => "Run SlackBuild",
	"code" => "./sbcl.SlackBuild"
	),
	array(  
	"id" => "6",
	"title" => "Run sbcl",
	"code" => "sbcl"
	),
	array(  
	"id" => "7",
	"title" => "Let's Code",
	"code" => "(dolist (x '(:hunchentoot :cl-who :parenscript :cl-fad)) (asdf:oos 'asdf:load-op x))(defpackage 'PS-TUTORIAL' (:use 'COMMON-LISP' 'HUNCHENTOOT' 'CL-WHO' 'PARENSCRIPT' 'CL-FAD')) (in-package 'PS-TUTORIAL') (setf *js-string-delimiter* #\') (start (make-instance 'acceptor :port 8080))"
	),
	array(  
	"id" => "8",
	"title" => "Open Your Browser and Run Lisp Server on Location",
	"code" => "http://localhost:8080"
	)
 );


//$eng->footer = '';


//render page
echo $eng->render('up/serve/it.tpl');

?>
