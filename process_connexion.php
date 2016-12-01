<?php 

	session_start();
	
	//Check si un pseudo a été passé en paramètre
	if(!isset($_POST['pseudo']))
	{//Renvoie vers la page erreur
		$_SESSION['emptyPseudo']=true;
		header('Location:error.php');
	}
	
	//Check si un pseudo a été passé en paramètre
	if(!isset($_POST['ville']))
	{//Renvoie vers la page erreur
		$_SESSION['emptyVille']=true;
		header('Location:error.php');
	}
	
	//Initialise une suite de caractère qui sera par la suite mélanger
	$char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';	
	
	$create_id = (string) str_shuffle($char);//Mélange les caractères
	$create_id = (string) substr($create_id, 1, 24);//Prend 24 caractères	
	
	$pseudo = $_POST['pseudo'];
	$ville = $_POST['ville'];
	
	$int=99*12*30*86400;//Durée de 99 ans
	
	setcookie('pseudo',$pseudo,(time()+$int));
	setcookie('ville',$ville,(time()+$int));
	setcookie('id',$create_id,(time()+$int));
	
	header('Location:index.php');
?>