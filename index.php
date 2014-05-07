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
                    <div class="gallery autoplay items-3">
                        <div id="item-1" class="control-operator"></div>
                        <div id="item-2" class="control-operator"></div>
                        <div id="item-3" class="control-operator"></div>
                        
                        <figure class="item ombre">
                            <img src="images/accueil1.jpg" alt="Voilure" class="panoramique" />
                        </figure>
                        
                        <figure class="item ombre">
                            <img src="images/accueil2.jpg" alt="Voilure" class="panoramique" />
                        </figure>
                        
                        <figure class="item ombre">
                            <img src="images/accueil3.jpg" alt="Voilure" class="panoramique" />
                        </figure>
                        
                        <div class="controls">
                            <a href="#item-1" class="control-button"></a>
                            <a href="#item-2" class="control-button"></a>
                            <a href="#item-3" class="control-button"></a>
                        </div>
                    </div>
                </div>
		        
                <section>
                    <article>
                        <h1>Résumé</h1>
                        <p>Bienvenu sur le site internet du S'Wing !</p>
                        <p>Très bientôt, cette page contiendra une petite description du projet ainsi que le principe du S'Wing dans les grandes lignes. Vous y trouverez également les différentes étapes réalisées et l'avancée actuelle des prototypes.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus lacus et risus tincidunt pulvinar. Aenean diam dolor, ornare eget scelerisque a, lacinia ut lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean scelerisque pretium condimentum. Etiam vitae lacus nec metus iaculis scelerisque. Curabitur nec est felis. Etiam quis tincidunt mi, ac viverra velit. Quisque eget elementum justo.</p>
                    </article>
		
                    <aside>
                        <h1>Une participation sur 3 générations</h1>
                        
                        <p><em>Le grand-père</em> : Paul, calculs et brevet</br>
                        <em>Le père et la mère</em> : Frédéric, construction et tests prototypes, et Gisèle, aides</br>
                        <em>Les enfants</em> : Chloé, Arthur et Félix, aides</p>
                    </aside>
		            
                </section>
            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
