<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton login haya sido presionado
if(isset($_POST['login'])) {

// Obtener los valores enviados por el formulario
$correo = $_POST['correo_user'];
$contrasena = $_POST['contrasena_user'];

// Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
$sql = "SELECT * FROM usuarios WHERE correo_user = '$correo' and contrasena_user = '$contrasena'";
$resultado = mysqli_query($conexion,$sql);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {
		// Inicio de sesión exitoso
		session_start();
		$_SESSION["usrIdentificado"] = true;
	echo '<script type="text/javascript">
          alert("bienvenido");
          window.location.href="/pelicula/pagina.php";
          </script>';
	} else {
		// Credenciales inválidas
		echo '<script type="text/javascript">
          alert("Usuario o contraseña incorrectos\nO inexistentes");
		  window.location.href="/";
          </script>';
	}
}
?>
