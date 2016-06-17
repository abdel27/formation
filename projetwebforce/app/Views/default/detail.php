<?php $this->layout('layout', ['title' => 'Annonce unique']) ?>

<?php $this->start('main_content') ?>

<!-- Bloc principal -->
<section class="mainWrapper">
  <!-- Titre -->
  <div class="titreCentre">
    <h2><?= $details['nom'];?></h2>
    <!-- Sous titre / Description -->
    <p class="txtAnnonce"><?= $details['description'];?></p>
  </div>

  <!-- Contenu -->
  <div class="contentAnnonce">
    <img class="imageAnnonce" src="http://placehold.it/720x360" alt="Image test" />

    <!-- Textes -->
    <div class="descriptionAnnonce">
      <!-- Bloc de texte gauche -->
      <div class="boldAnnonce">
        <p class="txtBold">Espèce :</p>
        <p class="txtBold">Race :</p>
        <p class="txtBold">Age :</p>
        <p class="txtBold">Sexe :</p>
        <p class="txtBold">LOF :</p>
        <p class="txtBold">Qualités :</p>
      </div>

      <!-- Bloc de texte droit -->
      <div class="LightAnnonce">
        <p class="txtAnnonce"><?= $details['idespece'];?></p>
        <p class="txtAnnonce"><?= $details['idrace'];?></p>
        <p class="txtAnnonce"><?= $details['age'];?></p>
        <p class="txtAnnonce"><?= $details['sexe'];?></p>
        <p class="txtAnnonce"><?= $details['lof'];?></p>
        <p class="txtAnnonce"><?= $details['qualites'];?></p>
      </div>
    </div>
  </div>
  <div class="titreCentre">
    <input class="bouton boutonVert" type="button" name="name" value="Contacter">
  </div>
</section>

<?php $this->stop('main_content') ?>
