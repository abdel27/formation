
<?php

$this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('main_content') ?>
<?php
print_r($_SESSION);
?>

<form action="" method="POST" id="formulaire">

  <section id="intro">
        <div class="container-fluid text-center intro" >
        <!-- Top content -->
          <div class="top-content">

              <div class="inner-bg">
                  <div class="container">

                      <div class="row">
                          <div class="col-sm-8 col-sm-offset-2 text">
                              <h1><strong>Bootstrap</strong> Login &amp; Register Forms</h1>
                              <div class="description">
                                <p>
                                  This is a free responsive <strong>"login and register forms"</strong> template made with Bootstrap.
                                  Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>,
                                  customize and use it as you like!
                                </p>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-5" style="float:right">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                      <h3>Login to our site</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                      <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                  <!-- formulaire connexion -->
                                  <form role="form" action="" method="post" class="login-form">
                                    <div class="form-group">
                                      <label class="sr-only" for="username">PSEUDO*</label>

                                      <!-- Affichage des message d'erreur si les cntraintes ne sont pas respectée -->
                                      <span class="error"><?php if(!empty($error['username'])) { echo $error['username']; } ?></span>

                                      <!--  champ pseudo -->

                                      <input type="text" name="username" id="username" placeholder="Pseudo"class="form-control" value="<?php if(!empty($_POST['username'])) { echo $_POST['username']; } ?>"/>
                                    </div>

                                      <!-- champ password -->
                                      <div class="form-group">

                                        <label class="sr-only" for="form-password">Password</label>

                                         <!--Affichage des message d'erreur si les cntraintes ne sont pas respectées-->
                                        <span class="error"><?php if(!empty($error['password'])) { echo $error['password']; } ?></span>

                                        <input type="password" name="password" placeholder="Mot de passe" class="form-password form-control" id="password" value="<?php if(!empty($_POST['password'])) { echo $_POST['password']; } ?>">
                                      </div>
                                      <a href="<?php echo $this->url("forget"); ?>">Mot de passe oublié ?</a>
                                      <input type="checkbox" name="souvenir" /><label>Se souvenir de moi</label><br />
                                      <input type="submit" name="submit" class="btn " value="Connexion" />
                                      <input type="submit" name="submit" class="btn " value="Deconnexion" />
                                      <!-- boutton envoi vormulaire -->
                                      <button type="submit" class="btn">Sign in!</button>
                                      <br><p>pas encore membre ? <br> <a href="">Sign up!</a></p>
                                  </form>
                                  </div>
                            </div>

                            <div class="social-login">
                                <h3>...or login with:</h3>
                                <div class="social-login-buttons">
                                  <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-facebook"></i> Facebook
                                  </a>
                                  <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-twitter"></i> Twitter
                                  </a>
                                  <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-google-plus"></i> Google Plus
                                  </a>
                                </div>
                            </div>
                          </div>
                      </div>

                  </div>
              </div>

          </div>
          <p>
            Bienvenue sur le site de Webforce3<br> Si vous aussi vous souhaitez de venir développeur web,<br>inscrivez-vous dès maintenant!
          </p>
          <button type="button" class="btn btn-warning">INSCRIPTIONS</button>

        </div>
      </section>

       <?php $this->stop('main_content') ?>
