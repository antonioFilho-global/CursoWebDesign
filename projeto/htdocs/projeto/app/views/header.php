<!--Arquivo em PHP contendo o 
	conteúdo estático do header-->

<!doctype html>
<html>
<!-- o Bootstrap esta na pasta public -->
<head>
	<title>Projeto01</title>
	<meta charset="utf-8">

	<!-- CSS -->
	<link href="public/css/bootstrap.min.css" rel="stylesheet">
	<!--icone na aba do navegador -->
	<link rel="shortcut icon"  href="app/public/img/logo.jpg" sizes="32*32" type="imagem/jpg">
	<!--Meu CSS -->
	<link href="app/public/css/style.css" rel="stylesheet">
</head>

<body>
	<!--Definindo como serar exibito conforme diferentes tipos de telas navbar-expand-lg" -->
	<!--fixed-top fixa o menu no topo 
		fixed-bottom fixa o menu na base  
	-->
	<header>

		<nav class="navbar navbar-expand-lg fixed-top bg-success navbar-inverse navbar-dark">
			<a href="#" class="navbar-brand"><img width="50px" src="app/public/img/logo.svg"></a>
			<!--o button criarar o menu com icone dentro da teg span, que abrirar o conteudo da div de id menu,
			Muito útil em telas menos de smartphones  -->	
			<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Links -->
			<div id="menu" class="collapse navbar-collapse">
				<!-- tag ul cria lista nao numerada -->
				<!--ml-md-auto Faz o alinhamento dos links a direita -->
				<ul class="navbar-nav ml-md-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#"><h2>Home</h2></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#"><h2>Quem Somos</h2></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#"><h2>Serviços</h2></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#"><h2>Fale Conosco</h2></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<br><br>
	<br><br>
