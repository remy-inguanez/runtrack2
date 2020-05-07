
<!DOCTYPE html>
<html>

<form action="index.php" method="post">
  <label for="nom"> Nom </label>
  <input type="text" name="nom"/>
 	
  <label for="prénom"> prénom </label>
  <input type="text" name="prénom"/>
	
  <label for="email"> mail </label>
  <input type="mail" name="email"/>
	
  <label for="tel"> téléphone </label>
  <input type="tel" name="tel"/>
	
  <input type="submit"/>
</form>

<?php
	echo "<table>
			<thead>
			  <th>Argument</th>
			  <th>Valeur</th>				
			</thead>
		  <tbody>";
				
	foreach($_POST as $args => $value)
{
	echo "<tr><td>".$args."</td><td>".$value."</td></tr>";
}
	echo "</tbody>";
?>

</html>
