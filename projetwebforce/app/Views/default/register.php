<?php

$this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>


  <!-- Formulaire -->
  <div class="mainWrapper">
    <div class="titreCentre">
      <h1>Inscription</h1>
      <p>Si vous n'avez pas encore de compte, inscrivez vous!</p>
    </div>

  <!-- Formulaire -->
  <form action="<?php echo $this->url('registeraction'); ?>" method="POST" id="formulaire">
        <div class="form-group">
          <label for="nom">Nom *</label>
          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['nom'])) { echo $error['nom']; } ?></span>
          <input type="text" name="nom" id="nom" class="form-control" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>" />
        </div>

        <div class="form-group">
          <label for="prenom">Prénom *</label>
          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['prenom'])) { echo $error['prenom']; } ?></span>
          <input type="text" name="prenom" id="prenom" class="form-control" value="<?php if(!empty($_POST['prenom'])) { echo $_POST['prenom']; } ?>" />
        </div>

        <div class="form-group">
          <label for="username">Pseudo *</label>
           <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
           <span class="error"><?php if(!empty($error['username'])) { echo $error['username']; } ?></span>
           <input type="text" name="username" id="username" class="form-control" value="<?php if(!empty($_POST['username'])) { echo $_POST['username']; } ?>" />
         </div>

        <div class="form-group">
          <label for="departement">Departement *</label><br>
          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées -->
          <span class="error"><?php if(!empty($error['departement'])) { echo $error['departement']; } ?></span>
<<<<<<< HEAD
          <select name='departement' selected='selected'>
                <?php foreach ($departements as $departement) { ?>
                <option value="<?= $departement['idep']?>"> <?= $departement['nom'] ?>" </option>
=======
          <input type="text" name="departement" id="departement" class="form-control" value="<?php if(!empty($_POST['departement'])) { echo $_POST['departement']; } ?>" />-->
          <select name='departement' >
                <option selected='selected'></option>
                <?php
                  //print_r($departements);
                 foreach ($departements as $departement) {
                ?>
                <option value="<?php echo $departement['idep']?>"> <?php echo $departement['idep'].' : '. $departement['nom'] ?>" </option>
>>>>>>> origin/master
                <?php } ?>

          </select>
        </div>

         <div class="form-group">
           <label for="email">Email *</label>
           <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
           <span class="error"><?php if(!empty($error['email'])) { echo $error['email']; } ?></span>
           <input type="text" name="email" id="email" class="form-control" value="<?php if(!empty($_POST['email'])) { echo $_POST['email']; } ?>" />
         </div>

         <div class="form-group">
             <label for="password">Mot de passe *</label>
             <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
             <span class="error"><?php if(!empty($error['password'])) { echo $error['password']; } ?></span>
             <input type="password" name="password" id="password" class="form-control" value="<?php if(!empty($_POST['password'])) { echo $_POST['password']; } ?>" />
         </div>

          <div class="form-group">
             <label for="password2">Confirmation du mot de passe *</label>
             <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
             <span class="error"><?php if(!empty($error['password2'])) { echo $error['password2']; } ?></span>
             <input type="password" name="password2" id="password2" class="form-control" value="<?php if(!empty($_POST['password2'])) { echo $_POST['password2']; } ?>" />
         </div>
         <div class="titreCentre">
           <input class="bouton boutonVert" type="submit" name="submit" value="Inscription" />
         </div>
       </form>
     </div>

<?php $this->stop('main_content') ?>
