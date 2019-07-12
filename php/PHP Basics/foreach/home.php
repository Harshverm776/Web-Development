<?php $x=array(10,20,30,40,50,60);
$y=array('harsh'=>20,"akanksha"=>15,"anil"=>51);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2> List of numbers</h2>
	<ul>
		<?php 
		for($i=0;$i<=5;$i++)
		{
		 ?>
		<li>
			<?php echo $x[$i] ?>
		</li>
		<?php 
		}
		 ?>
	</ul>
	<br>
	<h2> Another List :</h2>
	<ul>
		<?php 
		foreach($y as $v)
		{
		 ?>
		<li>
			<?php echo $v; ?>
		</li>
		<?php 
		}
		 ?>
	</ul>


</body>
</html>