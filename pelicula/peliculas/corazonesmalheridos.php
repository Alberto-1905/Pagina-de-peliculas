<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Corazones malheridos</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://www.nuevamujer.com/resizer/920h9dLvpj05TahTaWzPNDbwAtU=/800x0/filters:format(jpg):quality(70):focal(650x362:660x372)/cloudfront-us-east-1.images.arcpublishing.com/metroworldnews/TNRJLUN5ARAVPGSOMNIRT2IEMA.jpg'); 
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
				<center><h1 class="banner-titulo">Corazones Malheridos</h1>

				<div class="botones">
				<button class="hd">Duración: 02h 02m.</button>
				</div>

				<div class="banner-sinopsis">
				Una aspirante a música y un marine a punto de irse a Irak deciden casarse por conveniencia. Pero una tragedia pronto convierte su relación falsa en algo muy real.				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX1%2BnpFqcYDo%2BHLlJbSmCJXuP9Nih4z0B%2FtLWwsncRW373FoMmDtqvmaF" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>