<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharesca = $_POST["fecharesc1"];
	$idadm = $_POST["idadm1"];
	$nomesca = $_POST["nomesc1"];
	$resolucionesca = $_POST["resolucionesc1"];
 	$nomesca = strtoupper($nomesca);
	$resolucionesca = strtoupper($resolucionesca);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO escalafonadm VALUES (NULL, '$fecharesca', '$idadm',  '$nomesca', '$resolucionesca')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>