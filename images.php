<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>
	
    <body>
        <div class="bloc_page">
            <?php
            include("menus.php");
            ?>
            
            <div class="corps">

				<!-- Start photosgallery-std -->
				<div id="standardPhotosgallery" class="sliderkit photosgallery-std">
					<div class="sliderkit-nav">
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a rel="nofollow" href="#" title="Previous line"><span>Previous line</span></a></div>
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a rel="nofollow" href="#" title="Next line"><span>Next line</span></a></div>
						
						<div class="sliderkit-nav-clip">
							<ul>
                                <?php
                                $dossierCourant = opendir('images/carousel_images/');
                                while(false !== ($fichierCourant = readdir($dossierCourant)))
                                {
							        ?>
								    <li><a href="#" rel="nofollow" ><img src="images/carousel_images/<?php echo($fichierCourant); ?>" alt="images/carousel_images/<?php echo($fichierCourant); ?>" /></a></li>
								    <?php
                                }
                                closedir($dossierCourant);
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
                        $dossierCourant = opendir('images/carousel_images/');
                        $i = 1;
                        while(false !== ($fichierCourant = readdir($dossierCourant)))
                        {
					        ?>
						    <div class="sliderkit-panel">
							    <a href="images/carousel_images/<?php echo($fichierCourant); ?>"><img src="images/carousel_images/<?php echo($fichierCourant); ?>" alt="images/carousel_images/<?php echo($fichierCourant); ?>" /></a>
							    <div class="sliderkit-panel-textbox">
								    <div class="sliderkit-panel-text">
									    <h4>Image  <?php echo($i); ?></h4>
									    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
								    </div>
								    <div class="sliderkit-panel-overlay"></div>
							    </div>
						    </div>
						    <?php
						    $i ++;
                        }
                        closedir($dossierCourant);
						?>
					</div>
				</div>
				<!-- // end of photosgallery-std -->

            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
