<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Titanic</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://www.elnacional.cat/uploads/s1/39/31/48/02/titanic.jpeg'); 
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
				<center><h1 class="banner-titulo">Titanic</h1>

				<div class="botones">
				<button class="hd">Duración: 03h 15m.</button>
				</div>

				<div class="banner-sinopsis">
				Un joven artista, gana en una partida de cartas un pasaje para viajar a América en el Titanic, el trasatlántico más grande y seguro jamás construido. A bordo conoce a Rose (Kate Winslet), una joven de una buena familia venida a menos que va a contraer un matrimonio de conveniencia con Cal (Billy Zane), un engreído millonario a quien sólo interesa el prestigioso apellido de su prometida. Jack y Rose se enamoran, pero el prometido y la madre de ella ponen todo tipo de trabas a su relación. Mientras, el gigantesco y lujoso trasatlántico se aproxima hacia un inmenso iceberg.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX1%2B8BjG32Daq%2BTErXPVznG3RehUHFZTTdKGpvbcZKf3V04xAzck9GCea" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>