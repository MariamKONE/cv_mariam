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
	//gestion des contenus
	//insertion d'une expérience
		if(isset($_POST['titre_a'])){//si on récupère une nelle expérience
			if($_POST['titre_a']!='' && $_POST['description_a']!='' && $_POST['dates_a']!=''){// si expérience et les autres champs ne sont pas vide
				$titre_a = addslashes($_POST['titre_a']);
				$sous_titre_a = addslashes($_POST['sous_titre_a']);
            	$dates_a = addslashes($_POST['dates_a']);
            	$description_a = addslashes($_POST['description_a']);

				$pdoCV->exec(" INSERT INTO atouts VALUES (NULL, '$titre_a', '$sous_titre_a',  '$dates_a', '$description_a', '$id_utilisateur') ");//mettre $id_utilisateur quand on l'aura en variable de session
				header("location: ../admin/atouts.php");
				exit();
			}//ferme le if
		}//ferme le if isset

	//suppression d'une expérience
		if(isset($_GET['id_atout'])){
			$efface = $_GET['id_atout'];
			$sql = " DELETE FROM atouts WHERE id_atout = '$efface' ";
			$pdoCV -> query($sql);// ou on peut avec exec
			header("location: ../admin/atouts.php");
		}

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
<title>Admin : modification d'un atout <?php echo $ligne_utilisateur['pseudo']; ?></title>
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
   <?php
		$sql = $pdoCV->prepare("SELECT * FROM atouts WHERE utilisateur_id = '$id_utilisateur' ORDER BY id_atout DESC "); // prépare la requête
		$sql->execute(); // exécute-la
		$nbr_atouts = $sql->rowCount(); //compte les lignes
	 ?>
    <div class="col-lg-12 page-header text-center">
      <h2>Atouts</h2>
      <p>Il y a <?php echo $nbr_atouts; ?> atouts dans la table pour <?php echo $ligne_utilisateur['pseudo']; ?></p>
    </div>
  </div>
  <div class="container">
    <div class="row text-center">
     <div class="col-xs-3 jumbotron">
          	<span class="glyphicon glyphicon-road"></span>
     </div>
      <div class="col-xs-9 text-center">
	<table class="table table-striped">
		<tbody>
		<tr class="info">
			<th scope="col">Titre</th>
			<th scope="col">sous-titre</th>
		  	<th scope="col">description</th>
		  	<th scope="col">dates</th>
			<th scope="col">modifier</th>
			<th scope="col">supprimer</th>
		</tr>
		<tr>
			<?php while ($ligne_atout = $sql->fetch()) { ?>
			<td><?php echo $ligne_atout['titre_a']; ?></td>
			<td><?php echo $ligne_atout['sous_titre_a']; ?></td>
			<td><?php echo $ligne_atout['description_a']; ?></td>
			<td><?php echo $ligne_atout['dates_a']; ?></td>
			<td><a href="modif_atout.php?id_atout=<?php echo $ligne_atout['id_atout']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td><a class="supprimer" href="atouts.php?id_atout=<?php echo $ligne_atout['id_atout']; ?>"><span class="glyphicon glyphicon-trash"></span></a></span></td>
		</tr>
			<?php } ?>
		</tbody>
	</table>
      </div>
    </div>
        <div class="row text-center">
          <div class="col-xs-3">- -
          </div>
          <div class="text-center col-xs-9">
           <div class="jumbotron">
            <!-- form insertion d'une expérience -->
            <form action="atouts.php" method="post" class="text-center">
              <div class="form-group">
                <label for="titre_a">Titre de l'atout</label>
                <input type="text" name="titre_a" class="form-control" id="titre_a" placeholder="insérez un atouts">
                <label for="sous_titre_a">Sous-titre</label>
                <input type="text" name="sous_titre_a" class="form-control" id="sous_titre_a" placeholder="le sous-titre est facultatif">
                <label for="dates_a">Dates</label>
                <input type="text" name="dates_a" class="form-control" id="dates_a" placeholder="dates de début et de fin">
                <label for="description_a">Description</label>
                <textarea name="description_a" cols="80" rows="4" class="form-control" id="description_a" placeholder="description de l'atout"></textarea>
                <script>
            		CKEDITOR.replace( 'description_a' );
        		</script>
              </div>
              <input type="submit" value="Ajouter" class="btn btn-primary btn-lg" style="margin-top: 10px;">
            </form>
            <!-- fin formulaire insertion des expériences -->
          </div>
        </div>
      </div>

  <!-- / CONTAINER-->
</section>
<div class="well text-center"><span class="glyphicon glyphicon-leaf"></span></div>

<!-- FOOTER -->
	<?php include("include_footer.php"); ?>
<!-- / FOOTER -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.js"></script>
<script src="../js/pisola_js.js"></script>
</body>
</html>
