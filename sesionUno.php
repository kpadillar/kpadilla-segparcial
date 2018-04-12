<?php
	session_start();
	$_SESSION['altas']=1;
?>

<h1>Buen día</h1>
<br/>
<p>Ingresa tu nombre:</p>
<br/>

<form action="sesionDos.php" method="post">
<label>Nombre:</label>
<br/>
<input type="text" name="Nombre">
<br/>
<input type="submit" name"Ingresar" value="Ingresar">
</form>

