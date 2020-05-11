
<?php

    $a = 11;
	$operation = "+";
	$b = 7;
			
	function calcul ($a, $operation, $b)
{
	if ($operation = '+')
{
	$resultat = $a + $b;
}
	return ($resultat);
}
	$affichage = calcul($a, $operation, $b);
		
	echo $affichage;
?>
