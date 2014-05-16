<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>

    <body>
        <div class="bloc_page">
    	    <?php
            include("menus.php");
            ?>
    	    
    	    <div class="corps">
        	    <?php
        	        include("base.inc.php");
        	    
        	        $nb_billets = $bdd->query('SELECT COUNT(*) AS nb_billets FROM billets');

                    $nb_pages = $nb_billets->fetch();
                    $nb_pages = $nb_pages['nb_billets'] / 5;
                    if($nb_pages % 5 != 0)
                    {
	                    $nb_pages = $nb_pages + 1;
                    }
                    
                    $page = 1;
                    if(isset($_GET['page']))
                    {
                        $page = $_GET['page'];
                    }
                    
		            $billet_inf = ($page - 1) * 5;
		            $billet_sup = $page * 5;
                    
        	        $requete = $bdd->prepare('SELECT id, auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%i\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT :billet_inf, :billet_sup');
                    $requete->bindParam(':billet_inf', $billet_inf, PDO::PARAM_INT);
                    $requete->bindParam(':billet_sup', $billet_sup, PDO::PARAM_INT);
                    $requete->execute();
        	        
        	        while ($donnees = $requete->fetch())
        	        {
        	        ?>
        	        <div class="news">
            	            <table class="billet" cellspacing="0" cellpadding="0" >
            	                <tr>
            	                    <td class="auteur"><?php echo $donnees['auteur']; ?></td>
            	                    <td><h1><?php echo $donnees['titre']; ?></h1></td>
            	                </tr>
            	                
            	                <tr>
            	                    <td rowspan="2">
            	                        <div class="photo">
                    	                    <?php
                    	                    if ($donnees['auteur'] == "Chloe")
                    	                    {
                    	                    ?>
                    	                            <img src="images/icones/lion.jpg" alt="<?php echo $donnees['auteur']; ?>" />
                    	                    <?php
                    	                    }
                    	                    else if ($donnees['auteur'] == "Maxime")
                    	                    {
                    	                    ?>
                    	                        <img src="images/icones/singe.jpg" alt="<?php echo $donnees['auteur']; ?>" />
                    	                    <?php
                    	                    }
                    	                    ?>
            	                        </div>
            	                    </td>
            	                    <td class="contenu" > <?php echo $donnees['contenu']; ?> </td>
            	                </tr>
            	                
            	                <tr>
            	                    <td class="date" >le <em> <?php echo $donnees['date_creation_fr']; ?></em></td>
            	                </tr>
            	            </table>
            	            <br />
        	
        	        </div>
        	    <?php
        	        }
        	    ?>
        	    
        	    <p class="pagination" >Page : 
                <?php
                for ($i = 1; $i < $nb_pages; $i++)
                {
                    if ($i == $page)
                    {
                        echo '<a href="news.php?page=' . $i . '" class="page_actuelle" >' . $i . '</a> ';
                    }
                    else
                    {
                        echo '<a href="news.php?page=' . $i . '" class="page_non_courante" >' . $i . '</a> ';
                    }
                }
        		?>
        		</p>
            </div>
            <?php include("footer.php"); ?>
		</div>
    </body>
</html>
