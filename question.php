<?php 
include_once ("./includes/header.php");
// Appel du traitement des questions ( SELECT de toutes les données des questions) //
include_once ("./traitement/traitement_question.php");

// Affichage de toutes les questions ! //
while ($donnees = $questions->fetch())
{
?>
    <div class="w-50" 
    <?php 
    if(isset($_SESSION['id'])){
        echo 'class="bg-dark;"';
    }else{
        echo 'class="bg-warning;"';
    } ;?>
    >
    
    </div>
    <!-- Structure d'une question -->
    <section class="container-fluid">
        <article class="container-fluid couleurS w-75">
            <div class="media my-4 p-4">
                <img src="./ressources/marque1.jpg" class="mr-3" alt="...">
                <div class="media-body">
                    <!-- Affichage du pseudo de l'utilisateur qui a crée la question -->
                    <h5><?php echo $donnees["Pseudo_profil"] ?></h5>
                    <!-- Possibilité d'aller consulter les réponses à la question -->
                    <a href="./question_reponse.php?id=<?php echo $donnees['Id_question']; ?>">
                        <h3 class="textP">
                            <!-- Affichage du titre de la question posé par un utilisateur -->
                            <?php echo $donnees["Titre_question"] ?>
                        </h3>
                    </a>
                    <!-- Affichage de la catégorie de la question -->
                    <h6><i><?php echo $donnees["Libelle_categorie"] ?></i></h6>
                </div>
                    <!-- Affichage de la date de création de la question -->
                <h5><?php echo $donnees["Date_creation_question"] ?></h5>
            </div>
        </article>
    </section>

<?php 
};
include_once ("./includes/footer.php");
?>