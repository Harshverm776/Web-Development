<?php
 session_start();
 $username=$_POST['username'];
 $password=$_POST['password'];
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'logindb');
 $q="select * from user where username='$username' && password='$password'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 echo $num;
 if($num==1)
 {
 	$_SESSION['username']=$username;
 	header('location:http://localhost/login example/home.php');
 }
 else{
  header('location:http://localhost/login example/login.php');
 }
 
?>