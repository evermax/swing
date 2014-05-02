<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
	if (strip_tags($_POST['mdp']) !== null && strip_tags($_POST['nouveau_mdp']) !== null && strip_tags($_POST['confirmation_mdp']) !== null)
	{
		$id = $_SESSION['id'];
		$mdp = sha1(strip_tags($_POST['mdp']));
		$nouveau_mdp = strip_tags($_POST['nouveau_mdp']);
		$confirmation_mdp = strip_tags($_POST['confirmation_mdp']);
		
		if ($nouveau_mdp != $confirmation_mdp)
		{
			header('Location: changer_mdp.php?changement=identique');
		}
		else
		{
			$bdd = new PDO('mysql:host=localhost;dbname=swing', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$requete = $bdd->prepare('SELECT mdp FROM admin WHERE id = :id');
			$requete->execute(array('id' => $id));
			
			$donnees = $requete->fetch();

			if ($mdp == $donnees['mdp'])
			{
				$nouveau_mdp = sha1($nouveau_mdp);
				$req = $bdd->prepare('UPDATE admin SET mdp=:mdp WHERE id=:id');
				$req->execute(array('mdp' => $nouveau_mdp, 'id' => $id));
				
				header('Location: changer_mdp.php?changement=reussi');
			}
			else
			{
    			header('Location: changer_mdp.php?changement=identification');
			}
		}
	}
}
?>