<?php 
session_start();
include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM profil WHERE Id_profil = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
   var_dump($userinfo);
}
?> 