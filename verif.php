<?php
	session_start();
function verif()
{
	if(!isset($_COOKIE['id'])){
		header('Location: index.php');
		exit;
	}
}
?>