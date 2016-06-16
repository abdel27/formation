<?php $this->layout('layout', ['title' => 'Generate Password']) ?>

<?php $this->start('main_content') ?>

<p>Veuillez cliquer sur le lien ci-dessous</p>';


<p><a href="<?php $token = $user['token'] & $email = $user['email']; echo $this->url("passwordmodif");
            ?>">ICI</a></p>';










<?php $this->stop('main_content') ?>
