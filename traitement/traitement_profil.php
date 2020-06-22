<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD

if(isset($_SESSION['id'])) {
	$requser = $bdd->prepare('SELECT * FROM profil WHERE Id_profil = ?');
	$requser->execute(array($_SESSION['id']));
	$userinfo = $requser->fetch();
}	
?> 