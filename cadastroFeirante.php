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
						<li><a href="mapa.php">Mapa de Feiras</a></li>
						<li class="active"><a href="cadastroFeirante.php">Cadastro de Fornecedor</a></li>
						<li><a href="cadastroInteressado.php">Cadastro de Interessados</a></li>
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
							<h2>Cadastro de Fornecedor</h2>
					</div>
					<div class="col-sm-8">
						<form id="cadastro_feirante" action="#" method="post">
							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" name="nome" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="cpf_cnpj">CPF/CNPJ</label>
								<input type="text" name="cpf_cnpj" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="feira">Feira</label>
								<select id="feira" class="form-control" name="feira">
									<option value="" disabled selected>Selecione uma opção</option>
									<option value="">Feira 1</option>
									<option value="">Feira 2</option>
									<option value="">Feira 3</option>
								</select>
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
						</form>
					</div>
					<div class="col-sm-4">
							<p class="desc-form">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<ul>
								<li> Lorem Ipsum dolor sit</li>
								<li> Lorem Ipsumdolor </li>
								<li> Lorem Ipsumdolor sit</li>
								<li> Lorem Ipdolor sit</li>
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
