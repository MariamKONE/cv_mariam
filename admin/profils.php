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
//insertion d'un profil
if(isset($_POST['titre_p'])){//si on récupère un nouveau profil
	if($_POST['titre_p']!='' && $_POST['description_p']!=''){// si un profil ou les autres champs pas vides
		$titre_p = addslashes($_POST['titre_p']);
		$description_p = addslashes($_POST['description_p']);

		$pdoCV->exec(" INSERT INTO profils VALUES (NULL, '$titre_p', '$description_p', '$id_utilisateur') ");//mettre $id_utilisateur quand on l'aura en variable de session
		header("location: ../admin/profils.php");
		exit();
	}//ferme le if
}//ferme le if isset

//suppression d'une expérience
	if(isset($_GET['id_profil'])){
		$efface = $_GET['id_profil'];
		$sql = " DELETE FROM profils WHERE id_profil = '$efface' ";
		$pdoCV -> query($sql);// ou on peut avec exec
		header("location: ../admin/profils.php");
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
<title>Admin : modification d'un profil  <?php echo $ligne_utilisateur['pseudo']; ?></title>
<!--CKEditor-->
<script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
		$sql = $pdoCV->prepare("SELECT * FROM profils WHERE utilisateur_id = '$id_utilisateur' ORDER BY id_profil DESC "); // prépare la requête
		$sql->execute(); // exécute-la
		$nbr_profils = $sql->rowCount(); //compte les lignes
	 ?>
    <div class="col-lg-12 page-header text-center">
      <h2>Profils</h2>
      <p>Il y a <?php echo $nbr_profils; ?> profils dans la table pour <?php echo $ligne_utilisateur['pseudo']; ?></p>
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
		  	<th scope="col">description</th>
			<th scope="col">modifier</th>
			<th scope="col">supprimer</th>
		</tr>
		<tr>
			<?php while ($ligne_profil = $sql->fetch()) { ?>
			<td><?php echo $ligne_profil['titre_p']; ?></td>
			<td><?php echo $ligne_profil['description_p']; ?></td>
			<td><a href="modif_profil.php?id_profil=<?php echo $ligne_profil['id_profil']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td><a class="supprimer" href="profils.php?id_profil=<?php echo $ligne_profil['id_profil']; ?>"><span class="glyphicon glyphicon-trash"></span></a></span></td>
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
            <!-- form insertion d'un profil -->
            <form action="profils.php" method="post" class="text-center">
              <div class="form-group">
                <label for="titre_p">Titre du profil</label>
                <input type="text" name="titre_p" class="form-control" id="titre_p" placeholder="insérez un profil">
				
                <label for="description_p">Description</label>
                <textarea name="description_p" cols="80" rows="4" class="form-control" id="description_p" placeholder="description du profil"></textarea>
                <script>
            		CKEDITOR.replace( 'description_p' );
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
