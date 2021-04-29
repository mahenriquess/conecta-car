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
		<section>
			<div class="historia">
				<div class="container">
					<div class="row">
						<div class="col l6 m12 s12">
							<figure>
								<img src="public/site/img/historia.png">
							</figure>
						</div>
						<div class="col l6 m12 s12 left-align">
							<p class="upper-title"> Conheça nossa história</p>
							<h3 class="title"><span class="black-text">Conecta</span><span class="blue-text">Car</span></h4>
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
		</section>
		<section>
			<div class="vantagens">
				<div class="row">
					<div class="col s12 m12 l6 left-align text-white vantagens-list">
						<p class="upper-title-white	">Tudo que você precisa:</p>
						<h3>Vantagens</h3>
						<br><br>
						<?php require "vantagens-itens.php";?>
					</div>
					<div class="col s12 m12 l6 left-align vantagens-img">
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class="col s12 m12 l6  offset-l6 left-align">
					<p class="upper-title">O que fazemos para otimizar o seu tempo</p>
					<h3 class="title">Nossa Expertise</h3>
					<hr class="divisor">
					<figure>
						<img src="public/site/img/frota.jpg" class="espec-img">
					</figure>
				</div>
			</div>
			<div class="center">
				<div class="row"> <!---- SE TIVER +7 ITENS, USAR L3 COM 4 POR LINHA ---> 
					<div class="col l2 m6 s12 offset-l1">
						<div class="espec-item espec-light">
							<span class="espec-icon"><i class="fas fa-user-tie"></i><br></span>
							VENDAS CORPORATIVAS <br>
							<?php require "btn-orcamento.php"; ?>
						</div>
					</div>
					<div class="col l2 m6 s12"> 
						<div class="espec-item espec-dark">
							<span class="espec-icon blue-text"><i class="far fa-check-circle"></i><br></span>
							COMPRA DE ATIVOS <br>
							<?php require "btn-orcamento.php"; ?>
						</div>
					</div>
					<div class="col l2 m6 s12">
						<div class="espec-item espec-light">
							<span class="espec-icon"><i class="fas fa-shield-alt"></i><br></span>
							BLINDAGEM <br>
							<?php require "btn-orcamento.php"; ?>
						</div>
					</div>
					<div class="col l2 m6 s12"> 
						<div class="espec-item espec-dark">
							<span class="espec-icon blue-text"><i class="fas fa-car"></i><br></span>
							GESTÃO DE FROTAS <br>
							<?php require "btn-orcamento.php"; ?>
						</div>
					</div>
					<div class="col l2 m6 s12">
						<div class="espec-item espec-light">
							<span class="espec-icon"><i class="far fa-file-alt"></i><br></span>
							PCD - COMERCIALIZAÇÃO <br> E DOCUMENTAÇÃO
							<?php require "btn-orcamento.php"; ?>
						</div>
					</div>
				</div>
			</div>

		</section>
		<section>
			<div class="row contato">
				<div class="col s12 m8 l8 center">
					<p>Contrate nossas soluções, para otimizar seu tempo</p>
				</div>
				<div class="col s12 m4 l4 center">
					<a href="#" class="btn contato-button">CONSULTE-NOS</a>
				</div>
			</div>
		</section>
		<section>
			<div class="row marcas">
				<div class="col s12 m12 l6 center">
					<div class="marcas-esq">
						<figure>
							<img src="public/site/img/marcas.png" class="marcas-esq-img">
						</figure>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="marcas-dir left-align">
						<h4>
							Parceria de <br>
							Sucesso. Feito <br>
							Para Oferecer <br>
							o Melhor Para Sua <br>
							Empresa!
						</h4>
						<figure>
							<img src="public/site/img/hands.png" class="marcas-dir-img">
						</figure>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="row">
				<div class="col s1 m1 l1 offset-l10 offset-s10 offset-m10"> 
					<a href="#" class="back-to-top">
						<div class="back center"><i class="fas fa-arrow-circle-up"></i></div>
					</a>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l6"> 
						<div class="footer-esq">
							<div class="row">
								<div class="col telefone-title left-align">
									<div class="center bebas">
										<i class="fas fa-phone-alt blue-text"></i>
										<span class="text-white">TELEFONE</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col s5 m5 l5 right-align text-white">
									<p>(11) 4318-5564 <br> (11) 93474-0283</p>
								</div>
								<div class="col s1 m1 l1"><div class="vl"></div></div>
								<div class="col s6 m6 l6 left-align blue-text endereco-item">
									<p>Alameda Caulim São Caetano | SP</p>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center text-white horario">
									Horario das 9:00hrs as 18:00hrs de segunda a sexta
								</div>
							</div>
						</div>
					</div>
					<div class="col s12 m12 l6 left-align">
						<div class="row">
							<div class="bebas">
								<h4 class="text-dark"> ENTRE EM CONTATO </h4>
								<h4 class="text-white"> SEJA VOCÊ TAMBÉM UM DE NOSSOS PARCEIROS </h4>
							</div>
						</div>
						<div>
							<div class="row endereco">
								<div class="col s1 l1 m1 text-dark">
									<span> <i class="fas fa-map-marked-alt"></i></span>
								</div>
								<div class="col s11 m11 l11 text-white">
									Alameda Caulim,115 Conj 1008 Ceramica, <br> São Caetano do Sul - SP, 09531-195
								</div>
							</div>
							<div class="row endereco">
								<div class="col s1 l1 m1 text-dark">
									<span><i class="far fa-envelope"></i></span>
								</div>
								<div class="col s11 m11 l11 text-white">
									comercial@conectacarempresas.com.br
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row container">
				<div class="copyright">
					<hr class="divisor-footer">
					<div class="col l6 s6 m6"> 
						<span class="text-white">ConectaCar 2021| Todos os direitos reservados</span>
					</div>
					<div class="col l4 s6 m6 offset-l2"> 
						<span class="text-dark">Desenvolvido pela <a href="www.mazukim.com.br" class="text-dark"> Agência Mazukim </a> </span>
					</div>
				</div>
			</div>
		</footer>
		<?php require "scripts.php"; ?>
	</body>
	</html>