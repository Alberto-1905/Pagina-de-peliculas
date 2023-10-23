<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>El Ciempiés Humano</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://es.web.img2.acsta.net/r_1280_720/newsv7/18/05/25/10/07/4613322.jpg'); 
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
				<center><h1 class="banner-titulo">El Ciempiés Humano</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 31m.</button>
				</div>

				<div class="banner-sinopsis">
				UN médico alemán de avanzada edad, durante su vida profesional fue un excelente cirujano especializado en separar a gemelos siameses, pero al pasar los años y ya retirado, se le ocurre una macabra idea, ya no separar personas, sino unirlas, y por eso idea el juntar personas que intentará juntar personas y entrelazarlas convirtiéndolas en un ciempies humano.				</div></center>
			</div>

			<div class="banner-fadeBottom"></div>
		</div>

		<br>
		<br>
		<br>
		<br>
		 <!--Video--> 
		<div class="video-contenedor">
			<div class="video">
			<center><iframe class="item-video" allowfullscreen="" frameborder="0" height="395px" id="iframe2" onload="$('.iframe-loading').css('background-image');" sandbox="allow-same-origin allow-scripts"
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX1%2FC428%2B9%2F4iYEuZ5PzHGFRiD98bj3QgYQUPJHtKGtnx7sGH%2Bi0sO3p0" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>