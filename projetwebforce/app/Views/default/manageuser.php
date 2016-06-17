<?php $this->layout('layoutback', ['title' => 'Gérer les utilisateurs']) ?>

<?php $this->start('main_content') ?>

<h2>Gestion des utilisateurs</h2>


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

  <?php $this->stop('main_content') ?>
