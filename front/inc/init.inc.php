<?php
//----------------- Connexion à la BDD


 $hote='localhost'; // le chemin vers le serveur en local
 $bdd='mkone_bd'; // le nom de la base de données
 $utilisateur='root'; // le nom d'utilisateur pour se connecter
 $passe=''; // mot de passe de l'utilisateur local PC
 //$passe='root'; // mot de passe local MAC

 $pdoCV = new PDO('mysql:host='.$hote.';dbname='.$bdd, $utilisateur, $passe);
 //$pdoCV est le nom de la variable de la connexion qui sert partout où l'on doit se servir de cette connexion
 $pdoCV->exec("SET NAMES utf8");


//----------------- SESSION
session_start(); // on ouvre et on cr�e une session

//----------------- CHEMIN
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . "/site_cv/");
define("URL", 'http://localhost/site_cv/');

//----------------- VARIABLES
$contenu = '';

//----------------- AUTRES INCLUSIONS
require_once("fonctions.inc.php");
