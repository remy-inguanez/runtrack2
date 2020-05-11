
<?php
		function leetspeak($str)
		{
			$taille= strlen($str) ;
			$i=0;
			while($i<$taille)
			{
				switch ($str[$i]) {
				case 'A':
					$str[$i]='4';
					break;
				case 'B':
					$str[$i]='8';
					break;
				case 'E':
					$str[$i]='3';
					break;
				case 'G':
					$str[$i]='6';
					break;
				case 'L':
					$str[$i]='1';
					break;
				case 'S':
					$str[$i]='5';
					break;
				case 'T':
					$str[$i]='7';
					break;

			}

				$i++;
			}

			return $str;
		}
		
		echo "ABEGLST = ".leetspeak("ABEGLST");
	?>
    