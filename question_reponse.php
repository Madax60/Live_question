<?php include_once ("./includes/header.php");?>

    <section class="container-fluid">
        <article class="container-fluid couleurS">
            <div class="media my-4 p-4">
                <img src="./ressources/marque1.jpg" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0">Media heading</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
        </article>
        <article class="container-fluid row mt-4 overflow-auto">
            <aside class="container col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                <div class="media couleurP my-4 mx-auto p-4">
                    <img src="./ressources/marque1.jpg" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Media heading</h5>
                        Cras sit amet nibh libero, in gravisda nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
            </aside>
            <aside class="container col-xs-6 col-sm-6 col-md-6 col-lg-6 p-0">
                <form action="ajoutRep.php" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 my-4 mx-auto p-4 couleurP">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Répondre à la question</label>
                        <textarea class="form-control" id="reponseQuestion" placeholder="Entrez une réponse" rows="8"></textarea>
                    </div>
                    <p class="text-center m-0">
                        <button type="submit" class="p-2 couleurS">Répondre</button>
                    </p>

                </form>
            </aside>

        </article>
    </section>
<?php include_once ("./includes/footer.php");?>
