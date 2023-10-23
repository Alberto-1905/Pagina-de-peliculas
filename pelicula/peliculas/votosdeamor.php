<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>Votos de Amor</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://peru21.pe/resizer/TKNRaN0TKi9I6-5VLzC6H6VgoNA=/980x528/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/4WLJRB2O5VHELBFSQXFZLP7JWE.jpg'); 
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
				<center><h1 class="banner-titulo">Votos de Amor</h1>

				<div class="botones">
					Duracion: 2h 14m. <button class="hd"> HD</button>
				</div>

				<div class="banner-sinopsis">
				Inspirado por una historia real, The Vow es la historia de un amor que se niega a ser olvidado. Leo está devastado cuando un accidente automovilístico hunde a su esposa Paige (Rachel McAdams, The Notebook) en un coma profundo. Ella se recupera milagrosamente, pero los últimos cinco años de sus recuerdos se han desvanecido. De repente, Paige se encuentra casado con un extraño que no puede recordar nada de él. Ingenuamente, Paige cae bajo la influencia de sus padres controladores y se vuelve a conectar con su ex-prometido. Desesperadamente, Leo intenta recrear los momentos que dieron forma a su romance. ¿Puede reavivar la pasión antes de perder a Paige para siempre?				</div></center>
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
				scrolling="no" src="https://media.esplay.one/player?sbx=1&ref=pelisplusio&hash=U2FsdGVkX19h0u0n%2FqhlapWEux30ABzVfAPj7GKD6tA8sQAqisKuuDcMlFMBl6ib" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="97%"></iframe></center>	
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>