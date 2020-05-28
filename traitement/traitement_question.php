<?php 
include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD

$questions = $bdd->query('SELECT * FROM question');

?>	