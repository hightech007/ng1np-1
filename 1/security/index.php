<?php
//$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
//$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
//$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
//$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
//$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

//if ($iphone || $android || $palmpre || $ipod || $berry == true) 
//{
//    header('Location: http://antistereotip.net/0/mobile-showcase/');
// }
?>
<style>
body {margin:0 auto;width:94%;padding:1%;margin-top:1%;background:#212121;
border:1px solid #17f118;font-size:1.5em;}
a {color: #17f118;}

</style><a href="../">back</a><br />
<?php
if ($handle = opendir('./')) {

    while (false !== ($entry = readdir($handle))) {

	if (
		$entry != "." && 
		$entry != ".." && 
		$entry != "index.php" && 
		$entry != "error_log"
	) {

            echo '<a href="'.$entry.'">'.$entry.'</a><br />';
        }
    }

    closedir($handle);
}
?>
