<?php
$username=$_POST['username'];
$f=$_FILES['myfile'];
echo "Hello $username<br>";
echo "File Name: ".$f['name'];
echo "<br>File Type: ".$f['type'];
echo "<br>File Size: ".$f['size']." <br>";
if(file_exists("photos/".$f['name']))
{
	echo $f['name']." already exists";
}
else if($f['type']=="image/jpeg")
{
	move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
}
else
	echo "File format is not valid, unable to upload";
?>