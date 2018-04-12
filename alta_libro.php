<!DOCTYPE html>
<?php
	$_SESSION['altas']=1;
	include "sesionUno.php";
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Alta libro</title>
	<link href="css/estilo.css" type="text/css" rel="stylesheet">
</head>
<body>

	<h1>Registro de libros</h1>
	<p>Por favor ingrese la información.</p>
	<br/>

	<form action="registro.php" method="post">
	<p>Título</p><input type="text" name="titulo" autocomplete="off"/><br/>
	<p>Autor</p><input type="text" name="id_autor"/><br/>
	<p>Año publicación</p><input type="text" name="anio_publicacion"/><br/>
	<input type="submit" value="Ingresar">
</form>

</body>
</html>
