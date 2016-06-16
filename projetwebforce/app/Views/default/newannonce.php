<?php $this->layout('layout', ['title' => 'Ajouter une annonce']) ?>

<?php $this->start('main_content') ?>


<section class="mainWrapper">
  <div class="titreCentre">
    <h1>Ajouter une annonce</h1>
  </div>

  <!-- Formulaire d'ajout d'annonce -->
  <form class="newannonceForm" action="#" method="POST">

    <!-- Nom de l'animal -->
    <label for="nom">Nom de l'animal *</label><br>
    <span class="error"></span>
    <input type="text" name="nom" placeholder="Minou"><br>

    <!-- Photo -->
    <label for="image">Photo de l'animal</label>
    <span class="error"></span>
    <input type="file" name="image" value="">

    <!-- Sexe -->
    <label for="sexe">Sexe *</label><br>
    <span class="error"></span>
    <select class="sexe" name="">
      <option value="sexe">Male</option>
      <option value="sexe">Femelle</option>
    </select><br>

    <!-- Espèce -->
    <label for="idespece"> Espèce *</label><br>
    <span class="error"></span>
    <select class="espece" name="">
      <option value="espece">Chien</option>
      <option value="espece">Chat</option>
    </select><br>

    <!-- Race -->
    <label for="idrace">Race de l'animal *</label><br>
    <span class="error"></span>
    <select class="race" name="">
      <option value="race">Race 1</option>
      <option value="race">Race 2</option>
      <option value="race">Race 3</option>
    </select><br>

    <!-- Age -->
    <label for="age">Age *</label><br>
    <span class="error"></span>
    <input type="date" name="name" value=""><br>

    <!-- LOF -->
    <label for="lof">LOF *</label><br>
    <span class="error"></span>
    <input type="text" name="lof"><br>

    <!-- Description -->
    <label for="description">Description</label><br>
    <span class="error"></span>
    <textarea name="description" placeholder="Tache blanche sur la tête, etc..."></textarea><br>

    <!-- Qualités -->
    <label for="qualites">Qualités de l'animal</label><br>
    <span class="error"></span>
    <textarea name="qualites" placeholder="Il aime jouer et dormir"></textarea><br>

    <p>* Champs obligatoires</p>
    <!-- Validation du formulaire -->
    <input class="bouton boutonVert" type="submit" name="newannonce" value="Valider">
  </form>
</section>


<?php $this->stop('main_content') ?>
