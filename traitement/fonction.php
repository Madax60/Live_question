<?php
function get_pseudo($id) {
   global $bdd;
   $pseudo = $bdd->prepare('SELECT Pseudo_profil FROM profil WHERE Id_profil = ?');
   $pseudo->execute(array($id));
   $pseudo = $pseudo->fetch()['pseudo'];
   return $pseudo;
}

?>