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
                    $bdd = new PDO('mysql:host=localhost;dbname=swing', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    $reponse = $bdd->query('SELECT * FROM legende_carousel ORDER BY id');
                ?>
                <h1>Gestion images</h1>
                
                <?php
                    while($donnees = $reponse->fetch())
                    {
    		            ?>
    			        <a href="supprimer_photo.php?photo=<?php echo($donnees['nom']); ?>" rel="nofollow" ><img src="images/carousel_images/<?php echo($donnees['nom']); ?>" alt="images/carousel_images/<?php echo($donnees['nom']); ?>" /></a>
    			        <?php
                    }
                ?>
                
                
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