<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
	if (strip_tags($_POST['titre']) !== '' && strip_tags($_POST['contenu']) !== '')
	{
		$auteur = $_SESSION['pseudo'];
		$titre = strip_tags($_POST['titre']);
		$contenu = strip_tags($_POST['contenu']);
		
		include("base.inc.php");
		$req = $bdd->prepare('INSERT INTO billets (auteur, titre, contenu, date_creation) VALUES (:auteur, :titre, :contenu, NOW())');
		$req->execute(array('auteur' => $auteur, 'titre' => $titre, 'contenu' => $contenu));
		
		header('Location: gestion_billets.php?modification=ajout');
	}
	else
	{
	    header('Location: gestion_billets.php?modification=vide');
	}
}
?>
