<?php
include_once ("./includes/header.php");
include_once("./traitement/traitement_profil.php"); 

?>



   <?php
   if(isset($_SESSION['id']) AND $userinfo['Id_profil'] == $_SESSION['id']) 
   {
      ?>
      <div align="center">
      <h2>Profil de <?php echo $userinfo['Pseudo_profil']; ?></h2>
      <p><?php echo $userinfo['Pseudo_profil'] ?></p>
      <p><?php echo $userinfo['Mail_profil'] ?></p>
      <h5><a href="./edition_profil.php" >Editer mon profil</a></h5>
      <h5><a href="./desinscription.php" >Se désinscrire</a></h5>
      
      <?php  
   }else{
      header('location: ./connexion.php');
   };
   ?>
</div>

<?php
include_once ("./includes/footer.php");

?>
