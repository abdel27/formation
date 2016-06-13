<?php $this->layout('layout', ['title' => 'forget']) ?>

<?php $this->start('main_content') ?>








<h1>Mot de passe perdu!</h1>s


    <form method="POST" action="<?php echo $this->url('forgetaction'); ?>" id="formforgetpassword">
      <div class="form-group">
        <label for="email">Email*</label>
        <span class="error"><?php if(!empty($errors['email'])) { echo $errors['email']; } ?></span>
        <input type="text" name="email" id="email" class="form-control" value="<?php if(!empty($_POST['email'])) { echo $_POST['email']; } ?>" />
      </div>
      
      <input type="submit" name="submitforgetpassword" value="Envoyer" class="btn btn-default" />
    </form>


<?php $this->stop('main_content') ?>