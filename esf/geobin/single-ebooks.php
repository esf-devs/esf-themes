<?php
/**
 * single.php
 *
 * The template for displaying single posts.
 */
if(have_posts()){
	while ( have_posts() ) : the_post();
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<head>
				<meta charset="utf-8" /> 
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<script type="text/javascript" src="https://www.encontresuafranquia.com.br/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp"></script>
		<!--
		<meta property="og:locale" content="pt_BR">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Encontre sua Franquia">
		<meta property="og:description" content="As melhores franquias do Brasil">
		<meta property="og:url" content="http://dev.encontresuafranquia.com.br">
		<meta property="og:site_name" content="Encontre sua Franquia">
		<meta name="robots" content="noindex,follow">
		<meta property="og:locale" content="pt_BR">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Home - Encontre sua Franquia">
		<meta property="og:description" content="Mais de 1.000 Franqueados Faça parte de um dos maiores grupos de franquias do Brasil! Após implantar mais de 1.000 franquias, nós, da Encontre Sua Franquia, queremos VOCÊ como nosso parceiro. Conheça as Marcas Domine tudo sobre franquia Temos vários e-books e conteúdos para você se tornar um especialista em franquias e negócios em geral. …">
		<meta property="og:url" content="http://dev.encontresuafranquia.com.br/">
		<meta property="og:site_name" content="Encontre sua Franquia">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:description" content="Mais de 1.000 Franqueados Faça parte de um dos maiores grupos de franquias do Brasil! Após implantar mais de 1.000 franquias, nós, da Encontre Sua Franquia, queremos VOCÊ como nosso parceiro. Conheça as Marcas Domine tudo sobre franquia Temos vários e-books e conteúdos para você se tornar um especialista em franquias e negócios em geral. […]">
		<meta name="twitter:title" content="Home - Encontre sua Franquia">
		<meta name="twitter:image" content="http://dev.encontresuafranquia.com.br/wp-content/uploads/2019/05/Mapa-Brasil-Site-ESF.png">
		<link rel="dns-prefetch" href="//s.w.org">
		<link rel="alternate" type="application/rss+xml" title="Feed para Encontre sua Franquia »" href="http://dev.encontresuafranquia.com.br/feed/">
		<link rel="alternate" type="application/rss+xml" title="Feed de comentários para Encontre sua Franquia »" href="http://dev.encontresuafranquia.com.br/comments/feed/">
		<link rel="https://api.w.org/" href="http://dev.encontresuafranquia.com.br/wp-json/">
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://dev.encontresuafranquia.com.br/xmlrpc.php?rsd">
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://dev.encontresuafranquia.com.br/wp-includes/wlwmanifest.xml"> 
		<meta name="generator" content="WordPress 5.2.2">
		<link rel="shortlink" href="http://dev.encontresuafranquia.com.br/">
		<link rel="alternate" type="application/json+oembed" href="http://dev.encontresuafranquia.com.br/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdev.encontresuafranquia.com.br%2F">
		<link rel="alternate" type="text/xml+oembed" href="http://dev.encontresuafranquia.com.br/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdev.encontresuafranquia.com.br%2F&amp;format=xml">
		<link rel="icon" href="http://dev.encontresuafranquia.com.br/wp-content/uploads/2019/05/cropped-fivecon-32x32.png" sizes="32x32">
		<link rel="icon" href="http://dev.encontresuafranquia.com.br/wp-content/uploads/2019/05/cropped-fivecon-32x32.png" sizes="192x192">
		<link rel="apple-touch-icon-precomposed" href="http://dev.encontresuafranquia.com.br/wp-content/uploads/2019/05/cropped-fivecon-32x32.png">
		<meta name="msapplication-TileImage" content="http://dev.encontresuafranquia.com.br/wp-content/uploads/2019/05/cropped-fivecon-32x32.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	-->
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:900|Roboto&display=swap" rel="stylesheet">
	<style type="text/css">
		iframe {
			width: 417px;
		}
		html,body{
			margin:0;
		}
		body{
			font-family: sans-serif;
			margin-top:-21px;
		}
		p.center{
			text-align: center;
			color:#767477;
		}
		article{
			max-width: 1118px;
			margin: auto;
			margin-top: 60px;
			display: flex;
		}
		.row{
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			margin-right: -15px;
			margin-left: -15px;
		}
		.barras{
			float: left; margin-top: 35px; 
		}
		.topo {
			width: 100%;
			margin: auto;
			display: block;
			padding-top: 2px;
			padding-bottom: 0px;
			background: #445255;
			font-family: 'Nunito', sans-serif;
		}
		label{
			margin-bottom:10px;
			display: block;
		}
		.topo h1{
			text-align: center;
			color: #FFF;
			font-size: 45px;
			margin-top: 27px;
			padding-bottom: 10px;
		}
		.topo nav ul{

		}
		.topo nav ul li{
			display: inline;
			margin-right: 40px;
		}
		.topo nav ul li a{
			text-decoration: none;
		}
		.conteudo{
			width: 51%;
			margin-left: 20px;
			float: left;
		}
		.conteudo img{
			width: 90%;
		}
		.conteudo p{
			color: #767477;
			font-size: 18px;
			width: 90%;
			text-align: justify;
		}
		footer{
			display: block;
			width: 100%;
			margin-top: 50px;
		}
		.formulario{
			width: 42%;
			margin-right: 20px;
			float: right;
		}
		.form{
			float: right; 
		}
		.formulario label{
			color: #fa6843;
			font-family: 'Roboto';
			font-size: 26px;
			font-weight: 600;
			margin-top: 16px;
		}
		.formulario label:hover{
			color:#666;
		}
		.formulario label:hover input{
			color:#666;
			border-bottom:2px solid #666;
		}
		.formulario input {
			width: 97%;
			border-radius: 0px;
			border: 0px;
			border-bottom: 1px solid #ccc;
			height: 50px;
			padding-left: 10px;
			font-size: 32px;
			margin-top: -5px;
		}
		.formulario input:hover {

		}
		.formulario form input[type="submit"]{
			background: #fa6843;
			border-radius: 29px;
			color: #FFF;
			font-size: 28px;
			height: 67px;
			width: 95%;
			display: block;
			margin: auto;
			margin-top: 18px;
			font-family: 'Roboto';
			font-weight: 900;
			cursor: pointer; 
		}

		.formulario form input[type="submit"]:hover{
			background: #302c2d;
		}

		.formulario form input[type="submit"]:hover{
			border:0px;
		}
		@media (max-width: 1012px){
			.barras{
				display: none;
			}
		}
		@media (max-width: 894px){
			iframe {
				width: 100%;
			}
			article{
				display: block;
			}
			.form{
				float: none;
			}
			.conteudo{
				width: 96%;
				margin: auto;
				float: none;
			}
			.conteudo img{
				width: 100%;
			}
			.formulario{
				width: 100%;
				float: none;
				margin: auto;
			}
		}
	</style>
	<title><?php the_title(); ?></title>
</head>
<body>
	<div class="topo">
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
	</div>
	<article>	
		<div class="conteudo">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" title="" />
			<br />
			<?php the_content(); ?>
		</div>
		<div class="formulario">
			<div class="barras">
				<div style="background: #fa6843;width: 7px;height: 69px;"></div>
				<div style="background: #fa6843;width: 7px;height: 29px;margin-top: 21px;margin-bottom: 34px;"></div>
				<div style="background: #fa6843;width: 7px;height: 108px;"></div>
			</div>
			<!-- 
			<embed>
				<form>
					<label>
						<span>Nome</span>
						<br>
						<input type="text" name="" style="">
					</label>
					<label>
						<span>E-mail</span>
						<br>
						<input type="text" name="">
					</label>
					<label>
						<span>Celular</span>
						<br>
						<input type="text" name="">
					</label>
					<label>
						<input type="submit" value="ENVIAR" name="">
					</label>
				</form>
			</embed>
		-->
		<div class="form">
			<?php 
			echo get_post_meta( get_the_ID(), 'formulario_ebooks', true );
			?>
		</div>
	</div>
</article>
<footer style=" background: #445255; padding-top: 25px; padding-bottom: 25px; color: #FFF; ">
	<p class="center" style=" color: #FFF; ">
		Encontre Sua Franquia<br>
		Cnpj: 20.514.761/0001-79<br>
		Av. Portugal, 1080 - Jardim Atlântico, Belo Horizonte - MG, 31550-000<br>
		Telefone: (31) 3654-5664<br>
		Taxas: Royalties - Taxa de propaganda
	</p>
	<script type="text/javascript">
		jQuery(function($){
			$.getScript("https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js",function(){
				$('input.phone').mask('(99)99999-9999');
			});
		});
	</script>
</footer>
</body>
</html>
<?php
endwhile;
}
?>