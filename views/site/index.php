<!DOCTYPE html>
<html lang="pt-br">
<head>
	<base href="<?= URL_BASE; ?>">
	<meta charset="utf-8">
	<meta http-equiv="content-language" content="pt-br">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="cache-control" content="public"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">

	<!-- Google -->
	<title>ConectaCar</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>

	<link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
	<link rel="canonical" itemprop="url" href="" />

	<?php require "links.php"; ?>
</head>
<body>
	<header class="header">
		<div class="container center">
			<div class="row">
				<div class="col s6 offset-s3">
					<figure class="logo">
						<img src="public/site/img/logo.png">
					</figure>
				</div>
				<div class="col s3"> 
					<p class="links">
					  <a href="#" class="text-white"><span class="fab fa-instagram"></span></a>
					  &nbsp;
					  <a href="#" class="text-white"><span class="fab fa-facebook-square"></span></a>
					</p> 
				</div>
			</div>
			<div class="row text-shadow-07">
				<div class="col s12">
					<h2 class="text-white">CONECTAMOS <br> A SUA <strong>NECESSIDADE</strong> <br> COM NOSSA <strong>SOLUÇÃO</strong></h2>
				</div>
				<div class="col s12">
					<h5 class="text-white">Operacionalizamos e comercializamos a <br> demanda que você precisa</h5> 
				</div>
			</div>
		</div>
	</header>
	<div class="historia">
		<div class="container">
			<div class="row">
				<div class="col l6 m12 s12">
					<figure>
						<img src="public/site/img/historia.png">
					</figure>
				</div>
				<div class="col l6 m12 s12 left-align">
					<p class="upper-brand"> Conheça nossa história</p>
					<p><span class="brand black-text">Conecta</span><span class="brand blue-text">Car</span></p>
					<hr class="divisor">
					<p>
						<br>
						Somos uma empresa formada por profissionais experientes 
						e atuantes de maneira ininterrupta por mais de 10 anos na
						área de comercialização de frotas de pequeno, médio e 
						grande porte.Temos grande experiência no setor automotivo e 
						um conceito de atendimentomoderno e inovador, despontamos 
						no mercado FROTISTA para nos colocar como uma empresa única, 
						no suporte para a melhor decisão de compra.
						<br><br>	
						Operacionalizamos e comercializamos a demanda que você precisa, 
						com objetividade, 
						profissionalismo, sem demagogia e/ou protecionismo.
					</p>
				</div>
			</div>
		</div>
	</div>
	 <div class="vantagens">
		<div class="row">
			<div class="col s12 m12 l6 left-align text-white vantagens-list">
				<p class="upper-vantagens">Tudo que você precisa:</p>
				<h2>Vantagens</h2>
				<br><br>
				<?php require "vantagens-itens.php";?>
			</div>
			<div class="col s12 m12 l6 left-align vantagens-img">
			</div>
		</div>
	</div>
</body>
</html>