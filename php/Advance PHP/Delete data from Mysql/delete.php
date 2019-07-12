<?php
	$book=$_GET['id'];
	$con=mysqli_connect('localhost','root');
	mysqli_connnect($con,'db1');
	$q="delete from book where bookid=$bookid
	";
	mysqli_query($con,$q);
?>