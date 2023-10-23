<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Avatar</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://www.phenomena-experience.com/galeria/Historico_peliculas/A/avatar-2.jpg'); 
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
				<center><h1 class="banner-titulo">Avatar: El sentido del agua</h1>

				<div class="botones">
				<button class="hd">Duración: 03h 12m.</button>
				</div>

				<div class="banner-sinopsis">
				La historia de la familia Sully (Jake, Neytiri y sus hijos), los problemas que les persiguen, lo que hacen para mantenerse a salvo, las batallas que libran para seguir vivos y las tragedias que soportan. Jake Sully vive con su nueva familia formada en la luna extrasolar Pandora. Una vez que una amenaza familiar regresa para acabar con lo que se había iniciado anteriormente, Jake debe trabajar con Neytiri y el ejército de la raza Na'vi para proteger su hogar.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX18PDHDIpZbFX3OfOddyjxChz9qAhWzHRkyIwCHIC8U6dlaUZfeXSLpj" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>