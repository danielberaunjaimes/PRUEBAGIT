<?php
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$dni = $_POST["dni1"];
	$fechareg = $_POST["fechareg1"];
	$apellidos = $_POST["apellidos1"];
	$nombres = $_POST["nombres1"];
 	$direccion = $_POST["direccion1"];
	$contrato = $_POST["contrato1"];
	$resolucion  = $_POST["resolucion1"];
	$nivel = $_POST["nivel1"];
	$dependencia = $_POST["dependencia1"];
	$titulo = $_POST["titulo1"];
	$remuneracion = $_POST["remuneracion1"];
	$genero = $_POST["genero1"];
	$telefono = $_POST["telefono1"];
	$email = $_POST["email1"];
	$apellidos = strtoupper($apellidos);
	$nombres = strtoupper($nombres);
	$direccion = strtolower($direccion);
	$email = strtolower($email);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO docente VALUES ('$dni', '$fechareg',  '$apellidos', '$nombres', '$direccion', '$contrato', '$resolucion', '$nivel', '$dependencia', '$titulo', '$remuneracion', '$genero', '$telefono', '$email')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>