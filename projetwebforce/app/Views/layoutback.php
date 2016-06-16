<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Backoffice Animals</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Style backoffice -->
  <link rel="stylesheet" href="<?= $this->assetUrl('css/styleback.css') ?>">

  <!-- Font awesome -->
  <script src="https://use.fontawesome.com/1826dfabfc.js"></script>

  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="container">
    <header>
        <!-- Menu haut de page -->
        <nav class="navTopRight">
          <ul>
            <li><a href="<?php echo $this->url("login");?>">Connexion</a></li>
            <li><a href="<?php echo $this->url("register");?>">S'inscrire</a></li>
            <li><a href="<?php echo $this->url("logout");?>">Deconnexion</a></li>
            <li><a href="<?php echo $this->url("default_home");?>">Retour au site normal</a></li>
            <li><a href="<?php echo $this->url("manageuser");?>">Gestion des utilisateurs</a></li>
          </ul>

          <h1><a class="mainTitle" href="<?php echo $this->url("dashboard");?>">Dashboard Animals</a></h1>

          <!-- Bloc principal de navigation -->
          <section class="navbig">
            <div>
              <h2>(nombre)</h2><br>
              <a href="<?php echo $this->url("manageuser");?>">Utilisateurs en ligne</a>
            </div>

            <div>
              <h2>(nombre)</h2><br>
              <a href="<?php echo $this->url("manageuser");?>">Utilisateurs bloqués</a>
            </div>

            <div>
              <h2>(nombre)</h2><br>
              <a href="<?php echo $this->url("manageuser");?>">Annonces en ligne</a>
            </div>

            <div>
              <h2>(nombre)</h2><br>
              <a href="<?php echo $this->url("manageuser");?>">Annonces en attente</a>
            </div>
          </section>
        </nav>
    </header>

    <section>
      <?= $this->section('main_content') ?>
    </section>

  </div>
</body>
</html>
