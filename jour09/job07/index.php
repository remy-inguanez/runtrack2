
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
</head>

<body>	

	<?php 
		$jour08=mysqli_connect("localhost","root","","jour08");
		$select="SELECT SUM(superficie) FROM etage ";
		$envoit=mysqli_query($jour08,$select);
		$reception=mysqli_fetch_all($envoit);
		echo "<table><tr><th> superficie_totale </th><tr>";
		echo "<tr><td>".$reception[0][0]."</td></tr></table>";
		mysqli_close($jour08);
	?>

</body>

</html>
