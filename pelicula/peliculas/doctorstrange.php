<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Doctor Strange</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://hips.hearstapps.com/hmg-prod/images/doctor-strange-2-1652189255.jpg?crop=1xw:0.9993270524899058xh;center,top&resize=1200:*'); 
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
				<center><h1 class="banner-titulo">Doctor Strange en el multiverso de la locura</h1>

				<div class="botones">
				<button class="hd">Duración: 02h 06m.</button>
				</div>

				<div class="banner-sinopsis">
				Después de los eventos de Avengers: Endgame, el Dr. Stephen Strange continúa su investigación sobre Time Stone. Pero un viejo amigo convertido en enemigo busca destruir a todos los hechiceros de la Tierra, interfiriendo con el plan de Strange y provocando que desate un mal indescriptible.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX19kqXgXkoU%2BhfvlZDijB2B%2FcldptR37eUMIrv4S8k0CzQRhdb20UdqG" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>