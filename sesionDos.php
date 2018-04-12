<?php
	session_start();
	if($_SESSION['altas']==1 && $_POST['usuario']!=NULL){
		$nombre = $_POST['usuario'];
		echo "Buen día ".$nombre;
	} else {
		header("Location: login.php");
	}
?>
