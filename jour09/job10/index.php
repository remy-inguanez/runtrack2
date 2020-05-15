
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
</head>

<body>	

	<?php 
		$jour08=mysqli_connect("localhost","root","","jour08");
		$selectout="SELECT nom FROM `salles` ORDER by capacite ";
		$envoit=mysqli_query($jour08,$selectout);
		$reception=mysqli_fetch_all($envoit);

		echo "<table><tr><th>nom</th><tr>";
			foreach ($reception as $salle)
			 {		
			 		echo"<tr><td> $salle[0] </td><tr>";		

			}
			echo "</table>";
			
		mysqli_close($jour08);
	?>

</body>

</html>
