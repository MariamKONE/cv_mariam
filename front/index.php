<?php
//-------------- TRAITEMENTS PHP --------------------//
require_once("inc/init.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
        $sql = $pdoCV->query(" SELECT * FROM utilisateurs WHERE id_utilisateur ='1' ");
        $ligne_utilisateur = $sql->fetch();
    ?>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body >

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
                <img alt="" src="images/home_dp.jpg">
                <div class="mask">
                </div>
                <div class="intro-content">
                    <h1>HELLO<br>
                    Je suis <span>Mariam</span> KONE</h1>
                    <h2>Développeur web intégrateur</h2>
                    <!-- Réseaux sociaux -->
                    <p class="social-media hidden-xs">
                        <a href="#" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                        <a href="#" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                        <a href="#" class="fa fa-plus" data-toggle="tooltip" title="Google+"></a>
                        <a href="#" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                        <a href="#" class="fa fa-behance" data-toggle="tooltip" title="Behance"></a>
                        <a href="#" class="fa fa-flickr" data-toggle="tooltip" title="Flicker"></a>
                        <a href="#" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
                    </p>
                    <!-- Réseaux sociaux [ Fin ] -->

                </div>
            </div>

            <!-- ( b ) Navigation Menu -->

    <div class="menu">
        <!-- Menu Boutton formation [ DEBUT ]  -->
        <div class="profile-btn">
            <img alt="" src="../front/img/portfolio/fullsize/accueil.jpg">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-user"></i>
                </div>
                <div class="col-sm-10">
                    <h2>For<span>ma</span>tions</h2>
                    <h3>Some words about me.</h3>
                </div>
            </div>
        </div>
        <!-- Menu Boutton formation [ FIN ]  -->

        <div class="resume-btn">
            <img alt="" src="">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-graduation-cap"></i>
                </div>
                <div class="col-sm-10">
                    <h2>Ex<span>pé</span>riences</h2>
                    <h3>Something about my experience and skills.</h3>
                </div>
            </div>
        </div>
        <!-- Menu Boutton Expérience [ FIN ]  -->

        <div class="portfolio-btn">
            <img alt="" src="">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="col-sm-10">
                    <h2>Réa<span>li</span>sation</h2>
                    <h3>Have a spoon of my work.</h3>
                </div>
            </div>
        </div>
        <!-- Menu Boutton Réalisation [ Fin ]  -->



        <!-- <div class="col-md-6"> -->

            <!-- <div class="header-content" style=" height: 100vh; background-image:url(../front/img/portfolio/fullsize/accueil.jpg); background-repeat:no-repeat; background-size: 200% 100%; background-position: 75% center;"> -->
                <div class="mask">
                </div>

                <div class="header-content-inner">
                    <h1 id="homeHeading" style="text-align: center; margin:0;">Développeur Intégrateur web</h1>
                    <br>
                    <p>Titulaire d’un Master 2 en E-Business et communication des grandes marques, je me
                    forme actuellement <span>aux métiers d’intégrateur et développeur web</span>. Indépendante et
                    créative, je recherche un stage pour compléter ma formation.</p>

                    <!-- Réseaux sociaux -->
                    <p class="social-media hidden-xs">
                        <a id="reseaux" href="#" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                        <a id="reseaux" href="#" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                        <a id="reseaux" href="#" class="fa fa-plus" data-toggle="tooltip" title="Google+"></a>
                        <a id="reseaux" href="#" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                        <a id="reseaux" href="#" class="fa fa-behance" data-toggle="tooltip" title="Behance"></a>
                        <a id="reseaux" href="#" class="fa fa-flickr" data-toggle="tooltip" title="Flicker"></a>
                        <a id="reseaux" href="#" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
                    </p>
                </div>
            </div>
        </div>

    <!-- Navigation menu -->
        <div class="col-md-6">

            <div class="menu">

                <div class="formation" style=" background-color: red;">
                    <img src="" alt="">
                        <div class="mask">
                                </div>
                            <div class="heading col-xs-11 col-xs-offset-1">
                                <div class="col-xs-2 hidden-xs">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                <div class="col-sm-10">
                    <h2>Formations</h2>
                    <h3>Some word about me</h3>
                </div>
            </div>


                </div>

                <div class="experience" style=" background-color: blue;">
                    <img src="" alt="">
                        <div class="mask">
                                </div>
                            <div class="heading col-xs-11 col-xs-offset-1">

                            </div>
                            <div class="col-xs-2 hidden-xs">
                                <i class="fa fa-user"></i>
                            </div>
                <div class="col-sm-10">
                    <h2>Expérience</h2>
                    <h3>Some word about me</h3>
                </div>
                </div>



    </div>
    </div>


    <!-- </header> -->

    <section class="bg-primary" id="formation">
        <div id="img_formation" class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Formations</h2>
                    <hr class="light">
                    <p id="test" class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>

                </div>
            </div
        </div>
    </section>

    <section class="bg-primary" id="experience">
        <div class="container">
            <div class="row">
                <div  class="col-lg-12 text-center">
                    <h2 class="section-heading">Expériences</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>


        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <section class="bg-primary" id="competence">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Compétences numérique</h2>
                    <hr class="light">
                    <p id="test" class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>

                </div>
            </div
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

						</div>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">

                <a href="img/CV_mariam_kone_Dev.pdf" href="#telecharger" id="btn_cv" class="btn btn-default btn-xl sr-button" download>Téléchargez mon Cv </a>

            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="js/creative.min.js"></script>
    <script src="js/canvasjs.min.js"></script>
    <script src="js/script.js"></script>



</body>

</html>
