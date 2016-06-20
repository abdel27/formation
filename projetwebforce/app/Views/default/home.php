<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<!-- Section recherche -->
<section class="rechercheHome">
	<h2>Rechercher sur le site</h2>

	<div class="recherche form-inline">
		<div class="form-group form-recherche">
    	<label for="espece">Espèce</label><br>
    	<select class="rechercheSelect form-control" id="expece">
					<option value="option">Chien</option>
					<option value="option">Chat</option>
    	</select>
  	</div>

		<div class="form-group form-recherche">
			<label for="race">Race</label><br>
			<select class="rechercheSelect form-control" name="race" value="">
				<option value="option">option</option>
				<option value="option">option</option>
				<option value="option">option</option>
			</select><br>
		</div>

		<div class="form-group form-recherche">
			<label for="race">Sexe</label><br>
			<select class="rechercheSelect form-control" name="sexe" value="">
				<option value="option">Male</option>
				<option value="option">Femelle</option>
			</select><br>
		</div>

		<div class="form-group form-recherche">
			<label for="race">Region</label><br>
			<select class="rechercheSelect form-control" name="region" value="">
				<option value="option">option</option>
				<option value="option">option</option>
				<option value="option">option</option>
			</select><br>
		</div>

		<input class="input bouton boutonVert" type="button" name="button" value="Rechercher">
	</div>

	<div class="inputRecherche">
	</div>
</section>

  <!-- Bloc principal contenant toutes les annonces -->
  <div class="homeWrapper">
		<?php foreach ($annonces as $annonce) { ?>
    <article class="annonceHome">
      <img src="http://placehold.it/720x360" alt="" />
      <div class="texteAnnonceHome">
        <h3><a class="lienTitle" href="#"><?= $annonce['nom']; ?></a></h3>
        <div class="descriptionAnnonce">
          <div class="boldAnnonce">
            <p class="txtBold">Espèce</p>
            <p class="txtBold">Race</p>
            <p class="txtBold">Age</p>
            <p class="txtBold">Sexe</p>
          </div>
          <div class="LightAnnonce">
            <p><?= $annonce['idespece']; ?></p>
            <p><?= $annonce['idrace']; ?></p>
						<p><?= $annonce['age']; ?></p>
						<p><?= $annonce['sexe']; ?></p>
          </div>
        </div>
      </div>
    </article>
		<?php } ?>
  </div>

<?php $this->stop('main_content') ?>
