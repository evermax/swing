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
                        <div class="gallery autoplay items-5">
                            <div id="item-1" class="control-operator"></div>
                            <div id="item-2" class="control-operator"></div>
                            <div id="item-3" class="control-operator"></div>
                            <div id="item-4" class="control-operator"></div>
                            <div id="item-5" class="control-operator"></div>
                            
                            <figure class="item">
                                <img src="images/img1.jpg" alt="Voilure" />
                            </figure>
                            
                            <figure class="item">
                                <img src="images/img2.jpg" alt="Voilure" />
                            </figure>
                            
                            <figure class="item">
                                <img src="images/img3.jpg" alt="Voilure" />
                            </figure>
                            
                            <figure class="item">
                                <img src="images/img4.jpg" alt="Voilure" />
                            </figure>
                            
                            <figure class="item">
                                <img src="images/img5.jpg" alt="Voilure" />
                            </figure>
                            
                            <div class="controls">
                                <a href="#item-1" class="control-button"></a>
                                <a href="#item-2" class="control-button"></a>
                                <a href="#item-3" class="control-button"></a>
                                <a href="#item-4" class="control-button"></a>
                                <a href="#item-5" class="control-button"></a>
                            </div>
                        </div>
                    </div>
                </div>
		        
                <section>
                    <article>
                        <h1>Résumé</h1>
                        <p>Ceci est la page d'accueil de notre site internet. Elle contiendra une petite description du Swing, le principe dans les grandes lignes, les différentes étapes réalisées, l'avancée actuelle des prototypes et les derniers résultats.</p>
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
