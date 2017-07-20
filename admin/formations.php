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
	//insertion d'une formation
		if(isset($_POST['titre_f'])){//si on récupère une nouvelle formation
			if($_POST['titre_f']!='' && $_POST['dates_f']!=''){// si la formation et les autres champs ne sont pas vide
				$titre_f = addslashes($_POST['titre_f']);
				$sous_titre_f = addslashes($_POST['sous_titre_f']);
            	$dates_f = addslashes($_POST['dates_f']);
            	$description_f = addslashes($_POST['description_f']);

				$pdoCV->exec(" INSERT INTO formations VALUES (NULL, '$titre_f', '$sous_titre_f',  '$dates_f', '$description_f', '$id_utilisateur') ");//mettre $id_utilisateur quand on l'aura en variable de session
				header("location: ../admin/formations.php");
				exit();
			}//ferme le if
		}//ferme le if isset

	//suppression d'une expérience
		if(isset($_GET['id_formation'])){
			$efface = $_GET['id_formation'];
			$sql = " DELETE FROM formations WHERE id_formation = '$efface' ";
			$pdoCV -> query($sql);// ou on peut avec exec
			header("location: ../admin/formations.php");
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
<title>Admin : modification d'une formation <?php echo $ligne_utilisateur['pseudo']; ?></title>
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
<!-- / HEADER -->

<!--  SECTION-1 -->
<section>
  <div class="row">
   <?php
		$sql = $pdoCV->prepare("SELECT * FROM formations WHERE utilisateur_id = '$id_utilisateur' ORDER BY id_formation DESC "); // prépare la requête
		$sql->execute(); // exécute-la
		$nbr_formations = $sql->rowCount(); //compte les lignes
	 ?>
    <div class="col-lg-12 page-header text-center">
      <h2>FORMATION</h2>
      <p>Il y a <?php echo $nbr_formations; ?> formation dans la table pour <?php echo $ligne_utilisateur['pseudo']; ?></p>
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
			<?php while ($ligne_formation = $sql->fetch()) { ?>
			<td><?php echo $ligne_formation['titre_f']; ?></td>
			<td><?php echo $ligne_formation['sous_titre_f']; ?></td>
			<td><?php echo $ligne_formation['description_f']; ?></td>
			<td><?php echo $ligne_formation['dates_f']; ?></td>
			<td><a href="modif_formation.php?id_formation=<?php echo $ligne_formation['id_formation']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td><a class="supprimer" href="formations.php?id_formation=<?php echo $ligne_formation['id_formation']; ?>"><span class="glyphicon glyphicon-trash"></span></a></span></td>
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
            <form action="formations.php" method="post" class="text-center">
              <div class="form-group">
                <label for="formation_f">Titre de la formation</label>
                <input type="text" name="titre_f" class="form-control" id="titre_e" placeholder="insérez une formation">
                <label for="sous_titre_f">Sous-titre</label>
                <input type="text" name="sous_titre_f" class="form-control" id="sous_titre_f" placeholder="le sous-titre est facultatif">
                <label for="dates_f">Dates</label>
                <input type="text" name="dates_f" class="form-control" id="dates_f" placeholder="dates de début et de fin">
                <label for="description_e">Description</label>
                <textarea name="description_e" cols="80" rows="4" class="form-control" id="description_e" placeholder="description de la formation"></textarea>
                <script>
            		CKEDITOR.replace( 'description_f' );
        		</script>
              </div>
              <input type="submit" value="Envoyez" class="btn btn-primary btn-lg" style="margin-top: 10px;">
            </form>
            <!-- fin formulaire insertion des expériences -->
          </div>
        </div>
      </div>
  <div class="container">
  à voir
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
