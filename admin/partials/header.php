<?php
require 'config/database.php';
?>


<!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">





<!-- Mirrored from jthemes.net/themes/html/medservices/files/demo-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Feb 2023 10:29:07 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jthemes" />
    <meta name="description" content="MedService - Medical & Medical Health Landing Page Template" />
    <meta name="keywords"
        content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SITE TITLE -->
    <title>Absheron RMX</title>

    <!-- FAVICON AND TOUCH ICONS  -->
    <link rel="shortcut icon" href="<?php echo ROOT_URL ?>images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="<?php echo ROOT_URL ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet"
        crossorigin="anonymous">
    <link href="<?php echo ROOT_URL ?>css/flaticon.css" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="<?php echo ROOT_URL ?>css/menu.css" rel="stylesheet">
    <link id="effect" href="<?php echo ROOT_URL ?>css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
    <link href="<?php echo ROOT_URL ?>css/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL ?>css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL ?>css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL ?>css/animate.css" rel="stylesheet">
    <link rel="<?php echo ROOT_URL ?>stylesheet" href="css/timetable.css">
    <link href="<?php echo ROOT_URL ?>css/jquery.datetimepicker.min.css" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="<?php echo ROOT_URL ?>css/style.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="<?php echo ROOT_URL ?>css/responsive.css" rel="stylesheet">

</head>




<body>




    <!-- PRELOADER SPINNER
        ============================================= -->
    <div id="loader-wrapper">
        <div id="loader">
            <div class="loader-inner"></div>
        </div>
    </div>




    <!-- STYLE SWITCHER
        ============================================= -->
    <!-- END SWITCHER -->




    <!-- PAGE CONTENT
        ============================================= -->
    <div id="page" class="page">




        <!-- HEADER
            ============================================= -->
        <header id="header" class="header">


            <!-- MOBILE HEADER -->
            <div class="wsmobileheader clearfix">
                <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                <span class="smllogo"><img src="<?php echo ROOT_URL ?>images/Abşeron-RMX-02.png"
                        style="object-fit:contain;" width="245" alt="mobile-logo" /></span>
                <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
            </div>


            <!-- HEADER STRIP -->
            <div class="headtoppart bg-blue clearfix">
                <div class="headerwp clearfix">

                    <!-- Address -->
                    <div class="headertopleft">
                        <div class="address clearfix">
                            <span>
                                <i class="fas fa-map-marker-alt">

                                </i>Abşeron rayonu, Xirdalan, Azerbaijan
                            </span>
                            <a href="tel:(012) 342 26 11" class="callusbtn">
                                <i class="fas fa-phone"></i>(012) 342 26 11
                            </a>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="headertopright">
                        <a class="googleicon" title="Google" href="#"><i class="fab fa-google"></i> <span
                                class="mobiletext02">Google</span></a>
                        <a class="linkedinicon" title="Linkedin" href="#"><i class="fab fa-linkedin-in"></i> <span
                                class="mobiletext02">Linkedin</span></a>
                        <a class="twittericon" title="Twitter" href="#"><i class="fab fa-twitter"></i> <span
                                class="mobiletext02">Twitter</span></a>
                        <a class="facebookicon" title="Facebook" href="#"><i class="fab fa-facebook-f"></i> <span
                                class="mobiletext02">Facebook</span></a>
                    </div>

                </div>
            </div> <!-- END HEADER STRIP -->


            <!-- NAVIGATION MENU -->
            <div class="wsmainfull menu clearfix">
                <div class="wsmainwp clearfix">

                    <!-- LOGO IMAGE -->
                    <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                    <div class="desktoplogo"><a href="<?php echo ROOT_URL ?>"><img
                                src="<?php echo ROOT_URL ?>images/Abşeron-RMX.png" style="object-fit: contain;"
                                width="180" height="75" alt="header-logo"></a></div>

                    <!-- MAIN MENU -->
                    <nav class="wsmenu clearfix ml-auto">
                        <ul class="wsmenu-list">


                            <!-- DROPDOWN MENU -->
                            <li class="nl-simple">
                                <a href="<?php echo ROOT_URL ?>">Ana səhifə </a>
                            </li>
                            <li class="nl-simple">
                                <a href="<?php echo ROOT_URL ?>about-us.php">Haqqımızda </a>
                            </li>

                            <li class="nl-simple">
                                <a href="<?php echo ROOT_URL ?>all-services.php">Xidmətlər</a>
                            </li>
                            <li>
                                <a href="<?php echo ROOT_URL ?>all-doctors.php">Həkimlər</a>
                            </li>
                            <li class="nl-simple">
                                <a href="<?php echo ROOT_URL ?>blog-listing.php">Xəbərlər</a>
                            </li>

                            <!-- NAVIGATION MENU BUTTON -->
                            <li class="nl-simple header-btn" aria-haspopup="true"><a
                                    href="<?php echo ROOT_URL ?>contact.php">
                                    Əlaqə
                                </a></li>


                        </ul>
                    </nav> <!-- END MAIN MENU -->

                </div>
            </div> <!-- END NAVIGATION MENU -->


        </header> <!-- END HEADER -->