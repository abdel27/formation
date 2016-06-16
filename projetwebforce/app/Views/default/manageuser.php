<?php $this->layout('layoutback', ['title' => 'manageuser']) ?>

<?php $this->start('main_content') ?>

<h2>Gestion utilisateurs</h2>


<table class="table">
    <thead>
      <tr>
        <th>Identifiant</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Pseudo</th>
        <th>Date de naissance</th>
        <th>Email</th>
        <th>Password</th>
        <th>Token</th>
        <th>IP</th>
        <th>Date de creation</th>
        <th>Departement</th>
        <th>Role</th>
        <th>Active</th>
        <th>Derniere conncetion</th>
        <th>Situation</th>
        <th>Adresse</th>
        <th>Code postal</th>
        <th>Telephone</th>
        <th>Ville</th>

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
            <td><?= $post['date_naissance']; ?></td>
            <td><?= $post['email']; ?></td>
            <td><?= $post['password']; ?></td>
            <td><?= $post['token']; ?></td>
            <td><?= $post['ip']; ?></td>
            <td><?= $post['created_at']; ?></td>
            <td><?= $post['departement']; ?></td>
            <td><?= $post['role']; ?></td>
            <td><?= $post['active']; ?></td>
            <td><?= $post['last_connection']; ?></td>
            <td><?= $post['situation']; ?></td>
            <td><?= $post['adresse']; ?></td>
            <td><?= $post['codepostal']; ?></td>
            <td><?= $post['tel']; ?></td>
            <td><?= $post['city']; ?></td>

            <!-- Boutons gestion utilisateurs -->
            <td><a class="boutonModifer" href="<?php $id=$post['id']; echo $this->url("edituser", ["id" => $id]);?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
            <td><a class="boutonBloquer" href="#"><i class="fa fa-user-times" aria-hidden="true"></i></a></td>
            <td><a class="boutonSupprimer" href="<?php $id=$post['id']; echo $this->url("deleteuser", ["id" => $id]);?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
         </tr>
      <?php } ?>
    </tbody>
  </table>

  <?php $this->stop('main_content') ?>
