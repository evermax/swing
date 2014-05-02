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
    		<div class="">
    		    <?php
                    include("header.php");
                    genererHeader("Ajouter un billet", "menu_admin.php");
                ?>
    		    
    		    <div>
        		    <form action="billet_post.php" method="post">
        		    	<label for="titre">Titre : <input name="titre" id="titre" /></label><br />
        		    	<label for="contenu">Contenu : <textarea rows="3" cols="50" name="contenu" ></textarea></label><br />
        		    	<input type="submit" />
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
