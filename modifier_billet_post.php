<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
	if (strip_tags($_POST['titre']) !== null && strip_tags($_POST['contenu']) !== null)
	{
	    $id = strip_tags($_GET['billet']);
	    $titre = strip_tags($_POST['titre']);
	    $contenu = strip_tags($_POST['contenu']);
	
	    include("base.inc.php");
	    $requete = $bdd->prepare('UPDATE billets SET titre=:titre, contenu=:contenu WHERE id=:id');
	    $requete->execute(array('titre' => $titre, 'contenu' => $contenu, 'id' => $id));	
	
	    header('Location: gestion_billets.php?modification=enregistre');
    }
    else
    {
        header('Location: gestion_billets.php?modification=vide');;
    }
}
?>
