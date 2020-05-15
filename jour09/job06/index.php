
<!DOCTYPE html>
<html>

<head>
	<title>job 6</title>
</head>

<body>	

	<?php 
		$jour08=mysqli_connect("localhost","root","","jour08");
		$select="SELECT COUNT(*) FROM etudiants;";
		$envoit=mysqli_query($jour08,$select);
		$reception=mysqli_fetch_all($envoit);
		echo "<table><tr><th> nb_etudiants </th><tr>";
		echo "<tr><td>".$reception[0][0]."</td></tr></table>";
		mysqli_close($jour08);
	?>

</body>

</html>
