<?php
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$dniper = $_POST["dni1"];
	$fecharper = $_POST["fechareg1"];
	$apellidosper = $_POST["apellidos1"];
	$nombresper = $_POST["nombres1"];
 	$direccionper = $_POST["direccion1"];
	$contratoper = $_POST["contrato1"];
	$resolucionper  = $_POST["resolucion1"];
	$nivelper = $_POST["nivel1"];
	$dependenciaper = $_POST["dependencia1"];
	$tituloper = $_POST["titulo1"];
	$remuneracionper = $_POST["remuneracion1"];
	$generoper = $_POST["genero1"];
	$telefonoper = $_POST["telefono1"];
	$emailper = $_POST["email1"];
	$apellidosper = strtoupper($apellidosper);
	$nombresper = strtoupper($nombresper);
	$direccionper = strtolower($direccionper);
	$emailper = strtolower($emailper);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO personal VALUES ('$dniper', '$fecharper',  '$apellidosper', '$nombresper', '$direccionper', '$contratoper', '$resolucionper', '$nivelper', '$dependenciaper', '$tituloper', '$remuneracionper', '$generoper', '$telefonoper', '$emailper')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>