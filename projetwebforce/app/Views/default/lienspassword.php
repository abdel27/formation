<?php $this->layout('layout', ['title' => 'Generate Password']) ?>

<?php $this->start('main_content') ?>
<div class='mainWrapper'>
<div class='titreCentre'>
<p>Veuillez cliquer sur le lien ci-dessous</p>


<p><a class='lienTxt' href="<?php $token = $user['token'] ; $email = $user['email']; echo $this->url("passwordmodif");
            ?>">ICI</a></p>

</div>

</div>







<?php $this->stop('main_content') ?>
