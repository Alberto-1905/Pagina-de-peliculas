<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Gigantes de Acero</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://i1.wp.com/www.sinembargo.mx/wp-content/uploads/2022/01/gigantes-acero.jpg?fit=1100%2C580&quality=80&strip=all&ssl=1'); 
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
				<center><h1 class="banner-titulo">Gigantes de Acero</h1>

				<div class="botones">
				<button class="hd">Duración: 02h 07m.</button>
				</div>

				<div class="banner-sinopsis">
				Acero puro. En un futuro muy cercano el boxeo es robótico: en las luchas ya no pelean personas, sino robots humanoides, sofisticadas máquinas construidas para pelear. Charlie Kenton, un veterano púgil que estuvo cerca de alcanzar la gloria, está pasando por una mala racha como promotor de luchas. Cierto día, halla un robot viejo desechado y, al asegurarse que es un gran boxeador, toma la decisión de entrenarlo.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX1%2FIGsGpNMSk5%2FNwqzufFU0aczhkcssYsJ47Y5J7012q0Ukn%2FyuujOYf" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>