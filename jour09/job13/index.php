
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
</head>

<body>	

	<?php 
		$jour08=mysqli_connect("localhost","root","","jour08");
		$selectout="SELECT salles.nom ,etage.nom FROM `salles`, `etage` WHERE etage.id = salles.id_etage";
		$envoit=mysqli_query($jour08,$selectout);
		$reception=mysqli_fetch_all($envoit);

		echo "<table><tr><th>salles</th><th>etage</th><tr>";
			foreach ($reception as $salle)
			 {		echo "<tr>";
					foreach ($salle as $categorie ) {

						echo"<td> $categorie </td>";
					}
					echo "<tr>";
		
		
			}
			echo "</table>";
			
		mysqli_close($jour08);
	?>

</body>

</html>
