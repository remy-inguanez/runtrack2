
<?php
			if(isset($_POST['destroy']))
				{echo "anule";
  					setcookie('prenom','',-1);
  						header('Location: index.php');
				}	
			if((!isset($_POST['prenom'])||isset($_POST['destroy']))&&!isset($_COOKIE["prenom"]))
			{	
							
echo "
<!DOCTYPE html>
<html>

<head>
	<meta charset=\"utf-8\">
</head>

<body>	
	<form method=\"POST\" action=\"index.php\" >
		<input type=\"text\" name=\"prenom\" placeholder=\"prenom\" required>
		<input type=\"submit\" name=\"envois\" value=\"envoyer mon prenom\">
	</form>
	
</body>

</html>";

}
else
{	if (!isset($_COOKIE["prenom"])) 
	{
		$pos=$_POST["prenom"];
		setcookie('prenom', $pos, 0);
		header('Location: index.php');
	}
	else
	{
	echo"<h1>Bonjour <u>".$_COOKIE["prenom"]."</u> !</h1>";
	echo "<form method=\"POST\" action=\"index.php\" >
		<input type=\"submit\" name=\"destroy\" value=\"quitter\">
		</form>";
		}
}
?> 
