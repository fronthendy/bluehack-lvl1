<!DOCTYPE html>
<html>
	<head>
		<!-- Metadados -->
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BEMO - be more</title>
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="stylesheets/main.css" type="text/css"/>
	</head>
	<body>
		<div class="nav-menu">
				<ul class="">
					<li><a href="mapa.php">Mapa de Feiras</a></li>
					<li><a href="cadastroFeirante.php">Cadastro de Fornecedor</a></li>
					<li><a href="cadastroInteressado.php">Cadastro de Interessados</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
		</div>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button class="menu-anchor">
							 <span></span>
							 <span></span>
							 <span></span>
						 </button>
						<a class="navbar-brand" href="index.php"><img src="img/logo-horizontal-white.png" alt="Logo Bemo"></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="mapa.php">Mapa de Feiras</a></li>
							<li><a href="cadastroFeirante.php">Cadastro de Fornecedor</a></li>
							<li><a href="cadastroInteressado.php">Cadastro de Interessados</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			<div class="clearfix"></div>
		</header>
		<main>
			<section class="part destaque">
				<div class="overlay">
				</div>
				<div class="container">
					<h1>Lorem ipsum dolor sit amet</h1>
					<h3>descrição rapida do negocio, falando umas coisas legais mas sem enrolar muito hehe lorem ipsum</h3>
				</div>
			</section>
			<section class="part sobre">
				<div class="container">
					<div class="col-sm-8">
						<h2>Frase curta sobre a ideia</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
							 et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
							  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
								fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
								mollit anim id est laborum.</p>
					</div>
					<div class="col-sm-4">
						<img src="img/icon-bemo-verde.png" alt="" class="img-responsive"/>
					</div>
				</div>
			</section>
			<section class="part cadastro">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 text-right feirante">
							<div class="box">
								<h3>frase para o feirante</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
									<a href="#" class="btn btn-primary">Cadastro de Fornecedor</a>
							</div>
						</div>
						<div class="col-sm-6 interessado">
							<div class="box">
								<h3>frase para o interessado</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
									<a href="#" class="btn btn-primary">Cadastro de interessado</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="part patrocinadores">
				<div class="container">
					<div class="col-xs-12">
						<h2>Patrocinadores</h2>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<img src="img/logo-example.jpg" class="img-responsive" />
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<img src="img/logo-example.jpg" class="img-responsive" />
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<img src="img/logo-example.jpg" class="img-responsive" />
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<img src="img/logo-example.jpg" class="img-responsive" />
					</div>
				</div>
			</section>
			<footer>
				<div class="container text-center">
					<hr>
					BlueHack 2017 | Desenvolvido por <b>LVL1</b>
				</div>
			</footer>
		</main>
	<!--SCRIPTS-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>
