<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'brm_db');
	$q="Select * from book";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Book Records</title>
	<link rel="stylesheet" type="text/css" href="./css/viewStyle.css">
</head>
<body>
	<h1>BOOK RECORD MANAGEMENT</h1>
	<table id="view_table" width="400px">
		<tr>
			<th>Book ID</th>
			<th>Title</th>
			<th>Price</th>
			<th>Aurhor</th>
		</tr>
		<?php
			for ($i=1; $i<=$num ; $i++)
			{
				$row=mysqli_fetch_array($result);
		?>
				<tr>
					<td><?php echo $row['bookid']; ?> </td>
					<td><?php echo $row['title']; ?> </td>
					<td><?php echo $row['price']; ?> </td>
					<td><?php echo $row['author']; ?> </td>
				</tr>
			<?php
			}
			?>
	</table>
</body>
</html>