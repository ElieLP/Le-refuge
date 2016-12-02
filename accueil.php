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
		<meta charset="utf8"/>
		<link rel=stylesheet href='css/reset.css' />
		<link rel=stylesheet href='css/base.css' />
		
		<title>Les Nymphormaticiens</title>
	</head>
	<body>
		<header>	
			<div class="logo">
				Le Refuge 
			</div>
			<h1>Page d'accueil</h1>
		</header>
		
		<main>
			<form method="POST" action="process_connexion.php">
				<label>Pseudo : </label><input type="text" name="pseudo"/><br>
				<label>Ville : </label><input type="text" name="ville"/><br>
				<input type="submit" value="Envoyer" />
			</form>	
			

		</main>
		
		<footer>
			<div class="membres">
				• Morgan Cozic • Matéo Damette • Elie Guedj • Clément Fournier • Antoine Duhamel • Emeric Demaret • Rémi Sid-Abdelkader • Mathieu Drouvin • Eymeric Deville • Allan Cathrin • Baptiste Mille •
			</div>
		</footer>
	</body>
</html>