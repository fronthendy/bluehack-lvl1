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
		<section class="mapa">
			<div class="container-fluid">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<h3>Titulo da pagina</h3>
							<p>Sugestão de uso do mapa</p>
							<form id="search-map" action="#" method="post">
								<label for="">Buscar por CEP</label>
								<input type="text" name="cpf" value="" class="form-control">
								<label for="">Buscar por bairro</label>
								<input type="text" name="cpf" value="" class="form-control">
								<label for="">Buscar por endereço</label>
								<input type="text" name="cpf" value="" class="form-control">
								<button type="submit" class="btn btn-primary">Pesquisar</button>
							</form>
						</div>
						<div class="col-sm-9 col-xs-12 mapa-iframe">
							<div class="row">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14626.707154428448!2d-46.6492849!3d-23.580049!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb148aad01b411ba7!2sIBM+Brasil!5e0!3m2!1spt-BR!2sus!4v1490504767543" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
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
