<?php

$bodyClass = "bgConnex";

include_once ("includes/header.php");
?>

<div class="row">
		<section class="formuInscrip m-auto col-md-6">
			<div style="text-shadow:1px 1px 1px  #C8C8C8">
		         <h2 align="center">Inscription</h2>
		         <br /><br />
		         <form method="POST" action="">
		             <div class="form-group row">
    					<label align="center" for="pseudo" class="col-sm-4 col-form-label">Pseudo</label>
    					<div class="col-sm-8">
      						<input type="text" class="form-control" id="pseudo" placeholder="Votre Pseudo">
    					</div>
  					</div>

  					 <div class="form-group row">
    					<label align="center" for="mail" class="col-sm-4 col-form-label">Mail</label>
    					<div class="col-sm-8">
      						<input type="email" class="form-control" id="mail" placeholder="Votre Adresse mail">
    					</div>
  					</div>
            <div class="row ">
                <div class=" col-md-6" style=" margin-bottom:1vh; " >
                <input class="form-check-input" type="radio" name="genre" id="masculin" value="Masculin">
                <label class="form-check-label" for="masculin">Homme</label>
                </div>
                <div class=" col-md-6">
                  <input class="form-check-input" type="radio" name="genre" id="feminin" value="Féminin">
                  <label class="form-check-label" for="feminin">Femme</label>
              </div>
            </div>
  					

		             <div class="form-group row">
    					<div class="col-sm-4">
    						<label align="center" for="mdp" class="form-label">Mot de Passe</label>
    					</div>
    					<div class="col-sm-8">
      						<input type="text" class="form-control" id="mdp" placeholder="Votre Mot de Passe">
    					</div>
  					</div>

					<div class="form-group row">
    					<div class="col-sm-4">
    						<label align="center" for="mdp2" class="form-label">Confirmation Mot de Passe</label>
    					</div>
    					<div class="col-sm-8">
      						<input type="text" class="form-control" id="mdp2" placeholder="Confirmez votre mdp">
    					</div>
  					</div>
		            <div class="form-group row">
		               <button type="submit" name="forminscription"class="btn btn-primary my-auto mx-auto">Je m'inscris</button>
		            </div>
		         </form>
		         <?php
		         if(isset($erreur)) {
		            echo '<font color="red">'.$erreur."</font>";
		         }
		         ?>
			</div>
		</section>
	  

</div>




<?php
include_once ("includes/footer.php");
?>