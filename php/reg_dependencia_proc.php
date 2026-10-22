<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fechardepe = $_POST["fechardepe1"];
	$idasig = $_POST["idasig1"];
	$nomdepe = $_POST["nomdepe1"];
	$resoluciondepe = $_POST["resoluciondepe1"];
 	$nomdepe = strtoupper($nomdepe);
	$resoluciondepe = strtoupper($resoluciondepe);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO dependencia VALUES (NULL, '$fechardepe', '$idasig', '$nomdepe', '$resoluciondepe')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>