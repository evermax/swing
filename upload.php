<?php

    $error    = NULL;
    $filename = NULL;
    $filetype = NULL;

    if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] === 0) {

        $filename = $_FILES['uploadFile']['name'];
        $filetype = $_FILES['uploadFile']['type'];
        $targetpath = getcwd() . '/images/carousel_images/' . $filename; // On stocke le chemin où enregistrer le fichier
        
        
        if (explode("/", $filetype)[0] ==='image') {
            // On déplace le fichier depuis le répertoire temporaire vers $targetpath
            if (@move_uploaded_file($_FILES['uploadFile']['tmp_name'], $targetpath)) { // Si ça fonctionne
                $error = 'OK';
            } else { // Si ça ne fonctionne pas
                $error = "Échec de l'enregistrement !";
            }
        } else {
            $error = 'Il faut une image !';
        }
    } else {
        $error = 'Aucun fichier réceptionné !';
    }

// Et pour finir, on écrit l'appel vers la fonction uploadEnd : 
?>

<script>
    window.top.window.uploadEnd("<?php echo $error; ?>", "<?php echo $filename; ?>");
</script>