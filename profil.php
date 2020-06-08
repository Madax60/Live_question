<?php
include_once ("./includes/header.php");
include_once("./traitement/traitement_profil.php"); 

?>

<div align="center">
   <h2>Profil de <?php echo $userinfo['Pseudo_profil']; ?></h2>
   <p><?php echo $userinfo['Pseudo_profil'] ?></p>
   <p><?php echo $userinfo['Mail_profil'] ?></p>

   <?php
   if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION) 
   {
      ?>
      <a href="#">Editer mon profil</a>
      <a href="deconnexion.php">Se déconnecter</a>
      <?php  
   };
   ?>
</div>

<?php
include_once ("includes/footer.php");

?>
