<?php 
	//Check si un pseudo a été passé en paramètre
	if(!isset($_POST['ville']))
	{//Renvoie vers la page index
		header('Location:index.php');
	}
	if ( preg_match('#^[0-9]{5}$#' , $_POST['ville'] ) )
	{
			//echo "test";
		//die;
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
		
		$req = $bdd->prepare("INSERT INTO user(ville) VALUES ('". $_POST['ville'] . "')");
		$req->execute();
		$req->closeCursor();
		
		$req = $bdd->prepare('SELECT id FROM user WHERE ville=\''. $_POST['ville'] .'\';');
		$req->execute();
		
		while($donnees = $req->fetch())
		{
			$id =  $donnees['id'];
		}
		
		$req->closeCursor();
		
		$int=3600*24*30*12;//Durée de presque 1 ans
		
		//Affecte les valeurs passer en POST dans des variables
		$ville = $_POST['ville'];
		
		//Creation des cookies pour la prochaine connexion de la personne sur le site
		setcookie("ville",$ville,(time()+$int));
		setcookie("id",$id,(time()+$int));
		
		header('Location:index.php');
	}
	else {
		die('coucou');
		unset($_POST['ville']);
		header('Location: index.php');
		exit;
	}
?>