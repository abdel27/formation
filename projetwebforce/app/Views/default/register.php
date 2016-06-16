<?php

$this->layout('layout', ['title' => 'register']) ?>

<?php $this->start('main_content') ?>





 <form action="<?php echo $this->url('registeraction'); ?>" method="POST" id="formulaire">
   <div class="form-box">
     <div class="form-top">
       <div class="form-top-left">
         <h3>Sign up now</h3>
           <p>Fill in the form below to get instant access:</p>
       </div>
       <div class="form-top-right">
         <i class="fa fa-pencil"></i>
       </div>
       </div>
       <div class="form-bottom">
     <form role="form" action="" method="post" class="registration-form">

       <!-- saisie du nom -->
       <div class="form-group">
         <label class="sr-only" for="nom">Nom</label>

         <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
         <span class="error"><?php if(!empty($error['nom'])) { echo $error['nom']; } ?></span>
           <input type="text" name="nom" placeholder="Nom..." class="form-first-name form-control" id="nom" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">
         </div>

         <!-- saisie du prenom -->
         <div class="form-group">
           <label class="sr-only" for="prenom">Prenom</label>
           <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
           <span class="error"><?php if(!empty($error['prenom'])) { echo $error['prenom']; } ?></span>
           <input type="text" name="form-last-name" placeholder="Prenom..." class="form-last-name form-control" id="form-last-name">
         </div>
         <div class="form-group">
           <label class="sr-only" for="username">Pseudo *</label>

           <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
           <span class="error"><?php if(!empty($error['username'])) { echo $error['username']; } ?></span>
           <input type="text" name="username" id="username" placeholder="Pseudo ..." class="form-control" value="<?php if(!empty($_POST['username'])) { echo $_POST['username']; } ?>" />
         </div>

         <!-- saisie de lemail -->
         <div class="form-group">
           <label class="sr-only" for="email">Email</label>
           <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
           <span class="error"><?php if(!empty($error['email'])) { echo $error['email']; } ?></span>

           <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="email" value="<?php if(!empty($_POST['email'])) { echo $_POST['email']; } ?>"/>
         </div>

         <div class="form-group">
           <label for="pseudo">Departement *</label>

           <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
           <span class="error"><?php if(!empty($error['departement'])) { echo $error['departement']; } ?></span>
           <select class="selectpicker">
             <option>Mustard</option>
             <option>Ketchup</option>
             <option>Relish</option>
           </select>

           <!-- <input type="text" name="departement" id="departement" class="form-control" value="<?php if(!empty($_POST['departement'])) { echo $_POST['departement']; } ?>" /> -->
         </div>
         <div class="form-group">
           <label for="password1">Mot de passe *</label>

           <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
           <span class="error"><?php if(!empty($error['password'])) { echo $error['password']; } ?></span>
           <input type="password" name="password" id="password" placeholder="Saisissez votre mot de passe ..."class="form-control" value="<?php if(!empty($_POST['password'])) { echo $_POST['password']; } ?>" />
         </div>

        <div class="form-group">
           <label for="password2">Confirmation du mot de passe *</label>

           <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
           <span class="error"><?php if(!empty($error['password2'])) { echo $error['password2']; } ?></span>
           <input type="password" name="password2" id="password2" class="form-control" placeholder="Saisissez votre mot de passe ..." value="<?php if(!empty($_POST['password2'])) { echo $_POST['password2']; } ?>" />
       </div>
       <input type="submit" name="submit" class="btn btn-primary" value="Envoyer" />
     </form>
   </div>
   </div>

 </div>
 </form>
     <?php $this->stop('main_content') ?>
