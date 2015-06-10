<?php
die('under construction oop');
define('OOP_ROOT_DIR', realpath(dirname(__FILE__)) .'/');
require_once(OOP_ROOT_DIR .'class_lib.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html;
        charset=iso-8859-1" />
        <title>OOP in PHP</title>
</head>
<body>
<?php
$view = new View();
$view->name = 'Milutin';
$view->job = 'President of the USA';
echo $view->render(OOP_ROOT_DIR .'tpl.phtml');





$ht = new osoba();
$as = new osoba();
                 
$ht->set_ime("Milutin Gavrilovic");
$as->set_ime("Gavrilovic Milutin");
                
echo "m's full name: " . $ht->get_ime();
echo "a's full name: " . $as->get_ime(); 

echo '<br />';

$ht->set_ime("hightech");
$as->set_ime("antistereotip");
                
echo "hightech's full name: " . $ht->get_ime();
echo "antistereotip's full name: " . $as->get_ime(); 

echo '<br />';

echo $as->get_ime(); 
echo " ---> "; 
$as = new zaposleni("asix"); 
echo  $as->get_ime();
 
echo '<br />';


?>
</body>
</html> 

