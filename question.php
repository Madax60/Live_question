<?php 
    include_once ("./includes/header.php");
    include_once ("./traitement/traitement_question.php");
    // On affiche chaque entrée une à une
    while ($donnees = $questions->fetch())
    {
?>

    <section class="container-fluid">
        <article class="container-fluid couleurS w-75">
            <div class="media my-4 p-4">
                <img src="./ressources/marque1.jpg" class="mr-3" alt="...">
                <div class="media-body">
                    <h5><?php echo $donnees["#Id_profil"] ?></h5>
                    <h3 class="textP"><?php echo $donnees["Titre_question"] ?></h3>
                </div>
                <h5><?php echo $donnees["Date_creation_question"] ?></h5>
            </div>
        </article>
    </section>

<?php 
    };
    include_once ("./includes/footer.php");
?>


