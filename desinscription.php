<?php
include_once("./includes/header.php");
include_once("./traitement/traitement_desinscription.php");
 ?>

 <section id="desinscription" class="container-fluid">
 	<div class="container w-50 m-auto text-center">
 		<h2>Êtes-vous sûr ?</h2>
 		<form action="./desinscription.php" method="POST">
	 		<label>Oui</label>
	 		<input type="radio" name="reponseDesin" value="oui" checked>
	 		<label>Non</label>
	 		<input type="radio" name="reponseDesin" value="non"><br>
	 		<button type="submit" name="submitDesin">Envoyer</button><br>
	 		<?php 
	 		if (isset($msgerror)) {
	 			echo($msgerror);
	 		}
	 		?>
 		</form>
 	</div>
 	
 </section>