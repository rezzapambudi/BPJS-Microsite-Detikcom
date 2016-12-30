<?php
    require_once("header.php");
?>
    <body class=" angled  yellow">
        <!-- Section Start - Header -->
        <section class="header bg-lightgray header-small" >
            <!-- Menu Top Bar - Start -->
            <?php require_once("navbar.php"); ?>
    <!-- Menu Top Bar - End -->
    <!-- Logo and Mobile Menu - Start -->
    <div class='header-logo-wrap'>
        <div class="container">
            <div class="logo col-xs-2">
                
            </div>
            <div class="menu-mobile col-xs-10 pull-right cssmenu">
                <i class="mdi mdi-menu menu-toggle"></i>
                <ul class="menu" id='parallax-mobile-menu'>
                </ul>
            </div>
        </div>
    </div>
    <!-- Logo and Mobile Menu - End -->
    <!-- Header Slide - Start -->
    <div class="header-slide" style="position:relative;">
        <img alt="header-banner-image" src="img/banner-2.jpg" class='header-img' style=''>
        <div class="overlay overlaysmall2">
            <div class="black inviewport animated delay4" data-effect="fadeInLeftOpacity"></div>
            <div class="primary inviewport animated delay4" data-effect="fadeInRightOpacity"></div>
            <!-- Header Text - Start -->
            <div class="maintext">
                <div class="primary-text inviewport animated delay4" data-effect="fadeInRightBig">
                    <div class="left-line">
                        <h4>Info</h4>
                        <h1>Hadiah</h1>
                    </div>
                </div>
                <div class="black-text inviewport animated delay4" data-effect="fadeInLeftBig">
                    <!--
                    <div>
                        <h1>Showcase</h1>
                    </div>-->
                </div>
            </div>
            <!-- Header Text - End -->
        </div>
    </div>
    <!-- Header Slide - End -->
</section>
<!-- Section End - Header -->
<!-- Section Start - Portfolio -->
<section class=' padding-top-100 padding-bottom-0 ' id='portfolio'>
    <!-- Angled Section - Start -->
    <div class="angled_down_inside white">
        <div class="slope upleft"></div>
        <div class="slope upright"></div>
    </div>
    <!-- Angled Section - End -->
    <div class="container">
        <div class="row gallery-row">
            <!--
            <h1 class="heading">Our Gallery</h1>
            <div class="headul"></div>
            <p class="subheading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit enean commodo  eget dolor aenean massa eget dolor aenean massa</p>-->
            <!-- Filter Categories - Start -->
            <div class="filter-categories filter-isotope">
                <span class="btn filter active" data-filter="*">Semua Hadiah</span>
                <span class="btn filter " data-filter=".design">Pemenang Utama</span>
                <span class="btn filter " data-filter=".development">Pemenang Most RT</span>
                <span class="btn filter " data-filter=".photography">Pemenang Most View</span>
                <span class="btn filter " data-filter=".baru">Pemenang Postingan</span>
                <span class="btn filter " data-filter=".branding">Pemenang Gimmick</span>
            </div>
            <!-- Filter Categories - End -->
            <!-- Portfolio Items - Start -->
            <div class="filter-items filter-isotope  inviewport animated " data-effect="fadeIn" id="gallery-isotope">
                <!-- Item - Start -->
                <div class="filter-item development col-lg-3 col-md-4 col-sm-6  col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <img alt="gallery-image" src="img/gallery-1.jpg" class="img-responsive transition">
                    <div class="info transition">
                        <a class="btn btn-primary fancybox" title="Test Title of this item" data-fancybox-group="gallery" href="img/gallery-1.jpg"><i class="mdi mdi-image-area"></i></a>
                    </div>
                </div>
                <!-- Item - End -->
                <!-- Item - Start -->
                <div class="filter-item photography col-lg-3 col-md-4 col-sm-6  col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <img alt="gallery-image" src="img/gallery-2.jpg" class="img-responsive transition">
                    <div class="info transition">
                        <a class="btn btn-primary fancybox" title="Test Title of this item" data-fancybox-group="gallery" href="img/gallery-2.jpg"><i class="mdi mdi-image-area"></i></a>
                    </div>
                </div>
                <!-- Item - End -->
                <!-- Item - Start -->
                <div class="filter-item design col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img alt="gallery-image" src="img/gallery-3.jpg" class="img-responsive transition">
                    <div class="info transition">
                        <a class="btn btn-primary fancybox" title="Test Title of this item" data-fancybox-group="gallery" href="img/gallery-3.jpg"><i class="mdi mdi-image-area"></i></a>
                    </div>
                </div>
                <!-- Item - End -->
                <!-- Item - Start -->
                <div class="filter-item baru col-lg-3 col-md-4 col-sm-6  col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <img alt="gallery-image" src="img/gallery-4.jpg" class="img-responsive transition">
                    <div class="info transition">
                        <a class="btn btn-primary fancybox" title="Test Title of this item" data-fancybox-group="gallery" href="img/gallery-4.jpg"><i class="mdi mdi-image-area"></i></a>
                    </div>
                </div>
                <!-- Item - End -->
                <!-- Item - Start -->
                <div class="filter-item branding col-lg-3 col-md-4 col-sm-6  col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <img alt="gallery-image" src="img/gallery-5.jpg" class="img-responsive transition">
                    <div class="info transition">
                        <a class="btn btn-primary fancybox" title="Test Title of this item" data-fancybox-group="gallery" href="img/gallery-5.jpg"><i class="mdi mdi-image-area"></i></a>
                    </div>
                </div>
                <!-- Item - End -->
                <!-- Item - Start -->
                
                <!-- Item - End -->
            </div>
            <!-- Portfolio Items - End -->
        </div>
    </div>
    <!-- Angled Section - Start -->
    <div class="angled_up_inside white">
        <div class="slope upleft"></div>
        <div class="slope upright"></div>
    </div>
    <!-- Angled Section - End -->
</section>
<!-- Section End - Portfolio  -->
<!-- Section Start - Footer -->
<?php require_once("footer2.php");?>
<!-- Section End - Footer -->
</body>
</html>