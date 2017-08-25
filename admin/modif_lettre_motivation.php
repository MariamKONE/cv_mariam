<?php require '../connexion/connexion.php' ?>
<?php

session_start();// à mettre dans toutes les pages de l'admin ; SESSION et authentification
	if(isset($_SESSION['connexion']) && $_SESSION['connexion']=='connecté'){
		$id_utilisateur=$_SESSION['id_utilisateur'];
		$prenom=$_SESSION['prenom'];
		$nom=$_SESSION['nom'];

		//echo $_SESSION['connexion'];

	}else{//l'utilisateur n'est pas connecté
		header('location:authentification.php');
	}
//pour se déconnecter
if(isset($_GET['quitter'])){// on récupère le terme quitter dans l'url

	$_SESSION['connexion']='';// on vide les variables de session
	$_SESSION['id_utilisateur']='';
	$_SESSION['prenom']='';
	$_SESSION['nom']='';

	unset($_SESSION['connexion']);
	session_destroy();

	header('location:../index.php');
}

	?>
	<?php
	//gestion des contenus, mise à jour de la lettre de motivations
	if(isset($_POST['introduction_m'])){// par le nom du premier input
		$introduction =  addslashes($_POST['introduction_m']);
		$developpement_m = addslashes($_POST['developpement_m']);
		$conclusion_m = addslashes($_POST['conclusion_m']);
		$id_motivation = $_POST['id_motivation'];

		$pdoCV->exec(" UPDATE lettre_motivation SET introduction_m='$introduction_m', developpement_m='$developpement_m', conclusion_m='$conclusion_m',  WHERE id_motivation='$id_motivation' ");
			 header('location: ../admin/lettre_motivation.php'); //le header pour revenir à la liste des compétences de l'utilisateur
        exit();
	}
	//je récupère la compétence
	$id_motivation = $_GET['id_motivation']; // par l'id et $_GET
	$sql = $pdoCV->query("SELECT * FROM lettre_motivation WHERE id_motivation = '$id_motivation' ");// la requête égale à l'id
	$ligne_motivation = $sql->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		$sql = $pdoCV->query(" SELECT * FROM utilisateurs WHERE id_utilisateur ='$id_utilisateur' ");
		$ligne_utilisateur = $sql->fetch();
	?>
<title>Modification de la lettre de motivation : <?php echo $ligne_utilisateur['pseudo']; ?></title>
<!--CKEditor-->
<script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<?php include("include_nav.php"); ?>

<!-- HEADER -->
<header>
 <?php
	$sql = $pdoCV->query(" SELECT * FROM titres_cv WHERE utilisateur_id ='$id_utilisateur' ");
$ligne_titre = $sql->fetch();
	?>
</header>


<!--  SECTION-1 -->
<section>
  <div class="row">

    <div class="col-lg-12 page-header text-center">
      <h2>Mise à jour de la lettre de motivation</h2>
    </div>
  </div>
  <div class="container">

        <div class="row text-center">
          <div class="col-xs-3 jumbotron">
          	<h2><span class="glyphicon glyphicon-send"></span></h2>
          </div>
          <div class="text-center col-xs-9">
           <div class="jumbotron">
            <!-- form modification d'une compétence -->
            <form action="modif_lettre_motivation.php" method="post" class="text-center">
              <div class="form-group">

                <label for="lettre_motivation">Modification de la lettre de motivation</label>
                <input type="text" name="lettre_motivation" class="form-control" value="<?php echo $ligne_motivation['introduction_m']; ?>">
                <input hidden name="id_motivation" value="<?php echo $ligne_motivation['id_motivation']; ?>">
              </div>
              <input type="submit" value="Mettre à jour" class="btn btn-primary btn-lg" style="margin-top: 10px;">
            </form>
            <!-- fin formulaire modification des compétences -->
          </div>
        </div>
      </div>
  <div class="container">
  ... une div class container avec rien
</div>
 <div class="row">
     <hr>
    </div>
  <!-- / CONTAINER-->
</section>
<div class="well"> </div>

<!-- FOOTER -->
	<?php include("include_footer.php"); ?>
<!-- / FOOTER -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.js"></script>
</body>
</html>
