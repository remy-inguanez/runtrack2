
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
</head>

<body>

	<form method="POST" action="index.php">
		<input type="submit" name="destroy" value="quitter">
	</form>

</body>

</html>

<?php
			
			if(isset($_POST['destroy'])&&$_POST['destroy']=='quitter')
			{	$_POST['destroy']=null;
				unset($_COOKIE['nbvisites']);
			}
			if(!isset($_COOKIE['nbvisites']))
			{	
				setcookie('nbvisites', 1, 0);
			}
			else{
				$a=$_COOKIE['nbvisites']+1;

				setcookie('nbvisites', $a, 0);
				echo "il y a eu ".$_COOKIE['nbvisites']." visite";
			}

		?> 

