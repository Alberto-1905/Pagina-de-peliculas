<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Terrifier</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://i2.wp.com/www.sinembargo.mx/wp-content/uploads/2023/01/terrifier2-1.jpg?resize=700%2C393&quality=80&strip=all&ssl=1'); 
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
				<center><h1 class="banner-titulo">Terrifier</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 22m.</button>
				</div>

				<div class="banner-sinopsis">
				Mónica Brown, presentadora de un programa de entrevistas, entrevista a una mujer severamente desfigurada que es la única sobreviviente de una masacre que tuvo lugar la noche anterior de Halloween. Ella menciona que el cuerpo del asesino, conocido solo como "Art the Clown", desapareció de la morgue antes de la autopsia, lo que sugiere que todavía podría estar vivo. La mujer desfigurada descarta esta posibilidad, insistiendo en que lo vio morir. Mientras está en su camerino después del espectáculo, Mónica insulta cruelmente la apariencia de la mujer durante una conversación telefónica, después de lo cual la mujer ataca a Mónica y le saca los ojos.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX1%2Bc1mz5J6cddqF%2F8fSjiM8hqrTinYemZq%2BXFe2q3Db6UnJywihWZJmFD3GeNm6UcQoTKLaPDXT1i7jPuj0UnGf6podY3uajblj%2F1nyBRFFdhk7OOcMAsjF%2B" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>