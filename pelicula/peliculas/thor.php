<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Thor</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://locosxlosjuegos.com/wp-content/uploads/2022/07/thor1.jpg'); 
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
				<center><h1 class="banner-titulo">Thor: Amor y Trueno</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 59m.</button>
				</div>

				<div class="banner-sinopsis">
				Mucho tiempo después de los eventos sucedidos en Avengers: Endgame, los Guardianes de la Galaxia deben convencer a Thor para que regrese al campo de batalla y se enfrente a un villano empeñado en matar a todas las criaturas divinas en todo el cosmos. Para luchar contra esta amenaza, Thor debe reclutar a sus amigos Valkyrie, Korg y su ex novia Jane Foster, quien misteriosamente puede empuñar el martillo de Thor y por ende poseer su gran poder.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX1%2BKF6K0L9BtE%2FFMNutA0z8dgZJQtEuFAtIDVEs9aGMnS1e4q602oGgt" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>