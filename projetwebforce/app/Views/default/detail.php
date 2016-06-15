<?php $this->layout('layout', ['title' => 'Annonce unique']) ?>

<?php $this->start('main_content') ?>

<!-- Bloc principal -->
<section class="mainWrapper">
  <!-- Titre -->
  <div class="titreCentre">
    <h2>Nom de l'animal</h2>
    <!-- Sous titre / Description -->
    <p class="txtAnnonce">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
  </div>

  <!-- Contenu -->
  <div class="contentAnnonce">
    <img class="imageAnnonce" src="http://placehold.it/522x345" alt="Image test" />

    <!-- Textes -->
    <div class="descriptionAnnonce">
      <!-- Bloc de texte gauche -->
      <div class="boldAnnonce">
        <p class="txtBold">Espèce</p>
        <p class="txtBold">Race</p>
        <p class="txtBold">Age</p>
        <p class="txtBold">Sexe</p>
        <p class="txtBold">LOF</p>
        <p class="txtBold">Activités</p>
        <p class="txtBold">Ancedotes</p>
        <p class="txtBold">Qualités</p>
      </div>

      <!-- Bloc de texte droit -->
      <div class="LightAnnonce">
        <p class="txtAnnonce">Chien</p>
        <p class="txtAnnonce">Jack Russel</p>
        <p class="txtAnnonce">3 ans 6 mois</p>
        <p class="txtAnnonce">F</p>
        <p class="txtAnnonce">LOF</p>
        <p class="txtAnnonce">Manger, dormir</p>
        <p class="txtAnnonce">Il aime manger et dormir</p>
        <p class="txtAnnonce">Joueur</p>
      </div>
    </div>
  </div>
  <button class="bouton boutonAnnonce" type="button" name="button">Valider</button>
</section>

<?php $this->stop('main_content') ?>
