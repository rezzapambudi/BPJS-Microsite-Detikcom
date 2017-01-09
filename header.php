<!DOCTYPE html>
<html>
    <head>
        <title>BPJS</title>
        <meta charset="utf-8"/>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="js/pace.min.js"></script>
        <!--<link href="css/pace-loading-bar.css" rel="stylesheet">-->
        <link rel="stylesheet" type="text/css" href="css/animate.caliber.css">
        <link rel="stylesheet" type="text/css" href="css/materialdesignicons.caliber.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/inviewport-1.3.2.js"></script>
        <!--Isotope -->
        <script src="js/jquery.isotope-v1.js" type="text/javascript"></script>
        <!--Mixitup -->
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
        <!--Fancybox -->
        <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
        <!--Owl-->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.transitions.css" rel="stylesheet">
        <script src="js/owl.carousel.min.js"></script>
        <!-- Main Style -->
        <link rel="shortcut icon" type="image/png" href="img/favicon.png" >
        <link rel="stylesheet" id="main-style" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/tabs.css" />
		<link rel="stylesheet" type="text/css" href="css/tabstyles.css" />
        <link rel="stylesheet" type="text/css" href="css/news.css" />
        
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		
        <script type="text/javascript" src="js/main.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
        <!-- smooth scroll -->
        <script>
                $(function(){

            var $window = $(window);		//Window object

            var scrollTime = 1.2;			//Scroll time
            var scrollDistance = 170;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll

            $window.on("mousewheel DOMMouseScroll", function(event){

                event.preventDefault();	

                var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
                var scrollTop = $window.scrollTop();
                var finalScroll = scrollTop - parseInt(delta*scrollDistance);

                TweenMax.to($window, scrollTime, {
                    scrollTo : { y: finalScroll, autoKill:true },
                        ease: Power1.easeOut,	//For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
                        autoKill: true,
                        overwrite: 5							
                    });

            });

        });
        </script>
        
        
    </head>
