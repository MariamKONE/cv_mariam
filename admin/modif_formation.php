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
//gestion des contenus, mise à jour d'une compétence
if(isset($_POST['titre_f'])){// par le nom du premier input

    $titre_e = addslashes($_POST['titre_f']);
    $dates_e = addslashes($_POST['dates_f']);
    $sous_titre_e = addslashes($_POST['sous_titre_f']);
    $description_e = addslashes($_POST['description_f']);
    $id_experience = $_POST['id_formation'];
    $pdoCV->exec(" UPDATE formations SET titre_f='$titre_f', sous_titre_f='$sous_titre_f', dates_f='$dates_f', description_f='$description_f' WHERE id_formation='$id_formation' ");
         header('location: ../admin/formations.php'); //le header pour revenir à la liste des compétences de l'utilisateur
    exit();
}
//je récupère la compétence
$id_formation = $_GET['id_formation']; // par l'id et $_GET
$sql = $pdoCV->query("SELECT * FROM formations WHERE id_formation = '$id_formation' ");// la requête égale à l'id
$ligne_formation = $sql->fetch();

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
<title>Modification d'une formattion : <?php echo $ligne_utilisateur['pseudo']; ?></title>
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
	$sql = $pdoCV->query(" SELECT * FROM titres_cv WHERE utilisateur_id='$id_utilisateur' ");
$ligne_titre = $sql->fetch();
	?>
</header>


<!--  SECTION-1 -->
<section>
  <div class="row">

    <div class="col-lg-12 page-header text-center">
      <h2>Mise à jour d'un profil</h2>
    </div>
  </div>
  <div class="container">

<div class="row text-center">
          <div class="col-xs-3 jumbotron">
          	<span class="glyphicon glyphicon-send"></span>
  </div>
    <div class="text-center col-xs-9">
        <div class="jumbotron">
    <!-- form modification d'une expérience -->
    <form action="modif_formation.php" method="post" class="text-center">
<div class="form-group">
    <label for="titre_f">Titre de la foramtion</label>
    <input type="text" name="titre_f" class="form-control" value="<?php echo $ligne_formation['titre_f']; ?>">
    <label for="dates_f">Dates</label>
    <input type="text" name="dates_f" class="form-control" value="<?php echo $ligne_formation['dates_f']; ?>">
    <label for="sous_titres_f">Sous-titre</label>
    <input type="text" name="sous_titre_f" class="form-control" value="<?php echo $ligne_formation['sous_titre_f']; ?>">
    <label for="description_f">Description</label>
    <textarea name="description_f" class="form-control" cols="80" rows="10" maxlength="200" id="description_f"><?php echo $ligne_formation['description_f']; ?></textarea>
     <script>
            CKEDITOR.replace( 'description_f' );
    </script>
    <input hidden name="id_formation" value="<?php echo $ligne_formation['id_formation']; ?>">
</div>
      <input type="submit" value="Mettre à jour" class="btn btn-primary btn-lg" style="margin-top: 10px;">
    </form>
    <!-- fin formulaire modification des compétences -->
  </div>
</div>
</div>

<!-- FOOTER -->
	<?php include("include_footer.php"); ?>
<!-- / FOOTER -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.js"></script>
</body>
</html>
