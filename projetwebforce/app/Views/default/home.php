<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<!-- Section recherche -->
<section class="rechercheHome">
	<div class="labelRecherche">
		<label for="espece">Espèce</label>
		<label for="race">Race</label>
		<label for="sexe">Sexe</label>
		<label for="region">Région</label>
	</div>

	<div class="inputRecherche">
		<input class="input" type="text" name="espece" value="">
		<input class="input" type="text" name="race" value="">
		<input class="input" type="text" name="sexe" value="">
		<input class="input" type="text" name="region" value="">
		<input class="bouton boutonVert" type="button" name="button" value="Rechercher">
	</div>
</section>

<!-- Bloc principal de page -->
<div class="mainContainer">

  <!-- Bloc contenant toutes les annonces -->
  <div class="homeWrapper">
    <article class="annonceHome">
      <img src="http://placehold.it/360x180" alt="" />
      <div class="texteAnnonceHome">
        <h3>Nom de l'animal</h3>
        <div class="descriptionAnnonce">
          <div class="boldAnnonce">
            <p class="txtBold">Espèce</p>
            <p class="txtBold">Race</p>
            <p class="txtBold">Age</p>
            <p class="txtBold">Sexe</p>
          </div>
          <div class="LightAnnonce">
            <p>Espèce</p>
            <p>Race</p>
            <p>Age</p>
            <p>Sexe</p>
          </div>
        </div>
      </div>
    </article>

    <article class="annonceHome">
      <img src="http://placehold.it/360x180" alt="" />
      <div class="texteAnnonceHome">
        <h3>Nom de l'animal</h3>
        <div class="descriptionAnnonce">
          <div class="boldAnnonce">
            <p class="txtBold">Espèce</p>
            <p class="txtBold">Race</p>
            <p class="txtBold">Age</p>
            <p class="txtBold">Sexe</p>
          </div>
          <div class="LightAnnonce">
            <p class="txtAnnonce">Espèce</p>
            <p class="txtAnnonce">Race</p>
            <p class="txtAnnonce">Age</p>
            <p class="txtAnnonce">Sexe</p>
          </div>
        </div>
      </div>
    </article>

    <article class="annonceHome">
      <img src="http://placehold.it/360x180" alt="" />
      <div class="texteAnnonceHome">
        <h3>Nom de l'animal</h3>
        <div class="descriptionAnnonce">
          <div class="boldAnnonce">
            <p class="txtBold">Espèce</p>
            <p class="txtBold">Race</p>
            <p class="txtBold">Age</p>
            <p class="txtBold">Sexe</p>
          </div>
          <div class="LightAnnonce">
            <p class="txtAnnonce">Espèce</p>
            <p class="txtAnnonce">Race</p>
            <p class="txtAnnonce">Age</p>
            <p class="txtAnnonce">Sexe</p>
          </div>
        </div>
      </div>
    </article>

    <article class="annonceHome">
      <img src="http://placehold.it/360x180" alt="" />
      <div class="texteAnnonceHome">
        <h3>Nom de l'animal</h3>
        <div class="descriptionAnnonce">
          <div class="boldAnnonce">
            <p class="txtBold">Espèce</p>
            <p class="txtBold">Race</p>
            <p class="txtBold">Age</p>
            <p class="txtBold">Sexe</p>
          </div>
          <div class="LightAnnonce">
            <p class="txtAnnonce">Espèce</p>
            <p class="txtAnnonce">Race</p>
            <p class="txtAnnonce">Age</p>
            <p class="txtAnnonce">Sexe</p>
          </div>
        </div>
      </div>
    </article>

    <article class="annonceHome">
      <img src="http://placehold.it/360x180" alt="" />
      <div class="texteAnnonceHome">
        <h3>Nom de l'animal</h3>
        <div class="descriptionAnnonce">
          <div class="boldAnnonce">
            <p class="txtBold">Espèce</p>
            <p class="txtBold">Race</p>
            <p class="txtBold">Age</p>
            <p class="txtBold">Sexe</p>
          </div>
          <div class="LightAnnonce">
            <p class="txtAnnonce">Espèce</p>
            <p class="txtAnnonce">Race</p>
            <p class="txtAnnonce">Age</p>
            <p class="txtAnnonce">Sexe</p>
          </div>
        </div>
      </div>
    </article>
  </div>

</div>


<?php $this->stop('main_content') ?>
