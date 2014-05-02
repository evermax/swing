<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    
    <body>
        <div class="bloc_page">
            <?php
            include("header.php");
            genererHeader("Accueil", "menus.php");
            ?>
            
            <div class="corps">
                <div id="banniere_image">
                    <div id="banniere_description">
                        Défilement de photos...
                        <a href="images.php" class="bouton_images">Voir les photos</a>
                    </div>
                </div>
		        
                <section>
                    <article>
                        <h1>Résumé</h1>
                        <p>Ceci est la page d'accueil de notre site internet. Elle contiendra une petite description du Swing, le principe dans les grandes lignes, les différentes étapes réalisées, l'avancée actuelle des prototypes et les derniers résultats.</p>
                    </article>
		
                    <aside>
                        <h1>A propos des auteurs</h1>
                        
                        <h2>Une participation sur 3 générations</h2>
                        
                        <p><em>Le grand-père</em> : Paul Brouzes, calculs et brevet</br>
                        <em>Le père</em> : Frédéric Brouzes, construction et tests prototypes</br>
                        <em>Les enfants</em> : Chloé, Arthur et Félix Brouzes, aides</p>
                    </aside>
		            
                </section>
            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
