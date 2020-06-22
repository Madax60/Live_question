<?php 
include_once("./traitement/traitement_profil.php")
 ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- Les meta tags primordiaux -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="styles/styles.css">

		<title>Live Question</title>
	</head>
<body <?php if (isset($bodyClass)) { echo 'class="'.$bodyClass.'"'; } ?>>
  	<div class="container-fluid m-0 p-0">

		<!-- navbar (+ logo) + responsive (conversion en icon hamburger) -->
			<nav class="navbar navbar-dark bg-dark navbar-expand-lg p-4">
				<h1 class="textP"><a class="textP" href="#">Live Question</a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-spy="scroll" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse ml-4" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					 	<li class="nav-item dropdown mx-4">
					        <a class="textNavBar text-center" href="index.php">Accueil</a>
					    </li>
					 	<li class="nav-item dropdown mx-4">
					        <a class="textNavBar text-center" href="question.php">Listes des questions</a>
					    </li>
					    <li class="nav-item dropdown mx-4">
					        <a class="textNavBar text-center" href="ajoutQuestion.php">Ajouter une question</a>
					    </li>
					    <li class="nav-item dropdown mx-4">
					        <a class="textNavBar text-center" href="#">Link4</a>
					    </li>
					 	
					</ul>
					<?php 
						if(isset($_SESSION['id']))
						{ 
							echo '
								<div class="row text-center">	
									<a href="./profil.php" type="button" class="couleurP col-md-8 px-md-3 p-2">Mon profil</a>
									<a href="./deconnexion.php" type="button" class="col-md-8 px-md-3 p-2 text-center">Se déconnecter</a>
								</div>
							';
							
						}else
						{ 
							echo'	
								<div class="row text-center">	
									<a href="./connexion.php" type="button" class="couleurP col-md-8 px-md-3 p-2">Se connecter</a>
									<a href="./inscription.php" type="button" class="col-md-8 px-md-3 p-2 text-center">S&apos;inscrire</a>
								</div>
							'; 
						}
	
					 ?>
						
						
				</div>
				
			</nav>


