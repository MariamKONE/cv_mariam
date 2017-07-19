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
	if(isset($_POST['titre_r'])){// par le nom du premier input

		$titre_r = addslashes($_POST['titre_r']);
        $sous_titre_r = addslashes($_POST['sous_titre_r']);
		$dates_r = addslashes($_POST['dates_r']);
		$description_r = addslashes($_POST['description_r']);
        $photo_r = addslashes($_POST['photo_r']);
        $lien_r = addslashes($_POST['lien_r']);
		$id_realisation = $_POST['id_realisation'];
		$pdoCV->exec(" UPDATE realisations SET titre_r='$titre_r', sous_titre_r='$sous_titre_r', dates_r='$dates_r', description_r='$description_r', photo_r='$photo_r', lien_r='$lien_r' WHERE id_realisation='$id_realisation' ");
			 header('location: ../admin/realisations.php'); //le header pour revenir à la liste des compétences de l'utilisateur
        exit();
	}
	//je récupère la compétence
	$id_realisation = $_GET['id_realisation']; // par l'id et $_GET
	$sql = $pdoCV->query("SELECT * FROM realisations WHERE id_realisation = '$id_realisation' ");// la requête égale à l'id
	$ligne_realisation = $sql->fetch();

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
<title>Modification d'une réalisations : <?php echo $ligne_utilisateur['pseudo']; ?></title>
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
      <h2>Mise à jour d'une réalisation</h2>
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
            <form action="modif_realisation.php" method="post" class="text-center">
		<div class="form-group">

            <label for="titre_r">Titre de la réalisation</label>
			<input type="text" name="titre_r" class="form-control" value="<?php echo $ligne_realisation['titre_r']; ?>">

            <label for="sous_titres_r">Sous-titre</label>
			<input type="text" name="sous_titre_r" class="form-control" value="<?php echo $ligne_realisation['sous_titre_r']; ?>">

            <label for="dates_r">Dates</label>
			<input type="text" name="dates_r" class="form-control" value="<?php echo $ligne_realisation['dates_r']; ?>">

            <label for="description_r">Description</label>
			<textarea name="description_r" class="form-control" cols="80" rows="10" maxlength="200" id="description_r"><?php echo $ligne_realisation['description_r']; ?></textarea>

            <label for="photo_r">Photo</label>
            <input type="file"  name="photo_r" class="form-control" value="<?php echo $ligne_realisation['photo_r']; ?>" >

            <label for="lien_r">Ajouter lien de vos réalisations</label>
            <input type="text" name="lien_r" class="form-control" value="<?php echo $ligne_realisation['lien_r']; ?>">


             <script>
            		CKEDITOR.replace( 'description_r' );
        	</script>
			<input hidden name="id_realisation" value="<?php echo $ligne_realisation['id_realisation']; ?>">
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
