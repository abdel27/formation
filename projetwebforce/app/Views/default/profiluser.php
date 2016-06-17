<?php $this->layout('layout', ['title' => 'Mon profil']) ?>

<?php $this->start('main_content') ?>


<!-- Identité de l'utilisateur -->
	<div class="mainWrapper contentUser">
		<img class="imageUser" src="http://placehold.it/215x215" alt="Image test" />

		<div class="user">
			<div class="titreUser">
				<h1>John Doe (Dept)</h1>
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</div>

			<div class="nomUser">
				<div class="boldAnnonce">
					<p class="txtBold">Pseudo :</p>
					<p>JohnnyDoe1</p>
				</div>

				<div class="boldAnnonce">
					<p class="txtBold">Email :</p>
					<p>jdoe@toutotu.com</p>
				</div>

				<div class="boldAnnonce">
					<p class="txtBold">Inscrit depuis :</p>
					<p>01/04/2016</p>
				</div>
			</div>
		</div>
	</div>

<!-- Nombre d'annonces mises en ligne -->
	<h2>Annonces mise en ligne (nombre)</h2>

<!-- Affichage des résultats -->
<div class="homeWrapper">
	<?php foreach ($annonces as $annonce) { ?>


	<article class="detailAnnonce">
		<img class="imageDetail" src="http://placehold.it/720x360" alt="" />
			<div class="texteAnnonceHome">
				<div class="titreUser">
					<h3><?= $annonce['nom']; ?></h3>
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				</div>
				<div class="descriptionAnnonce">
					<div class="boldAnnonce">
						<p class="txtBold">Espèce :</p>
						<p class="txtBold">Race :</p>
						<p class="txtBold">Age :</p>
						<p class="txtBold">Sexe :</p>
						<p class="txtBold">LOF :</p>
				    <p class="txtBold">Activités :</p>
				    <p class="txtBold">Ancedotes :</p>
				    <p class="txtBold">Qualités :</p>
					</div>

					<div class="LightAnnonce">
						<p class="txtLight">Espèce</p>
						<p class="txtLight">Race</p>
						<p class="txtLight">Age</p>
						<p class="txtLight">Sexe</p>
						<p class="txtLight">LOF</p>
						<p class="txtLight">Activités</p>
						<p class="txtLight">Ancedotes</p>
						<p class="txtLight">Qualités</p>
					</div>
				</div>

				<!-- Boutons consultation et suppression -->
				<div class="titreCentre">
					<input class="bouton boutonBleu" type="button" name="button" value="Consulter">
					<input class="bouton boutonRouge" type="button" name="button" value="Supprimer">
				</div>
			</div>
	</article>
<?php } ?>
</div>


<?php $this->stop('main_content') ?>
