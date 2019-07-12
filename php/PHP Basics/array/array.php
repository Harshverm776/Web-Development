<?php
	$x=array("harsh","brijesh","sameer"); 
	$y=array(1,2,3,4,5);
	$z[0]="harsh";
	$z[1]="verma";
	$age=array('harsh'=>20,"Brijesh"=>21,"Durgesh"=>19);
	$age[3]='Saini';
	$age['deepansh']=20;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello <?php echo $x[0]; ?></h1>
	<h1>Hello <?php echo $x[1]; ?></h1>
	<h1>Hello <?php echo $x[2]; ?></h1>
	This is the array y :<br>
	<?php echo $y[0]; ?>
	<?php echo $y[1]; ?>
	<?php echo $y[2]; ?>
	<br>
	This is another array y :<br>
	<?php echo $z[0]; ?>
	<?php echo $z[1]; ?>
	<br>
	This is associated array :<br>
	<?php echo $age["harsh"]; ?>
	<?php echo $age["Brijesh"]; ?>
	<?php echo $age['Durgesh']; ?>
	<?php echo $age[3]; ?>
	<?php echo $age['deepansh']; ?>
</body>
</html>