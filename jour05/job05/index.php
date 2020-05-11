
<?php 

$str = "Heyyy";
$char = "y";
			
   function occurrences($str, $char)
{
   echo substr_count($str, $char);
}
		
   occurrences($str, $char);
   
?>
