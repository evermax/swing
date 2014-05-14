<?php session_start();?>

<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>

    <body>
        <?php
        	if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
        	{
        		$pseudo = $_SESSION['pseudo'];
        		include("menu_admin.php");
        		?>
        		<h1>Ajouter une image au carousel image</h1>
        		<form id="uploadForm" enctype="multipart/form-data" action="upload.php" target="uploadFrame" method="post">
                    <label for="uploadFile">Image :</label>
                    <input id="uploadFile" name="uploadFile" type="file" />
                    <br /><br />
                    <input id="uploadSubmit" type="submit" value="Upload !" />
                </form>
                <div id="uploadInfos">
                    <div id="uploadStatus">Aucun upload en cours</div>
                    <iframe id="uploadFrame" name="uploadFrame"></iframe>
                </div>
                <script>
                    function uploadEnd(error, path) {
                        if (error === 'OK') {
                            document.getElementById('uploadStatus').innerHTML = '<a href="' + path + '">Upload done !</a><br /><br /><a href="' + path + '"><img src="' + path + '" /></a>';
                        } else {
                            document.getElementById('uploadStatus').innerHTML = error;
                        }
                    }
                    
                    document.getElementById('uploadForm').addEventListener('submit', function() {
                        document.getElementById('uploadStatus').innerHTML = 'Loading...';
                    }, true);
                </script>
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
