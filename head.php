<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/gallery.theme.css" />
    <link rel="stylesheet" href="css/gallery.min.css" />

    <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
	<script type="text/javascript" src="js/external/_oldies/jquery-1.3.min.js"></script>
	<script type="text/javascript" src="js/external/jquery.easing.1.3.min.js"></script>
	<script type="text/javascript" src="js/external/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox-0.5.pack.js"></script>
	<script type="text/javascript" src="js/sliderkit/jquery.sliderkit.1.9.2.pack.js"></script>		
	<script type="text/javascript" src="js/sliderkit/addons/sliderkit.delaycaptions.1.1.pack.js"></script>
	<script type="text/javascript" src="js/sliderkit/addons/sliderkit.counter.1.0.pack.js"></script>
	<script type="text/javascript" src="js/sliderkit/addons/sliderkit.timer.1.0.pack.js"></script>
	<script type="text/javascript" src="js/sliderkit/addons/sliderkit.imagefx.1.0.pack.js"></script>

	<script type="text/javascript">
		$(window).load(function(){
			// Photo gallery > Standard
			$("#standardPhotosgallery").sliderkit({
				mousewheel:true,
				shownavitems:4,
				//navfx:"none",
				panelbtnshover:true,
				auto:false,
				circular:true,
				navscrollatend:true,
				counter:true
			});
			
			// Photo gallery > Example #5
			$(".photosgallery-5").sliderkit({
				mousewheel:false,
				shownavitems:5,
				panelbtnshover:false,
				auto:false,
				circular:false,
				navscrollatend:false,
				navpanelautoswitch:false,
				counter:true,
				debug:1
			});
			
		});	
	</script>
	
	<script type="text/javascript">
        $(document).ready(function () {
            $(".liens").click(function () {
                page = ($(this).attr("href"));
                $.ajax({
                    url: page,
                    cache: false,
                    success: function (html) {
                        afficher(html);
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrows) {}
                });
                return false;
            });
        });

        function afficher(donnees) {
            $("#contenu").empty();
            $("#contenu").append(donnees);
        }
    </script>
	
	<link rel="stylesheet" type="text/css" href="css/sliderkit-core.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="css/sliderkit-demos.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen, projection" />
	
    <title>S'Wing</title>
</head>
