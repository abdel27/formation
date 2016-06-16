<?php $this->layout('layout', ['title' => 'Mon profil']) ?>

<?php $this->start('main_content') ?>


<!-- Identité de l'utilisateur -->
	<div class="contentUser">
		<img class="imageUser" src="http://placehold.it/215x215" alt="Image test" />

		<div class="user">
			<h1>John Doe (Dept)</h1>

			<ul class="nomUser">
				<li><span class="txtBold">Pseudo :</span> John Doe</li>
				<li><span class="txtBold">E-mail :</span> jdoe@toutou.com</li>
				<li><span class="txtBold">Inscrit depuis :</span> 01/04/2016</li>
			</ul>
		</div>
		<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
	</div>

<!-- Nombre d'annonces mises en ligne -->
	<h2>Annonce mise en ligne (nombre)</h2>

<!-- Affichage des résultats -->
<div class="homeWrapper">
	<article class="detailAnnonce">
		<img class="imageDetail" src="http://placehold.it/360x180" alt="" />
			<div class="texteAnnonceHome">
				<h3>Nom de l'animal</h3>
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
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
				<input class="bouton boutonBleu" type="button" name="button" value="Consulter">
				<input class="bouton boutonRouge" type="button" name="button" value="Supprimer">
			</div>
	</article>

	<article class="detailAnnonce">
		<img class="imageDetail" src="http://placehold.it/360x180" alt="" />
			<div class="texteAnnonceHome">
				<h3>Nom de l'animal</h3>
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
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
				<input class="bouton boutonBleu" type="button" name="button" value="Consulter">
				<input class="bouton boutonRouge" type="button" name="button" value="Supprimer">
			</div>
	</article>
</div>


<?php $this->stop('main_content') ?>
