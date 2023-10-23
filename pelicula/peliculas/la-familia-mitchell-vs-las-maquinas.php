<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>StartMovie</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://www.themoviedb.org/t/p/original/lYUY55nratROILxZq8GA03gtSY1.jpg'); 
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
					<p><a style="text-decoration: none; color:white" href="/php/logout.php.php">cerrar sesión</a></p>
				</div>
			</div>
		</main>

		<!-- Banner -->
		<div class="banner" id="banner">
			<div class="banner-contenedor">
				<center><h1 class="banner-titulo">La familia Mitchels vs ...</h1>

				<div class="botones">
					Duracion: 1h 54m. <button class="hd"> HD</button>
				</div>

				<div class="banner-sinopsis">
					Katie Mitchell, una adolescente creativa y poco convencional, es aceptada en la escuela de cine de sus sueños, pero sus planes para volar a la universidad se ven truncados cuando su padre Rick, amante de la naturaleza, decide que toda la familia reunida acompañe a Katie en su viaje a la facultad y así hacer algo juntos una última vez. 
				</div></center>
			</div>

			<div class="banner-fadeBottom"></div>
		</div>

		<br>
		<br>
		<br>
		
		 <!--Video--> 
		<div class="video-contenedor">
			<div class="video">
				
				<center><iframe class="item-video" allowfullscreen="" frameborder="0" height="695px" id="iframe2" onload="$('.iframe-loading').css('background-image');" sandbox="allow-same-origin allow-scripts"
				scrolling="no" src="https://uqload.com/embed-ian7houjbwts.html" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="100%"></iframe></center>	
			</div>

			<div class="descarga">
					<a href="https://1fichier.com/?aly1qdamz58q9gvqstgb"><button type="submit" class="btn-descarga"><i class="fas fa-cloud-download-alt"></i>Descargar</button></a>
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>