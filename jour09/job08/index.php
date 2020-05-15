
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>job 8</title>
</head>

<body>	

	<?php 
		$jour08=mysqli_connect("localhost","root","","jour08");
		$select="SELECT SUM(capacite) FROM salles";
		$envoit=mysqli_query($jour08,$select);
		$reception=mysqli_fetch_all($envoit);
		echo "<table><tr><th> capacite_totale</th><tr>";
		echo "<tr><td>".$reception[0][0]."</td></tr></table>";
		mysqli_close($jour08);
	?>

</body>

</html>
