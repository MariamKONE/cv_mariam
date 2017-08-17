<?php

require '../connexion/connexion.php';

$sql = $pdoCV->query(" SELECT * FROM titres_cv WHERE utilisateur_id ='1' ");
$ligne_titre = $sql->fetch();

$sql = $pdoCV->query(" SELECT * FROM utilisateurs WHERE id_utilisateur ='1' ");
$ligne_utilisateur = $sql->fetch();

$sql = $pdoCV->query(" SELECT * FROM profils WHERE utilisateur_id ='1' ");
$ligne_profil = $sql->fetch();


 ?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Developpeur web freelance paris</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body >

    <!--===========
    2 ) Preloader
    ============-->

    <div id="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!--=========
    3 ) Homepage
    ==========-->

    <div class="home-page">

        <!--( a ) Introduction -->

        <div class="introduction">
            <img alt="" src="img/portfolio/fullsize/mac.jpg">
            <div class="maskInt">
            </div>
            <div class="intro-content">


                <h1 id="presentation">HELLO<br>
                I'M <span><?php echo $ligne_utilisateur['prenom'].' '.$ligne_utilisateur['nom']; ?></span></h1>
                <h2 id="presentation"><?php echo $ligne_titre['titre_cv']; ?></h2>
                <p><?php echo $ligne_profil['description_p']; ?></p>
                <p class="social-media hidden-xs">
                    <a href="#" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                    <a href="#" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                    <a href="#" class="fa fa-plus" data-toggle="tooltip" title="Google+"></a>
                    <a href="#" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                    <a href="#" class="fa fa-behance" data-toggle="tooltip" title="Behance"></a>
                    <a href="#" class="fa fa-flickr" data-toggle="tooltip" title="Flicker"></a>
                    <a href="#" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
                </p>

                <!-- Social Media Icons [ END ] -->

            </div>
        </div>

        <!-- ( b ) Navigation Menu -->

        <div class="menu">
            <div class="profile-btn">
                <img alt="" src="img/portfolio/fullsize/menubtn/menuprofile.jpg" style="width: 100%;">
                <div class="mask" >
                </div>
                <div class="heading col-xs-11 col-xs-offset-1">
                    <div class="col-xs-2 hidden-xs">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="col-sm-10">
                        <h2>PR<span>O</span>FILE</h2>
                        <h3>Some words about me.</h3>
                    </div>
                </div>
            </div>

            <!-- Single Navigation Menu Button [ END ]  -->

            <div class="resume-btn">
                <img alt="" src="img/portfolio/fullsize/menubtn/menuresume.jpg">
                <div class="mask">
                </div>
                <div class="heading col-xs-11 col-xs-offset-1">
                    <div class="col-xs-2 hidden-xs">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="col-sm-10">
                        <h2>RE<span>S</span>UME</h2>
                        <h3>Something about my experience and skills.</h3>
                    </div>
                </div>
            </div>

            <!-- Single Navigation Menu Button [ END ]  -->

            <div class="portfolio-btn">
                <img alt="" src="img/portfolio/fullsize/menubtn/menuportfolio1.jpg">
                <div class="mask">
                </div>
                <div class="heading col-xs-11 col-xs-offset-1">
                    <div class="col-xs-2 hidden-xs">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="col-sm-10">
                        <h2>PORT<span>F</span>OLIO</h2>
                        <h3>Have a spoon of my work.</h3>
                    </div>
                </div>
            </div>

            <!-- Single Navigation Menu Button [ END ]  -->

            <div class="contact-btn">
                <img alt="" src="img/portfolio/fullsize/menubtn/menucontact.jpg">
                <div class="mask">
                </div>
                <div class="heading col-xs-11 col-xs-offset-1">
                    <div class="col-xs-2 hidden-xs">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="col-sm-10">
                        <h2>CO<span>N</span>TACT</h2>
                        <h3>Say hello or find me.</h3>
                    </div>
                </div>
            </div>

            <!-- Single Navigation Menu Button [ END ]  -->

        </div>
    </div>

    <!--=============
    4 ) Close Button
    ==============-->

    <div class="close-btn"></div>

    <!--=============
    5 ) Profile Page
    ==============-->

    <div class="profile-page">

        <!--( a ) Profile Page Fixed Image Portion -->

        <div class="image-container col-md-5 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>PR<span>O</span>FILE</h1>
            </div>
        </div>

        <!--( b ) Profile Page Content -->

        <div class="content-container col-md-7 col-sm-12">

            <!--( A ) Story of Glory -->

            <div class="story clearfix">
                <h2 class="small-heading">STORY OF GLORY</h2>
                <div class="col-lg-11 col-lg-offset-1">
                    <div class="story-content clearfix">
                        <img alt="" src="img/portfolio/fullsize/profile.jpg" class="col-xs-offset-1 col-sm-offset-0 col-sm-4 col-xs-10">
                        <div class="col-sm-8 col-xs-12">
                            <h3>AN AWESOMW DESIGNER ON PLANET</h3>
                            <p>
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat enim arcu, eget tempor nibh congue a. Maecenas faucibus sagittis nibh, in bibendum ex. Donec eu ornare augue, nec cursus arcu. Vivamus accumsan mauris nec nulla bibendum, et eleifend nisl tristique. Pellentesque fringilla lorem id nibh auctor sagittis. Suspendisse non nisl at velit malesuada bibendum.
                            </p>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <p>
                                Curabitur pharetra tincidunt lobortis. Duis dolor felis, sollicitudin ac dapibus quis, hendrerit ut est. Sed faucibus neque iaculis nisi accumsan, et condimentum nunc scelerisque. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl. Fusce elementum orci in dignissim cursus.
                            </p>
                            <a href="#" class="hire-me btn btn-default btn-xl sr-button">Retour</a>

                            <a href="img/CV_mariam_kone_Dev.pdf" href="#telecharger" id="btn_cv" class="btn btn-default btn-xl sr-button" download>Téléchargez mon Cv </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--( B ) Footer -->

            <div class="footer clearfix">
                <a href="#">Mariam KONE</a>
                <p>
                    Copyright © 2015 All right reserved
                </p>
            </div>

            <!-- <div class="services-container clearfix">
                <h2 class="small-heading">WHAT CAN I DO?</h2>
                <div class="services col-lg-4 col-md-6 col-sm-4">
                    <i class="fa fa-eyedropper"></i>
                    <h3>GRAPHIC DESIGN</h3>
                    <p>
                        Sed mi sem, sagi eros ac, laoreet commodo diam. Morbi id est in urna facilisis dictum. Mauris rutrum mollis neque a sodales. Mauris sed ipsum nec turpis finibus.
                    </p>
                </div> -->

                <!-- Single Service Item [ END ]  -->

                <!-- <div class="services col-lg-4 col-md-6 col-sm-4">
                    <i class="fa fa-eye"></i>
                    <h3>WEB DESIGN</h3>
                    <p>
                        Vivamus et rhoncus mauris, suscipit efficitur elementum ex. Interdum et malesuada ipsum primis in faucibus. Nullam odio libero, cursus ac ligula suscipit maximus.
                    </p>
                </div> -->

                <!-- Single Service Item [ END ]  -->

                <!-- <div class="services col-lg-4 col-md-6 col-sm-4">
                    <i class="fa fa-code"></i>
                    <h3>WEB DEVELOPMENT</h3>
                    <p>
                        Praesent ac varius ante, eu suscipit odio. Vesmolito modo pretium scelerisque. Sed vulputate ac varius ante dapibus tempor. Maecenas ut cursus aug suscipit malesuada felis.
                    </p>
                </div> -->

                <!-- Single Service Item [ END ]  -->

                <!-- <div class="services col-lg-4 col-md-6 col-sm-4">
                    <i class="fa fa-lightbulb-o"></i>
                    <h3>BRIGHT IDEAS</h3>
                    <p>
                        Nunc egestas sed efficitur nulla a sodales. Pellentesque tincidunt diam quam, rhoncus congue pellentesque eu, faucibus nec turpis. Quisque laoreet tincidunt turpis dolor tempus.
                    </p>
                </div> -->

                <!-- Single Service Item [ END ]  -->

                <!-- <div class="services col-lg-4 col-md-6 col-sm-4">
                    <i class="fa fa-rocket"></i>
                    <h3>APP DEVELOPMENT</h3>
                    <p>
                       Vestibulum dictum tincidunt pulvinar elementum. Etiam urna massa, vestibulum id purus id, vehicula placerat dui. Aenean sit amet pulvinar urna. Ut at mi semper, eleifend.
                    </p>
                </div> -->

                <!-- Single Service Item [ END ]  -->

                <!-- <div class="services col-lg-4 col-md-6 col-sm-4">
                    <i class="fa fa-wrench"></i>
                    <h3>SETTINGS</h3>
                    <p>
                        Vestibulum tincidunt sed dapibus elit, sed accumsan libero. Nam vulputate tincidunt quam quis nibh porttitor, a tincidunt lacinia. Nulla turpis arcu, hendrerit volutpat tincidunt at, eget est.
                    </p>
                </div> -->

                <!-- Single Service Item [ END ]  -->

            </div>

            <!--( C ) Some Facts -->

            <!-- <div class="facts clearfix">
                <div class="col-xs-4">
                    <h3>PROJECTS DONE</h3>
                    <h1>300+</h1>
                </div>
                <div class="col-xs-4">
                    <h3>HAPPY CLIENTS</h3>
                    <h1>100+</h1>
                </div>
                <div class="col-xs-4">
                    <h3>COFFEE CUPS</h3>
                    <h1>250+</h1>
                </div>
            </div> -->

            <!--( D ) Footer -->

            <div class="footer clearfix">
                <a href="#">MARIAM KONE</a>
                <p>
                    Copyright © 2017 All right reserved
                </p>
            </div>
        </div>
    </div>

    <!--=============
    6 ) Resume Page
    ===============-->

    <div class="resume-page">

        <!--( a ) Resume Page Fixed Image Portion -->

        <div class="image-container col-md-5 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>RE<span>S</span>UME</h1>
            </div>
        </div>

        <!--( b ) Resume Page Content -->

        <div class="content-container col-md-7 col-sm-12">

            <!--( A ) Education Section -->

            <div class="education clearfix">
                <h2 class="small-heading">EDUCATION</h2>

                <div class="education-container col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <div class="item">
                        <div class="bullet hidden-xs">
                        </div>
                        <div class="education-content">
                            <h3>University of Graphics<span> / October 2013 - March 2015</span></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et pulvinar ligula. Praesent maximus ornare quam, id consectetur dui eleifend nec. Nam consectetur orci id nulla varius, quis facilisis dui vulputate. Sed ultrices eu erat non mollis. Phasellus ut libero.
                            </p>
                        </div>
                    </div>

                    <!-- Single Education Item [ END ] -->

                    <div class="item">
                        <div class="bullet hidden-xs">
                        </div>
                        <div class="education-content">
                            <h3>University of Graphics<span> / October 2011 - March 2013</span></h3>
                            <p>
                                In eu semper velit. Ut laoreet, sapien ac porta aliquam, est enim blandit nisl, ut semper dui justo a sapien. Nam orci ipsum, rutrum semper purus a, posuere molestie lorem. Sed ut nibh lobortis, semper ligula ut, tempus mi. In.
                            </p>
                        </div>
                    </div>

                    <!-- Single Education Item [ END ] -->

                    <div class="item">
                        <div class="bullet hidden-xs">
                        </div>
                        <div class="education-content">
                            <h3>University of Graphics<span> / October 2009 - March 2011</span></h3>
                            <p>
                                Maecenas hendrerit euismod lorem, vitae mollis odio consectetur a. Aliquam at viverra nunc. Fusce neque lectus, vehicula eget lectus ac, consequat mollis erat. Sed sed interdum nisl. Nulla maximus odio vitae turpis rhoncus tempus. Donec vel elit quis metus rutrum.
                            </p>
                        </div>
                    </div>

                    <!-- Single Education Item [ END ] -->

                </div>
            </div>

            <!--( B ) Experience Section -->

            <div class="experience clearfix">
                <h2 class="small-heading">EXPERIENCE</h2>
                <div class="experience-container col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <div class="item">
                        <div class="bullet hidden-xs">
                        </div>
                        <div class="experience-content">
                            <h3>Senior Web Designer<span> / October 2013 - March 2015<br>
                            Lorem Ipsum, Inc.</span></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et pulvinar ligula. Praesent maximus ornare quam, id consectetur dui eleifend nec. Nam consectetur orci id nulla varius, quis facilisis dui vulputate. Sed ultrices eu erat non mollis. Phasellus ut libero.
                            </p>
                        </div>
                    </div>

                    <!-- Single Experience Item [ END ] -->

                    <div class="item">
                        <div class="bullet hidden-xs">
                        </div>
                        <div class="experience-content">
                            <h3>Senior Web Designer<span> / October 2011 - March 2013<br>
                            Lorem Ipsum, Inc.</span></h3>
                            <p>
                                In eu semper velit. Ut laoreet, sapien ac porta aliquam, est enim blandit nisl, ut semper dui justo a sapien. Nam orci ipsum, rutrum semper purus a, posuere molestie lorem. Sed ut nibh lobortis, semper ligula ut, tempus mi. In.
                            </p>
                        </div>
                    </div>

                    <!-- Single Experience Item [ END ] -->

                    <div class="item">
                        <div class="bullet hidden-xs">
                        </div>
                        <div class="experience-content">
                            <h3>Senior Web Designer<span> / October 2009 - March 2011<br>
                            Lorem Ipsum, Inc.</span></h3>
                            <p>
                                Maecenas hendrerit euismod lorem, vitae mollis odio consectetur a. Aliquam at viverra nunc. Fusce neque lectus, vehicula eget lectus ac, consequat mollis erat. Sed sed interdum nisl. Nulla maximus odio vitae turpis rhoncus tempus. Donec vel elit quis metus rutrum.
                            </p>
                        </div>
                    </div>

                    <!-- Single Experience Item [ END ] -->

                </div>
            </div>

            <!--( C ) Section compétences -->
            <div class="skills clearfix">
                <h2 class="small-heading">Compétences</h2>
                <div class="clearfix">
                    <!-- HTML5  -->
                    <div class="skill-container col-sm-4">
                        <h3>HTML5</h3>
                            <div class="progress html">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                <div class="progress-value"></div>
                            </div>
                     </div>

                    <!-- CSS3 -->
                    <div class="skill-container col-sm-4">
                        <h3>CSS3</h3>
                            <div class="progress css">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                <div class="progress-value"></div>
                            </div>
                    </div>

                    <!-- JavaScript -->
                    <div class="skill-container col-sm-4">
                        <h3>JavaScript</h3>
                        <div class="progress js">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                            <div class="progress-value"></div>
                        </div>
                    </div>

                    <!-- JQuery -->
                    <div class="skill-container col-sm-4">
                        <h3>JQuery</h3>
                        <div class="progress jquery">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                            <div class="progress-value"></div>
                        </div>
                    </div>

                    <!-- PHP7 -->
                    <div class="skill-container col-sm-4">
                        <h3>PHP7</h3>
                        <div class="progress php">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                            <div class="progress-value"></div>
                        </div>
                    </div>

                    <!-- WordPress -->
                    <div class="skill-container col-sm-4">
                        <h3>WordPress</h3>
                        <div class="progress wordpress">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                            <div class="progress-value"></div>
                        </div>
                    </div>

                    <!-- Fin des compétences [ Fin ] -->

                </div>
            </div>

            <div class="facts clearfix">
                <div class="col-xs-2" >
                    <img src="img/portfolio/fullsize/logo/html.png" id="logo_competence" alt="">
                </div>

                <div class="col-xs-2">
                    <img src="img/portfolio/fullsize/logo/css3.png" alt="" id="logo_competence">
                </div>
                <div class="col-xs-2">
                    <img src="img/portfolio/fullsize/logo/js.png" alt="" id="logo_competence">

                </div>
                <div class="col-xs-2">
                    <img src="img/portfolio/fullsize/logo/JQUERY (1).png" alt="" id="logo_competence">
                </div>
                <div class="col-xs-2">
                    <img src="img/portfolio/fullsize/logo/php-logo.png" alt="" id="logo_competence">

                </div>
                <div class="col-xs-2">
                    <img src="img/portfolio/fullsize/logo/logo_wordpress.png" alt="" id="logo_competence">
                </div>
            </div>

            <!--( C ) Section Footer-->
            <div class="footer clearfix">
                <a href="#">MARIAM KONE</a>
                <p>
                    Copyright © 2017 All right reserved
                </p>
            </div>
        </div>
    </div>

    <!--===============
    7 ) Portfolio Page
    ================-->

    <div class="portfolio-page">

        <!--( a ) Portfolio Page Fixed Image Portion -->

        <div class="image-container col-md-5 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>POR<span>T</span>FOLIO</h1>
            </div>
        </div>

        <!--( b ) Portfolio Page Content -->

        <div class="content-container col-md-7 col-sm-12">

            <!--( A ) Portfolio -->

            <div class="portfolio">
                <h2 class="small-heading">PORTFOLIO</h2>
                <div class="project-container">
                    <div class="project-controls">

                        <button class="filter is-checked" data-filter="all"> all</button>



                        <button class="filter" data-filter="1">Graphic Design</button>
                        <button class="filter" data-filter="2">Web Designs</button>
                        <button class="filter" data-filter="3">App Development</button>
                    </div>

                    <!-- Portfolio Control Buttons [ END ] -->

                    <div class="projet-items clearfix" id="projects">

                        <!-- Portfolio Image -->

                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item" data-category="1">
                            <div class="project">
                                <img src="img/portfolio/fullsize/portfolioexample/portfoliol1.jpg" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-1" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-1">
                            <img alt="" src="img/portfolio/fullsize/portfolioexample/portfoliol2.jpg" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>PROJECT NAME</h3>
                                <p>
                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                </p>
                                <a href="#">PREVIEW</a>
                            </div>
                        </div>

                        <!-- Single Portfolio Item [ END ] -->



                        <!-- Portfolio Image -->

                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item"  data-category="2">
                            <div class="project">
                                <img src="img/portfolio/fullsize/portfolioexample/portfoliol3.jpg" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-2" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-2">
                            <img alt="" src="img/portfolio/fullsize/portfolioexample/portfoliol4.jpg" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>PROJECT NAME</h3>
                                <p>
                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                </p>
                                <a href="#">PREVIEW</a>
                            </div>
                        </div>

                        <!-- Single Portfolio Item [ END ] -->



                        <!-- Portfolio Image -->

                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item"  data-category="3">
                            <div class="project">
                                <img src="img/portfolio/fullsize/portfolioexample/portfoliol5.jpg" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-3" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-3">
                            <img alt="" src="img/portfolio/fullsize/portfolioexample/portfoliol6.jpg" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>PROJECT NAME</h3>
                                <p>
                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                </p>
                                <a href="#">PREVIEW</a>
                            </div>
                        </div>

                        <!-- Single Portfolio Item [ END ] -->



                        <!-- Portfolio Image -->

                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item"  data-category="1">
                            <div class="project">
                                <img src="img/portfolio/fullsize/portfolioexample/portfoliol7.jpg" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-4" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-4">
                            <img alt="" src="img/portfolio/fullsize/portfolioexample/portfoliol8.jpg" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>PROJECT NAME</h3>
                                <p>
                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                </p>
                                <a href="#">PREVIEW</a>
                            </div>
                        </div>

                        <!-- Single Portfolio Item [ END ] -->



                        <!-- Portfolio Image -->

                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item"  data-category="2">
                            <div class="project">
                                <img src="img/portfolio/fullsize/portfolioexample/portfoliol9.jpg" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-5" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-5">
                            <img alt="" src="img/portfolio/fullsize/portfolioexample/portfoliol10.jpg" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>PROJECT NAME</h3>
                                <p>
                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                </p>
                                <a href="#">PREVIEW</a>
                            </div>
                        </div>

                        <!-- Single Portfolio Item [ END ] -->



                        <!-- Portfolio Image -->

                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item"  data-category="3">
                            <div class="project">
                                <img src="img/portfolio/fullsize/portfolioexample/portfoliol11.jpg" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-6" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-6">
                            <img alt="" src="img/portfolio/fullsize/portfolioexample/portfoliol12.jpg" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>PROJECT NAME</h3>
                                <p>
                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                </p>
                                <a href="#">PREVIEW</a>
                            </div>
                        </div>

                        <!-- Single Portfolio Item [ END ] -->



                        <!-- Portfolio Image -->

                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item"  data-category="2">
                            <div class="project">
                                <img src="img/portfolio/fullsize/portfolioexample/portfoliol13.jpg" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-7" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-7">
                            <img alt="img/portfolio/fullsize/portfolioexample/portfoliol14.jpg" src="" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>PROJECT NAME</h3>
                                <p>
                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                </p>
                                <a href="#">PREVIEW</a>
                            </div>
                        </div>

                        <!-- Single Portfolio Item [ END ] -->



                        <!-- Portfolio Image -->

                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item"  data-category="1">
                            <div class="project">
                                <img src="img/portfolio/fullsize/portfolioexample/portfoliol15.jpg" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-8" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-8">
                            <img alt="" src="img/portfolio/fullsize/portfolioexample/portfoliol16.jpg" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>PROJECT NAME</h3>
                                <p>
                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                </p>
                                <a href="#">PREVIEW</a>
                            </div>
                        </div>

                        <!-- Single Portfolio Item [ END ] -->



                        <!-- Portfolio Image -->

                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item"  data-category="3">
                            <div class="project">
                                <img src="img/portfolio/fullsize/portfolioexample/portfoliol18.jpg" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-9" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-9">
                            <img alt="" src="img/portfolio/fullsize/portfolioexample/portfoliol19.jpg" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>PROJECT NAME</h3>
                                <p>
                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                </p>
                                <a href="#">PREVIEW</a>
                            </div>
                        </div>

                        <!-- Single Portfolio Item [ END ] -->



                        <!-- Portfolio Image -->

                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item"  data-category="2">
                            <div class="project">
                                <img src="img/portfolio/fullsize/portfolioexample/portfoliol20.jpg" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-10" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-10">
                            <img alt="" src="img/portfolio/fullsize/portfolioexample/test.jpg" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>PROJECT NAME</h3>
                                <p>
                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                </p>
                                <a href="#">PREVIEW</a>
                            </div>
                        </div>

                        <!-- Single Portfolio Item [ END ] -->

                    </div>
                </div>
            </div>

            <!--( B ) Testimonials Section -->

            <div class="testimonials clearfix">
                <h2 class="small-heading">SOME WORDS FROM CLIENTS</h2>
                <div class="testimonials-container col-sm-10 col-sm-offset-1">
                    <div class="owl-carousel">
                        <div>
                            <p>
                                <i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper aliquet nulla, eget feugiat mi pellentesque sed. In neque erat, vulputate eu justo et, posuere scelerisque nulla.<i class="fa fa-quote-right"></i>
                            </p>
                            <h3>Justin Peterson</h3>
                        </div>

                        <!-- Single Testimonial Item [ END ] -->

                        <div>
                            <p>
                                <i class="fa fa-quote-left"></i>Sed vulputate nibh id molestie efficitur. Maecenas cursus est a quam ullamcorper, eu iaculis ullamcorper. Maecenas pretium aliquet mi, tincidunt semper lectus rutrum et.<i class="fa fa-quote-right"></i>
                            </p>
                            <h3>Cristina Devis</h3>
                        </div>

                        <!-- Single Testimonial Item [ END ] -->

                        <div>
                            <p>
                                <i class="fa fa-quote-left"></i>Ut tristique pellentesque arcu, in hendrerit urna rhoncus sed. Vivamus vel diam ex. Nunc nunc vitae lectus facilisis imperdiet. Proin pretium tempus dui, et vehicula purus.<i class="fa fa-quote-right"></i>
                            </p>
                            <h3>Jonny Watts</h3>
                        </div>

                        <!-- Single Testimonial Item [ END ] -->

                        <div>
                            <p>
                                <i class="fa fa-quote-left"></i>Etiam sollicitudin ornare pulvinar. Nullam a vulputate lectus. Maecenas a nisl leo. Curabitur ante nisi, pellentesque et turpis eget, iaculis porta lorem. Aenean in justo nec turpis maximus.<i class="fa fa-quote-right"></i>
                            </p>
                            <h3>Mariam KONE</h3>
                        </div>

                        <!-- Single Testimonial Item [ END ] -->

                    </div>
                </div>
            </div>

            <!--( C ) Some Facts -->

            <div class="facts clearfix">
                <div class="col-xs-4">
                    <h3>PROJECTS DONE</h3>
                    <h1>300+</h1>
                </div>
                <div class="col-xs-4">
                    <h3>HAPPY CLIENTS</h3>
                    <h1>100+</h1>
                </div>
                <div class="col-xs-4">
                    <h3>COFFEE CUPS</h3>
                    <h1>250+</h1>
                </div>
            </div>

            <!-- Footer -->

            <div class="footer clearfix">
                <a href="#">Mariam KONE</a>
                <p>
                    Copyright © 2015 All right reserved
                </p>
            </div>
        </div>
    </div>

    <!--==============
    8 ) Contact Page
    ===================-->

    <div class="contact-page">

        <!--( a ) Contact Page Fixed Image Portion -->

        <div class="image-container col-md-5 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>CO<span>N</span>TACT</h1>
            </div>
        </div>

        <!--( b ) Contact Page Content -->

        <div class="content-container col-md-7 col-sm-12">

            <!--( A ) Contact Form -->

            <div>
                <h2 class="small-heading">SAY HELLO!</h2>

                <div class="contact-form col-sm-11 clearfix">

                    <form action="php/contact.php" id="contactForm" method="post" name="contactForm">
                        <fieldset>
                            <div class="col-sm-12">
                                <input id="name" name="name" placeholder="Your Name*" type="text" value="">
                            </div>

                            <!-- Name Field [ END ] -->

                            <div class="col-sm-12">
                                <input id="email" name="email" placeholder="Your Email*" type="text" value="">
                            </div>

                            <!-- Email Field [ END ] -->

                            <div class="col-xs-12">
                                <textarea cols="5" id="message" name="message" placeholder="Your Message....*"></textarea>
                            </div>

                            <!-- Message Field [ END ] -->

                            <div class="col-xs-12">
                                <button class="submit active">SEND</button>
                            </div>

                            <div class="error col-xs-12">
                                <h3></h3>
                            </div>

                            <!-- Error Message [ END ] -->

                            <div class="success col-xs-12">
                                <h3>Success! Your message was sent.</h3>
                            </div>

                            <!-- Submit Button [ END ] -->

                        </fieldset>
                    </form>

                    <!-- Contact Form [ END ] -->

                </div>
            </div>

            <!--( B ) Google Map -->

            <div class="google-map" id="google-map"></div>

            <!--( C ) Contact Details -->

            <div class="contact-details clearfix">
                <h2 class="small-heading">CONTACT DETAILS</h2>
                <div class="contact col-sm-4">
                    <p>
                        <i class="fa fa-map-marker"></i><br>
                         121 King St, Melbourne VIC
                    </p>
                </div>

                    <!-- Single Contact Details Item [ END ] -->

                <div class="contact col-sm-4">
                    <p>
                        <i class="fa fa-phone"></i><br>
                         +00 000 0000 000
                    </p>
                </div>

                    <!-- Single Contact Details Item [ END ] -->

                <div class="contact col-sm-4">
                    <p>
                        <i class="fa fa-fax"></i><br>
                         +00 000 0000 000
                    </p>
                </div>

                    <!-- Single Contact Details Item [ END ] -->

                <div class="contact col-sm-4">
                    <p>
                        <i class="fa fa-phone"></i><br>
                         +00 000 0000 000
                    </p>
                </div>

                    <!-- Single Contact Details Item [ END ] -->

                <div class="contact col-sm-4">
                    <p>
                        <i class="fa fa-envelope"></i><br>
                         dummy@example.com
                    </p>
                </div>

                    <!-- Single Contact Details Item [ END ] -->

                <div class="contact col-sm-4">
                    <p>
                        <i class="fa fa-globe"></i><br>
                         www.example.com
                    </p>
                </div>

                    <!-- Single Contact Details Item [ END ] -->

                <div class="col-xs-12 social-media">
                    <a href="#" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                    <a href="#" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                    <a href="#" class="fa fa-plus" data-toggle="tooltip" title="Google+"></a>
                    <a href="#" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                    <a href="#" class="fa fa-behance" data-toggle="tooltip" title="Behance"></a>
                    <a href="#" class="fa fa-flickr" data-toggle="tooltip" title="Flicker"></a>
                    <a href="#" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
                </div>

                <!-- Social Media Icons [ END ] -->

            </div>

            <!-- ( D ) Footer -->

            <div class="footer clearfix">
                <a href="#">Mariam KONE</a>
                <p>
                    Copyright © 2015 All right reserved
                </p>
            </div>
        </div>
    </div>

    <!--============
    9 ) Javascript
    =============-->

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- <script src="js/creative.min.js"></script> -->
<script src="js/script.js"></script>



</body>
</html>