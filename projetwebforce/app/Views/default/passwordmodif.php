<?php $this->layout('layout', ['title' => 'Passwordmodif']) ?>

<?php $this->start('main_content') ?>




<h1>Modifier votre mot de passe</h1>

  <form method="post">
        <label for="newpassword">Votre nouveau mot de passe</label>
        <input type="password" name="newpassword" id="newpassword"/>

        <label for="newpassword2">Confirmer votre mot de passe</label>
        <input type="password" name="newpassword2" id="newpassword2"/>
       
        <input type="submit" name="submit" value="modifier"/>
        
  </form> 


