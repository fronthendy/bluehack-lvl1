<!DOCTYPE html>
<html>
	<head>
		<!-- Metadados -->
		<meta charset="utf-8"/>
		<title>BEMO - Mapa de Alimentos oferecidos</title>
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="stylesheets/main.css" type="text/css"/>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo-horizontal-white.png" alt="Logo Bemo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Sobre</a></li>
						<li><a href="#">Patrocinadores</a></li>
						<li class="active"><a href="mapa.php">Mapa de Feiras</a></li>
						<li><a href="#">Cadastro</a></li>
            <li><a href="#">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		<div class="clearfix"></div>
    </header>
		<section class="cadastro-form">
			<div class="container">
				<div class="col-sm-8">
					<h2>Cadastro de Fornecedor</h2>
					<form id="cadastro_feirante" action="#" method="post">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" class="form-control" value="">
						<label for="cpf_cnpj">CPF/CNPJ</label>
						<input type="text" name="cpf_cnpj" class="form-control" value="">
					</form>
				</div>
				<div class="col-sm-4">

				</div>
			</div>
		</section>
		<footer>
			<div class="container text-center">
				BlueHack 2017 | Desenvolvido por <b>LVL1</b>
			</div>
		</footer>
	<!--SCRIPTS-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>
