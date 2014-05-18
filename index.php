<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    
    <body>
        <div class="bloc_page">
            <?php
            include("menus.php");
            ?>
            
            <div class="gallery">
                <img src="images/accueil/accueil.jpg" alt="S'Wing" class="panoramique" />
            </div>
            
            <div class="corps">		        
                <section>
                    <article>
                        <h1>Imaginez un voilier totalement révolutionnaire...</h1>
                        <p>Un voilier dont les voiles se règlent seules sans intervention en fonction du cap choisi.<br />
                        Un voilier qui ne gîte pas, qui ne se renverse pas.<br />
                        Un voilier que le vent n’écrase pas sur l’eau, mais au contraire soulage comme les kites ou les planches à voile et qui plane d’autant plus que le vent forcit.</p>

                        <div class="pinceau">
                            <img src="images/icones/pinceau_grand.png" />
                            <p class="center pinceau_grand mise_en_valeur"><strong>Ce voilier existe !</strong></p>
                        </div>
                    </article>
		
                    <aside>
                        <h3>Une participation sur 3 générations</h3>
                        
                        <p><em>Le grand-père</em> : <strong>Paul</strong>, calculs et brevet<br />
                        <em>Le père et la mère</em> : <strong>Frédéric</strong>, construction et tests prototypes, et <strong>Gisèle</strong>, soutien logistique<br />
                        <em>Les enfants</em> : <strong>Chloé</strong>, webmaster, et <strong>Arthur</strong> et <strong>Félix</strong>, participation aux essais des prototypes</p>
                    </aside>
                    
                    <p>La S’WING est une <strong>aile</strong> (wing) <strong>pendulaire</strong> (swing) qui  repose sur le principe d’un parapente transposé sur un plan horizontal. Tout comme celui-ci, l’aile, de par son profil, adopte une incidence donnée par rapport à son vent relatif. Donc quel que soit le cap choisi, l’<strong>incidence</strong> de l’aile reste toujours <strong>optimale sans intervention</strong>. La seule contrainte de la S’Wing est qu’elle ne vire que vent arrière (manœuvre qui ne nécessite qu’une inversion du profil de l’aile et se fait aisément).<p>
                    <p>De plus, l’inclinaison de la voile au vent permet d’avoir, comme sur les planches à voile ou les kites (ou le Sail Rocket), une <strong>traction ascendante</strong> sur le bateau (à la différence des voiles classiques qui l’écrasent dans l’eau).<br />
                    Cette aile permet de tracter tout engin capable de maintenir un cap sur eau, sol dur, glace, neige… en fonction des équipements (flotteurs, foils, roues, patins, skis…).</p>
                </section>
                
                <p></p>
                
                <section class="center">
                    <h1>Le principe</h1>
                    
                    <video width="600" controls="">
                        <source src="images/accueil/imaginez.mp4"></source>
                        <source src="images/accueil/imaginez.webmhd.webm"></source>
                        <source src="images/accueil/imaginez.oggtheora.ogv"></source>
                    <video/>
                </section>
            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
