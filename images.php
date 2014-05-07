<!DOCTYPE html>
<html>
	<?php include("head.php"); ?>
	
    <body>
        <div class="bloc_page">
            <?php
            include("menus.php");
            ?>
            
            <div class="corps">

                <div class="gallery items-5">
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
                        <a href="#item-1" class="control-button"><img src="images/img1.jpg" alt="Voilure" /></a>
                        <a href="#item-2" class="control-button"><img src="images/img2.jpg" alt="Voilure" /></a>
                        <a href="#item-3" class="control-button"><img src="images/img3.jpg" alt="Voilure" /></a>
                        <a href="#item-4" class="control-button"><img src="images/img4.jpg" alt="Voilure" /></a>
                        <a href="#item-5" class="control-button"><img src="images/img5.jpg" alt="Voilure" /></a>
                    </div>
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
