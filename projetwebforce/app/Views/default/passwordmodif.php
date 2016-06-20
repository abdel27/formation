<?php $this->layout('layout', ['title' => 'Passwordmodif']) ?>

<?php $this->start('main_content') ?>




<h1>Modifier votre mot de passe</h1>

  <form action="" method="post">

   <div class="form-group">
        <label for="newpassword">Votre nouveau mot de passe</label>
        <input type="password" name="newpassword" id="newpassword" class="form-control"/>
   </div>

   <div class="form-group">
        <label for="newpassword2">Confirmer votre mot de passe</label>
        <input type="password" name="newpassword2" id="newpassword2" class="form-control"/>
   </div>    
        <input type="submit" name="submit" value="modifier" class="boutonVert bouton"/>
        
  </form> 

<?php $this->stop('main_content') ?>


