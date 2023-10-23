<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Un Lugar en Silencio: Parte 2</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://image.tmdb.org/t/p/w780/AsqUSUqXrK8JfH8WEQnCXVbIAv6.jpg'); 
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
				<center><h1 class="banner-titulo">Un Lugar en Silencio: Parte 2</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 30m.</button>
				</div>

				<div class="banner-sinopsis">
				Tras los fatales acontecimientos sucedidos en la primera parte, la familia Abbot debe enfrentarse a los peligros del mundo exterior mientras luchan en silencio por sobrevivir. Forzados a aventurarse en lo desconocido, pronto se dan cuenta de que las criaturas que cazan orientadas por el sonido no son la única amenaza que acecha más allá del camino de arena.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX18LzydOV8aPp0QNgoEMCAjzxvPdHzqUl8UMgvx8cLRca6%2FOl02nw%2FpI" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>
