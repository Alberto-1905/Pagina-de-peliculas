<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Ruega Por Nosotros</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://img.ecartelera.com/noticias/fotos/64400/64488/2.jpg'); 
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
				<center><h1 class="banner-titulo">Ruega Por Nosotros</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 39m.</button>
				</div>

				<div class="banner-sinopsis">
				Alice, una joven con problemas de audición que, tras una supuesta visita de la Virgen María, es inexplicablemente capaz de oír, hablar y curar a los enfermos. A medida que se corre la voz y la gente de cerca y de lejos acude a presenciar sus milagros, un periodista caído en desgracia que espera reavivar su carrera visita el pequeño pueblo de Nueva Inglaterra para investigar. Cuando comienzan a producirse sucesos aterradores a su alrededor, empieza a preguntarse si estos fenómenos son obra de la Virgen María o de algo mucho más siniestro.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX1%2BBGt3QrUGgau8D3atcDxx%2BG87eGu8m111YOuOREaMZMv60VUL1DTTD" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>