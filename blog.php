<?php
    require_once("header.php");
?>
    <body class=" angled  yellow">
        <?php require_once("modal.php"); ?>
        <!-- Section Start - Header -->
        <section class="header bg-lightgray header-2" >
            <!-- Menu Top Bar - Start -->
            <?php require_once("navbar.php"); ?>
    <!-- Menu Top Bar - End -->
    <!-- Logo and Mobile Menu - Start -->
    
    <!-- Logo and Mobile Menu - End -->
    <!-- Header Slide - Start -->
    <div class="header-slide" style="position:relative;">
        <img alt="header-banner-image" src="img/banner-2alt1.jpg" class='header-img visible-lg visible-md hidden-xs hidden-sm' style=''>
        <img alt="header-banner-image" src="img/banner-2alt.jpg" class='header-img hidden-xs visible-sm' style=''>
        <img alt="header-banner-image" src="img/banner-2alt2.jpg" class='header-img visible-xs hidden-sm' style=''>
        <div class="overlay overlay2">
            <div class="black inviewport animated delay4" data-effect="fadeInLeftOpacity"></div>
            <div class="primary inviewport animated delay4" data-effect="fadeInRightOpacity"></div>
            <!-- Header Text - Start -->
            <div class="maintext">
                <div class="primary-text inviewport animated delay4" data-effect="fadeInRightBig">
                    <div class="left-line" style="background-color: rgba(255, 255, 255, 0.65);">
                        <h4>Kompetisi</h4>
                        <h2>Blog</h2>
                        
                    </div>
                </div>
                <div class="black-text inviewport animated delay4" data-effect="fadeInLeftBig">
                    <div>
                        <!--<h1>Competition</h1>-->
                    </div>
                </div>
            </div>
            <!-- Header Text - End -->
        </div>
    </div>
    <!-- Header Slide - End -->
</section>
<!-- Section End - Header -->

<!-- Section Start - Made For You -->
<section class='madeforyou padding-top-100 padding-bottom-0 ' style="margin-bottom: 140px;">
    <!-- Angled Section - Start -->
    <div class="angled_down_inside white">
        <div class="slope upleft"></div>
        <!--<div class="slope upright"></div>-->
    </div>
    <!-- Angled Section - End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-area">
            <center>
                <h3 class="heading" style="color:#146549;">MAU UANG TUNAI TOTAL RP 30 JUTA? </h3>
                <img src="img/mekanisme-blog.png" class="img-responsive">
                <p style="font-family: 'Permanent Marker', cursive;color: #218462;">Ayo! Segera daftarkan tulisanmu dan dapatkan hadiahnya detik ini juga!</p>
            <a class="btn btn-primary" id="mekanisme" data-toggle="modal" data-target="#myModal" style="padding: 6px 0px;">Mekanisme</a>
            </center>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slider-area">
                <img src="img/letsblog.png" class="img-responsive">
            </div>
        </div>
    </div>
    <!-- Angled Section - Start -->
    <!--
    <div class="angled_up_inside white">
        <div class="slope upleft"></div>
        <div class="slope upright"></div>
    </div>
    <!-- Angled Section - End -->
</section>
<!-- Section End - Made For You -->
<!-- Section Start - Art of work -->


<?php require_once("footer.php");?>