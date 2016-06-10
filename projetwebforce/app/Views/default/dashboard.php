<?php $this->layout('layoutback', ['title' => 'Dashboard']) ?>

<?php $this->start('main_content') ?>



<h4>lise des posts</h4>  
<table class="table">
    <thead>
      <tr>
        <th>Nume ID</th>
        <th>Titre</th>
        <th>Content</th>
        <th>auteur</th>
        <th>Date de creation</th>
        <th>Modifier</th>
        <th>Supprimer</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($poste as $post) { ?>
        <tr>
            <td><a><?php echo $post['id']; ?></a></td>    
            <td><?php echo $post['nom']; ?></td>
            <td><?php echo $post['espece'];?> [...].</td>
            <td><?php echo $post['race']; ?></td>
            <td><?php echo substr($post['description'],0,70); ?> [...].</td>
            <td><?php echo $post['created_at']; ?></td>
            <td><a href="">Delete</a></td>
         </tr>
      <?php } ?>
    </tbody>
  </table>

  <?php $this->stop('main_content') ?>










 



 