<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
	if (strip_tags($_POST['titre']) !== '' && strip_tags($_POST['legende']) !== '')
	{
	    $nom = strip_tags($_GET['photo']);
	    $titre = strip_tags($_POST['titre']);
	    $legende = strip_tags($_POST['legende']);
	
	    include("base.inc.php");
	    $requete = $bdd->prepare('UPDATE legende_carousel SET titre=:titre, legende=:legende WHERE nom=:nom');
	    $requete->execute(array('titre' => $titre, 'legende' => $legende, 'nom' => $nom));	
	
	    header('Location: gestion_images.php?modification=enregistre');
    }
    else
    {
        header('Location: gestion_images.php?modification=vide');
    }
}
?>
