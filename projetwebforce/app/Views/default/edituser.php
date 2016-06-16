<?php $this->layout('layoutback', ['title' => 'Edituser']) ?>

<?php $this->start('main_content') ?>



<h4>Modifier un utilisateur</h4>  

 <form action="<?php echo $this->url('edituser'); ?>" method="POST" id="formulaire">



        <div class="form-group">



          <label for="nom">NOM</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['nom'])) { echo $error['nom']; } ?></span>
          <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $user['nom'] ?>" />
        </div>

        <div class="form-group">
          <label for="pseudo">PRENOM</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['prenom'])) { echo $error['prenom']; } ?></span>
          <input type="text" name="prenom" id="prenom" class="form-control" value="<?php if(!empty($user['prenom'])) { echo $user['prenom']; } ?>" />
        </div>
      

        <div class="form-group">
          <label for="pseudo">PSEUDO</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['username'])) { echo $error['username']; } ?></span>
          <input type="text" name="username" id="username" class="form-control" value="<?php if(!empty($user['username'])) { echo $user['username']; } ?>" />
        </div>

        <div class="form-group">
          <label for="email">Email</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['email'])) { echo $error['email']; } ?></span>
          <input type="text" name="email" id="email" class="form-control" value="<?php if(!empty($user['email'])) { echo $user['email']; } ?>" />
        </div>

        <div class="form-group">
          <label for="pseudo">Departement</label>

          <select>
                <option></option>
                <?php
                  //print_r($departements);
                 foreach ($departements as $departement) {
                ?>
                <option class="form-control" value="<?php echo $departement['idep']?>"> <?php echo $departement['nom'] ?>" </option>
                <?php } ?>
          </select>
        
        </div>

        <div class="form-group">
            <label for="password1">Password</label>

            <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
            <span class="error"><?php if(!empty($error['password'])) { echo $error['password']; } ?></span>
            <input type="password" name="password" id="password" class="form-control" value="<?php if(!empty($user['password'])) { echo $user['password']; } ?>" />
        </div>

         <div class="form-group">
            <label for="naissance">Date de naissance</label>

            <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
            <span class="error"><?php if(!empty($error['naissance'])) { echo $error['naissance']; } ?></span>
            <input type="text" name="naissance" id="naissance" class="form-control" value="<?php if(!empty($user['naissance'])) { echo $user['naissance']; } ?>" />
        </div>

        <div class="form-group">
          <label for="role">Role</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['role'])) { echo $error['role']; } ?></span>
          <input type="text" name="role" id="role" class="form-control" value="<?php if(!empty($user['role'])) { echo $user['role']; } ?>" />
        </div>

        <div class="form-group">
          <label for="active">Actif</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['active'])) { echo $error['active']; } ?></span>
          <input type="text" name="active" id="active" class="form-control" value="<?php if(!empty($user['active'])) { echo $user['active']; } ?>" />
        </div>

        <div class="form-group">
          <label for="last">Derniere connection</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['last'])) { echo $error['last']; } ?></span>
          <input type="text" name="last" id="last" class="form-control" value="<?php if(!empty($user['last'])) { echo $user['last']; } ?>" />
        </div>

        <div class="form-group">
          <label for="adresse">Adresse</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['adresse'])) { echo $error['adresse']; } ?></span>
          <input type="text" name="adresse" id="adresse" class="form-control" value="<?php if(!empty($user['adresse'])) { echo $user['adresse']; } ?>" />
        </div>

        <div class="form-group">
          <label for="postal">Code postal</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['postal'])) { echo $error['postal']; } ?></span>
          <input type="text" name="postal" id="postal" class="form-control" value="<?php if(!empty($user['postal'])) { echo $user['postal']; } ?>" />
        </div>

        <div class="form-group">
          <label for="ville">Ville</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['ville'])) { echo $error['ville']; } ?></span>
          <input type="text" name="ville" id="ville" class="form-control" value="<?php if(!empty($user['ville'])) { echo $user['ville']; } ?>" />
        </div>

        <div class="form-group">
          <label for="tel">Telephone</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['tel'])) { echo $error['tel']; } ?></span>
          <input type="text" name="tel" id="tel" class="form-control" value="<?php if(!empty($user['tel'])) { echo $user['tel']; } ?>" />
        </div>
     
        <input type="submit" name="submit" class="btn btn-primary" value="Modifier" />
        
    </form>

    <?php $this->stop('main_content') ?>
