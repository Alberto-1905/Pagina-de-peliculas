<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>M3GAN</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://www.universalpictures.com.mx/tl_files/content/movies/m3gan/gallery/10.jpg'); 
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
				<center><h1 class="banner-titulo">M3GAN</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 42m.</button>
				</div>

				<div class="banner-sinopsis">
				Un ingeniero en robótica de una empresa de juguetes construye una muñeca realista que comienza a cobrar vida propia. Cuando Gemma de repente se convierte en la cuidadora de su sobrina huérfana de 8 años, Cady, Gemma no está segura ni preparada para ser madre. Bajo una intensa presión en el trabajo, Gemma decide emparejar su prototipo M3GAN con Cady en un intento de resolver ambos problemas, una decisión que tendrá consecuencias inimaginables.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX1%2FObFhOjidvXhVBR4ArLw6ypRh1%2BmLUJ4Vb7KMmTDTBc1UbzGTYK6QW" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>