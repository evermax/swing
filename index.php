<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    
    <body>
        <div class="bloc_page">
            <?php
            include("menus.php");
            ?>
            
            <div class="corps">
                <div id="banniere_image">
                    <div class="gallery autoplay items-2">
                        <div id="item-1" class="control-operator"></div>
                        <div id="item-2" class="control-operator"></div>
                        
                        <figure class="item">
                            <img src="images/accueil1.jpg" alt="Voilure" class="panoramique" />
                        </figure>
                        
                        <figure class="item">
                            <img src="images/accueil2.jpg" alt="Voilure" class="panoramique" />
                        </figure>
                        
                        <div class="controls">
                            <a href="#item-1" class="control-button"></a>
                            <a href="#item-2" class="control-button"></a>
                        </div>
                    </div>
                </div>
		        
                <section>
                    <article>
                        <h1>Résumé</h1>
                        <p>Bienvenu sur le site internet du S'Wing !</p>
                        <p>Petite description.<br/>Principe dans les grandes lignes.<br/>Différentes étapes réalisées.<br/>Avancée actuelle des prototypes.<br/>Derniers résultats.</p>
                    </article>
		
                    <aside>
                        <h1>Une participation sur 3 générations</h1>
                        
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
