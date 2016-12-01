<?php

	//Test si les 3 cookies existent, si ils exsitent, ils redirigent vers l'index.php sinon il reste sur cette page pour se connecter.
	if(isset($_COOKIE['pseudo']))
	{
		if(isset($_COOKIE['ville']))
		{
			if(isset($_COOKIE['id']))
			{
				header('Location:index.php');
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" />
		<title> Connexion </title>
	</head>
	<body>
		<fieldset>
			<legend>Connexion :</legend>
		
			<form method="POST" action="process_connexion.php">
				<label>Pseudo : </label><input type="text" name="pseudo"/><br>
				<label>Ville : </label><input type="text" name="ville"/><br>
				<input type="submit" value="Envoyer" />
			</form>	
			
		</fieldset>
	</body>
</html>