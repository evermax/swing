<?php

    $error    = NULL;
    $filename = NULL;
    $filetype = NULL;

    if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] === 0) {
    
        if (isset($_POST['titre']) && $_POST['legende']){

            $titre = $_POST['titre'];
            $legende = $_POST['legende'];
            $filename = $_FILES['uploadFile']['name'];
            $filetype = $_FILES['uploadFile']['type'];
            $targetpath = getcwd() . '/images/carousel_images/' . $filename; // On stocke le chemin où enregistrer le fichier
            
            $bdd = new PDO('mysql:host=localhost;dbname=swing', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $requete = $bdd->prepare('SELECT nom FROM legende_carousel WHERE nom=:nom');
            $requete->execute(array('nom' => $filename));
            
            if (!$requete->fetch())
            {            
                if (explode("/", $filetype)[0] ==='image')
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
        else
        {
            $error = 'Il faut mettre un titre ET une légende.';
        }
    }
    else
    {
        $error = 'Aucun fichier réceptionné.';
    }

// Et pour finir, on écrit l'appel vers la fonction uploadEnd : 
?>

<script>
    window.top.window.uploadEnd("<?php echo $error; ?>", "<?php echo $filename; ?>");
</script>
