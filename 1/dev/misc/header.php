<!doctype html>
<head>
<meta charset="utf-8">

<!-- the title tag should be 60 characters or less -->
<title><?php echo $title ?></title>


<!-- meta description must be limited to 160 characters or less -->
<meta name="description" content="<?php echo $description; ?>"> 

<!-- meta description must be limited to 160 characters or less -->
<meta name="keywords" content="<?php echo implode(',', array_keys($words)); ?>"> 


<meta name="author" content="hightech">

<style>
body {width:90%; margin: 0 auto;background:#333;color:#17f118;font-family: "Courier New", Courier, monospace;}
a {color:orange;}
.id {color: yellow;}
.bid {color: yellow;}
.tag {color: white; font-size:1.1em;}
.right {width:46%;padding:2%;float:right;background:#222;}
.left {width:46%;padding:2%;float:left;background:#111;}
#dugme {
float: right;
width: 76px;
height: 76px;
border-left: 1px solid #414141;
border-top: 1px solid #414141;
border-bottom: 1px solid #414141;
opacity: 0.7;
filter: alpha(opacity=300);
background-color: #212121;
float: left;
}
.dugme {
margin-top: 10px;
width: 76px;
height: 76px;
float: left;
overflow: hidden;
position: relative;
text-align: center;
cursor: default;
}


#dugme:hover {opacity:0.7;  filter:alpha(opacity=300); background-color: #313131; }
.dugme { margin-top: 10px; width: 76px; height: 76px; float: left; overflow: hidden; 
position: relative; text-align: center; cursor: default;}

.dugme .maska,.dugme .sadrzaj {width: 76px; height: 76px; position: absolute; overflow: hidden; top: 0; left: 0;clear:both;}

.dugme img {display: block; position: relative; width: 76px; height: 76px;}

.dugme h2 {text-transform: uppercase; color: #fff;  text-align: center; position: relative;
font-size: 11px; padding-top: 5px; background: rgba(0, 0, 0, 0.8); margin-top: 10px;}

.dugme h2:hover {color: yellow;}

.dugme a.info {font-size: 11px; display: inline-block; text-decoration: none; background: #000;
color: #17f118; -webkit-box-shadow: 0 0 1px #000; -moz-box-shadow: 0 0 1px #000; box-shadow: 0 0 1px #000;}

.dugme a.info: hover {-webkit-box-shadow: 0 0 5px #000; -moz-box-shadow: 0 0 5px #000; box-shadow: 0 0 5px #000; }

.dugme-iko img {-webkit-transition: all 0.4s ease-in-out 0.5s; -moz-transition: all 0.4s ease-in-out 0.5s;
-o-transition: all 0.4s ease-in-out 0.5s; -ms-transition: all 0.4s ease-in-out 0.5s; transition: all 0.4s ease-in-out 0.5s;}

.dugme-iko .maska {background-color: rgba(5,5,5,0.5); -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
filter: alpha(opacity=0); opacity: 0; -webkit-transition: all 0.3s ease-in 0.4s; -moz-transition: all 0.3s ease-in 0.4s;
-o-transition: all 0.3s ease-in 0.4s; -ms-transition: all 0.3s ease-in 0.4s; transition: all 0.3s ease-in 0.4s;}

.dugme-iko h2 {-ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)"; filter: alpha(opacity=0); opacity: 0;
background: transparent; -webkit-transform: scale(10); -moz-transform: scale(10); -o-transform: scale(10); -ms-transform: scale(10);
transform: scale(10); -webkit-transition: all 0.3s ease-in-out 0.1s; -moz-transition: all 0.3s ease-in-out 0.1s;
-o-transition: all 0.3s ease-in-out 0.1s; -ms-transition: all 0.3s ease-in-out 0.1s; transition: all 0.3s ease-in-out 0.1s;}

.dugme-iko a.info {-ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)"; filter: alpha(opacity=0); opacity: 0;
-webkit-transform: translateY(100px); -moz-transform: translateY(100px); -o-transform: translateY(100px); -ms-transform: translateY(100px);
transform: translateY(100px); -webkit-transition: all 0.3s ease-in-out 0.1s; -moz-transition: all 0.3s ease-in-out 0.1s;
-o-transition: all 0.3s ease-in-out 0.1s; -ms-transition: all 0.3s ease-in-out 0.1s; transition: all 0.3s ease-in-out 0.1s;}

.dugme-iko:hover .maska {-ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)"; filter: alpha(opacity=200); opacity: 1;
-webkit-transition-delay: 0s; -moz-transition-delay: 0s; -o-transition-delay: 0s; -ms-transition-delay: 0s; transition-delay: 0s;}

.dugme-iko:hover img {-webkit-transition-delay: 0s; -moz-transition-delay: 0s; -o-transition-delay: 0s;
-ms-transition-delay: 0s; transition-delay: 0s;}

.dugme-iko:hover h2 {-ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)"; filter: alpha(opacity=200); opacity: 1;
-webkit-transform: scale(1); -moz-transform: scale(1); -o-transform: scale(1); -ms-transform: scale(1); transform: scale(1);
-webkit-transition-delay: 0.1s; -moz-transition-delay: 0.1s; -o-transition-delay: 0.1s; -ms-transition-delay: 0.1s; transition-delay: 0.1s;}

.dugme-iko:hover a.info {-ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)"; filter: alpha(opacity=200); opacity: 1;
-webkit-transform: translateY(0px); -moz-transform: translateY(0px); -o-transform: translateY(0px); -ms-transform: translateY(0px);
transform: translateY(0px); -webkit-transition-delay: 0.3s; -moz-transition-delay: 0.3s; -o-transition-delay: 0.3s;
-ms-transition-delay: 0.3s; transition-delay: 0.3s;}
h1 {text-shadow: 1px 2px 7px #000;}

h2 {
padding:1%;
width: 98%;
float: left;
}

</style>
<script language="javascript" type="text/javascript">
	function getSelect(s) {
	  return s.options[s.selectedIndex].value
	}
</script>
</head>
<body>
