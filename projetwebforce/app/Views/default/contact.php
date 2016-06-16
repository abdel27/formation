<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>

<section class="mainWrapper">
  <div class="titreCentre">
    <h1>Nous contacter</h1>

    <p class="txtAnnonce">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nisi ut aliquip ex ea commodo consequat. </p>
  </div>

  <div class="formCentre">
    <form class="" action="index.html" method="post">
      <label for="nom">Nom, prénom *</label><br>
      <input type="nom" name="name" value=""><br>

      <label for="email">Email *</label><br>
      <input type="email" name="name" value=""><br>

      <label for="sujet">Sujet </label><br>
      <input type="sujet" name="name" value=""><br>

      <label for="message">Message *</label><br>
      <textarea name="message"></textarea><br>

      <input class="bouton boutonVert" type="submit" name="name" value="Envoyer">
    </form>
  </div>
</section>

<?php $this->stop('main_content') ?>
