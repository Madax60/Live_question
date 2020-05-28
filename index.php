<?php
include_once ("includes/header.php");
?>
<!-- ############ Partie accueil ########### -->
<section id="accueil" class="container-fluid row m-auto text-white p-4 border-bottom">
    <div style="height: 70vh" class="container row m-auto w-75">
        <article class="container col-xs-12 col-sm-12 col-md-12 col-lg-4">
            <h1 style="font-size: 45px">Lorem ipsum dolor sit amet.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Blanditiis dicta doloribus exercitationem iusto minima minus,
                modi molestiae neque perferendis quae quaerat qui quidem quo
                recusandae rerum sit velit veritatis voluptatum.</p>
            <button class="boutonAccueil rounded-pill font-weight-bold text-white px-4 py-3 mb-4">Bouton CTA</button>
        </article>
        <article class="container col-xs-12 col-sm-12 col-md-12 col-lg-8 m-auto">
            <img src="ressources/step-1.png" class="img-fluid" alt="image du site live question.">
        </article>
    </div>
</section>
<!-- ############ Fin accueil ########### -->
<!-- ############ A propos ########### -->
<section class="container-fluid">
    <div id="propos" class="container row mx-auto my-4 w-75 text-dark">
        <article class="container col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <img src="ressources/i1.png" alt="icone numéro 1">
            <h3>Suits Your Style</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Amet animi aspernatur autem est ex explicabo, fugiat ipsam,
                iste itaque iusto natus non odit perspiciatis recusandae sed
                soluta totam ullam voluptatibus!</p>
        </article>
        <article class="container col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <img src="ressources/i2.png" alt="icone numéro 2">
            <h3>Suits Your Style</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Amet animi aspernatur autem est ex explicabo, fugiat ipsam,
                iste itaque iusto natus non odit perspiciatis recusandae sed
                soluta totam ullam voluptatibus!</p>
        </article>
        <article class="container col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <img src="ressources/i3.png" alt="icone numéro 3">
            <h2>Suits Your Style</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Amet animi aspernatur autem est ex explicabo, fugiat ipsam,
                iste itaque iusto natus non odit perspiciatis recusandae sed
                soluta totam ullam voluptatibus!</p>
        </article>
    </div>
</section>
<!-- ############ Fin a propos ########### -->

<!-- DIV VIDEO -->
<div class="container-fluid m-0 p-0 bg-dark" id="video">
	<p class="text-center font-weight-bold pl-1" id="texte-video"><img src="images/iplay.png">"Nulla venenatis magna fringilla"</p>
</div>

<!-- DIV PARTENAIRE -->
<div class="container-fluid m-0 p-0 text-center">
	<div class="text-center pt-5" id="partenaires">
	<h3>Etiam laot, alique sceleris.</h3>
	<div id="texte-partenaire" class="px-2 mx-2">
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
	</div>
	<div id="logo-partenaires" class="pt-5 text-center col-xs-12 col-sm-6 col-md-8 col-lg-12">
		<div class="">
			<button type="button" class="couleur-marque ml-2 float-left"><img src="images/marque1.jpg" class="py-1 my-1" width="25px" height="30px"> <span class="px-1 mx-1">Kyan Boards</span></button>
		</div>
		<div class="">
			<button type="button" class="couleur-marque ml-2  float-left"><img src="images/marque2.jpg" class="py-1 my-1" width="25px" height="30px"> <span class="px-1 mx-1">Atica</span></button>
		</div>
		<div class="">
			<button type="button" class="couleur-marque ml-2 float-left"><img src="images/marque3.jpg" class="py-1 my-1" width="25px" height="30px"> <span class="px-1 mx-1">Treva</span></button>
		</div>
		<div class="">
			<button type="button" class="couleur-marque ml-2 float-left"><img src="images/marque4.jpg" class="py-1 my-1" width="25px" height="30px"> <span class="px-1 mx-1">Kanba</span></button>
		</div>
		<div class="">
			<button type="button" class="couleur-marque ml-2 float-left"><img src="images/marque5.jpg" class="py-1 my-1" width="25px" height="30px"> <span class="px-1 mx-1">Tvit Forms</span></button>
		</div>
		<div class="">
			<button type="button" class="couleur-marque ml-2 float-left"><img src="images/marque6.jpg" class="py-1 my-1" width="25px" height="30px"> <span class="px-1 mx-1">Aven</span></button>
		</div>
		<div class="">
			<button type="button" class="couleur-marque ml-2 float-left"><img src="images/marque7.jpg" class="py-1 my-1" width="25px" height="30px"> <span class="px-1 mx-1">Utosia</span></button>
		</div>
	</div>
	</div>
</div>

<?php
include_once ("includes/footer.php");
?>

