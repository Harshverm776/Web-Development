<?php
	$publisher=$_POST['pub'];
	$per=$_POST['percent'];

	$con= mysql_connect('localhost','root');
	mysqli_select_db($con,'db3');

	$q="Update book set price=price*(1+$per/100) where publisher='$publisher'";
	mysqli_query($con,$q);
	mysqli_close($con);
?>