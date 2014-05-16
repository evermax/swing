<?php session_start();?>

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
            		
            		<div class="corps">         		
                		<form id="uploadForm" enctype="multipart/form-data" action="upload.php" target="uploadFrame" method="post">
            		        
            		        <fieldset>
            		            <legend><strong>Choix du type</strong></legend>
            		                <p>
                                    <label>Sélectionnez le type de média :</label>    
                                            
                                    <input type="radio" name="type" id="image" value="image" checked="checked" />
                                    <label for="image">Image</label>
                                    
                                    <input type="radio" name="type" id="video" value="video" />
                                    <label for="video">Video</label>
                                    </p>
            		        </fieldset>
            		        
            		        <p></p>
            		        
                		    <fieldset>
                		        <legend><strong>Choix du média</strong></legend>
                		        <p>
                                <label for="uploadFile">Image ou vidéo :</label>
                                <input id="uploadFile" name="uploadFile" type="file" /><br /><br />
                                
                                <table>
                		            <tr>
                		                <td><label for="titre">Titre associé à l'image ou la vidéo :</label></td>
                		                <td><input id="titre" name="titre" type="text"/></td>
                		            </tr>
                		            
                		            <tr>
                    		    	    <td><label for="legende">Légende associé à l'image ou la vidéo :</label></td>
                    		    	    <td><textarea rows="3" cols="60" name="legende" maxlength="250" ></textarea></td>
                		            </tr>
                		            
                		            <tr></tr>
                		            
                    		    	<tr>
                    		    	    <td colspan="2" ><input id="uploadSubmit" type="submit" value="Upload !" /></td>
                                    </tr>
            		            </table>
            		            </p>
            		        </fieldset>
                        </form>
                        
                        <div id="uploadInfos">
                            <div id="uploadStatus">Aucun upload en cours</div>
                            <iframe id="uploadFrame" name="uploadFrame"></iframe>
                        </div>
                        <?php include("footer.php"); ?>
                    </div>
                        
                        <script>
                            function uploadEnd(error, path) {
                                if (error === 'OK') {
                                    document.getElementById('uploadStatus').innerHTML = 'Upload done !';
                                } else {
                                    error = error.fontcolor("red");
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
        </div>
    </body>
</html>
