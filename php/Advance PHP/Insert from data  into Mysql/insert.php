<?php
	$bookid=$_POST['bookid'];
	$title=$_POST['title'];
	$price=$_POST['price'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'db3');
	$q="insert into book (bookid,title,price) values ($bookid,'$title',$price)";
	$i=mysqli_query($con,$q);
	echo $i;
	mysqli_close($con);
	?>