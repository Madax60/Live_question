<?php
    include_once ("includes/header.php");
    include_once('./traitement/traitement_inscription.php'); // Fichier PHP contenant la connexion à votre BDD
?>

<div align="center">
         <h2>Inscription</h2>
         <br /><br />
         <form method="POST" action="">
            <div>
               <label for="pseudo">Pseudo :</label>
               <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo"/>
            </div>
            <div>
               <label for="mail">Mail :</label>
               <input type="email" placeholder="Votre mail" id="mail" name="mail"/>
            </div>
            <div>
               <input type="radio" id="masculin" name="genre" value="Masculin" checked>
               <label for="masculin">Masculin</label>
               <input type="radio" id="feminin" name="genre" value="Féminin">
               <label for="feminin">Féminin</label>
            </div>
            <div>
               <label for="mdp">Mot de passe :</label>
               <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
            </div>
            <div>
               <label for="mdp2">Confirmation du mot de passe :</label>
               <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
            </div>
            <div>
               <input type="submit" name="forminscription" value="Je m'inscris" />
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
