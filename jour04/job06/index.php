
<!DOCTYPE html>
<html>

<form method="get" action="index.php">
	<label for="nb">nombre ?</label>
	<input type="number" id="nb" name="nombre">
	<input type="submit" value="envoyer">	
</form>

	<?php
		if($_GET==true)
		{
			if($_GET["nombre"]%2==0)
			{
				echo $_GET["nombre"]." est nombre paire";
			}
			else
			{
				echo $_GET["nombre"]." est nombre impaire";
			}
		}

	?>

</html>
