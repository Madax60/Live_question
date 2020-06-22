<?php
// Connexion à la base de données
include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD
include_once('./traitement/fonction.php');

if(isset($_GET['id']) AND !empty($_GET['id'])) 
{
	//Récupération de la question sur laquelle l'utilisateur aura cliqué
	$get_id = htmlspecialchars($_GET['id']);
	$topic = $bdd->prepare('SELECT question.* , Pseudo_profil, Libelle_categorie FROM question INNER JOIN profil ON question.Id_profil = profil.Id_profil INNER JOIN categorie ON question.Id_categorie = categorie.Id_categorie WHERE Id_question = ?');
	$topic->execute(array($get_id));
	$topic = $topic->fetch();
	// Récupération des réponses correspondant à la question
	$reponse_topic = $bdd->prepare('SELECT reponse.* , Id_question FROM reponse INNER JOIN question ON reponse.Id_question = question.Id_question INNER JOIN profil ON reponse.Id_profil = profil.Id_profil WHERE Id_question = ?');
	$reponse_topic->execute(array($get_id));

	if(isset($_POST['submit_reponse']) AND isset($_POST['reponse'])) 
	{
		$reponse = htmlspecialchars($_POST['reponse']);
		if(!empty($reponse)) 
		{
			$ins = $bdd->prepare('INSERT INTO reponse(Id_question,Id_profil,Contenu_reponse,date_reponse) VALUES (?,?,?,NOW())');
			$ins->execute(array($get_id,$_SESSION['id'],$reponse));
			$reponse_msg = "Votre réponse a bien été postée";
			unset($reponse);
		} 
		else 
		{
			$reponse_msg = "Votre réponse ne peut pas être vide !";
		}
	}
}

?>