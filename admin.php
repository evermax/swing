<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>

    <body>
        <div class="bloc_page">
            <header>
    		    <h1>S'Wing</h1>
    		    <h2>Connexion partie administrateur</h2>
            </header>
		
    		<div class="corps">
    		
        		<p class="erreur"> <?php if(isset($_GET["identification"]))
            		    {
                		    if ($_GET["identification"] == "faux")
                		    {
                		        echo("Le nom d'utilisateur ou le mot de passe est incorrect.");
                		    }
            		    } ?></p>

        		<form action="admin_post.php" method="post">
        		    <table>
            		    <tr>
                		    <td><label for="pseudo">Pseudo : </label></td>
                		    <td><input name="pseudo" id="pseudo"/></td>
            		    </tr>
            		    
            		    <tr>
                		    <td><label for="mdp">Mot de passe : </label></td>
                			<td><input type="password" name="mdp" id="mdp"/></td>
            		    </tr>
            		    
            		    <tr>
            			    <td colspan="2"><input type="submit" value="Envoyer" /></td>
            		    </tr>
        		    </table>
        		</form>
    		</div>
    		<?php include("footer.php"); ?>
        </div>
    </body>
</html>
