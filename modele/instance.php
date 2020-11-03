<?php

require_once __DIR__.'./categorie.php';
require_once __DIR__.'./profil.php';
require_once __DIR__.'./question.php';
require_once __DIR__.'./profil.php';
require_once __DIR__.'./utilisateur.php';

$question = new Question();
$utilisateur = new Utilisateur('');
$categorie = new Categorie('');

$question->setTitreQuest("fusgyfouysgqiuf");
$question->setDateQuest("121301");

$utilisateur->setPseudo("Mehdi");

$categorie->setCategorie("cuisine");

echo $question->afficherQuestion();