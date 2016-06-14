<?php $this->layout('layoutback', ['title' => 'Dashboard']) ?>

<?php $this->start('main_content') ?>
<h4>Gestion utilisateur</h4>  
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

        

      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $post) { ?>
        <tr>
            <td><a><?php echo $post['id']; ?></a></td>    
            <td><?php echo $post['nom']; ?></td>
            <td><?php echo $post['prenom'];?></td>
            <td><?php echo $post['username']; ?></td>
            <td><?php echo $post['date_naissance']; ?></td>
            <td><?php echo $post['email']; ?></td>
            <td><?php echo $post['password']; ?></td>
            <td><?php echo $post['token']; ?></td>
            <td><?php echo $post['ip']; ?></td>
            <td><?php echo $post['created_at']; ?></td>
            <td><?php echo $post['departement']; ?></td>
            <td><?php echo $post['role']; ?></td>
            <td><?php echo $post['active']; ?></td>
            <td><?php echo $post['last_connection']; ?></td>
            <td><?php echo $post['situation']; ?></td>
            <td><?php echo $post['adresse']; ?></td>
            <td><?php echo $post['codepostal']; ?></td>
            <td><?php echo $post['tel']; ?></td>
            <td><?php echo $post['city']; ?></td>
            <td><a href="<?php $id=$post['id']; echo $this->url("edituser", ["id" => $id]);
            ?>">Modifier</a></td>
            <td><a href="">Supprimer</a></td>
         </tr>
      <?php } ?>
    </tbody>
  </table>

  <?php $this->stop('main_content') ?>