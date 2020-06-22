<?php
include_once("./includes/header.php");
include_once("./traitement/traitement_profil.php");
include_once("./traitement/traitement_edition_profil.php");

 ?>

<form method="POST" action="" enctype="multipart/form-data">
     <label>Pseudo :</label>
     <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['Pseudo_profil']; ?>" /><br>
     <label>Mail :</label>
     <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['Mail_profil']; ?>" /><br>
     <label>Mot de passe :</label>
     <input type="password" name="newmdp1" placeholder="Mot de passe"/><br>
     <label>Confirmation - mot de passe :</label>
     <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br><br>
     <input type="submit" value="Mettre à jour mon profil !" />
</form>
 <?php if(isset($msg)) { echo $msg; } ?>