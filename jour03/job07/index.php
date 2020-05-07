
<!DOCTYPE html>
<html>

<body>

<?php 

	$str="Certaines choses changent, et d'autres ne changeront jamais.";
	
	$taille=strlen($str);
	$i=0;
	while ($i < $taille) 
	{
		if ($i==($taille-1)) {
			echo $str[0];
			break;
		}
		else{
				echo $str[$i+1];
			}
		$i++;
	}

?>
	
</body>

</html>
