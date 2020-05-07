
<!DOCTYPE html>
<html>

<form method="get" action="index.php">
	<label for="h">hauteur ?</label>
	<input type="number" id="h" name="hauteur">
	<label for="l">largeur ?</label>
	<input type="number" id="l" name="largeur">
	<input type="submit" value="envoyer">		
</form>

<?php

		if($_GET==true)
		{
			$h=$_GET["hauteur"];
			$l=$_GET["largeur"];
			$i=0;
			$trait="";
			$taille_espace=($l / 2)+1;
			$espace="";
			$e=0;
			while ($taille_espace>=$e) 
			{
				$espace=$espace."&nbsp&nbsp";
				$e++;
			}

			
			//toit
			$i2=0;
			while($i+1<$l)
			{
				echo $espace;
				$espace=substr($espace, 0, -5);
				 	
								
				echo"/";
					while ($i2==$i)
					{
								echo $trait;
								$trait=$trait."_";
								$i2++;	
							}
				echo"\\<br>";
				$i++;
			}
			$p=0;
			$trait=strlen($trait);
			$trait2="&nbsp&nbsp&nbsp";
			$t=0;
			while($t!=$l)
				{
					$trait2=$trait2."&nbsp";
					$t++;
				}

			while ( $p<= ($h-$i)) {


				echo $espace."|".$trait2."|<br>";
				$p++;
			}
		}

?>

</html>
