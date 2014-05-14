<?php
if ($_POST['pseudo'] !== null && strip_tags($_POST['mdp']) !== null)
{

	$pseudo = strip_tags($_POST['pseudo']);
	$mdp_hache = sha1(strip_tags($_POST['mdp']));
	
	include("base.inc.php");
	$req = $bdd->prepare('SELECT id FROM admin WHERE pseudo = :pseudo AND mdp = :mdp');
	$req->execute(array('pseudo' => $pseudo, 'mdp' => $mdp_hache));
	
	$donnees = $req->fetch();
	
	if (!$donnees)
	{
	    header('Location: admin.php?identification=faux');
	}
	else
	{
	    session_start();
	    $_SESSION['id'] = $donnees['id'];
	    $_SESSION['pseudo'] = $pseudo;
	    header('Location: gestion.php');
	}	
}
?>
