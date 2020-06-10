<?php 
include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD

$questions = $bdd->query('SELECT question.* , Pseudo_profil, Libelle_categorie FROM question INNER JOIN profil ON question.Id_profil = profil.Id_profil INNER JOIN categorie ON question.Id_categorie = categorie.Id_categorie');

?>	