<?php session_start();?>

<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>

    <body>
    <?php
    	if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    	{
    		$id = strip_tags($_GET['billet']);
    		?>
    		<div class="bloc_page">
    		    <?php
                    include("menu_admin.php");
                    include("base.inc.php");
                    $requete = $bdd->prepare('SELECT titre, contenu FROM billets WHERE id=:id');
                    $requete->execute(array('id' => $id));
                    
                    $donnees = $requete->fetch();
                ?>
                
                <div class="corps">
                    <form action="modifier_billet_post.php?billet=<?php echo $id ?>" method="post">
                        <fieldset>
                            <legend><strong>Modification du titre et du contenu d'un billet</strong></legend>
                            <table>
            		            <tr>
            		                <td><label for="titre">Titre :</label></td>
            		                <td><input id="titre" name="titre" type="text" value="<?php echo $donnees['titre'] ?>" /></td>
            		            </tr>
            		            
            		            <tr>
                		    	    <td><label for="contenu">Contenu :</label></td>
                		    	    <td><textarea id="contenu" rows="4" cols="100" name="contenu" maxlength="250" ><?php echo $donnees['contenu'] ?></textarea></td>
            		            </tr>
            		            
            		            <tr></tr>
            		            
                		    	<tr>
                		    	    <td colspan="2" ><input type="submit" value="Modifier" /></td>
                                </tr>
        		            </table>
    		            </fieldset>
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
        </div>
    </body>
</html>
