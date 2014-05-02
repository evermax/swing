<?php session_start();?>

<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>

    <body>
    <?php
    	if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    	{
    		$pseudo = $_SESSION['pseudo'];
    		?>
    		<div class="">
    		    <?php
                    include("header.php");
                    genererHeader("Changer mon mot de passe", "menu_admin.php");
                ?>
    		    <p class="erreur"> <?php if(isset($_GET["changement"]))
    		    {
        		    if ($_GET["changement"] == "identique")
        		    {
        		        echo("Changement non effectué : les nouveaux mots de passe diffèrent.");
        		    }
        		    if ($_GET["changement"] == "identification")
        		    {
        		        echo("Changement non effectué : le mot de passe actuel entré est erroné.");
        		    }
        		    if ($_GET["changement"] == "reussi")
        		    {
        		        echo("Le mot de passe a bien été modifié !");
        		    }
    		    } ?></p>
    		    <div class="">
        		    <form action="mdp_post.php" method="post">
        		    	<label for="mdp">Mot de passe actuel : <input name="mdp" type="password" id="mdp" /></label><br />
        		    	<label for="nouveau_mdp">Nouveau mot de passe : <input name="nouveau_mdp" type="password" id="nouveau_mdp" /></label><br />
        		    	<label for="confirmation_mdp">Confirmation nouveau mot de passe : <input name="confirmation_mdp" type="password" id="confirmation_mdp" /></label><br />
        		    	<input type="submit" />
        		    </form>
    		    </div>
    		    <?php include("footer.php"); ?>
    		</div> 
			<?php
    	}
    	else
    	{
		    ?>
		    perdu ?
		    <?php
    }
    ?>
    </body>
</html>
