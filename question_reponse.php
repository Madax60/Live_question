<?php 
include_once ("./includes/header.php");
include_once ('./traitement/traitement_question_reponses.php');

if (isset($_GET['id'])) 
{
?>
    <section class="container-fluid">
        <article class="container-fluid couleurS w-75">
            <div class="media my-4 p-4">
                <img src="./ressources/marque1.jpg" class="mr-3" alt="...">
                <div class="media-body">
                    <h5><?php echo $topic["Pseudo_profil"]; ?></h5>
                    <a href=""><h3 class="textP"><?php echo $topic["Titre_question"]; ?></h3>
                    </a>
                    <h6><i><?php echo $topic["Libelle_categorie"]; ?></i></h6>
                </div>
                <h5><?php echo $topic["Date_creation_question"]; ?></h5>
            </div>
        </article>
<?php   
    while ($donnees = $reponse_topic->fetch())
    { 
?>
        <article class="container-fluid row mt-4 overflow-auto">
            <aside class="container col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                <div class="media couleurP my-4 mx-auto p-4">
                    <img src="./ressources/marque1.jpg" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0"><?php echo $donnees["Pseudo_profil"]; ?></h5>
                        <p><?php echo $donnees["Contenu_reponse"]; ?></p>
                    </div>
                    <h5><?php echo $donnees["Date_reponse"]; ?></h5>
                </div>
            </aside>
<?php 
    }
 ?>
            
            <aside class="container col-xs-6 col-sm-6 col-md-6 col-lg-6 p-0 text-center">
            <?php 
            if(isset($_SESSION["id"]))
            { 
            ?>
                <form method="POST" action="question_reponse.php" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 my-4 mx-auto p-4 couleurP">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Répondre à la question</label>
                        <textarea class="form-control" id="reponseQuestion" name="reponse" placeholder="Entrez une réponse" rows="8"></textarea>
                    </div>
                    <p class="text-center m-0">
                        <button type="submit" name="submit_reponse" class="p-2 couleurS">Répondre</button>
                    </p>

                </form>
            <?php  
            }else
            { 
                echo "Vous devez être connecté pour pouvoir répondre !";
            }

            ?>
            </aside>
            
            

        </article>
    </section>
<?php 
}else
{
    header("location: ./question.php");
}
 ?>




    
<?php include_once ("./includes/footer.php");?>
