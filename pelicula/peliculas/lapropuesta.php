<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>La Propuesta</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://graziamagazine.com/mx/wp-content/uploads/sites/13/2019/06/5-lecciones-que-aprendimos-con-the-proposal.jpeg'); 
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
				<center><h1 class="banner-titulo">La Propuesta</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 47m.</button>
				</div>

				<div class="banner-sinopsis">
				Margaret (Sandra Bullock), una famosa e influyente editora de Nueva York, debido a un problema con su visado, está a punto de ser deportada a Canadá, su país natal. Para evitarlo, la astuta ejecutiva declara que está comprometida con su joven ayudante Andrew (Ryan Reynolds), al que durante años ha sometido a todo tipo de humillaciones. Andrew está dispuesto a participar en la farsa, pero imponiendo algunas condiciones. Así, ambos viajan a Alaska para que Margaret conozca a la peculiar familia de él, mientras que un agente de inmigración sigue los pasos de la pareja, sospechando que la prepotente ejecutiva prepara un enlace de convenicencia. También conocida como la "La Proposición".				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX19VyffxWkxmg6m5DGNG7NqOKNvQE7Rh3%2BinOUiDqOKDKjUtQRKqP190" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>