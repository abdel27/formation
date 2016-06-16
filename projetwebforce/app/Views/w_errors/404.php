<?php $this->layout('layout', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>
<div class="mainContainer">
  <div class="mainWrapper">
    <h1>404</h1>
    <p>La page demandée n'existe pas...</p>

    <a class="lienTxt" href="<?= $this->url("default_home");?>">Retour à l'accueil du site</a>
  </div>
</div>
<?php $this->stop('main_content'); ?>
