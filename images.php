<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>
	
    <body>
        <div class="bloc_page">
            <?php
            include("menus.php");
            ?>
            
            <div class="corps">
            
                <?php
                include("base.inc.php");
                $reponse = $bdd->query('SELECT * FROM legende_carousel ORDER BY id');
                ?>

                <section>
                    <h1>Images</h1>
                    
			        <!-- Start photosgallery-std -->
			        <div id="standardPhotosgallery" class="sliderkit photosgallery-std">
				        <div class="sliderkit-nav">
					        <div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a rel="nofollow" href="#" title="Previous line"><span>Previous line</span></a></div>
					        <div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a rel="nofollow" href="#" title="Next line"><span>Next line</span></a></div>
					
					        <div class="sliderkit-nav-clip">
						        <ul>
                                    <?php
                                    while($donnees = $reponse->fetch())
                                    {
					                    ?>
						                <li><a href="#" rel="nofollow" ><img src="images/carousel_images/<?php echo($donnees['nom']); ?>" alt="images/carousel_images/<?php echo($donnees['nom']); ?>" /></a></li>
						                <?php
                                    }
							        ?>
						        </ul>
					        </div>
				        </div>
				        <div class="sliderkit-panels">
					        <div class="sliderkit-btn sliderkit-go-btn sliderkit-go-prev"><a rel="nofollow" href="#" title="Previous"><span>Previous</span></a></div>
					        <div class="sliderkit-btn sliderkit-go-btn sliderkit-go-next"><a rel="nofollow" href="#" title="Next"><span>Next</span></a></div>

					        <div class="sliderkit-count sliderkit-count-items">
						        <span class="sliderkit-count-current"></span><span class="sliderkit-count-sep">/</span><span class="sliderkit-count-total"></span>
					        </div>
					
					        <?php
                            $reponse2 = $bdd->query('SELECT * FROM legende_carousel ORDER BY id');
                            while($donnees = $reponse2->fetch())
                            {
			                    ?>
				                <div class="sliderkit-panel">
					                <a href="images/carousel_images/<?php echo($donnees['nom']); ?>"><img src="images/carousel_images/<?php echo($donnees['nom']); ?>" alt="images/carousel_images/<?php echo($donnees['nom']); ?>" /></a>
					                <div class="sliderkit-panel-textbox">
						                <div class="sliderkit-panel-text">
							                <h4><?php echo($donnees['titre']); ?></h4>
							                <p><?php echo($donnees['legende']); ?></p>
						                </div>
						                <div class="sliderkit-panel-overlay"></div>
					                </div>
				                </div>
				                <?php
                            }
					        ?>
				        </div>
			        </div>
			        <!-- // end of photosgallery-std -->
			    </section>
				
				<p></p>
				
				<section>
				    <h1>Vidéos</h1>
				
				    <div id="contenu">
				        <img src="images/videos/video.jpg" alt="VIDEOS" />
				    </div>
				
				    <div class="div_videos">
				    <?php
				        $rep = $bdd->query('SELECT * FROM video ORDER BY id');
				        while($donnees = $rep->fetch())
                        {
				            $nom = explode(".", $donnees['nom'])[0] ?>
				            
				            <p>
                            <table class="table_videos" cellspacing="0" cellpadding="0" >
            	                <tr>
            	                    <td rowspan="2">
            	                        <div class="photo">
                    	                    <img src="images/videos/<?php echo $nom ?>.png" alt="<?php echo $nom ?>" />
            	                        </div>
            	                    </td>
            	                    <td>
            	                        <a href="videos/<?php echo $nom ?>.html" class="liens" title="Cliquez pour regarder la vidéo !"><?php echo $donnees['titre'] ?></a>
            	                    </td>
            	                </tr>
            	                
            	                <tr>
            	                    <td class="bottom" ><?php echo $donnees['legende']; ?></td>
            	                </tr>
            	            </table>
            	            </p>
                            <?php
                        }
                    ?>
                    </div>
                </section>

            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
