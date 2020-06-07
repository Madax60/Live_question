<?php

include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDDgenre
 
if(isset($_POST['forminscription'])) {
   $pseudo = $_POST['pseudo'];
   $mail = $_POST['mail'];
   $genre = $_POST['genre'];
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['genre']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM profil WHERE Mail_profil = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO `profil` (`Pseudo_profil`, `Mail_profil`, `MotDePasse_profil`, `Genre_profil`) VALUES ( ?, ?, ?, ?);");
                     $insertmbr->execute(array($pseudo, $mail, $genre, $mdp));

                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
         	$erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>