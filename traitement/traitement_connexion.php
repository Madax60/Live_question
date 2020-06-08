<?php
session_start();
include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDDgenre
 
if(isset($_POST['formconnection'])) 
{
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = htmlspecialchars($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) 
   {
      $requser = $bdd->prepare("SELECT * FROM profil WHERE Mail_profil = ? AND MotDePasse_profil = ? ");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if ($userexist == 1) 
      {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profil.php?id=".$_SESSION['id']);

      }
         else
         {
            $erreur = "Mauvais mail ou mauvais mot de passe";
         }
   }
   else 
   {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>