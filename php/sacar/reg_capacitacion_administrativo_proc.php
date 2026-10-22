<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharcapa = $_POST["fecharcapa1"];
	$idadm = $_POST["idadm1"];
	$nomcapa = $_POST["nomcapa1"];
	$resolucioncapa = $_POST["resolucioncapa1"];
 	$nomcapa = strtoupper($nomcapa);
	$resolucioncapa = strtoupper($resolucioncapa);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO capacitacionadm VALUES (NULL, '$fecharcapa', '$idadm',  '$nomcapa', '$resolucioncapa')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>