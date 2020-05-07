
<!DOCTYPE html>
<html>

<body>

<?php 

	$str="Les choses que l'on possede finissent par nous posseder.";
	
	$taille=strlen($str);
	$i=$taille-1;
	while ($i >= 0) 
	{
		echo $str[$i];
		$i=$i-1;
	}

?>

</body>

</html>
