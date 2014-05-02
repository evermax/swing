<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>

    <body>
        <div class="bloc_page">
    	    <?php
            include("header.php");
            genererHeader("Dernières nouvelles", "menus.php");
            ?>
    	    
    	    <div class="corps">
        	    <?php
        	        $bdd = new PDO('mysql:host=localhost;dbname=swing', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        	        $reponse = $bdd->query('SELECT id, auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%i\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');
        	
        	        while ($donnees = $reponse->fetch())
        	        {
        	        ?>
        	        <div class="news">
        	            <h1> <?php echo $donnees['titre']; ?> le <em> <?php echo $donnees['date_creation_fr']; ?></em> par <?php echo $donnees['auteur']; ?></h1>
        	            <p> <?php echo $donnees['contenu']; ?> </p></br>
        	
        	        </div>
        	    <?php
        	        }
        		?>
            </div>
            <?php include("footer.php"); ?>
		</div>
    </body>
</html>
