<?php

    $error    = NULL;
    $filename = NULL;
    $filetype = NULL;

    if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] === 0) {
    
        if (strip_tags($_POST['titre']) !== '' && strip_tags($_POST['legende']) !== '')
        {
            $titre = $_POST['titre'];
            $legende = $_POST['legende'];
            $filename = $_FILES['uploadFile']['name'];
            $filetype = $_FILES['uploadFile']['type'];
            
            if ($_POST['type'] === 'image') // Si c'est une image
            {
                $targetpath = getcwd() . '/images/carousel_images/' . $filename; // On stocke le chemin où enregistrer le fichier
                include("base.inc.php");
                $requete = $bdd->prepare('SELECT nom FROM legende_carousel WHERE nom=:nom');
                $requete->execute(array('nom' => $filename));
                
                if (!$requete->fetch())
                {            
                    if (explode("/", $filetype)[0] === 'image')
                    {
                        // On déplace le fichier depuis le répertoire temporaire vers $targetpath
                        if (@move_uploaded_file($_FILES['uploadFile']['tmp_name'], $targetpath)) // Si ça fonctionne
                        {
                            $error = 'OK';
            	
                    		$req = $bdd->prepare('INSERT INTO legende_carousel (nom, titre, legende) VALUES (:nom, :titre, :legende)');
                    		$req->execute(array('nom' => $filename, 'titre' => $titre, 'legende' => $legende));
                        }
                        else // Si ça ne fonctionne pas
                        {
                            $error = "Échec de l'enregistrement !";
                        }
                    }
                    else
                    {
                        $error = 'Il faut une image.';
                    }
                }
                else
                {
                    $error = 'Une image portant ce nom existe déjà. Renommez-là avant de recommencer le traitement.';
                }
            }
            elseif ($_POST['type'] === 'video') // Si ce n'est pas une image, c'est donc une vidéo
            {
                $targetpath = getcwd() . '/images/videos/' . $filename; // On stocke le chemin où enregistrer le fichier
                include("base.inc.php");
                $requete = $bdd->prepare('SELECT nom FROM video WHERE nom=:nom');
                $requete->execute(array('nom' => $filename));
                
                if (!$requete->fetch())
                {            
                    if (explode("/", $filetype)[0] === 'video')
                    {
                        // On déplace le fichier depuis le répertoire temporaire vers $targetpath
                        if (@move_uploaded_file($_FILES['uploadFile']['tmp_name'], $targetpath)) // Si ça fonctionne
                        {
                            $error = 'OK';
            	
                    		$req = $bdd->prepare('INSERT INTO video (nom, titre, legende) VALUES (:nom, :titre, :legende)');
                    		$req->execute(array('nom' => $filename, 'titre' => $titre, 'legende' => $legende));
                        }
                        else // Si ça ne fonctionne pas
                        {
                            $error = "Échec de l'enregistrement !";
                        }
                    }
                    else
                    {
                        $error = 'Il faut une video.';
                    }
                }
                else
                {
                    $error = 'Une video portant ce nom existe déjà. Renommez-là avant de recommencer le traitement.';
                }
            }
        }
        else
        {
            $error = 'Il faut mettre un titre ET une légende.';
        }
    }
    else
    {
        $error = 'Aucun fichier sélectionné.';
    }

// Et pour finir, on écrit l'appel vers la fonction uploadEnd : 
?>

<script>
    window.top.window.uploadEnd("<?php echo $error; ?>", "<?php echo $filename; ?>");
</script>
