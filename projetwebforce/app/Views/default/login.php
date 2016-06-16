
<?php 

$this->layout('layoutback', ['title' => 'login']) ?>

<?php $this->start('main_content') ?>
<?php
print_r($_SESSION);
?>

<form action="" method="POST" id="formulaire">
      

        <div class="form-group">
          <label for="username">PSEUDO*</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['username'])) { echo $error['username']; } ?></span>
          <input type="text" name="username" id="username" class="form-control" value="<?php if(!empty($_POST['username'])) { echo $_POST['username']; } ?>" />
        </div>

        

        <div class="form-group">
            <label for="password">Password*</label>

            <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
            <span class="error"><?php if(!empty($error['password'])) { echo $error['password']; } ?></span>
            <input type="password" name="password" id="password" class="form-control" value="<?php if(!empty($_POST['password'])) { echo $_POST['password']; } ?>" />
        </div>
        <a href="<?php echo $this->url("forget");
      ?>">Mot de passe oublié</a>
        <label>Se souvenir de moi ?</label><input type="checkbox" name="souvenir" /><br />
        <input type="submit" name="submit" class="btn btn-primary" value="CONNEXION" />
        <a class="btn btn-primary" href="deconnexion.php">DECONEXION</a>

</form>


 <?php $this->stop('main_content') ?>
        