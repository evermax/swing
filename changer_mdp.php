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
    		<div class="bloc_page">
    		    <?php
                    include("menu_admin.php");
                ?>
                <div class="corps">

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

        		    <form action="mdp_post.php" method="post">
        		        <table>
        		            <tr>
            		    	    <td><label for="mdp">Mot de passe actuel : </label></td>
            		    	    <td><input name="mdp" type="password" id="mdp" /></td>
        		            </tr>
        		            
        		            <tr>
            		    	    <td><label for="nouveau_mdp">Nouveau mot de passe : </label></td>
            		    	    <td><input name="nouveau_mdp" type="password" id="nouveau_mdp" /></td>
        		            </tr>
        		            
        		            <tr>
            		    	    <td><label for="confirmation_mdp">Confirmation nouveau mot de passe : </label></td>
            		    	    <td><input name="confirmation_mdp" type="password" id="confirmation_mdp" /></td>
        		            </tr>
        		            
        		            <tr>
            		    	    <td colspan="2"><input type="submit" value="Envoyer" /></td>
        		            </tr>
        		        </table>
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
