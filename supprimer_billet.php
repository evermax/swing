<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
	$id = strip_tags($_GET['billet']);
	
	$bdd = new PDO('mysql:host=localhost;dbname=swing', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$requete = $bdd->prepare('DELETE FROM billets WHERE id = :id');
	$requete->execute(array('id' => $id));
	
	header('Location: gestion.php');
}
?>