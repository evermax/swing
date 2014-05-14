<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>

    <body>
        <div class="bloc_page">
            <?php
            	if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
            	{
            		$pseudo = $_SESSION['pseudo'];
            		include("menu_admin.php");
            		?>
            		<h1>Gérer les images</h1>
            <?php
                }
                else
                {
            ?>
            Perdu ?
            <?php
                }
            ?>
        </div>
    </body>
</html>