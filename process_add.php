<?php

	if(!isset($_GET['categorie']))
	{
		header('Location:map_ajout');
	}
	
	if(!isset($_GET['chooseone']))
	{
		header('Location:map_ajout');
	}
	
	if(!isset($_GET['lat']))
	{
		header('Location:map_ajout');
	}
	
	if(!isset($_GET['lng']))
	{
		header('Location:map_ajout');
	}

	if(!isset($_COOKIE['id']))
	{
		header('Location:accueil.php');
	}
	
	if(!isset($_COOKIE['pseudo']))
	{
		header('Location:accueil.php');
	}
	
	if(!isset($_GET['FirstName']))
	{
		
	}
	echo $_GET['categorie'];
	
	//Définit sous categorie et categorie
	$sous_categorie = $_GET['categorie'];
	
	if(($sous_categorie=='alimentation') OR ($sous_categorie=='hygiene') OR ($sous_categorie=='logement') OR ($sous_categorie=='medical'))
	{
		$categorie = 'Vital';
	}
	
	if(($sous_categorie=='demarches') OR ($sous_categorie=='juridiques'))
	{
		$categorie = 'Administration';
	}
	
	if(($sous_categorie=='psychologie') OR ($sous_categorie=='social') OR ($sous_categorie=='association') OR ($sous_categorie=='dons'))
	{
		$categorie = 'Soutien';
	}	
	print_r($_GET);
	echo ($categorie . " ");
	echo ($sous_categorie . " ");
	echo ($_COOKIE['id'] . " ");
	echo ($_COOKIE['pseudo'] . " ");
	
	$bdd = new PDO("mysql:host=localhost;dbname=refuge","root","");
	$req = $bdd->prepare('INSERT INTO ligne(lat,lng,prix,ville,categorie,sous_categorie,id_user,vote,nom) VALUES (\'' . $_GET['lat'] . '\',\'' . $_GET['lng'] . '\',\'' . $_GET['chooseone'] . '\',\'' . $_COOKIE['ville'] . '\',\'' . $categorie . '\',\'' . $sous_categorie . '\',\'' . $_COOKIE['id'] . '\',0,\'' . $_GET['ville'] . '\');');
	$req->execute();
	$req->closeCursor();
	
	header('Location:index.php');
	
	?>