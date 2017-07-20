<?php
/******************** FONCTIONS UTILISATEURS *****************/
function executeRequete($req)
{
	global $mysqli; // permet d'avoir accés à la variable $mysqli définie dans l'espace global à l'intérieur de notre fonction (espace local)
	$resultat = $mysqli->query($req);// on execute la requete reçu en argument
	if(!$resultat)
	{
		die("Erreur sur la requete sql.<br>Message : " . $mysqli->error . "<br>Code : " . $req);// si la req échoue, on va mourrir(die) avec le message d'erreur
	}
	return $resultat; // on retourne un objet issu de la classe mysqli_result (en cas de requete SELECT, autre requete : true ou false)
}

//-------------------------------------------------------------
//debug($_POST);
function debug($var, $mode = 1) // cette fonction très pratique nous évitera d'avoir à faire des print_r et var_dump
{
	echo '<div style="background: orange; padding: 5px; float: right; clear: both;">';
	$trace = debug_backtrace();// Fonction prédéfinie retournant un tableau ARRAY contenant des infos tel que la ligne et le fichier où est executé la fonction
	$trace = array_shift($trace); // extrait le première valeur d'un tableau et la retourne.
	echo "Debug demandé dans le fichier : $trace[file] à la ligne $trace[line]. <hr>";
	if($mode == 1)
	{
		echo "<pre>"; print_r($var); echo "</pre>";
	}
	else
	{
		echo "<pre>"; var_dump($var); echo "</pre>";
	}
	echo '</div>';
}

//-----------------------------------------------
function internauteEstConnecte()
{ // cette fonction m'indique si un utilisateur est connecté à une fonction retourne toujours false par défault.
 	if(!isset($_SESSION['utilisateurs'])) // si la session "membre" est non définie (elle ne peux être que définie si nous sommes passées par la page de connexion avec le bon mdp)
	{
		return false;
	}
	else
	{
		return true;
	}
}

//---------------------------------------------------
function internauteEstConnecteEtEstAdmin()
{ // cette fonction m'indique si le membre est admin
	if(internauteEstConnecte() && $_SESSION['utilisateurs']['id_utilisateur'] == 1) // si la session membre est définie, nous regardons si il est admin, si c'est le cas, nous retournons true
	{
		return true;
	}
	return false;
}
