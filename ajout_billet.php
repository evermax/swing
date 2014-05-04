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
                    include("header.php");
                    genererHeader("Ajouter un billet", "menu_admin.php");
                ?>
    		    
    		    <div class="corps">
        		    <form action="billet_post.php" method="post">
        		        <table>
        		            <tr>
        		                <td><label for="titre">Titre : </label></td>
        		                <td><input name="titre" id="titre" /></td>
        		            </tr>
        		            
        		            <tr>
            		    	    <td><label for="contenu">Contenu : </label></td>
            		    	    <td><textarea rows="3" cols="100" name="contenu" ></textarea></td>
        		            </tr>
        		            
            		    	<tr>
            		    	    <td colspan="2" ><input type="submit" value="Envoyer" /></td>
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
