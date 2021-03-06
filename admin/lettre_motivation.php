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
//insertion du contenu
if(isset($_POST['introduction_m'])){//si on récupère l'introduction_m
    if($_POST['developpement_m']!='' && $_POST['conclusion_m']!=''){// si le contenu de développement_m et la conclusion_m ne sont pas vides

        $introduction_m = addslashes($_POST['introduction_m']);
        $developpement_m = addslashes($_POST['developpement_m']);
        $conclusion_m = addslashes($_POST['conclusion_m']);

        $pdoCV->exec(" INSERT INTO lettre_motivation VALUES (NULL, '$introduction_m', '$developpement_m',  '$conclusion_m', '$id_utilisateur') ");//mettre $id_utilisateur quand on l'aura en variable de session
        header("location: ../admin/lettre_motivation.php");
        exit();
    }//ferme le if
}//ferme le if isset

//suppression d'une expérience
    if(isset($_GET['id_motivation'])){
        $efface = $_GET['id_motivation'];
        $sql = " DELETE FROM lettre_motivation WHERE id_motivation = '$efface' ";
        $pdoCV -> query($sql);// ou on peut avec exec
        header("location: ../admin/lettre_motivation.php");
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
<title>Admin : modification de la lettre de motivation <?php echo $ligne_utilisateur['pseudo']; ?></title>
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
		$sql = $pdoCV->prepare("SELECT * FROM lettre_motivation WHERE utilisateur_id = '$id_utilisateur' "); // prépare la requête
		$sql->execute(); // exécute-la
		//$nbr_competences = $sql->rowCount();
	 ?>
     <div class="col-lg-12 page-header text-center">
       <h2>Lettre de motivation</h2>
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
 			<th scope="col">Introduction</th>
 			<th scope="col">Developpement</th>
 		  	<th scope="col">Conclusion</th>
 			<th scope="col">modifier</th>
 			<th scope="col">supprimer</th>
 		</tr>
 		<tr>
 			<?php while ($ligne_motivation = $sql->fetch()) { ?>
 			<td><?php echo $ligne_motivation['introduction_m']; ?></td>
 			<td><?php echo $ligne_motivation['developpement_m']; ?></td>
 			<td><?php echo $ligne_motivation['conclusion_m']; ?></td>
 			<td><a href="modif_lettre_motivation.php?id_motivation=<?php echo $ligne_motivation['id_motivation']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
 			<td><a class="supprimer" href="lettre_motivation.php?id_motivation=<?php echo $ligne_motivation['id_motivation']; ?>"><span class="glyphicon glyphicon-trash"></span></a></span></td>
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
             <!-- form insertion de la lettre de motivation -->
             <form action="lettre_motivation.php" method="post" class="text-center">
               <div class="form-group">

                 <label for="motivation_m">Donner un titre à votre developpement</label>
                 <textarea name="introduction_m" cols="80" rows="4" class="form-control" id="introduction_m" placeholder="insérez l'introduction_m de votre lettre"></textarea>

                 <label for="developpement_m">Donner un titre à votre developpement</label>
                 <textarea name="developpement_m" cols="80" rows="4" class="form-control" id="developpement_m" placeholder="insérez la conlusion_m de votre lettre"></textarea>

                 <label for="conclusion_m">Conlusion</label>
                 <textarea name="conclusion_m" cols="80" rows="4" class="form-control" id="conclusion_m" placeholder="insérez la conlusion de votre lettre"></textarea>
                 <script>
             		CKEDITOR.replace( 'introduction_m' );
                    CKEDITOR.replace( 'developpement_m' );
                    CKEDITOR.replace( 'conclusion_m' );
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
