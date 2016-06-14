<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>BACKOFFICE</title>

  
  <link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <header>
        <nav>
          <ul>
            <li><a href="<?php echo $this->url("dashboard");?>">Dashboard</a></li>
            <li><a href="<?php echo $this->url("login");?>">Connexion</a></li>
            <li><a href="<?php echo $this->url("register");?>">S'inscrire</a></li>
            <li><a href="<?php echo $this->url("logout");?>">Deconnexion</a></li>
            <li><a href="<?php echo $this->url("manageuser");?>">Gestion des utilisateurs</a></li>
            
          </ul>
        </nav>
      
      <?php 
      debug($w_user);
      ?>
    </header>
    <section>
      <?= $this->section('main_content') ?>
     
    

    

    <footer>
    </footer>
  </div>
</body>
</html>