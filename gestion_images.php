<?php session_start();?>

<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>

    <body>
    <?php
    	if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    	{
    		$auteur = $_SESSION['pseudo'];
    		?>
    		<div class="bloc_page">
    		    <?php
                    include("menu_admin.php");
                    include("base.inc.php");
                    $reponse = $bdd->prepare('SELECT nom, titre, legende FROM legende_carousel WHERE auteur=:auteur ORDER BY id');
                    $reponse->execute(array('auteur' => $auteur));
                    
                    $rep = $bdd->prepare('SELECT nom, titre, legende FROM video WHERE auteur=:auteur ORDER BY id');
                    $rep->execute(array('auteur' => $auteur));
                ?>
                
                <div class="corps">
                
                <p class="erreur"> <?php if(isset($_GET["modification"]))
        		    {
            		    if ($_GET["modification"] == "enregistre")
            		    {
            		        echo("Les modifications ont bien été enregistrées !");
            		    }
            		    if ($_GET["modification"] == "vide")
            		    {
            		        echo("Modifications non effectuées : les champs ne doivent pas être vides.");
            		    }
            		    if ($_GET["modification"] == "supprimer")
            		    {
            		        echo("Le fichier a bien été supprimé.");
            		    }
        		    } ?></p>
        		    
        		    <h1>Images</h1>
        		    
                    <table class="tableau_supp">
                        <?php
                            while($donnees = $reponse->fetch())
                            {
            		            ?>
            		            <tr>
            		                <td class="image_supp">
            		                    <img src="images/carousel_images/<?php echo($donnees['nom']); ?>" alt="images/carousel_images/<?php echo($donnees['nom']); ?>" />
            		                </td>
            		                
            		                <td class="texte_supp">
            		                    <p><strong>Titre : </strong><?php echo $donnees['titre'] ?></p>
            		                </td>
            		                
            		                <td class="texte_legende">
            		                    <p><strong>Légende : </strong><br /><?php echo $donnees['legende'] ?></p>
            		                </td>
            		                
            		                <td class="texte_supp">
            		                    <a href="modifier_photo.php?photo=<?php echo($donnees['nom']); ?>" rel="nofollow" >Modifier</a>
            		                </td>
            		                
            		                <td class="texte_supp">
            		                    <a href="supprimer_photo.php?photo=<?php echo($donnees['nom']); ?>" rel="nofollow" >Supprimer</a>
            		                </td>
            		            </tr>
            			        <?php
                            }
                        ?>
                    </table>
                    
                    <h1>Vidéos</h1>
                    
                    <table class="tableau_supp">
                        <?php
                            while($donnees = $rep->fetch())
                            {
                                $nom = explode(".", $donnees['nom'])[0] ?>
            		            
            		            <tr>
            		                <td class="image_supp">
            		                    <img src="images/videos/<?php echo $nom ?>.png" alt="<?php echo $nom ?>" />
            		                </td>
            		                
            		                <td class="texte_supp">
            		                    <p><strong>Titre : </strong><?php echo $donnees['titre'] ?></p>
            		                </td>
            		                
            		                <td class="texte_legende">
            		                    <p><strong>Légende : </strong><br /><?php echo $donnees['legende'] ?></p>
            		                </td>
            		                
            		                <td class="texte_supp">
            		                    <a href="modifier_video.php?video=<?php echo($donnees['nom']); ?>" rel="nofollow" >Modifier</a>
            		                </td>
            		                
            		                <td class="texte_supp">
            		                    <a href="supprimer_video.php?video=<?php echo($donnees['nom']); ?>" rel="nofollow" >Supprimer</a>
            		                </td>
            		            </tr>
            			        <?php
                            }
                        ?>
                    </table>
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
