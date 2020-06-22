<?php

$bodyClass = "bgConnex";

include_once ("includes/header.php");
?>

<div class="row">
		<section class="formuConnex m-auto col-md-6">
			<div style="text-shadow:1px 1px 1px  #C8C8C8">
		         <h2 align="center">Connexion</h2>
		         <br /><br />
		         <form method="POST" action="">
		             <div class="form-group row">
    					<label align="center" for="pseudo" class="col-sm-4 col-form-label">Pseudo</label>
    					<div class="col-sm-8">
      						<input type="text" class="form-control" id="pseudo" placeholder="Votre Pseudo">
    					</div>
  					</div>
  					<div class="form-group row mt-5" style="">
    					<label align="center" for="mdp" class="col-sm-4 col-form-label">Mot de Passe</label>
    					<div class="col-sm-8">
      						<input type="text" class="form-control" id="mdp" placeholder="Votre Mot de Passe">
    					</div>
  					</div>

		            <div class="form-group row" style="margin-top:6vh; ">
		               <button type="submit" name="formconnexion"class="btn btn-primary my-auto mx-auto">Je me connecte</button>
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

