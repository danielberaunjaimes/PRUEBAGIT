<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$id = $Row['id'];
	$dni = $Row['dni'];
	$fecha = $Row['fecha'];
	$apellidos = $Row['apellidos'];
	$nombres = $Row['nombres'];
	$direccion = $Row['direccion'];
	$tipo = $Row['tipo'];
	$categoria = $Row['categoria'];
	$nivel = $Row['nivel'];
	$facultad = $Row['facultad'];
	$fechanac = $Row['fechanac'];
	//$actividad = $Row['actividad'];
	$genero = $Row['genero'];
	$telefono = $Row['telefono'];
	$email = $Row['email'];
	$nota = $Row['nota'];
	$usuario = $Row['usuario'];
	$clave = $Row['clave'];
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "SELECT * FROM personal  WHERE id = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>