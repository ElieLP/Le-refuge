<?php
	include ("verif.php");
	verif();
?>
<html>
	<head>
		<meta charset='UTF8'>
		<link rel=stylesheet href='css/reset.css' />
		<link rel=stylesheet href="fontawesome/css/font-awesome.css" />
		<title>Ajouter un emplacement</title>
	</head>
	<nav>
	
				<ul>
					<li><a href="index.php">Accueil</a></li>
				</ul>
	</nav>
	
	<form method="get" action="index.php">
Nom du lieu : <input type="" name="FirstName" ><br>
	<select name="categorie">
	<optgroup label="Vital">
		  <option value="alimentation">Alimentation </option>
		  <option value="hygiene">Hygiène</option>
		  <option value="logement">Logement</option>
		  <option value="medical">Médical</option>
	</optgroup>
	<optgroup label="Administration">
		  <option value="demarches ">Démarche administrative</option>
		  <option value="juridiques">Démarche jurique</option>
	</optgroup>
	<optgroup label="Soutien">
		  <option value="psychologie">Psychologie</option>
		  <option value="social">Social</option>
		  <option value="association">Association médical</option>
		  <option value="dons">Dons médicaux</option>
	</optgroup>
	</select>
	
	
		
		<i class="fa fa-gift" aria-hidden="True"></i>
		<input type="radio" name="chooseone" value="0" />
		<i class="fa fa-eur" aria-hidden="True"></i>
		<input type="radio" name="chooseone" value="1" />
		<i class="fa fa-eur" aria-hidden="True"></i>	<i class="fa fa-eur" aria-hidden="True"></i>
		<input type="radio" name="chooseone" value="2" />
		<i class="fa fa-eur" aria-hidden="True"></i><i class="fa fa-eur" aria-hidden="True"></i><i class="fa fa-eur" aria-hidden="True"></i>
		<input type="radio" name="chooseone" value="3" />
	<input type="reset" value="Annuler"/>
		<!-- attention reglé selection nom -->
		<input type="submit" value="Executer"/>
		</form>
</html>

