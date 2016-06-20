<?php $this->layout('layout', ['title' => 'forget']) ?>

<?php $this->start('main_content') ?>


<div class="mainWrapper">
  <div class="titreCentre">
    <h1>Mot de passe perdu ?</h1>
    <p>Pas de panique, on vous l'envoie.</p>
  </div>

  <!-- formulaire -->
  <form method="POST" action="<?php echo $this->url('forgetaction'); ?>" id="formforgetpassword">
    <div class="form-group">
      <label for="email">Email *</label>
      <span class="error"><?php if(!empty($errors['email'])) { echo $errors['email']; } ?></span>
      <input type="text" name="email" id="email" class="form-control" value="<?php if(!empty($_POST['email'])) { echo $_POST['email']; } ?>" />
    </div>

    <div class="titreCentre">
      <input type="submit" name="submit" value="Envoyer" class="bouton boutonVert" />
    </div>
  </form>
</div>


<?php $this->stop('main_content') ?>
