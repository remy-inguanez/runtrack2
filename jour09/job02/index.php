
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
</head>

<body>	

	<?php 
		$jour08=mysqli_connect("localhost","root","","jour08");
		$selectout="select nom,capacite from salles;";
		$envoit=mysqli_query($jour08,$selectout);
		$reception=mysqli_fetch_all($envoit);

		echo "<table><tr><th>nom</th><th>capacité</th><tr>";
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
