<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    
    <body>
        <div class="bloc_page">
            <?php
            include("menus.php");
            ?>
            
           <div id="banniere_image">
                <div class="gallery autoplay items-3">
                    <div id="item-1" class="control-operator"></div>
                    <div id="item-2" class="control-operator"></div>
                    <div id="item-3" class="control-operator"></div>
                    
                    <figure class="item ombre">
                        <img src="images/accueil/accueil1.jpg" alt="Voilure" class="panoramique" />
                    </figure>
                    
                    <figure class="item ombre">
                        <img src="images/accueil/accueil2.jpg" alt="Voilure" class="panoramique" />
                    </figure>
                    
                    <figure class="item ombre">
                        <img src="images/accueil/accueil3.jpg" alt="Voilure" class="panoramique" />
                    </figure>
                    
                    <div class="controls">
                        <a href="#item-1" class="control-button"></a>
                        <a href="#item-2" class="control-button"></a>
                        <a href="#item-3" class="control-button"></a>
                    </div>
                </div>
            </div>
            
            <div class="corps">		        
                <section>
                    <article>
                        <h1>Imaginez un voilier totalement révolutionnaire...</h1>
                        <p>Un voilier dont les voiles se règlent seules sans intervention en fonction du cap choisi.<br />
                        Un voilier qui ne gîte pas, qui ne se renverse pas.<br />
                        Un voilier que le vent n’écrase pas sur l’eau, mais au contraire soulage comme les kites ou les planches à voile et qui plane d’autant plus que le vent forcit.</p>

                        <p>Ce voilier existe !</p>
                    </article>
		
                    <aside>
                        <h3>Une participation sur 3 générations</h3>
                        
                        <p><em>Le grand-père</em> : Paul, calculs et brevet<br />
                        <em>Le père et la mère</em> : Frédéric, construction et tests prototypes, et Gisèle, aides<br />
                        <em>Les enfants</em> : Chloé, Arthur et Félix, aides</p>
                    </aside>
                    
                    <p>La S’WING est une aile (wing) pendulaire (swing) qui  repose sur le principe d’un parapente transposé sur un plan horizontal. Tout comme celui-ci, l’aile, de par son profil, adopte une incidence donnée par rapport au vent qu’elle rencontre (dans le cas de l’aile, par rapport à son vent relatif qui dépend du vent météo et du déplacement du bateau, cap et vitesse). Donc quel que soit le cap choisi, l’incidence de l’aile reste toujours optimale sans intervention (Cf. animation vs voiliers classiques). La seule contrainte de la S’Wing est qu’elle ne vire que vent arrière (manœuvre qui ne nécessite qu’une inversion du profil de l’aile et se fait aisément).<p>
                    <p>De plus, l’inclinaison de la voile au vent permet d’avoir, comme sur les planches à voile ou les kites (ou le Sail Rocket), une traction ascendante sur le bateau (à la différence des voiles classiques qui l’écrasent dans l’eau).<br />
                    Cette aile permet de tracter tout engin capable de maintenir un cap sur eau, sol dur, glace, neige… en fonction des équipements (flotteurs, foils, roues, patins, skis…).</p>
		            
                </section>
                
                <p></p>
                
                <section>
                    <h1>Fonctionnement en image</h1>
                    
                    <img src="images/accueil/fonctionnement.png" alt="Fonctionnement en image" />
                </section>
            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
