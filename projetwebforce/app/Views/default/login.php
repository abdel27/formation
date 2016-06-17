
<?php

$this->layout('layoutlogin', ['title' => 'login']) ?>

<?php $this->start('main_content') ?>


<section class="loginWrapper">
  <section class="mainWrapper">
    <div class="titreCentre">
      <h1>Connexion</h1>
      <p>Connectez vous pour acceder au site.</p>
    </div>

    <!-- Formulaire -->
    <form action="" method="POST" id="formulaire">

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

        <input class="bouton boutonVert" type="submit" name="submit" value="Connexion" />
      </div>

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
  <h2>Fonctionnement</h2>
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

  <input class="bouton boutonVert" type="submit" name="submit" value="Inscription" /><br>
  <i class="fa fa-arrow-circle-down fa-3x" aria-hidden="true"></i>
</div>

<div class="titreCentre">
  <h2>Equipe</h2>
</div>

<div class="titreCentre">
  <h2>Contact</h2>
</div>

</section>


<?php $this->stop('main_content') ?>
