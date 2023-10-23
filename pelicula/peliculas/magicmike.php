<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Magic Mike</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://imagenes.elpais.com/resizer/F-9L5b4F7bCZBRdYbdNaL53TlUg=/1200x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/T7UEAREW65C4NJ3JY6U4TK44PI.jpg'); 
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
				<center><h1 class="banner-titulo">Magic Mike: El último baile</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 52m.</button>
				</div>

				<div class="banner-sinopsis">
				Mike Lane (Channing Tatum) hace mucho que abandonó sus días como stripper y ahora intenta llevar una vida alejada de esos días, además, de abandonar su seudónimo: Magic Mike. Sin embargo, su vida da un giro cuando conoce a una mujer maravillosa, mujer Maxandra Mendoza (Salma Hayek), de quién se enamora sin poder evitarlo. Ella, que tiene dinero, la ofrece su ayuda para montar un gran show de striptease en vivo, el sueño de Mike. Por ello, se mudan los dos juntos a Londres, donde Mike comenzará a realizar los castings, inventar coreografías y demás cosas necesarias para el show. Pero pronto surgirán problemas y Mike descubrirá que Maxandra no es la persona que aparenta.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX19I7SZdCnq%2FbW2tHu7z37gV1WigDh30brcS902Sk2WWKlVEaX62LuDw" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>