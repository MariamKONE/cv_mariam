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
if(isset($_POST['profil'])){//si on récupère une nelle compétence
    if($_POST['profil']!=''){// si compétence n'est pas vide
        $competence = addslashes($_POST['profil']);
        $pdoCV->exec(" INSERT INTO profils VALUES (NULL, '$profil', '$id_utilisateur') ");//mettre $id_utilisateur quand on l'aura en variable de session
        header("location: ../admin/profils.php");
        exit();
    }//ferme le if
}//ferme le if isset

//suppression d'une compétence
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
<title>Admin : modification d'un profil <?php echo $ligne_utilisateur['pseudo']; ?></title>

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
<!-- / HEADER -->
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
		$sql = $pdoCV->prepare("SELECT * FROM profils WHERE utilisateur_id = '$id_utilisateur' "); // prépare la requête
		$sql->execute(); // exécute-la
		$nbr_profils = $sql->rowCount(); //compte les lignes
	 ?>
     <div class="col-lg-12 page-header text-center">
       <h2>PROFIL</h2>
       <p>Il y a <?php echo $nbr_profils; ?> profils dans la table pour <?php echo $ligne_utilisateur['pseudo']; ?></p>
     </div>
   </div>
