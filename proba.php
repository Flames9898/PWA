<!DOCTYPE html>
<html>
<head>
		<title>The Tech Suite</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="style.css">
	</head>
	<body>
	<?php require_once 'nav.html';
	$dbc=mysqli_connect('localhost', 'root', '', 'proizvodi') or die('Error connecting to MySQL server!');
	$query='SELECT * FROM proizvod2;';
	$result=mysqli_query($dbc,$query) or die("Error parsing a query!");
	while($row=mysqli_fetch_array($result)){
		echo $row['id'].' '.$row['kategorija'].'<br />';
		echo '<img src="images/'.$row["slika"].'"><br />';
	}
	mysqli_close($dbc);
	?>
	<?php require_once 'foot.html'; ?>
	
</html>