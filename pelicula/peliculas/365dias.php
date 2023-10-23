<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>365 días</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://los40.cl/wp-content/uploads/2022/12/365-DNI_-This-Day__-Escogida-como-la-peor-pelicula-del-ano-1024x576.jpg'); 
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
				<center><h1 class="banner-titulo">365 Días</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 56m.</button>
				</div>

				<div class="banner-sinopsis">
				Este es solo uno de los 27 mensajes absurdos que propaga la obra. No podemos olvidar que Blanka, como EL James, son hijas de esos increíbles y famosos libros de bolsillo de los años 70 y 80, que en Brasil fueron vendidos en colecciones por Nova Cultural directamente en los quioscos, con los apodos de tres nombres femeninos, “Julia”, "Sabrina" y "Bianca". 
			</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX19ArIla3jO8HAwqRzj1JZlMEH7GAVpYv8q0BakbweCVItf2Dkk9v1Ab" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>