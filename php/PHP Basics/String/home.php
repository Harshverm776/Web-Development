<?php 
 $x="Harsh Verma";
 $y="Harsh";
 $z="Harsh";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> <?php echo "Hello $x, <br> Welcome to my page" ?> </h1>
	<h2> <?php echo 'Hello $x'; ?> </h2>
	<h2> <?php echo "Hello $x"; ?> </h2>
	<br>
	<?php $l=strlen($y); ?>
	<h2> <?php echo "$y has $l characters"; ?> </h2>
	<?php $l=strtoupper($y); ?>
	<h2> <?php echo "$y , $l"; ?>
	</h2>
	<?php $l=strtolower($y); ?>
	<h2> <?php echo "$y , $l"; ?> 
	</h2>
	<?php $l=strcmp($x,$y);
	?>
	<h2><?php echo "$x, $y : $l"; ?></h2>
	<?php $l=strcmp($y,$z) ?>
	<h2> <?php echo "$y, $z : $l"; ?> </h2>
</body>
</html>