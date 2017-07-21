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

    <link rel="stylesheet" href="../css/style.css">

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button> -->
                <a class="navbar-brand page-scroll" href="#page-top"><?php echo $ligne_utilisateur['prenom'].' '.$ligne_utilisateur['nom']; ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">

                    <?php
                        $sql = $pdoCV->query(" SELECT * FROM formations WHERE utilisateur_id ='1' ");
                        $ligne_formation = $sql->fetch();
                    ?>
                    <li>
                        <a class="page-scroll" href="#formation"><?php echo $ligne_formation['titre_f']; ?></a>
                    </li>

                    <?php
                        $sql = $pdoCV->query(" SELECT * FROM experiences WHERE utilisateur_id ='1' ");
                        $ligne_experience = $sql->fetch();
                    ?>
                    <li>
                        <a class="page-scroll" href="#experience"><?php echo $ligne_experience['titre_e']; ?></a>
                    </li>

                    <?php
                        $sql = $pdoCV->query(" SELECT * FROM competences WHERE utilisateur_id ='1' ");
                        $ligne_competence = $sql->fetch();
                    ?>
                    <li>
                        <a class="page-scroll" href="#portfolio"><?php echo $ligne_competence['titre_c']; ?></a>
                    </li>

                    <?php
                        $sql = $pdoCV->query(" SELECT * FROM realisations WHERE utilisateur_id ='1' ");
                        $ligne_realisation = $sql->fetch();
                    ?>
                    <li>
                        <a class="page-scroll" href="#portfolio"><?php echo $ligne_realisation['titre_r']; ?></a>
                    </li>

                    <?php
                        $sql = $pdoCV->query(" SELECT * FROM atouts WHERE utilisateur_id ='1' ");
                        $ligne_atout = $sql->fetch();
                    ?>
                    <li>
                        <a class="page-scroll" href="#portfolio"><?php echo $ligne_atout['titre_a']; ?></a>
                    </li>

                    <?php
                        $sql = $pdoCV->query(" SELECT * FROM interets WHERE utilisateur_id ='1' ");
                        $ligne_interet = $sql->fetch();
                    ?>
                    <li>
                        <a class="page-scroll" href="#portfolio"><?php echo $ligne_interet['titre_i']; ?></a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#telecharger">Telecharger CV</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">
                    <?php
                    $sql = $pdoCV->query(" SELECT * FROM titres_cv WHERE utilisateur_id ='1' ");
                    $ligne_titre = $sql->fetch();
                ?><?php echo $ligne_titre['titre_cv']; ?></h1>
                <hr>
                <p><?php echo $ligne_titre['accroche']; ?></p>

            </div>
        </div>
    </header>

    <section class="bg-primary" id="formation">
        <div id="img_formation" class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Formation</h2>
                    <hr class="light">
                    <p id="test" class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>

                </div>
            </div
        </div>
    </section>



    <section id="experience">
        <div class="container">
            <div class="row">
                <div  class="col-lg-12 text-center">
                    <h2 id="titre_ex" class="section-heading">Experience</h2>
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

    <h2 class="text-center">Langages de programmation</h2>
						</div>
					</div>
					<div class="row">
						<div class="large-6 columns">
							<div class="row graph">
								<div class="small-6 columns">
									<canvas width="180" height="180"></canvas>
								</div>
								<div class="small-6 columns">
									<div class="row">
										<dl>
											<dt><i class="icon fontello-docs"></i>Analyse</dt>
											<dd><i class="icon fontello-db-shape"><span>75%</span></i>UML</dd>
											<dd><i class="icon fontello-db-shape"><span>15%</span></i>Merise</dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
						<div class="large-6 columns">
							<div class="row graph">
								<div class="small-6 columns">
									<canvas width="180" height="180"></canvas>
								</div>
								<div class="small-6 columns">
									<div class="row">
										<dl>
											<dt><i class="icon fontello-database"></i>Base de données</dt>
											<dd><i class="icon fontello-db-shape"><span>75%</span></i>SQL</dd>
											<dd><i class="icon fontello-db-shape"><span>35%</span></i>SQL Server <i data-tooltip class="icon fontello-info-circled has-tip tip-top" title="2008"></i></dd>
											<dd><i class="icon fontello-db-shape"><span>25%</span></i>Oracle</dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-6 columns">
							<div class="row graph">
								<div class="small-6 columns">
									<canvas width="180" height="180"></canvas>
								</div>
								<div class="small-6 columns">
									<div class="row">
										<dl>
											<dt><i class="icon fontello-window"></i>Logiciel</dt>
											<dd><i class="icon fontello-db-shape"><span>95%</span></i>C, C++ <i data-tooltip class="icon fontello-info-circled has-tip tip-top" title="OpenGL, SDL, API Win32"></i></dd>
											<dd><i class="icon fontello-db-shape"><span>85%</span></i>C# <i data-tooltip class="icon fontello-info-circled has-tip tip-top" title="C#.net"></i></dd>
											<dd><i class="icon fontello-db-shape"><span>75%</span></i>Visual Basic <i data-tooltip class="icon fontello-info-circled has-tip tip-top" title="VB6, VB.net"></i></dd>
											<dd><i class="icon fontello-db-shape"><span>50%</span></i>Java</dd>
											<dd><i class="icon fontello-db-shape"><span>25%</span></i>DOS, Shell, Power Shell</dd>
											<dd><i class="icon fontello-db-shape"><span>10%</span></i>Assembleur</dd>
										</dl>
									</div>
								</div>
							</div>
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
    <script src="js/script.js">

    </script>

</body>

</html>