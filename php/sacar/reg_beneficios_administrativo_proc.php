<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharbene = $_POST["fecharbene1"];
	$idadm = $_POST["idadm1"];
	$nombene = $_POST["nombene1"];
	$resolucionbene = $_POST["resolucionbene1"];
 	$nombene = strtoupper($nombene);
	$resolucionbene = strtoupper($resolucionbene);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO beneficiosadm VALUES (NULL, '$fecharbene', '$idadm',  '$nombene', '$resolucionbene')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>