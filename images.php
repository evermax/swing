<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="css/gallery.theme.css" />
        <link rel="stylesheet" href="css/gallery.min.css" />
        <title>S'Wing</title>
    </head>
	
    <body>
        <div class="bloc_page">
            <?php
            include("header.php");
            genererHeader("Photos et videos", "menus.php");
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
