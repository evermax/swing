<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>
	
    <body>
        <div class="bloc_page">
            <?php
            include("menus.php");
            ?>
            
            <div class="corps">

	            <div id="carousel">
		            <a class="buttons prev" href="#">&#60;</a>
		            <div class="viewport">
			            <ul class="overview">
				            <li><img src="images/img1.jpg" /></li>
				            <li><img src="images/img2.jpg" /></li>
				            <li><img src="images/img3.jpg" /></li>
				            <li><img src="images/img4.jpg" /></li>
				            <li><img src="images/img5.jpg" /></li>
				            <li><img src="images/img6.jpg" /></li>
				            <li><video src="swing_a_bord.avi" controls width="700px"⁪></video⁪⁪></li>
			            </ul>
		            </div>
		            <a class="buttons next" href="#">&#62;</a>
	            </div>

            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
