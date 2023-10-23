<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>La Hora de tu muerte</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://diamondfilms.com/img/noticias/5da9d86b810869a2c96809be1.jpg'); 
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
				<center><h1 class="banner-titulo">La Hora de tu muerte</h1>

				<div class="botones">
				<button class="hd">Duración: 01h 30m.</button>
				</div>

				<div class="banner-sinopsis">
				Quinn (Elizabeth Lail) es una jov en enfermera que trabaja en un hospital. Se hace amiga de un paciente adolescente que resultó herido en un accidente automovilístico y esperaba una cirugía. Evan (Dillon Lane ) está muy nervioso por la cirugía, y la tranquilidad de Quinn no ayuda: tiene una aplicación en su teléfono que predice el momento exacto de su muerte				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX18FqGDS1YcX2ECfvKQJku7MOn2kzBIPWp9L1crUec4OhNCMTMPWquVu" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>