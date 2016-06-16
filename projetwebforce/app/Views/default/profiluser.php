<?php $this->layout('layout', ['title' => 'Mon profil']) ?>

<?php $this->start('main_content') ?>


<!-- Identité de l'utilisateur -->
	<div class="contentUser">
		<img class="imageUser" src="http://placehold.it/522x345" alt="Image test" />

		<div class="user">
			<h2>John Doe (01)</h2>

			<ul class="nomuser">
				<li><span class="txtBold">Pseudo :</span> John Doe</li>
				<li><span class="txtBold">E-mail :</span> jdoe@toutou.com</li>
				<li><span class="txtBold">Inscrit depuis :</span> 01/04/2016</li>
			</ul>
		</div>
		<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
	</div>

<!-- Nombre d'annonces mises en ligne -->
	<h3>Annonce mise en ligne (2)</h3>

<!-- Affichage des résultats -->
<div class="homeWrapper">
	<article class="detailAnnonce">
		<img class="imageDetail" src="http://placehold.it/360x180" alt="" />
			<div class="texteAnnonceHome">
				<h3>Nom de l'animal</h3>
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				<div class="descriptionAnnonce">
					<div class="boldAnnonce">
						<p class="txtBold">Espèce</p>
						<p class="txtBold">Race</p>
						<p class="txtBold">Age</p>
						<p class="txtBold">Sexe</p>
						<p class="txtBold">LOF :</p>
				        <p class="txtBold">Activités :</p>
				        <p class="txtBold">Ancedotes :</p>
				        <p class="txtBold">Qualités :</p>
					</div>
				</div>
				<button class="bouton boutonConsulter" type="button" name="button">Consulter</button>
				<button class="bouton boutonSupprimer" type="button" name="button">Supprimer</button>
			</div>		
	</article>

	<article class="detailAnnonce">
		<img class="imageDetail" src="http://placehold.it/360x180" alt="" />
			<div class="texteAnnonceHome">
				<h3>Nom de l'animal</h3>
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				<div class="descriptionAnnonce">
					<div class="boldAnnonce">
						<p class="txtBold">Espèce</p>
						<p class="txtBold">Race</p>
						<p class="txtBold">Age</p>
						<p class="txtBold">Sexe</p>
						<p class="txtBold">LOF :</p>
				        <p class="txtBold">Activités :</p>
				        <p class="txtBold">Ancedotes :</p>
				        <p class="txtBold">Qualités :</p>
					</div>
				</div>
				<button class="bouton boutonConsulter" type="button" name="button">Consulter</button>
				<button class="bouton boutonSupprimer" type="button" name="button">Supprimer</button>
			</div>		
	</article>	
</div>



		   
			
	
	


<?php $this->stop('main_content') ?>