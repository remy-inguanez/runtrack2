
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
</head>

<body>	

	<?php 
		$jour08=mysqli_connect("localhost","root","","jour08");
		$select="select prenom,nom,naissance from etudiants where sexe = 'femme';";
		$envoit=mysqli_query($jour08,$select);
		$reception=mysqli_fetch_all($envoit);

		echo "<table><tr><th>prenom</th><th>nom</th><th>date de naissance</th><tr>";
			foreach ($reception as $etudiant)
			 {		echo "<tr>";
					foreach ($etudiant as $categorie ) {

						echo"<td> $categorie </td>";
					}
					echo "<tr>";
		
		
			}
			echo "</table>";
			
		mysqli_close($jour08);
	?>

</body>

</html>
