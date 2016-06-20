
<?php

$this->layout('layoutlogin', ['title' => 'login']) ?>

<?php $this->start('main_content') ?>

<section class="loginWrapper">
  <section class="mainWrapper">
    <div class="titreCentre">
      <h1>Connexion</h1>
    </div>

    <!-- Formulaire -->
    <form class="form-inline" action="" method="POST" id="formulaire">

      <div class="form-group">
        <label for="username">Pseudo *</label><br>
        <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
        <span class="error"><?php if(!empty($error['username'])) { echo $error['username']; } ?></span>
        <input type="text" name="username" id="username" class="form-control" value="<?php if(!empty($_POST['username'])) { echo $_POST['username']; } ?>" />
      </div>

      <div class="form-group">
        <label for="password">Mot de passe *</label><br>
        <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
        <span class="error"><?php if(!empty($error['password'])) { echo $error['password']; } ?></span>
        <input type="password" name="password" id="password" class="form-control" value="<?php if(!empty($_POST['password'])) { echo $_POST['password']; } ?>" />

      </div>

      <input class="bouton boutonVert" type="submit" name="submit" value="Connexion" />

      <!-- Texte et bouton centrés -->
      <div class="titreCentre">
      <input type="checkbox" name="souvenir" /><label>Se souvenir de moi</label><br>
        <a class="lienTxt" href="<?php echo $this->url("register");?>">Pas encore de compte ?</a><br>
      </div>
    </form>
  </section>

  <div id="container" class="imgLogin">
    <div class="img-container">
      <div class="titreCentre positioning">
        <h1>Bienvenue sur le site d'Animals</h1>
        <p>lorem ipsumzo nfofur mofireng, meoln emorgnl eq,vjern emrogiunae ùrmogia ngjorengl reijgnmr lergj naepr meroirnj moerinl g,</p>
        <input class="bouton boutonVert" type="submit" name="submit" value="Inscription" />
      </div>
      <img src="http://placehold.it/1920x700" />
    </div>
  </div>

<div class="titreCentre titreCentreWide">
  <div class="mainWrapper">
    <h2>Fonctionnement</h2>
    <p>zepiuf ifupnz fojngeorn mk nomernsvo mern roig nrzmo in moqr</p>

    <div class="mainWrapper fonctionnementLogin">
      <div class="">
        <i class="fa fa-search fa-5x" aria-hidden="true"></i>
        <p>Etape</p>
      </div>

      <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>

      <div class="">
        <i class="fa fa-list-ul fa-5x" aria-hidden="true"></i>
        <p>Etape</p>
      </div>

      <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>

      <div class="">
        <i class="fa fa-smile-o fa-5x" aria-hidden="true"></i>
        <p>Etape</p>
      </div>
    </div>
  </div>


  <input class="bouton boutonVert" type="submit" name="submit" value="Inscription" /><br>
  <i class="fa fa-arrow-circle-down fa-3x" aria-hidden="true"></i>
</div>

<div class="titreCentre titreCentreWide equipe">
  <div class="mainWrapper">
    <h2>Equipe</h2>
    <p>zepiuf ifupnz fojngeorn mk nomernsvo mern roig nrzmo in moqr</p>

    <div class="equipeInline">
      <div class="">
        <img class="img-circle" src="http://placehold.it/100x100" alt="zijcbznljz knfljk zenf lerkjn" />
        <p class="txtBold">Nom Prénom</p>
        <p class="txtLight">Fonction</p>
      </div>

      <div class="">
        <img class="img-circle" src="http://placehold.it/100x100" alt="zijcbznljz knfljk zenf lerkjn" />
        <p class="txtBold">Nom Prénom</p>
        <p class="txtLight">Fonction</p>
      </div>

      <div class="">
        <img class="img-circle" src="http://placehold.it/100x100" alt="zijcbznljz knfljk zenf lerkjn" />
        <p class="txtBold">Nom Prénom</p>
        <p class="txtLight">Fonction</p>
      </div>

      <div class="">
        <img class="img-circle" src="http://placehold.it/100x100" alt="zijcbznljz knfljk zenf lerkjn" />
        <p class="txtBold">Nom Prénom</p>
        <p class="txtLight">Fonction</p>
      </div>
    </div>
  </div>



  <i class="fa fa-arrow-circle-down fa-3x" aria-hidden="true"></i>
</div>

<div class="titreCentre titreCentreWide ">
  <h2>Contact</h2>
  <p>zepiuf ifupnz fojngeorn mk nomernsvo mern roig nrzmo in moqr</p>

  <section class="mainWrapper loginContactForm">
    <form class="" action="index.html" method="post">
      <div class="form-inline">
        <div class="form-group">
          <label for="prenom">Prénom *</label><br>
          <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['prenom'])) { echo $error['prenom']; } ?></span>
          <input type="text" name="prenom" id="prenom" class="form-control" value="<?php if(!empty($_POST['prenom'])) { echo $_POST['prenom']; } ?>" />
        </div>

        <div class="form-group">
          <label for="nom">Nom *</label><br>
          <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
          <span class="error"><?php if(!empty($error['nom'])) { echo $error['nom']; } ?></span>
          <input type="text" name="nom" id="nom" class="form-control" value="<?php if(!empty($_POST['nom'])) { echo $_POST['prenom']; } ?>" />
        </div>
      </div>

      <div class="form-group">
        <label for="sujet">Sujet *</label><br>
        <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
        <span class="error"><?php if(!empty($error['sujet'])) { echo $error['sujet']; } ?></span>
        <input type="text" name="sujet" id="sujet" class="form-control" value="<?php if(!empty($_POST['sujet'])) { echo $_POST['prenom']; } ?>" />
      </div>

      <div class="form-group">
        <label for="message">Message *</label><br>
        <!--Affichage des message d'erreur si les contraintes ne sont pas respectées-->
        <span class="error"><?php if(!empty($error['message'])) { echo $error['message']; } ?></span>
        <textarea class="form-control" name="message" cols="40" value="<?php if(!empty($_POST['message'])) { echo $_POST['prenom']; } ?>"></textarea>
      </div>
      <input class="bouton boutonVert" type="button" name="name" value="Contacter">
    </form>
  </section>

  <i class="fa fa-arrow-circle-down fa-3x" aria-hidden="true"></i>
</div>
</section>

<?php $this->stop('main_content') ?>
