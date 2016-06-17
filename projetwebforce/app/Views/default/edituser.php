<?php $this->layout('layoutback', ['title' => 'Edituser']) ?>

<?php $this->start('main_content') ?>



<h4>Modifier un utilisateur</h4>  

 <form action="" method="POST" id="formulaire">



        <div class="form-group">
          <label for="nom">Id</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="id" id="id" class="form-control" value="<?php echo $user['id'] ?>" />
        </div>


        <div class="form-group">
          <label for="nom">NOM</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $user['nom'] ?>" />
        </div>

        <div class="form-group">
          <label for="pseudo">PRENOM</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $user['prenom'];  ?>" />
        </div>

        <div class="form-group">
            <label for="naissance">Date de naissance</label>

            <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
            
            <input type="text" name="naissance" id="naissance" class="form-control" value="<?php  echo $user['created_at'];  ?>" />
        </div> 
      

        <div class="form-group">
          <label for="pseudo">PSEUDO</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="username" id="username" class="form-control" value="<?php echo $user['username'];  ?>" />
        </div>

        <div class="form-group">
          <label for="email">Email</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="email" id="email" class="form-control" value="<?php echo $user['email'];  ?>" />
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
            <label for="naissance">Date de naissance</label>

            <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
            
            <input type="text" name="naissance" id="naissance" class="form-control" value="<?php  echo $user['date_naissance'];  ?>" />
        </div> 

        <div class="form-group">
          <label for="role">Role</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="role" id="role" class="form-control" value="<?php  echo $user['role'];  ?>" />
        </div>

        <div class="form-group">
          <label for="active">Actif</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="active" id="active" class="form-control" value="<?php  echo $user['active'];  ?>" />
        </div>

        <div class="form-group">
          <label for="last">Derniere connection</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="last" id="last" class="form-control" value="<?php  echo $user['last_connection'];  ?>" />
        </div>

        <div class="form-group">
          <label for="adresse">Adresse</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="adresse" id="adresse" class="form-control" value="<?php echo $user['adresse'];  ?>" />
        </div>

        <div class="form-group">
          <label for="postal">Code postal</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="postal" id="postal" class="form-control" value="<?php echo $user['codepostal'];  ?>" />
        </div>

        <div class="form-group">
          <label for="ville">Ville</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="ville" id="ville" class="form-control" value="<?php echo $user['city'];  ?>" />
        </div>

        <div class="form-group">
          <label for="tel">Telephone</label>

          <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
          
          <input type="text" name="tel" id="tel" class="form-control" value="<?php echo $user['tel'];  ?>" />
        </div>
     
        <input type="submit" name="submit" class="btn btn-primary" value="Modifier" />
        
    </form>

    <?php $this->stop('main_content') ?>
