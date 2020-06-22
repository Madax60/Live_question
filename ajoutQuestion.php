<?php
include_once ("includes/header.php");
?>


<?php
	// On inclue le fichier qui concerne les requêtes liées à la table projet.
    require_once('traitement/traitement_ajoutQuestion.php');
            var_dump($donnees['Id_categorie']);
?>


<h3 class="text-muted">Poser une question</h3>

<!-- on affiche toutes les categ de la bdd sur la page -->
<div>
    <form action="ajoutQuestion.php" method="post">
    <div class="form-group col-md-4">
    <label for="inputState">Catégorie</label>
        <select id="inputState" name="categorie" class="form-control">
        <!-- On affiche chaque entrée une à une -->
        <?php while ($donnees = $categquestion->fetch()){ ?>
            <option value=" <?php echo $donnees['Id_categorie']?>"> <?php echo $donnees["Libelle_categorie"]?></option>
       
            
        <?php
        var_dump($donnees['Id_categorie']);
        };
        ?>

        </select>
    </div>

<!-- Formulaire permettant d'envoyer les infos en bdd -->

            <div class="form-group">

                <label for="Titre_question">Poser votre question</label>
                <input type="text" id="Titre_question" name="Titre_question" class="form-control" placeholder="Insérer une question">

            </div>
            <button type="submit" name="valider" class="btn vld">Valider</button>
        </form>

</div>



<?php
var_dump($_SESSION['id']);
include_once ("includes/footer.php");
?>