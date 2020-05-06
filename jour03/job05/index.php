
<!DOCTYPE html>
<html>

<body>

<?php 

	$str="On nest pas le meilleur quand on le croit mais quand on le sait";
	$taille=strlen($str);

	$dic= array(
		"consonnes"=>["b","B","c","C","d","f","F","g","G","h","H","j","J","k","K","l","L","m","M","n","N","p","P","q","Q","r","R","s","S","t","T","v","V","w","W","x","X","z","Z"],
		"voyelles"=>["a","A","e","E","i","I","o","O","u","U","y","Y"]);

	$cons=0;
	$voy=0;

	$i=0;

	while ($i < $taille) {
		$c=0;
		$tc=count($dic["consonnes"]);
		$v=0;
		$tv=count($dic["voyelles"]);
		while($c<$tc)
		{
			if($str[$i]==($dic["consonnes"][$c]))
			{
				$cons++;
				break;
			}
			$c++;
		}
		
		$tv=count($dic["voyelles"]);


		while($v<$tv)
		{

			if($str[$i]==$dic["voyelles"][$v])
			{
				$voy++;
				break;
			}
			$v++;
		}
		
		$i++;
	}

	 ?>

<table>
	<tr>
	 	<th>Voyelles</th><th>Consonnes</th>
	</tr>
	<tr>
	 	<td><?php echo $voy; ?></td>
	 	<td><?php echo $cons; ?></td>
	</tr>
</table>

</body>

</html>
