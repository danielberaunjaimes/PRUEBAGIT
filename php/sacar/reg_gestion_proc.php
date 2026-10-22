<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharges = $_POST["fecharges1"];
	$nomges = $_POST["nomges1"];
	$resolucionges = $_POST["resolucionges1"];
 	$nomges = strtoupper($nomges);
	$resolucionges = strtoupper($resolucionges);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO gestion VALUES (NULL, '$fecharges',  '$nomges', '$resolucionges')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>