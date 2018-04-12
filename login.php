<!DOCTYPE html>
<?php
	session_start();
	$_SESSION['altas']=1;
?>

<html>
<head>
	<title>Sesión principal</title>
	<meta charset="UTF-8">
	<link href="css/estilo.css" type="text/css" rel="stylesheet">
</head>
<body>
	<h1>Log in</h1>
	<p>Por favor ingrese sus datos:</p>
	<br/>

	<h2>Registro</h2>
	<form action="menu.php" method="post">

	<label for="usuario">Usuario</label>
	<input type="text" name="usuario" autocomplete="off">

	<label for "password">Contraseña</label>
	<input type="password" name="password" autocomplete="off">
	<input type="submit" value="Ingresar">
	</form>
</body>
</html>

