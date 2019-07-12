<?php
	$con= mysqli_connect('localhost','root');
	mysqli_select_db($con,'db3');
	
	$q="select * from book";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	
	for($i=1;$i<=$num;$i++)
	{
		$row=mysqli_fetch_array($result);
		echo $row['bookid']."  ".$row['title']."  ".$row['price'];
	}
		mysqli_close($con);
	
?>