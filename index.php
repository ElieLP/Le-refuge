<?php if(!isset($_COOKIE['id']))
	{
		header('Location: accueil.php');
		exit;
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset=utf-8 />
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" href="fontawesome/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/base.css">

		<title>
			Le Refuge
		</title>
	</head>
	
	<body>
		<?php
			include 'header.php';
		?>
		
		<main>
		
		<?php
			include 'map.php';
		?>
		
		<?php
			include 'liste.php';
		?>
				
			
		</main>
		
		<footer>
			<a href="Apropos.html" >A propos</a>
		</footer>
	</body>
	
</html>