<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
	$nom = strip_tags($_GET['video']);
	
	include("base.inc.php");
		
	unlink ('images/videos/' . $nom);

	$reponse = $bdd->prepare('SELECT formate FROM video WHERE nom = :nom');
	$donnees = $reponse->fetch();
	
	if ($donnees['formate'] !== '0')
    {
	    $nom_exp = explode(".", $donnees['nom'])[0]
	
	    unlink ('images/videos/' . $nom_exp . '.mp4');
	    unlink ('images/videos/' . $nom_exp . '.webm');
	    unlink ('images/videos/' . $nom_exp . '.oggtheora.ogv');
	}
	
	$requete = $bdd->prepare('DELETE FROM video WHERE nom = :nom');
	$requete->execute(array('nom' => $nom));
	
	header('Location: gestion_images.php?modification=supprimer');
}
?>
