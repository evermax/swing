<?php session_start();?>

<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>

    <body>
    <?php
    	if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    	{
    		$nom = strip_tags($_GET['video']);
    		?>
    		<div class="bloc_page">
    		    <?php
                    include("menu_admin.php");
                    include("base.inc.php");
                    $requete = $bdd->prepare('SELECT titre, legende FROM video WHERE nom=:nom');
                    $requete->execute(array('nom' => $nom));
                    
                    $donnees = $requete->fetch();
                ?>
                
                <div class="corps">                    
                    <form action="modifier_video_post.php?video=<?php echo $nom ?>" method="post">
                        <fieldset>
                            <legend><strong>Modification du titre et de la légende d'une video</strong></legend>
                            <table>
            		            <tr>
            		                <td><label for="titre">Titre :</label></td>
            		                <td><input id="titre" name="titre" type="text" value="<?php echo $donnees['titre'] ?>" /></td>
            		            </tr>
            		            
            		            <tr>
                		    	    <td><label for="legende">Légende :</label></td>
                		    	    <td><textarea id="legende" rows="3" cols="60" name="legende" maxlength="250" ><?php echo $donnees['legende'] ?></textarea></td>
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
