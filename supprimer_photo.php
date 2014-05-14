<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
	$nom = strip_tags($_GET['photo']);
	
	$bdd = new PDO('mysql:host=localhost;dbname=swing', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$requete = $bdd->prepare('DELETE FROM legende_carousel WHERE nom = :nom');
	$requete->execute(array('nom' => $nom));
	
	unlink ('images/carousel_images/' . $nom);
	
	header('Location: gestion_images.php');
}
?>
