<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharareacepre = $_POST["fecharareacepre1"];
	$idcepre = $_POST["idcepre1"];
	$nomareacepre = $_POST["nomareacepre1"];
	$resolucionareacepre = $_POST["resolucionareacepre1"];
 	$nomareacepre = strtoupper($nomareacepre);
	$resolucionareacepre = strtoupper($resolucionareacepre);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO areacepre VALUES (NULL, '$fecharareacepre', '$idcepre',  '$nomareacepre', '$resolucionareacepre')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>