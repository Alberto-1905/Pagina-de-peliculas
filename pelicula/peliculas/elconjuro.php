<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>El Conjuro</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://rechismes.com/wp-content/uploads/2021/10/EL-CONJURO.jpg'); 
			}		
		</style>

	</head>

	<body>
		<!-- Header -->
		<main>			
			<div class="content-all">
				<header></header>
				<label>
					<p><a style="text-decoration: none; color:white" href="/pelicula/pagina.php">Películas</a></p>
				</label>

				<div class="btn">
					<p><a href="/php/logout.php"><img src="/pelicula/img/off.png"></a></p>
				</div>
			</div>
		</main>

		<!-- Banner -->
		<div class="banner" id="banner">
			<div class="banner-contenedor">
				<center><h1 class="banner-titulo">El Conjuro</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 52m.</button>
				</div>

				<div class="banner-sinopsis">
				Basada en una historia real, El conjuro cuenta cómo una pareja de investigadores de fenómenos paranormales, Ed y Lorraine Warren (Patrick Wilson, Vera Farmiga), acude en ayuda de una familia aterrorizada por una presencia oscura en una granja alejada de todo.				</div></center>
		</div>

			<div class="banner-fadeBottom"></div>
		</div>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		 <!--Video--> 
		<div class="video-contenedor">
			<div class="video">
			<center><iframe class="item-video" allowfullscreen="" frameborder="0" height="395px" id="iframe2" onload="$('.iframe-loading').css('background-image');" sandbox="allow-same-origin allow-scripts"
				scrolling="no" src="		https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX18H3g5hJhDwf%2B5dez1CfY6knRTP%2FuFsdPkEPPrSGl3PbZJZS%2F2Wlqpe" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>