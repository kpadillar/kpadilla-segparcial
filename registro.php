<!DOCTYPE html>
<?php
	$_SESSION['altas']=1;
	include "sesionUno.php";
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Registros</title>
</head>
<body>

<?php
	include_once("conexion.php");
	var_dump($_POST);
	if(isset($_POST['usuario'])){
		if(!empty($nombre)||!empty($usuario)||!empty($contrasena)||!empty($ap_paterno)||!empty($ap_materno)){
			$nombre =filter_var( $_POST['nombre'], FILTER_SANITIZE_STRING);
			$ap_paterno = filter_var($_POST['ap_paterno'], FILTER_SANITIZE_STRING);
			$ap_materno = filter_var($_POST['ap_materno'], FILTER_SANITIZE_STRING);
			$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
			$contrasena = $_POST['contrasena'];
			$user = "insert into usuarios (nombre, ap_paterno, ap_materno, usuario, contrasena) values('$nombre','$ap_paterno','$ap_materno','$usuario','$contrasena');";
			$guarda_user = consulta($user);
		
			if($guarda_comentario == false){
				echo "<p>El usuario se registró exitosamente</p>";
			} else {
				echo "<p>No se pudo guardar el usuario</p>";
			}
		}
	}

	if(isset($_POST['titulo'])){
		if(!empty($titulo)||!empty($id_autor)||!empty($anio_publicacion)){
			$titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
			$anio_publicacion = $_POST['anio_publicacion'];
			$id_autor = $_POST['id_autor'];
			$libro = "insert into libros (titulo, id_autor, anio_publicacion) values('$titulo','$anio_publicacion','$id_autor');";
			$guarda_libro = consulta($libro);
		
			if($guarda_libro == false){
				echo "<p>EL libro se registró exitosamente</p>";
			} else {
				echo "<p>No se pudo registrar el libro</p>";
			}
		}
	}

	if(isset($_POST['nacionalidad'])){
		if(!empty($nombre)||!empty($nacionalidad)||!empty($ap_paterno)||!empty($ap_materno)){
			$nombre =filter_var( $_POST['nombre'], FILTER_SANITIZE_STRING);
			$ap_paterno = filter_var($_POST['ap_paterno'], FILTER_SANITIZE_STRING);
			$ap_materno = filter_var($_POST['ap_materno'], FILTER_SANITIZE_STRING);
			$nacionalidad = filter_var($_POST['nacionalidad'], FILTER_SANITZE_STRING);
			$autor = "insert into autores (nombre, ap_paterno, ap_materno, nacionalidad) values('$nombre','$ap_paterno','$ap_materno','$nacionalidad');";
			$guarda_autor = consulta($autor);
		
			if($guarda_comentario == false){
				echo "<p>El autor se registró exitosamente</p>";
			} else {
				echo "<p>No se pudo guardar al autor</p>";
			}
		}
	}
?>

</body>
</html>
