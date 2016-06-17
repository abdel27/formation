<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $this->e($title) ?></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Font awesome -->
	<script src="https://use.fontawesome.com/1826dfabfc.js"></script>

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Droid+Serif:400,700' rel='stylesheet' type='text/css'>

	<!-- Lien vers la feuille de styles CSS -->
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>

	<body>


		<!-- HEADER -->
		<header>
		 <div class="container-fluid">
			 <div class="navbar-header">
				 <a href="<?= $this->url("default_home");?>"><h1>Animals</h1></a>
			 </div>

			<ul class="nav navbar-nav navbar-right">
			 	<li><a href="">Fonctionnement</a></li>
			 	<li><a href="">Equipe</a></li>
			 	<li><a href="">Nous contacter</a></li>
		 	</ul>
		</header>


		<!-- WRAPPER ET CONTENT -->

					<?= $this->section('main_content') ?>


		<!-- FOOTER -->
		<footer>
			<nav>
				<ul>
          <li><a href="">Fonctionnement</a></li>
  			 	<li><a href="">Equipe</a></li>
  			 	<li><a href="">Nous contacter</a></li>
				</ul>

				<h2>Animals</h2>
			</nav>
		</footer>

	</body>
</html>
