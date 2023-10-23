<?php
		session_start();
		if(isset($_SESSION["usrIdentificado"])){
			$usuarioIdentificado = $_SESSION["usrIdentificado"];
		}
		if(!$usuarioIdentificado){
			header('Location: /');
		}
		?>