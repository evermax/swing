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
								<li><a href="#" rel="nofollow" ><img src="images/img1.jpg" /></a></li>
								<li><a href="#" rel="nofollow" ><img src="images/img2.jpg" /></a></li>
								<li><a href="#" rel="nofollow" ><img src="images/img3.jpg" /></a></li>
								<li><a href="#" rel="nofollow" ><img src="images/img4.jpg" /></a></li>
								<li><a href="#" rel="nofollow" ><img src="images/img5.jpg" /></a></li>
								<li><a href="#" rel="nofollow" ><img src="images/img6.jpg" /></a></li>
							</ul>
						</div>
					</div>
					<div class="sliderkit-panels">
						<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-prev"><a rel="nofollow" href="#" title="Previous"><span>Previous</span></a></div>
						<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-next"><a rel="nofollow" href="#" title="Next"><span>Next</span></a></div>

						<div class="sliderkit-count sliderkit-count-items">
							<span class="sliderkit-count-current"></span><span class="sliderkit-count-sep">/</span><span class="sliderkit-count-total"></span>
						</div>
					
						<div class="sliderkit-panel">
							<img src="images/img1.jpg" />
						</div>
						<div class="sliderkit-panel">
							<img src="images/img2.jpg" />
						</div>
						<div class="sliderkit-panel">
							<img src="images/img3.jpg" />
						</div>
						<div class="sliderkit-panel">
							<img src="images/img4.jpg" />
						</div>
						<div class="sliderkit-panel">
							<img src="images/img5.jpg" />
						</div>
						<div class="sliderkit-panel">
							<img src="images/img6.jpg" />
						</div>
					</div>
				</div>
				<!-- // end of photosgallery-std -->

            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
