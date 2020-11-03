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




<?php 

if (isset($_POST['add'])) {
    $titleadd = $_POST['titleadd'];
    $contentadd = $_POST['contentadd'];
    if (!empty($titleadd) AND !empty($contentadd)) {
        $insertbd = $bdd->prepare("INSERT INTO `article`(`title`, `contenu`) VALUES (?,?)")
        $insertbd->execute(array($titleadd, $contentadd));
    }
}

?>

<form action="ajoutQuestion.php" method="post"> 
    <div class="form-group">
        <input type="text" name="titleadd" class="form-control" placeholder="Insérer un titre">
        <input type="text" name="contentadd" class="form-control" placeholder="Insérer un contenu">
    </div>
    <button type="submit" name="add" class="btn vld">Valider</button>
</form>