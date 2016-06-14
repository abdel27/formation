<?php $this->layout('layoutback', ['title' => 'Dashboard Animals']) ?>

<?php $this->start('main_content') ?>



<h4>Liste des annonces</h4>
<table class="table tableBackOffice">
    <thead>
      <tr>

        <th>Identifiant</th>
        <th>Nom</th>
        <th>Espece</th>
        <th>Race</th>
        <th>Sexe</th>
        <th>Age</th>
        <th>LOF</th>
        <th>Description</th>
        <th>Date de creation</th>
        <th>Action</th>


      </tr>
    </thead>
    <tbody>
      <?php foreach ($annonce as $post) { ?>
        <tr>
            <td><a><?php echo $post['id']; ?></a></td>
            <td><?php echo $post['nom']; ?></td>
            <td><?php echo $post['espece'];?> [...].</td>
            <td><?php echo $post['race']; ?></td>
            <td><?php echo $post['sexe']; ?></td>
            <td><?php echo $post['age']; ?></td>
            <td><?php echo $post['lof']; ?></td>
            <td><?php echo substr($post['description'],0,70); ?> [...].</td>
            <td><?php echo $post['created_at']; ?></td>
            <td><a class="boutonModifier" href="<?php echo $this->url("edituser");?>">Modifier</a></td>
            <td><a class="boutonSupprimer" href="<?php echo $this->url("deleteuser");?>">Supprimer</a></td>

         </tr>
      <?php } ?>
    </tbody>
  </table>

  <?php $this->stop('main_content') ?>
