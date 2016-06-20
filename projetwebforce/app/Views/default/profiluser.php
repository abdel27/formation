<?php $this->layout('layout', ['title' => 'Mon profil']) ?>

<?php $this->start('main_content') ?>


<!-- Identité de l'utilisateur -->
	<div class="contentUser">
		<img class="imageUser" src="http://placehold.it/215x215" alt="Image test" />

		<div class="user">
			<div class="titreUser">
				<h2>John Doe (01)</h2>

				<a href="#">
					<i class="fa fa-cog fa-2x" aria-hidden="true"></i>
				</a>
			</div>


			<div class="nomUser">
				<div class="nomUserInfo">
					<div>
						<p class="txtBold">Pseudo :</p>
					</div>
					<div class="txtLight">
						<p>JohnnyDoe01</p>
					</div>
				</div>

				<div class="nomUserInfo">
					<div>
						<p class="txtBold">Email :</p>
					</div>
					<div class="txtLight">
						<p>jdoe@gmail.com</p>
					</div>
				</div>

				<div class="nomUserInfo">
					<div>
						<p class="txtBold">Inscrit depuis :</p>
					</div>
					<div class="txtLight">
						<p>10/03/2015</p>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Nombre d'annonces mises en ligne -->
	<h3>Annonce(s) mise(s) en ligne (nombre)</h3>

<!-- Affichage des résultats -->
<div class="homeWrapper">

<?php foreach ($annonces as $annonce) { ?>

	<article class="detailAnnonce">
		<img class="imageDetail" src="http://placehold.it/720x360" alt="iouyglftcrxcfygvuhbijnoiulygftidru" />
			<div class="texteDetailAnnonce">
				<h3><?php echo $annonce['nom']; ?></h3>

				<div class="descriptionAnnonce">
					<div class="boldAnnonce">
						<p class="txtBold">Espèce : </p>
						<p class="txtBold">Race : </p>
						<p class="txtBold">Age : </p>
						<p class="txtBold">Sexe : </p>
						<p class="txtBold">LOF : </p>
				    <p class="txtBold">Activités : </p>
				    <p class="txtBold">Qualités : </p>
					</div>

					<div class="lightAnnonce">
						<p> <?= $annonce['idespece']; ?></p>
						<p><?= $annonce['idrace']; ?></p>
						<p><?= $annonce['age']; ?></p>
						<p><?= $annonce['sexe']; ?></p>
						<p><?= $annonce['lof']; ?></p>
						<p><?= $annonce['description']; ?></p>
						<p><?= $annonce['qualites']; ?></p>
					</div>
				</div>

				<div class="boutonsAnnonce">
						<a class="bouton boutonBleu" href="#">Consulter</a>
						<a class="bouton boutonRouge" href="<?php $id = $annonce['id'] ; echo $this->url("deleteannonce", ["id" => $id]);?>">Supprimer</a>
				</div>
			</div>
	</article>

<?php } ?>

</div>

<?php $this->stop('main_content') ?>
