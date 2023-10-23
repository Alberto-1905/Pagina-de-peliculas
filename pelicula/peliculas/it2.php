<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>It: Capítulo 2</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://i0.wp.com/lascronicasdedeckard.com/wp-content/uploads/2019/09/It-Cap%C3%ADtulo-2-Portada-Las-Cr%C3%B3nicas-de-Deckard.jpg?fit=830%2C467&ssl=1'); 
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
				<center><h1 class="banner-titulo">IT: Capítulo 2</h1>

				<div class="botones">
				<button class="hd">Duración: 02h 45m.</button>
				</div>

				<div class="banner-sinopsis">
				27 años después de los eventos del verano de 1989, los miembros del Club de los Perdedores crecen y se mudan, hasta que una devastadora llamada telefónica los obliga a regresar a Derry, Maine. Cuando su antiguo némesis cambia formas, Pennywise, el payaso reaparece nuevamente, estos regresan cumpliendo la promesa que realizaron en la infancia para reunir y destruir a la criatura de una vez por todas, sin darse cuenta de que se ha vuelto más fuerte que nunca y ha aguardado su llegada, esperando para cobrar venganza de ellos.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX18dUFcc2EhTLYxpSNRb8g40a9vzEm8m4Pq97gd1FtioEDem5DweLqpf" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>
