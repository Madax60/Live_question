<?php 
include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD

$categquestion = $bdd->query('SELECT * FROM categorie');

if (isset ($_POST['valider'])  ){
    //Reception des données du formulaire
    $Titre_question = $_POST['Titre_question'];
    $Id_profil = $_SESSION['id'];
    $Id_categorie = $donnees['Id_categorie'];
    
    $insert = $bdd -> prepare("INSERT INTO `question`(`Id_question`, `Titre_question`, `Date_creation_question`, `Id_profil`, `Id_categorie`) VALUES (?,?,now(),?,1)");
    $insert -> execute(array($Id_question,$Titre_question,$Date_creation_question,$Id_profil));

}


?>