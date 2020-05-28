<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=live_question;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$questions = $bdd->query('SELECT * FROM question');

?>	