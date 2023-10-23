<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Ghosting</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://articles-img.sftcdn.net/f_auto,t_article_cover_l/auto-mapping-folder/sites/2/2023/04/ghosted.jpg'); 
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
				<center><h1 class="banner-titulo">Ghosting</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 56m.</button>
				</div>

				<div class="banner-sinopsis">
				Ghosting es una película que no te puedes perder si eres fan de la acción, la intriga y el espionaje. En Playmovies.io podrás verla de manera gratuita y en español latino, sin tener que salir de casa y en alta definición. ¡No esperes más y disfruta de esta aventura emocionante con nosotros!				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX19f6UhFSVDpn9%2Bk6BOO5yWdkHyzH6N2sQPs%2BHc6aqadOFR6GJ7Iyu90" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>