<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Godzilla vs Kong</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://i.blogs.es/9f3a36/godzilla-vs-kong-2275641/1366_2000.jpeg'); 
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
				<center><h1 class="banner-titulo">Godzilla vs Kong</h1>

				<div class="botones">
				<button class="hd">Duración: 00h 00m.</button>
				</div>

				<div class="banner-sinopsis">
				En un momento en que los monstruos caminan por la Tierra, la lucha de la humanidad por su futuro coloca a Godzilla y Kong en un curso de colisión que verá a las dos fuerzas más poderosas de la naturaleza en el planeta enfrentarse en una batalla espectacular para las edades. Mientras Monarch se embarca en una peligrosa misión en un terreno inexplorado y descubre pistas sobre los orígenes de los Titanes, una conspiración humana amenaza con borrar a las criaturas, tanto buenas como malas, de la faz de la tierra para siempre.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX19IrE0LlST5tQxqUhL3B7yahoXuwz7hCVDjIyv%2FmuUmz9zfFeYvA5Pg" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>