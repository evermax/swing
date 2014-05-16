<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
	$nom = strip_tags($_GET['photo']);
	
	include("base.inc.php");
	$requete = $bdd->prepare('DELETE FROM legende_carousel WHERE nom = :nom');
	$requete->execute(array('nom' => $nom));
	
	unlink ('images/carousel_images/' . $nom);
	
	header('Location: gestion_images.php?modification=supprimer');
}
?>
