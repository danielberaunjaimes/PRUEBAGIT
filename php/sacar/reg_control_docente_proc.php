<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharcon = $_POST["fecharcon1"];
	$idfacu = $_POST["idfacu1"];
	$nomcon = $_POST["nomcon1"];
	$resolucioncon = $_POST["resolucioncon1"];
 	$nomcon = strtoupper($nomcon);
	$resolucioncon = strtoupper($resolucioncon);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO controldoc VALUES (NULL, '$fecharcon', '$idfacu',  '$nomcon', '$resolucioncon')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>