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
	if(isset($_POST['titre_a'])){// par le nom du premier input

		$titre_a = addslashes($_POST['titre_a']);
		$dates_a = addslashes($_POST['dates_a']);
		$sous_titre_a = addslashes($_POST['sous_titre_a']);
		$description_a = addslashes($_POST['description_a']);
		$id_atout = $_POST['id_atout'];
		$pdoCV->exec(" UPDATE atouts SET titre_a='$titre_a', sous_titre_a='$sous_titre_a', dates_a='$dates_a', description_a='$description_a' WHERE id_atout='$id_atout' ");
			 header('location: ../admin/atouts.php'); //le header pour revenir à la liste des atouts des utilisateur
        exit();
	}
	//je récupère l'atouts
	$id_atout = $_GET['id_atout']; // par l'id et $_GET
	$sql = $pdoCV->query("SELECT * FROM atouts WHERE id_atout = '$id_atout' ");// la requête égale à l'id
	$ligne_atout = $sql->fetch();

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
<title>Modification d'un atout : <?php echo $ligne_utilisateur['pseudo']; ?></title>
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
      <h2>Mise à jour d'un atout</h2>
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
            <form action="modif_atout.php" method="post" class="text-center">
		<div class="form-group">
			<label for="titre_a">Titre de l'atout</label>
			<input type="text" name="titre_a" class="form-control" value="<?php echo $ligne_atout['titre_a']; ?>">
			<label for="dates_a">Dates</label>
			<input type="text" name="dates_a" class="form-control" value="<?php echo $ligne_atout['dates_a']; ?>">
			<label for="sous_titres_a">Sous-titre</label>
			<input type="text" name="sous_titre_a" class="form-control" value="<?php echo $ligne_atout['sous_titre_a']; ?>">
			<label for="description_a">Description</label>
			<textarea name="description_a" class="form-control" cols="80" rows="10" maxlength="200" id="description_a"><?php echo $ligne_atout['description_a']; ?></textarea>
			 <script>
            		CKEDITOR.replace( 'description_a' );
        	</script>
			<input hidden name="id_atout" value="<?php echo $ligne_atout['id_atout']; ?>">
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
