<!DOCTYPE html>
<?php
	$_SESSION['altas']=1;
	include "sesionUno.php";
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Alta Usuario</title>
	<link href="css/registro.css" type="text/css" rel="stylesheet">
</head>
<body>
	<h1>Registro de Usuario</h1>
	<p>Por favor ingrese su información</p>
	<br/>

	<form action="registro.php" method="post">	
	<p>Nombre</p><input type="text" name="Nombre"autocomplete="off"/><br/>
	<p>Apellido Paterno</p><input type="text" name="ap_paterno"autocomplete="off"/><br/>
	<p>Apellido Materno</p><input type="text" name="ap_materno" autocomplete="off"/><br/>
	<p>Usuario</p><input type="text" name="usuario" autocomplete="off"/><br/>
	<p>Contraseña</p><input type="password" name="contrasena" autocomplete="off"/><br/>
	<input type="submit" value="Ingresar">
	</form>
</body>
</html>
