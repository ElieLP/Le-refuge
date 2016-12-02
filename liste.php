<?php
	
	//connexion à la bdd
	$bdd = new PDO("mysql:host=localhost;dbname=lol","root","");
	
	if(isset($_GET['nom_categorie']))
	{
		//récupération du nom de la catégorie (ou sous-catégorie) dans le formulaire
		$categorie = $_GET['nom_categorie'];
		
		//selection de tous les champs de ligne où la catégorie ou la sous-catégorie vaut le nom_catégorie entré dans le formulaire
		$requeteCategorie = $bdd->query('SELECT * FROM ligne WHERE categorie="'.$categorie.'" OR sous_categorie="'.$categorie.'" AND ville="'.$_COOKIE["ville"].'"');
		
		// On affiche chaque entrée une à une
		while ($donneesCategorie = $requeteCategorie->fetch())
		{
		?>
		<p>
			<?php echo $donneesCategorie['nom']; ?> 
		
				<form method="get" action="">
					<input type="hidden"  name="nom_categorie" value="<?php echo $categorie; ?>" />
					<input type="hidden"  name="coordonnee" value="<?php echo $donneesCategorie['coordonnee']; ?>" />
					<button type="submit"> <i class="fa fa-map-marker" aria-hidden="true"></i> Localiser</button>
				</form>
					<?php if($donneesCategorie['prix']==0)
							echo '<i class="fa fa-gift" aria-hidden="true"></i>';
						  elseif($donneesCategorie['prix']==1)
							echo '<i class="fa fa-eur" aria-hidden="true"></i>';
						  elseif($donneesCategorie['prix']==2)
							echo '<i class="fa fa-eur" aria-hidden="true"></i><i class="fa fa-eur" aria-hidden="true"></i>';
						  elseif($donneesCategorie['prix']==3)
							echo '<i class="fa fa-eur" aria-hidden="true"></i><i class="fa fa-eur" aria-hidden="true"></i><i class="fa fa-eur" aria-hidden="true"></i>';
					?>
		</p>								
		<?php
		}
		
		$requeteCategorie->closeCursor();
	}
	
?>