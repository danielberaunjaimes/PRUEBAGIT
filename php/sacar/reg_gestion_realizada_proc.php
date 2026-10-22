<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fechargesrea = $_POST["fecharges1"];
	$nomgesrea = $_POST["nomges1"];
	$resoluciongesrea = $_POST["resolucionges1"];
 	$nomgesrea = strtoupper($nomgesrea);
	$resoluciongesrea = strtoupper($resoluciongesrea);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO gestionrealizada VALUES (NULL, '$fechargesrea',  '$nomgesrea', '$resoluciongesrea')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>