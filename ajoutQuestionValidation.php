<?php
include_once ("includes/header.php");
?>

<?php
    if (isset ($_POST['valider'])){
        // On se connecte
        require("traitement/connexiondb.php");
        //On récupère les valeurs entrées par l'utilisateur :
        $id=$_POST['id'];
        $Titre_question=$_POST['Titre_question'];
        $Date_creation_question=$_POST['Date_creation_question'];
        //On construit la date d'aujourd'hui
        //strictement comme sql la construit
        $today = date("y-m-d");


        //On prépare la commande sql d'insertion
        $sql = 'INSERT INTO question VALUES("","'.$id.'","'.$Titre_question.'","'.$Date_creation_question.'")'; 

        /*on lance la commande (mysql_query) et au cas où, 
        on rédige un petit message d'erreur si la requête ne passe pas (or die) 
        (Message qui intègrera les causes d'erreur sql)*/
        mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 

        // on ferme la connexion
        mysql_close();
    }
?>

<?php
include_once ("includes/footer.php");
?>