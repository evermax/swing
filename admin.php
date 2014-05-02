<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>

    <body>
        <div class="">
            <header>
    		    <h1>S'Wing</h1>
    		    <h2>Connexion partie administrateur</h2>
            </header>
		
    		<div class="">
        		<form action="admin_post.php" method="post">
        			<label for="pseudo">Pseudo : </label><input name="pseudo" id="pseudo"/><br/>
        			<label for="mdp">Mot de passe : </label><input type="password" name="mdp" id="mdp"/><br/>
        			<input type="submit"/>
        		</form>
    		</div>
    		<?php include("footer.php"); ?>
        </div>
    </body>
</html>
