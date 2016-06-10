
<?php 

$this->layout('layoutback', ['title' => 'login']) ?>

<?php $this->start('main_content') ?>
<?php
print_r($_SESSION);
?>

<form action="" method="POST" id="formulaire">
      

        <div class="form-group">
          <label for="pseudo">PSEUDO*</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['pseudo'])) { echo $error['pseudo']; } ?></span>
          <input type="text" name="pseudo" id="pseudo" class="form-control" value="<?php if(!empty($_POST['pseudo'])) { echo $_POST['pseudo']; } ?>" />
        </div>

        

        <div class="form-group">
            <label for="password">Password*</label>

            <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
            <span class="error"><?php if(!empty($error['password'])) { echo $error['password']; } ?></span>
            <input type="password" name="password" id="password" class="form-control" value="<?php if(!empty($_POST['password'])) { echo $_POST['password']; } ?>" />
        </div>
        <a href="remore.php">Mot de passe oublié</a>
        <label>Se souvenir de moi ?</label><input type="checkbox" name="souvenir" /><br />
        <input type="submit" name="submit" class="btn btn-primary" value="CONNEXION" />
        <a class="btn btn-primary" href="deconnexion.php">DECONEXION</a>

</form>


 <?php $this->stop('main_content') ?>
        