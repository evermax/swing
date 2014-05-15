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
    		    
    		        <p class="erreur"> <?php if(isset($_GET["modification"]))
        		    {
            		    if ($_GET["modification"] == "enregistre")
            		    {
            		        echo("Les modifications ont bien été enregistrée !");
            		    }
            		    if ($_GET["modification"] == "vide")
            		    {
            		        echo("Modifications non effectuées : les champs ne doivent pas être vides.");
            		    }
        		    } ?></p>
    		    
        		    <?php
        	        include("base.inc.php");
        	        $requete = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%i\') AS date_creation_fr FROM billets WHERE auteur = :auteur ORDER BY date_creation DESC LIMIT 0, 5');
        	        $requete->execute(array('auteur' => $pseudo));
        	
        	        while ($donnees = $requete->fetch())
        	        {
        	        ?>
        	        <div class="news">
        	            <h1> <?php echo $donnees['titre']; ?> </h1>
        	            <p class="contenu"> <?php echo $donnees['contenu']; ?> </p>
        	            <p class="date">le <em> <?php echo $donnees['date_creation_fr']; ?> </em></p>
        	            <p><a href="modifier_billet.php?billet=<?php echo $donnees['id'] ?>">Modifier</a> <a href="supprimer_billet.php?billet=<?php echo $donnees['id'] ?>">Supprimer</a></p><br />
        	
        	        </div>
        			<?php
        	        }
        			?>
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
