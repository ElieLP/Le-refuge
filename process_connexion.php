<?php 
	
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
	
	try
	{
			//A utiliser plus tard - Mot de passe à remplir
			//$bdd = new PDO('mysql:host=94.177.243.176;dbname=refuge;charset=utf8','root','lesnimphos973'); 
			
			//Connexion non généraliser
			$bdd = new PDO('mysql:host=127.0.0.1;dbname=refuge;charset=utf8', 'root', ''); 
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	
	$req = $bdd->prepare('INSERT INTO user(pseudo,ville,point) VALUES (\''. $pseudo . '\',\'' .  $ville . '\',0);');
	$req->execute();
	$req->closeCursor();
	
	$req = $bdd->prepare('SELECT id FROM user WHERE ville=\''. $ville .'\' AND pseudo=\''. $pseudo . '\';');
	$req->execute();
	
	while($donnees = $req->fetch())
	{
		$id =  $donnees['id'];
	}
	
	$req->closeCursor();
	
	$int=3600*24*30*12;//Durée de presque 1 ans
	
	//Affecte les valeurs passer en POST dans des variables
	$pseudo = $_POST['pseudo'];
	$ville = $_POST['ville'];
	
	//Creation des cookies pour la prochaine connexion de la personne sur le site
	setcookie("pseudo",$pseudo,(time()+$int));
	setcookie("ville",$ville,(time()+$int));
	setcookie("id",$id,(time()+$int));
	
	header('Location:index.php');
?>