
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
</head>

<body>

	<form method="POST" action="index.php">
		<input type="submit" name="destroy" value="quitter">
	</form>

		<?php
			
			session_start();
			if(!isset($_SESSION['nbvisites']))
			{
				$_SESSION['nbvisites'] = 0;
			}
			if(isset($_POST['destroy'])&&$_POST['destroy']=='quitter')
			{	$_POST['destroy']=null;
				$_SESSION['nbvisites'] = 0;
			}
			$_SESSION['nbvisites']++;
				

			echo "il y'a eu ".$_SESSION['nbvisites']." visites";



		?> 

</body>

</html>
