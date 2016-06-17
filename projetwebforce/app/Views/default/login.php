
<?php

$this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('main_content') ?>
<?php
print_r($_SESSION);
?>



                            

<section class="mainWrapper">
  <div class="titreCentre">
    <h1>Connexion</h1>
  </div>

  <!-- Formulaire -->
  <form action="" method="POST" id="formulaire">
    <div class="form-group">
      <label for="username">Pseudo *</label>
      <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
      <span class="error"><?php if(!empty($error['username'])) { echo $error['username']; } ?></span>
      <input type="text" name="username" id="username" class="form-control" value="<?php if(!empty($_POST['username'])) { echo $_POST['username']; } ?>" />
    </div>

    <div class="form-group">
        <label for="password">Mot de passe *</label>
        <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
        <span class="error"><?php if(!empty($error['password'])) { echo $error['password']; } ?></span>
        <input type="password" name="password" id="password" class="form-control" value="<?php if(!empty($_POST['password'])) { echo $_POST['password']; } ?>" />
      </div>

      <a class="lienTxt" href="<?php echo $this->url("forget");?>">Mot de passe oublié ?</a><br>


      <input type="checkbox" name="souvenir" /><label>Se souvenir de moi</label><br />
      <input class="bouton boutonVert" type="submit" name="submit" value="Connexion" />
  </form>

       <?php $this->stop('main_content') ?>
