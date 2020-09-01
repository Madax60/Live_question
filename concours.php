<?php
include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDDgenre
 
$erreur = [];

if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength > 6) {
         if($mdp == $mdp2) {
            $insertmbr = $bdd->prepare("INSERT INTO `profil` (`Pseudo_profil`, `Mail_profil`, `MotDePasse_profil`, `Genre_profil`, `Id_role`) VALUES ( ?, ?, ?, ?, 2);");
            $insertmbr->execute(array($pseudo, $mail, $mdp, $genre));

            $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
         } else {
            $erreur = "Vos mots de passes ne correspondent pas !";
      } else {
      	$erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>