<?php 
include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD

$questions = $bdd->query('SELECT question.* , Pseudo_profil FROM question INNER JOIN profil ON "question.#Id_profil" = "profil.Id_profil"');

?>	