<!DOCTYPE html>
<html>
	<head>
		<!-- Metadados -->
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BEMO - Mapa de Alimentos oferecidos</title>
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
						<li class="active"><a href="mapa.php">Mapa de Feiras</a></li>
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
			<section class="mapa">
				<div class="container-fluid">
						<div class="row">
							<div class="col-sm-4 col-xs-12">
								<h3>Mapa de Feiras</h3>
								<p>Aqui você pode procurar por pontos mais próximos de distribuição de alimentos.</p>
								<form id="search-map" action="#" method="post">
									<div class="form-group">
										<label for="">Buscar por CEP</label>
										<input type="text" name="cpf" value="" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Buscar por bairro</label>
										<input type="text" name="cpf" value="" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Buscar por endereço</label>
										<input type="text" name="cpf" value="" class="form-control">
									</div>
									<button type="submit" class="btn btn-primary pull-right">Pesquisar</button>
									<div class="clearfix"></div>
								</form>
							</div>
							<div class="col-sm-8 col-xs-12 mapa-iframe">
							</div>
						</div>
				</div>
			</section>
			<footer>
				<div class="container text-center">
					BlueHack 2017 | Desenvolvido por <b>LVL1</b>
				</div>
			</footer>
		</main>
	<!--SCRIPTS-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>
