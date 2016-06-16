<?php $this->layout('layoutback', ['title' => 'Dashboard Animals']) ?>

<?php $this->start('main_content') ?>



<h2>Utilisateurs</h2>

<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Pseudo</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>

        <th>Modifier</th>
        <th>Bloquer</th>
        <th>Supprimer</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($users as $post) { ?>
        <tr>
            <td><a><?= $post['id']; ?></a></td>
            <td><?= $post['nom']; ?></td>
            <td><?= $post['prenom'];?></td>
            <td><?= $post['username']; ?></td>
            <td><?= $post['email']; ?></td>
            <td><?= $post['role']; ?></td>
            <td><?= $post['active']; ?></td>

            <!-- Boutons gestion utilisateurs -->
            <td><a href="<?php $id=$post['id']; echo $this->url("edituser", ["id" => $id]);?>"><button class="boutonBleu" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i></button></a></td>
            <td><a href="#"><button class="boutonOrange" type="button" name="button"><i class="fa fa-times" aria-hidden="true"></i></button></a></td>
            <td><a href="<?php $id=$post['id']; echo $this->url("deleteuser", ["id" => $id]);?>"><button class="boutonRouge" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
         </tr>
      <?php } ?>
    </tbody>
  </table>



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



    <h2>Annonces en attente</h2>


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
            <th>Autoriser</th>
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
                <td><a href="#"><button class="boutonVert" type="button" name="button"><i class="fa fa-check" aria-hidden="true"></i></button></a></td>
                <td><a href="<?php $id=$post['id']; echo $this->url("deleteuser", ["id" => $id]);?>"><button class="boutonRouge" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
             </tr>
          <?php } ?>
        </tbody>
      </table>

  <?php $this->stop('main_content') ?>
