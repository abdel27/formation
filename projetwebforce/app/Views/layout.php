<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>


	<!-- Meta pour adapter les pages au mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	
	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Droid+Serif:400,700' rel='stylesheet' type='text/css'>
</head>
<<<<<<< HEAD
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
			
			
=======
>>>>>>> 9f254428311202bf935635cd6860546d17026d84

<body>

<<<<<<< HEAD
			<a href="<?php echo $this->url("dashboard");
			?>">dashboard</a>
			<a href="<?php echo $this->url("register");
			?>">S'inscrire</a>
			<a href="<?php echo $this->url("login");
			?>">Se conncter</a>
=======
<div id="wrapper">	
	<div class="container">
		<div class="page-header">
			<nav class="navbar">
			  <div class="container-fluid">
			    <div class="navbar-header">
			     	<h2><a href="#">Animals</a></h2> 
			    </div>
>>>>>>> 9f254428311202bf935635cd6860546d17026d84

			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="#">Consulter les offres</a></li>
			      <li><a href="#">Ajouter des offres</a></li>
			      <li><a href="<?php echo $this->url("register");?>"> S'inscrire</a></li>
			      <li><a href="<?php echo $this->url("register");?>"> Se connecter</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
	

		<section>
			<?= $this->section('main_content') ?>
		</section>

			
		<div class="panel-footer"> 
			<div class="container-fluid">
				<div class="row">
					<!-- <div class="col-md-4"> -->
						<ul>
							<li><a href="#">Consulter les offres</a></li>
							<li><a href="#">Ajouter des offres</a></li>
							<li><a href="<?php echo $this->url("register");?>"> Se connecter</a></li>
						</ul>
					<!-- </div> -->
				</div>	

				<div class="row">
					<!-- <div class="col-md-4"> -->
						<h2>Animals</h2>
					<!-- </div> -->
				</div>

				<div class="row contact">
					<!-- <div class="col-md-4"> -->
						<a href="#">Nous contacter</a>
					<!-- </div> -->
				</div>
			</div>
		</div> 	
	</div>
</div> 
</body>
</html>