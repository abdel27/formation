<?php $this->layout('layout', ['title' => 'Ajouter une annonce']) ?>

<?php $this->start('main_content') ?>


<section class="mainWrapper">
  <div class="titreCentre">
    <h1>Ajouter une annonce</h1>
  </div>

  <!-- Formulaire d'ajout d'annonce -->
  <form class="newannonceForm" action="#" method="POST">

    <!-- Nom de l'animal -->
    <div class="form-group">
      <label for="nom">Nom de l'animal *</label><br>
      <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
      <span class="error"><?php if(!empty($error['nom'])) { echo $error['nom']; } ?></span>
      <input type="text" name="nom" id="nom" class="form-control" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>" />
    </div>

    <!-- Photo -->
    <div class="form-group">
      <label for="image">Photo de l'animal *</label><br>
      <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
      <span class="error"><?php if(!empty($error['image'])) { echo $error['image']; } ?></span>
      <input type="text" name="image" id="image" class="form-control" value="<?php if(!empty($_POST['image'])) { echo $_POST['image']; } ?>" />
    </div>

    <!-- Sexe -->
    <label for="sexe">Sexe *</label><br>
    <span class="error"></span>
    <select class="form-control" name="">
      <option value="sexe">Male</option>
      <option value="sexe">Femelle</option>
    </select><br>

    <!-- Espèce -->
    <label for="idespece"> Espèce *</label><br>
    <span class="error"></span>
    <select class="form-control" name="">
      <option value="espece">Chien</option>
      <option value="espece">Chat</option>
    </select><br>

    <!-- Race -->
    <label for="idrace">Race de l'animal *</label><br>
    <span class="error"></span>
    <select class="form-control" name="">
      <option value="race">Race 1</option>
      <option value="race">Race 2</option>
      <option value="race">Race 3</option>
    </select><br>

    <!-- Age -->
    <label for="age">Age *</label><br>
    <span class="error"></span>
    <input class="form-control" type="date" name="name" value=""><br>
    <input type="date" name="name" value="">

    <!-- LOF -->
    <div class="form-group">
      <label for="lof">LOF *</label><br>
      <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
      <span class="error"><?php if(!empty($error['lof'])) { echo $error['lof']; } ?></span>
      <input type="text" name="lof" id="lof" class="form-control" value="<?php if(!empty($_POST['lof'])) { echo $_POST['lof']; } ?>" />
    </div>

    <!-- Qualités -->
    <div class="form-group">
      <label for="qualites">Qualités de l'animal *</label><br>
      <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
      <span class="error"><?php if(!empty($error['qualites'])) { echo $error['qualites']; } ?></span>
      <input type="text" name="qualites" id="qualites" class="form-control" value="<?php if(!empty($_POST['qualites'])) { echo $_POST['qualites']; } ?>" />
    </div>

    <!-- Description -->
    <div class="form-group">
      <label for="description">Description</label><br>
      <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
      <span class="error"><?php if(!empty($error['description'])) { echo $error['description']; } ?></span>
      <textarea class="form-control" name="name" value="<?php if(!empty($_POST['description'])) { echo $_POST['description']; } ?>"></textarea>
    </div>

    <p>* Champs obligatoires</p>

    <!-- Validation du formulaire -->
    <div class="titreCentre">
      <input class="bouton boutonVert" type="submit" name="newannonce" value="Valider">
    </div>
  </form>
</section>


<?php $this->stop('main_content') ?>
