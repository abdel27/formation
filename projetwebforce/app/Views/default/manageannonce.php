<?php $this->layout('layoutback', ['title' => 'Gérer les annonces']) ?>

<?php $this->start('main_content') ?>

<h2>Annonces en ligne</h2>


<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Espèce</th>
        <th>Race</th>
        <th>Sexe</th>
        <th>LOF</th>

        <th>Modifier</th>
        <th>Bloquer</th>
        <th>Supprimer</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($annonces as $post) { ?>
        <tr>
            <td><a><?= $post['id']; ?></a></td>
            <td><?= $post['nom']; ?></td>
            <td><?= $post['idespece'];?></td>
            <td><?= $post['idrace']; ?></td>
            <td><?= $post['sexe']; ?></td>
            <td><?= $post['lof']; ?></td>

            <!-- Boutons gestion utilisateurs -->
            <td><a href="<?php $id=$post['id']; echo $this->url("edituser", ["id" => $id]);?>"><button class="boutonBleu" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i></button></a></td>
            <td><a href="#"><button class="boutonOrange" type="button" name="button"><i class="fa fa-times" aria-hidden="true"></i></button></a></td>
            <td><a href="<?php $id=$post['id']; echo $this->url("deleteuser", ["id" => $id]);?>"><button class="boutonRouge" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
         </tr>
      <?php } ?>
    </tbody>
  </table>

  <?php $this->stop('main_content') ?>
