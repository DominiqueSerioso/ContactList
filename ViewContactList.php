<?php
    echo '<link href="main.css" rel="stylesheet"/>';
	$conn = mysqli_connect('localhost','root','','contactlist');
	$query = "SELECT * FROM `person`";
	$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Contact List </title>
</head>
<body>
<button><a href="index.php">BACK</a></button>
	<table align="center" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="4"><h2>Contact List</h2></th>
		</tr>
		<t>
			<th>ID</th>
			<th>Name</th>
			<th>Contact No</th>
			<th>Email</th>
		</t>
	<?php
		while($row = mysqli_fetch_array($result))
		{
	?>
			<tr>
				<td><?php echo $row['ID']; ?> </td>
				<td><?php echo $row['Name']; ?> </td>
				<td><?php echo $row['ContactNo']; ?> </td>
				<td><?php echo $row['Email']; ?> </td>
			</tr>
	<?php
		}
	?>
	</table>
</body>
</html>
