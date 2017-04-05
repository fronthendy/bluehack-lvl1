<!DOCTYPE html>
<html>
	<head>
		<!-- Metadados -->
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BEMO - Cadastro de interessados</title>
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
						<li class="active"><a href="cadastroInteressado.php">Cadastro de Interessados</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		<div class="clearfix"></div>
    </header>
		<main>
			<section class="cadastro-form">
				<div class="container">
					<div class="col-xs-12">
							<h2>Cadastro de Interessados</h2>
					</div>
					<div class="col-sm-8">
						<form id="cadastro_feirante" action="#" method="post">
							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" name="nome" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="endereco">Endereço</label>
								<input type="text" name="endereco" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="senha">Senha</label>
								<input type="password" name="senha" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="confSenha">Confirmar senha</label>
								<input type="password" name="confSenha" class="form-control" value="">
							</div>
							<div class="from-group">
								<button type="submit" class="btn btn-primary pull-right">ENVIAR</button>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
					</div>
					<div class="col-sm-4">
						<p class="desc-form">Cadastre sua instituição educacional ou ONG para acharmos o fornecedor mais próximo de seu endereço e facilitar a retirada dos produtos doados.</p>
						<ul>
							<li> Fica informado sobre os pontos de distribuição de alimentos</li>
							<li> Evita desperdicio de comida </li>
							<li> Reduz lixo da cidade</li>
						</ul>
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
	<script src="js/main.js" charset="utf-8"></script>
	</body>
</html>
