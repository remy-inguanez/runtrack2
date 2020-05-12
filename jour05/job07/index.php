
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
</head>

<body>

<form action="index.php" method="post">
	<label for="string"></label><input placeholder="votre texte" type="text" id="string" name="str" required>
	<label for="fonc"></label>
	<select id="fonc" name="fonction">
		<option value="gras">gras</option>	
		<option id="ces" value="cesar">césar</option>
		<option value="Plateforme_">Plateforme_</option>
	</select>	
	<label for="ecart" class="hid">choisissez l'écart si l'option césar est choisie</label><input class="hid" type="number" name="ec" id="ecart" placeholder="2 par défaut">
	<input type="submit" value="envoyer">
</form>

	<?php 


		function gras($str)
		{	
			$tab=explode(" ", $str);
			$long=count($tab)-1;
			$i=0;
			$str="";
			while($i<=$long) 
			{	$testmaj=ctype_upper($tab[$i][0]);
				if($testmaj==true)
				{
					$tab[$i]="<b>".$tab[$i]."</b>";
				}
				
				$str=$str.$tab[$i]." ";
				$i++;
			}

			return $str;
		}

		function cesar($str,$x)
		{
			$taille = strlen($str) ;
			$i = 0;
			while($i<$taille)
			{	
				if($str[$i]!=" ")
				{	$conv=ord($str[$i]) +$x;
					
					if($conv>122)
					{	
						$conv=96+($conv-122);
					}
					if($conv>90&&$conv<97)
					{
						$conv=64+($conv-90);
					}
						
					$conv=chr($conv);
					$str[$i]=$conv;
				}
				
				$i++;
				
			}
			return $str;
		}

		function Plateforme_($str)
		{	$str=$str." ";
			$taille = strlen($str) ;
			$i = 0;
			while($i<$taille)
			{	if(isset($str[$i+1])==true&&isset($str[$i+2])==true)
				{

					if(($str[$i]=="m"||$str[$i]=="M")&&($str[$i+1]=="e"||$str[$i+1]=="E")&&$str[$i+2]==" ")
					{
						$str=substr_replace($str, "_", $i+2-$taille, 0);
						$taille++;
					}
				}
				$i++;
				
			}
			return $str;
		}
		

		if($_POST==true)
		{
			switch ($_POST["fonction"]) {
				case 'gras':
					echo(gras($_POST["str"]));
					break;
				case 'cesar':
					if (!empty($_POST['ec'])) 
					{
						echo(cesar($_POST["str"],$_POST["ec"]));
					}
					else
					{
						echo(cesar($_POST["str"],2));
					}
					break;
				case 'Plateforme_':
					echo(Plateforme_($_POST["str"]));
					break;
			}
		}
		

	?>

</body>

</html>
