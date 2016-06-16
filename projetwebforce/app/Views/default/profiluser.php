<?php $this->layout('layout', ['title' => 'Mon profil']) ?>

<?php $this->start('main_content') ?>


<!-- Identité de l'utilisateur -->
	<div class="contentUser">
		<img class="imageUser" src="http://placehold.it/522x345" alt="Image test" />
		
		<div class="user">
			<h2>John Doe (01) <a href="#"> <i class="fa fa-cog" aria-hidden="true"></i> </a></h2>

			<ul class="nomuser">
				<li><span class="txtBold">Pseudo :</span> John Doe</li>
				<li><span class="txtBold">E-mail :</span> jdoe@toutou.com</li>
				<li><span class="txtBold">Inscrit depuis :</span> 01/04/2016</li>
			</ul>
		</div>
	</div>
	}


<!-- Nombre d'annonces mises en ligne -->
	<h3>Annonce(s) mise(s) en ligne (2)</h3>

<!-- Affichage des résultats -->
<div class="homeWrapper">

<?php foreach ($annonces as $annonce) { ?>

	<article class="detailAnnonce">
		<img class="imageDetail" src="http://placehold.it/360x180" alt="" />
			<div class="texteDetailAnnonce">
				<h3><?php echo $annonce['nom']; ?> <a href="#"> <i class="fa fa-cog" aria-hidden="true"></i> </a></h3>
				
				<div class="descriptionAnnonce">
					<div class="boldAnnonce">
						<p class="txtBold">Espèce : <?php echo $annonce['idespece']; ?> </p>
						<p class="txtBold">Race : <?php echo $annonce['idrace']; ?></p>
						<p class="txtBold">Age : <?php echo $annonce['age']; ?></p>
						<p class="txtBold">Sexe : <?php echo $annonce['sexe']; ?></p>
						<p class="txtBold">LOF : <?php echo $annonce['lof']; ?></p>
				        <p class="txtBold">Activités : <?php echo $annonce['description']; ?></p>
				        <p class="txtBold">Anedoctes :</p>
				        <p class="txtBold">Qualités : <?php echo $annonce['qualites']; ?></p>
					</div>
				</div>
				
					<a class="bouton boutonConsulter" href="#">Consulter</a>
					<a class="bouton boutonSupprimer" href="<?php $id = $annonce['id'] ; echo $this->url("deleteannonce", ["id" => $id]);?>">Supprimer</a>
				
			</div>		
	</article>

<?php }

?>
	
</div>

<?php $this->stop('main_content') ?>