<?php $this->layout('layout', ['title' => 'Ajouter une annonce']) ?>

<?php $this->start('main_content') ?>


<div class="mainContainer">

  <h2>Ajouter une annonce</h2>

  <form class="newannonceForm" action="#" method="POST">
    <label for="nom">Nom de l'animal</label><br>
    <input type="text" name="nom" placeholder="Minou"><br>

    <label for="idespece"> Espèce</label><br>
    <p>menu déroulant avec les expèces</p>
    <input type="text" name="idespece"><br>

    <label for="idrace">Race de l'animal</label><br>
    <p>menu déroulant avec les races</p>
    <input type="text" name="idrace"><br>

    <label for="age">Age</label><br>
    <p>menu déroulant avec les ages</p>
    <input type="text" name="age"><br>

    <label for="sexe">Sexe</label><br>
    <p>menu déroulant avec les sexes</p>
    <input type="text" name="sexe"><br>

    <label for="lof">LOF</label><br>
    <input type="text" name="lof"><br>

    <label for="description">Description</label><br>
    <textarea name="description" placeholder="Tache blanche sur la tête, etc..."></textarea><br>

    <label for="qualites">Qualités de l'animal</label><br>
    <textarea name="qualites" placeholder="Il aime jouer et dormir"></textarea><br>

    <input type="submit" name="newannonce" value="Valider">
  </form>

</div>


<?php $this->stop('main_content') ?>
