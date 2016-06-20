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
      <!-- LOF -->
      <div class="form-group">
        <label for="prenom">Prénom *</label><br>
        <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
        <span class="error"><?php if(!empty($error['prenom'])) { echo $error['prenom']; } ?></span>
        <input type="text" name="prenom" id="prenom" class="form-control" value="<?php if(!empty($_POST['prenom'])) { echo $_POST['prenom']; } ?>" />
      </div>

      <!-- LOF -->
      <div class="form-group">
        <label for="email">Email *</label><br>
        <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
        <span class="error"><?php if(!empty($error['email'])) { echo $error['email']; } ?></span>
        <input type="text" name="email" id="email" class="form-control" value="<?php if(!empty($_POST['email'])) { echo $_POST['email']; } ?>" />
      </div>

      <!-- LOF -->
      <div class="form-group">
        <label for="sujet">Sujet</label><br>
        <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
        <span class="error"><?php if(!empty($error['####'])) { echo $error['####']; } ?></span>
        <input type="text" name="####" id="####" class="form-control" value="<?php if(!empty($_POST['####'])) { echo $_POST['####']; } ?>" />
      </div>

      <!-- LOF -->
      <div class="form-group">
        <label for="message">Message *</label><br>
        <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
        <span class="error"><?php if(!empty($error['message'])) { echo $error['message']; } ?></span>
        <textarea class="form-control" name="message" value="<?php if(!empty($_POST['message'])) { echo $_POST['message']; } ?>"></textarea>
      </div>

      <div class="titreCentre">
        <input class="bouton boutonVert" type="submit" name="name" value="Envoyer">
      </div>
    </form>
  </div>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13694.34750460898!2d1.1693800197165638!3d49.013320681071356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xe09fbab2c7717996!2sCCI+PORTES+DE+NORMANDIE!5e0!3m2!1sen!2sfr!4v1466117820875" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<?php $this->stop('main_content') ?>
