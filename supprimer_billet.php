<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
	$id = strip_tags($_GET['billet']);
	
	include("base.inc.php");
	$requete = $bdd->prepare('DELETE FROM billets WHERE id = :id');
	$requete->execute(array('id' => $id));
	
	header('Location: gestion_billets.php?modification=suppression');
}
?>
