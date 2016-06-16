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
    <?php foreach ($details as $detail) { ?>
      <!-- Bloc de texte gauche -->
      <div class="boldAnnonce">
        <p class="txtBold">Espèce :</p>
        <p class="txtBold">Race :</p>
        <p class="txtBold">Age :</p>
        <p class="txtBold">Sexe :</p>
        <p class="txtBold">LOF :</p>
        <p class="txtBold">Activités :</p>
        <p class="txtBold">Anedoctes :</p>
        <p class="txtBold">Qualités :</p>
      </div>

      <!-- Bloc de texte droit -->
      <div class="LightAnnonce">
        <p class="txtAnnonce"><?php echo $detail['idespece']; ?></p>
        <p class="txtAnnonce"><?php echo $detail['idrace']; ?></p>
        <p class="txtAnnonce"><?php echo $detail['age']; ?></p>
        <p class="txtAnnonce"><?php echo $detail['sexe']; ?></p>
        <p class="txtAnnonce"><?php echo $detail['lof']; ?></p>
        <p class="txtAnnonce"><?php echo $detail['description']; ?></p>
        <p class="txtAnnonce"></p>
        <p class="txtAnnonce"><?php echo $detail['qualites']; ?></p>
      </div>
    </div>
  </div>
  
  <a class="bouton boutonAnnonce" href="#">Valider</a>
</section>
<?php }
  ?>


<?php $this->stop('main_content') ?>
