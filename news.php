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
        	        $bdd = new PDO('mysql:host=localhost;dbname=swing', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        	        $reponse = $bdd->query('SELECT id, auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%i\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');
        	
        	        while ($donnees = $reponse->fetch())
        	        {
        	        ?>
        	        <div class="news">
            	            <table class="billet" cellspacing="0" cellpadding="0" >
            	                <tr>
            	                    <th class="auteur"><?php echo $donnees['auteur']; ?></th><th><h1> <?php echo $donnees['titre']; ?></h1></th>
            	                </tr>
            	                
            	                <tr>
            	                    <th rowspan="2"><img src="images/singe.jpg" alt="<?php echo $donnees['auteur']; ?>"/></th><th class="contenu" > <?php echo $donnees['contenu']; ?> </th>
            	                </tr>
            	                
            	                <tr>
            	                    <th class="date" >le <em> <?php echo $donnees['date_creation_fr']; ?></em></th>
            	                </tr>
            	            </table>
        	
        	        </div>
        	    <?php
        	        }
        		?>
            </div>
            <?php include("footer.php"); ?>
		</div>
    </body>
</html>
