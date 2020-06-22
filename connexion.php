<?php
    include_once ("includes/header.php");
    include_once('./traitement/traitement_connexion.php'); // Fichier PHP contenant la connexion à votre BDD
?>

<div align="center">
         <h2>Connexion</h2>
         <br/><br/>
         <form method="POST" action="">
            <div>
               <label for="pseudo">E-mail :</label>
               <input type="email" placeholder="Votre pseudo" id="pseudo" name="mailconnect"/>
            </div>
            <div>
               <label for="mdp">Mot de passe :</label>
               <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdpconnect" />
            </div>
            <div>
               <input type="submit" name="formconnection" value="Se connecter" />
            </div>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
</div>

<?php
include_once ("includes/footer.php");
?>
