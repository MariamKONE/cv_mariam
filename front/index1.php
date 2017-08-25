<?php
   require '../connexion/connexion.php';
   
   $sql = $pdoCV->query(" SELECT * FROM titres_cv WHERE utilisateur_id ='1' ");
   $ligne_titre = $sql->fetch();
   
   $sql = $pdoCV->query(" SELECT * FROM utilisateurs WHERE id_utilisateur ='1' ");
   $ligne_utilisateur = $sql->fetch();
   
   $sql = $pdoCV->query(" SELECT * FROM profils WHERE utilisateur_id ='1' ");
   $ligne_profil = $sql->fetch();
   
   $sql = $pdoCV->query(" SELECT * FROM atouts WHERE utilisateur_id ='1' ");
   $ligne_atout = $sql->fetch();
   
   $sql = $pdoCV->query(" SELECT * FROM competences WHERE utilisateur_id ='1' ");
   $ligne_competence = $sql->fetch();
   
   $sql = $pdoCV->query(" SELECT * FROM experiences WHERE utilisateur_id ='1' ");
   $ligne_experience = $sql->fetch();
   
   $sql = $pdoCV->query(" SELECT * FROM formations WHERE utilisateur_id ='1' ");
   $ligne_formation = $sql->fetch();
   
   $sql = $pdoCV->query(" SELECT * FROM interets WHERE utilisateur_id ='1' ");
   $ligne_interets = $sql->fetch();
   
   $sql = $pdoCV->query(" SELECT * FROM lettre_motivation WHERE utilisateur_id ='1' ");
   $ligne_motivation = $sql->fetch();
   
   $sql = $pdoCV->query(" SELECT * FROM realisations WHERE utilisateur_id ='1' ");
   $ligne_realisation = $sql->fetch();
   
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
                  I'M <span><?php echo $ligne_utilisateur['prenom'].' '.$ligne_utilisateur['nom']; ?></span>
               </h1>
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
                     <h3><?php echo $ligne_profil['titre_p']; ?></h3>
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
                     <h3><?php echo $ligne_experience['titre_e']; ?></h3>
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
                     <h3><?php echo $ligne_realisation['titre_r']; ?>></h3>
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
                     <h3>Information personelles</h3>
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
         </div>
      </div>
      <!-- </div> -->
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
            <?php
               $sql = $pdoCV->prepare("SELECT * FROM experiences WHERE utilisateur_id = '1' "); // prépare la requête
               $sql->execute(); // exécute-la
               ?>
            <div class="education clearfix">
               <h2 class="small-heading">EDUCATION</h2>
               <div class="education-container col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                  <?php while ($ligne_experience = $sql->fetch()) { ?>
                  <div class="item">
                     <div class="bullet hidden-xs">
                     </div>
                     <div class="education-content">
                        <h3><?php echo $ligne_experience['titre_e']; ?><span></span></h3>
                        <p><?php echo $ligne_experience['description_e']; ?></p>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
            <!--( B ) Experience Section -->
            <?php
               $sql = $pdoCV->prepare("SELECT * FROM formations WHERE utilisateur_id = '1' "); // prépare la requête
               $sql->execute(); // exécute-la
               ?> 
            <div class="experience clearfix">
               <h2 class="small-heading">FORMATION</h2>
               <div class="experience-container col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                  <?php while ($ligne_formation = $sql->fetch()) { ?>
                  <div class="item">
                     <div class="bullet hidden-xs">
                     </div>
                     <div class="experience-content">
                        <h3><?php echo $ligne_formation['titre_f']; ?><span> / October 2011 - March 2013<br>
                           Lorem Ipsum, Inc.</span>
                        </h3>
                        <p><?php echo $ligne_formation['description_f']; ?></p>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
            <!-- Fin de formation -->
         </div>
      </div>
      
      </div>
      </div>
      <!--===============
         7 ) Compétence Page
         ================-->
      <div class="portfolio-page">
         <!--( a ) Portfolio Page Fixed Image Portion -->
         <div class="image-container col-md-5 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
               <h1>COMPE<span>TENCES</span>NUMERIQUES</h1>
            </div>
         </div>
         <!--( b ) Portfolio Page Content -->
         <div class="content-container col-md-7 col-sm-12">
            <!--( A ) Portfolio -->
            <div class="portfolio">
               <h2 class="small-heading">Compétences numériques</h2>
               <div class="skills clearfix">
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
            </div>
            <!--( B ) Testimonials Section -->
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
            
            <!--( C ) Contact Details -->
            <div class="contact-details clearfix">
               
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