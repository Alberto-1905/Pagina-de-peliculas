<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST['registro'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['nombre_user'];
$contrasena = $_POST['contrasena_user'];
$correo = $_POST['correo_user'];

// Insertamos los datos en la base de datos
$sql = "INSERT INTO usuarios (id_user, nombre_user, contrasena_user, correo_user) VALUES (null, '$usuario', '$contrasena', '$correo')";
$resultado = mysqli_query($conexion,$sql);
	if($resultado) {
		// Iserción correcta
		echo '<script type="text/javascript">
          alert("Registro exitoso. Porfavor iniciar la seción");
          window.location.href="/";
          </script>';
	} else {
		// Iserción fallida
		echo '<script type="text/javascript">
          alert("No pudimos guardar tus datos, intente nuevamente");
		  window.location.href="/registro.html";
          </script>';
	}
}
?>
