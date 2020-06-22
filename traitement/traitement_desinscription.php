<?php
include_once('./traitement/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD
if (isset($_SESSION)) {
	if (isset($_POST['submitDesin'])) {
		$idProfil = $_SESSION['id'];
		$reponseDesin = htmlspecialchars($_POST['reponseDesin']);
		var_dump($idProfil);
		if ($reponseDesin == 'oui') {
			$desin = $bdd->prepare('DELETE FROM profil WHERE Id_profil = ?');
	      	$desin->execute(array($idProfil));
	      	header('location:./index.php');
		}
		else{
			// header('location:./profil.php');
		}
	}
}
else{
	header('location:./connexion.php');
}

?>