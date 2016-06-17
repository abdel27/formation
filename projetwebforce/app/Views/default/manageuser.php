<?php $this->layout('layoutback', ['title' => 'manageuser']) ?>

<?php $this->start('main_content') ?>

<h2>Gestion utilisateurs</h2>


<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
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
            <td><a class="boutonModifer" href="<?php $id=$post['id']; echo $this->url("edituser", ["id" => $id]);?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
            <td><a class="boutonBloquer" href="#"><i class="fa fa-user-times" aria-hidden="true"></i></a></td>
            <td><a class="boutonSupprimer" href="<?php $id=$post['id']; echo $this->url("deleteuser", ["id" => $id]);?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
         </tr>
      <?php } ?>
    </tbody>
  </table>

  <?php $this->stop('main_content') ?>
